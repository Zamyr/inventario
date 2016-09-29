<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/login', function () {
    return view('auth.login');
});

Route::auth();

Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index');
Route::get('/productos', 'ProductosController@index');
Route::get('/listar', 'ProductosController@listar');
Route::get('/productos/create', 'ProductosController@create');
Route::post('/productos/store', 'ProductosController@store');
Route::get('/productos/{id}/edit', 'ProductosController@edit');
Route::get('/productos/edit', 'ProductosController@edit');
Route::post('/productos/{id}', 'ProductosController@update');
Route::post('/productos/{id}', 'ProductosController@destroy');
