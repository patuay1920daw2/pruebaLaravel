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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('canals', 'CanalController@index')->name('CanalIndex');
Route::get('create', 'CanalController@create')->name('canalsCreate');
Route::get('store', 'CanalController@store')->name('canalsStore');
Route::get('storeP', 'ProgramaController@store')->name('programaStore');
Route::get('createP', 'ProgramaController@create')->name('programaCreate');
