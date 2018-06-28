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


Route::get('koders/{id}', 'KodersController@show');
Route::post('koders', 'KodersController@store');
Route::put('koders/{id}', 'KodersController@update');
Route::delete('koders/{id}', 'KodersController@destroy');