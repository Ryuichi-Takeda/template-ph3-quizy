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
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('quizy/{prefecture_id}', 'QuizyController@quiz_list');
Route::get('admin', 'AdminController@show');
Route::get('admin/add', 'AdminController@add');
Route::post('admin/add', 'AdminController@create');
// Route::get('admin/add', 'AdminController@addDone');
// Route::get('admin/add', 'AdminController@create');

