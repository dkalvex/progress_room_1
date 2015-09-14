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

Route::group(['middleware' => 'login'],function()
{
	Route::get('/', 'HomeController@index');
	Route::get('home', 'HomeController@index');
});

Route::group(['middleware' => 'logout'],function()
{	
	Route::get('logout', 'Session\SessionController@logout');
});

Route::group(['middleware' => 'player'],function()
{		
	Route::get('home/home', 'Home\HomeController@index');
});

Route::group(['middleware' => 'admin'],function()
{
	Route::get('home/dashboard','Home\DashboardController@index');
	Route::get('home/dashboard/users', 'Users\AllController@index');
	Route::get('home/dashboard/users/createUser', 'Users\CreateUserController@index');
});

Route::post('login', 'login\LoginController@login');
Route::controllers([
	'Loguin' => 'Login\LoginController',	
]);

