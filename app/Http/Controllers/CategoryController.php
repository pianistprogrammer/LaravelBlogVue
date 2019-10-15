<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    } 
    // Displays all the categories
    public function allCategories (){

        $categories = Category::all();
        return response()->json([
            'categories'=>$categories
        ],200);
    }
    // function to add a category
    public function addCategory(Request $request){
        
        $this->validate($request,[
            'name'=>'required|min:2|max:50'
        ]);
       $category = New Category();
       $category->name = $request->name;
       $category->save();
       return ['message'=>'OK'];
    }
    // function to find a category
    public function editCategory ($id){

        $category = Category::find($id);
        return response()->json([
            'category'=>$category
        ],200);
    }
    // updates the category 
    public function updateCategory (Request $request, $id){

        $this->validate($request,[
            'name'=>'required|min:2|max:50'
        ]);
        $category = Category::find($id);
        $category->name = $request->name;
        $category->save();
    }
    // deletes the category
    public function deleteCategory ($id){

        $category = Category::find($id);
        $category->delete();
    }
}
