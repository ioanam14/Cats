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

Route::get('/post/add', 'CatController@getPost');

Route::post('/post/add', 'CatController@addPost');

Route::get('/adoption', 'AdoptionController@index');

Route::get('/adoption/add', 'AdoptionController@addCat');

Route::post('/adoption/add', 'AdoptionController@postCat');