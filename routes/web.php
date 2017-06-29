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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/post', 'PostController@index');

Route::get('/post/add', 'PostController@getPost');

Route::post('/post/add', 'PostController@addPost');

Route::get('/adoption', 'AdoptionController@index');

Route::get('/adoption/add', 'AdoptionController@addCat');

Route::post('/adoption/add', 'AdoptionController@postCat');

Route::get('/user/cat', 'UserController@showcat');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
