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

//Route::get('/', function () {
//    return view('welcome');
//});


Route::match(['get', 'post'], '/', ['uses' => 'ResourceController@index'])->name('index');
Route::match(['get', 'post'], '/2', ['uses' => 'ResourceController@store'])->name('index2');
