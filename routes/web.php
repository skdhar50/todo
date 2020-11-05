<?php

use Illuminate\Support\Facades\Route;

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

Route::get('todo/index', 'TodoController@index');
Route::get('todo/create', 'TodoController@create');
Route::post('todo/create', 'TodoController@store');
Route::get('todo/edit', 'TodoController@edit');
