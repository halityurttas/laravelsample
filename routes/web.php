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

Route::get('todos', 'TodoController@index');
Route::get('todos/create', 'TodoController@create');
Route::post('todos/create', 'TodoController@create_post');
Route::get('todos/update/{id}', 'TodoController@update');
Route::post('todos/update/{id}', 'TodoController@update_post')->middleware('datef');