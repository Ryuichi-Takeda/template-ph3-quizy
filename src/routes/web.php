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
Route::get('admin/question/{prefecture_id}','AdminController@showQuestion')->name('admin.showQuestion');
Route::get('admin/question/add/{prefecture_id}','AdminController@questionAdd')->name('admin.questionAdd');
Route::get('admin/question/edit/{prefecture_id}/{question_id}','AdminController@questionEdit')->name('admin.questionEdit');
Route::get('admin/question/delete/{prefecture_id}/{question_id}','AdminController@questionDelete')->name('admin.questionDelete');
Route::post('admin/question/delete/{prefecture_id}/{question_id}','AdminController@questionRemove')->name('admin.questionRemove');
Route::get('admin/choice/{prefecture_id}/{question_id}','AdminController@showChoice')->name('admin.showChoice');
Route::post('admin/choice/{prefecture_id}/{question_id}','AdminController@choiceUpdate')->name('admin.choiceUpdate');