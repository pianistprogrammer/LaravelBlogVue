<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use App\Post;

class BlogController extends Controller
{
    public function  getallBlogPost(){
        $posts = Post::with('user','category')->orderBy('id','desc')->get();
        return response()->json([
            'posts'=>$posts
        ],200);
    }
    public function getPostById($id){
        $post = Post::with('user','category')->where('id',$id)->first();
        return response()->json([
            'post'=>$post
        ],200);
    }
    public function getallCategory(){
        $categories = Category::all();
        return response()->json([
            'categories'=>$categories
        ],200);
    }
    public function getallPostByCategoryId($id){
        $posts = Post::with('user','category')->where('category_id',$id)->orderBy('id','desc')->get();
        return response()->json([
            'posts'=>$posts
        ],200);
    }
    public function searchPost(){

        $search = Request::get('s');
        if($search!=null){
            $posts = Post::with('user','category')
                ->where('title','LIKE',"%$search%")
                ->orWhere('description','LIKE',"%$search%")
                ->get();
            return response()->json([
                'posts'=>$posts
            ],200);
        }else{
           return $this->getallBlogPost();
        }

    }
    public function latestPost(){
        $posts = Post::with('user','category')->orderBy('id','desc')->take(5)->get();
        return response()->json([
            'posts'=>$posts
        ],200);
    }
   
}
