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
    return view('vue_app');
    // return view('welcome');
});

Route::get('/{vue?}', function () {
    return view('vue_app');
})->where('vue', '[\/\w\.-]*');

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::post('/file', 'HomeController@storeFile');
Route::get('/file/{id}', 'HomeController@destroyFile');

Route::post('/storage', 'HomeController@storeStorage');
Route::get('/storage/{id}', 'HomeController@destroyStorage');
