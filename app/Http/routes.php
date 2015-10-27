<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|['as' => 'preview', 'uses' =>
*/
//Rutas de la tienda
Route::resource('/', 'FrontController');
Route::get('/contacto', 'FrontController@contacto');
Route::get('/contenido', 'FrontController@contenido');
Route::get('/prueba', 'FrontController@prueba');
Route::get('/preview', 'FrontController@preview');


//Rutas de administracion
Route::get('/admin', 'FrontController@indexAdmin');

Route::resource('/admin/users', 'UserController');

Route::resource('/admin/product', 'ProductosController');

//Autentificacion de usuario
Route::resource('/log', 'LogController');
Route::get('/logout', 'LogController@logout');

