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

Route::get('/','InicioController@inicio') ;

Route::get('/naves2','InicioController@GuardarUsuario');

Route::get('/destino','InicioController@destinos');

Route::get('/viaje', 'InicioController@crearviaje');

Route::get('/tiket', 'InicioController@crearTikets');

Route::get('/vernaves', 'InicioController@verNaves');

Route::get('/verviajes', 'InicioController@verViajes');

Route::get('/naves','navesController@index');

Route::get('/viajes', 'viajesController@index');

Route::post('/viajes',[
		'uses' => 'viajesController@store',
		'as'   => 'up_viajes'
	]);


Route::post('/naves',[
		'uses' => 'navesController@store',
		'as'   => 'update_naves', 
	]);

