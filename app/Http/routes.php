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
	Route::get('logout','login\LoginController@logout');
});

Route::group(['middleware' => 'player'],function()
{		
	Route::get('home/index', 'Home\HomeController@index');
	Route::get('calendar', 'Events\CalendarController@index');
	Route::get('academy', 'Courses\AcademyController@index');
	Route::get('course/{id}', 'Courses\CourseController@index');
	Route::get('module/{id}/{od}', 'Courses\CourseController@module');
	Route::get('quiz/{id}', 'Courses\CourseController@quiz');
});

Route::group(['middleware' => 'admin'],function()
{
	Route::get('home/dashboard','Home\DashboardController@index');
	Route::get('users', 'Users\AllController@index');
	Route::get('users/new', 'Users\NewController@index');
	Route::get('users/edit/id/{id}', 'Users\EditController@cargarUser');
	Route::post('users/newSave', 'Users\NewController@saveUser');
	Route::post('users/editSave', 'Users\EditController@saveUser');
	Route::get('events', 'Events\AllController@index');
	Route::get('courses', 'Courses\AllController@index');

	Route::post('users/validaEmail', 'Users\AllController@validateEmail');
	Route::post('users/deleteUser', 'Users\AllController@deleteUser');
});

Route::post('login', 'login\LoginController@login');
Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);


