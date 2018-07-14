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

Route::get('/', 'NoteController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/notes/index', 'NoteController@index')->name('index');
Route::post('/notes/store', 'NoteController@store')->name('store');

Route::get('/notes/edit/{id}', 'NoteController@edit')->name('edit');
Route::get('/notes/delete/{id}', 'NoteController@delete')->name('delete');
Route::patch('/notes/update/{id}', 'NoteController@update')->name('update');
Route::put('/notes/update/{id}', 'NoteController@update')->name('update');

Route::delete('notes/delete/{id}', 'NoteController@delete')->name('delete');

Route::get('/notes/create', 'NoteController@create')->name('create');
