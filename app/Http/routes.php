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

Route::group(['middleware' => 'auth'], function () {
	Route::get('comandas', [
		'uses' => 'OrdersController@index',
		'as'   => 'orders_path'
	]);
	Route::get('comanda/{id}', [
		'uses' => 'OrdersController@show',
		'as'   => 'order_show_path'
	]);

	Route::get('clientes', 'ClientsController@index');
});

Route::get('/', [
	'uses' => 'HomeController@index',
	'as'   => 'home_path'
]);

Route::post('/', [
	'uses' => 'AuthController@store',
	'as'   => 'auth_store_path'
]);

Route::get('logout', [
	'uses' => 'AuthController@destroy',
	'as'   => 'auth_destroy_path'
]);