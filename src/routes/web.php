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
Route::get('quizy/{prefecture_id}', 'QuizyController@quiz_list')->name('quizy');
Route::get('admin', 'AdminController@show')->name('admin');
Route::get('admin/add', 'AdminController@add')->name('admin.add');
Route::post('admin/add', 'AdminController@create');
Route::get('admin/edit/{id}', 'AdminController@edit')->name('admin.edit');
Route::post('admin/edit/{id}', 'AdminController@update');
Route::get('admin/delete/{id}', 'AdminController@delete')->name('admin.delete');
Route::post('admin/delete/{id}', 'AdminController@remove');
