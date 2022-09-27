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
Route::get('admin', 'AdminController@show_prefecture')->name('admin');
Route::get('admin/add', 'AdminController@add_prefecture')->name('admin.add.prefecture');
Route::post('admin/add', 'AdminController@create_prefecture')->name('admin.create.prefecture');
Route::get('admin/edit/{prefecture_id}', 'AdminController@edit_prefecture')->name('admin.edit.prefecture');
Route::post('admin/edit/{prefecture_id}', 'AdminController@update_prefecture')->name('admin.update.prefecture');
Route::get('admin/delete/{prefecture_id}', 'AdminController@delete_prefecture')->name('admin.delete.prefecture');
Route::post('admin/delete/{prefecture_id}', 'AdminController@remove_prefecture')->name('admin.remove.prefecture');
Route::get('admin/question/{prefecture_id}', 'AdminController@show_question')->name('admin.show.question');
Route::get('admin/question/add/{prefecture_id}', 'AdminController@add_question')->name('admin.add.question');
Route::post('admin/question/add/{prefecture_id}', 'AdminController@upload_question')->name('admin.upload.question');
Route::get('admin/question/edit/{prefecture_id}/{question_id}', 'AdminController@edit_question')->name('admin.edit.question');
Route::post('admin/question/edit/{prefecture_id}/{question_id}', 'AdminController@update_question')->name('admin.update.question');
Route::get('admin/question/delete/{prefecture_id}/{question_id}', 'AdminController@delete_question')->name('admin.delete.question');
Route::post('admin/question/delete/{prefecture_id}/{question_id}', 'AdminController@remove_question')->name('admin.remove.question');
Route::get('admin/choice/{prefecture_id}/{question_id}', 'AdminController@show_choice')->name('admin.show.choice');
Route::post('admin/choice/{prefecture_id}/{question_id}', 'AdminController@update_choice')->name('admin.update.choice');
Route::post('admin/prefecture/sort', 'AdminController@sort_prefecture')->name('admin.sort.prefecture');
Route::post('admin/question/sort', 'AdminController@sort_question')->name('admin.sort.question');
