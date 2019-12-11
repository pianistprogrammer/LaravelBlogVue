<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();
Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/backend', 'HomeController@admin')->name('admin');

Route::group(['middleware' => ['auth']], function () {
    //Category

    Route::post('/add-category','CategoryController@addCategory');
    Route::get('category','CategoryController@allCategories');
    Route::get('editcategory/{id}','CategoryController@editCategory');
    Route::post('update-category/{id}','CategoryController@updateCategory');
    Route::get('/deletecategory/{id}','CategoryController@selected_category');
    Route::delete('category/{id}','CategoryController@deleteCategory');

    //Post
    Route::get('/post','PostController@allPosts');
    Route::post('/savepost','PostController@addPost');
    Route::get('/post/{id}','PostController@editPost');
    Route::post('/update/{id}','PostController@updatePost');
    Route::delete('/delete/{id}','PostController@deletePost');
});


Route::get('/blogpost','BlogController@getallBlogPost');
Route::get('/singlepost/{id}','BlogController@getPostById');
Route::get('/categories','BlogController@getallCategory');
Route::get('/categorypost/{id}','BlogController@getallPostByCategoryId');
Route::get('/search','BlogController@searchPost');
Route::get('/latestpost','BlogController@latestPost');
