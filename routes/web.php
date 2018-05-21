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



Auth::routes();

Route::get('/home', 'HomeController@showPost');
//login user, admin, vendor,.... customer, account
Route::get('user/login', 'UserController@loginAction');
Route::post('user/loginPost', 'UserController@loginPostAction');

// Show all posts 
Route::get('post/list', 'Blog\PostController@listAction');
// Show  detail post with url ex: post/view/id/123 and /things-they-say
Route::get('post/view', 'Blog\PostController@viewAction');
// New post redirect to Edit with flag new ex: post/new
#return view add blog
Route::get('post/new', 'Blog\PostController@newAction');
#Take data from post
Route::post('post/new','Blog\PostController@newActionPost');
// Edit post ex: post/edit/id/123
# Return view edit.blade.php in post
Route::get('post/edit/{id}', 'Blog\PostController@editAction');
#Take data from edit
Route::post('post/edit/{id}','Blog\PostController@editActionPost');
// Delete ex :  post/delete/id/123
Route::get('post/delete/{id}', 'Blog\PostController@deleteAction');
// Delete ex :  post/save
Route::post('post/save', 'Blog\PostController@saveAction');

// Show all category
Route::get('category/list', 'Blog\CategoryController@listAction');
// Show detail category and list post in category
// Ex: category/view/id/123 and /spiralbound

Route::get('category/view', 'Blog\CategoryController@viewAction');
# return view new.blade.php
Route::get('category/new', 'Blog\CategoryController@newAction');
#Take data from  new.blade.php
Route::post('category/new', 'Blog\CategoryController@newActionPost');

#return view category
Route::get('category/edit/{id}', 'Blog\CategoryController@editAction');
#take data 
Route::post('category/edit/{id}', 'Blog\CategoryController@editActionPost');

Route::get('category/delete/{id}', 'Blog\CategoryController@deleteAction');
Route::post('category/save', 'Blog\CategoryController@saveAction');
