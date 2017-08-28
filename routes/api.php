<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::post('/post', 'PostController@apiNewPost');

Route::get('/posts', 'PostController@apiGetPosts');

Route::get('/post/{id}', 'PostController@apiSinglePost');

Route::get('/category/{id}', 'PostController@apiGetCategory');

Route::put('/post/{id}', 'PostController@apiPutPost');

Route::delete('/post/{id}', 'PostController@apiDeletePost');