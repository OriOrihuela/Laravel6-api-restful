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

Route::get('/productos', 'ProductController@index');
Route::get('/productos/buscar', 'ProductController@show');

Route::post('/productos/guardar', 'ProductController@store');

Route::put('/productos/actualizar', 'ProductController@update');

Route::delete('/productos/borrar/{id}', 'ProductController@destroy');
