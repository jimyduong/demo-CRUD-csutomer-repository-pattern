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

Route::get('/','CustomerController@index')->name('index');
Route::get('/create','CustomerController@create')->name('create');
Route::post('/create','CustomerController@store')->name('store');
Route::get('/delete/{id}','CustomerController@destroy')->name('delete');
Route::get('/edit/{id}','CustomerController@edit')->name('edit');
Route::post('/update/{id}','CustomerController@update')->name('update');
