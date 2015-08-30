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

/*Route::get('/', [
	'uses' => 'App\Http\Controllers\HomeController@index',
	'as' => NULL,
	'middleware' => ['loginSession'],
	'where' => [],
	'domain' => NULL,
])*/;
Route::get('/', 'HomeController@index');
Route::get('home', 'HomeController@index');
Route::get('destroy', 'SessionController@destroySession');
Route::post('login', 'login\LoguinController@loguin');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);