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
Route::get('/', 'PostController@listPosts')->name('post.listPosts');

Auth::routes();

Route::get('/post/{id}', 'PostController@show')->name('post.show');

Route::get('/category/{id}', 'CategoryController@show')->name('category.show');

Route::get('/recent', 'CategoryController@showRecent')->name('category.showRecent');

Route::get('/dashboard', 'PostController@index')->name('home');

Route::post('/dashboard', 'PostController@store')->name('post.store');

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
//<?php
//
///*
//|--------------------------------------------------------------------------
//| Web Routes
//|--------------------------------------------------------------------------
//|
//| Here is where you can register web routes for your application. These
//| routes are loaded by the RouteServiceProvider within a group which
//| contains the "web" middleware group. Now create something great!
//|
//*/
//
//// Route::get('/', function () {
////     return view('welcome');
//// });
//Route::get('/', 'PostController@listPosts')->name('post.listPosts');
//
//Auth::routes();
//
//Route::get('/post/{id}', 'PostController@show')->name('post.show');
//
//Route::get('/category/{id}', 'CategoryController@show')->name('category.show');
//
//Route::get('/recent', 'CategoryController@showRecent')->name('category.showRecent');
//
//
//
//Route::get('/home', 'PostController@index')->name('home');
//
//Route::post('/home', 'PostController@store')->name('post.store');
//
//Auth::routes();
