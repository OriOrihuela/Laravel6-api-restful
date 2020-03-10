<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/productos', 'ProductController@index');
Route::get('/productos/buscar', 'ProductController@show');

Route::post('/productos/guardar', 'ProductController@store');

Route::put('/productos/actualizar', 'ProductController@update');

Route::delete('/productos/borrar', 'ProductController@destroy');
