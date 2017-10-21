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
Route::group(['middleware' => ['web']], function(){
	Route::get('/', [
		'uses' => 'frontController@getIndexPage',
		'as' => 'user.index'
	]);

	Route::get('/user', [
		'uses' => 'userController@getUserDashboard',
		'as' => 'dashboard'
	]);

	Route::get('/login', [
		'uses' => 'LoginController@getLogin',
		'as' => 'login'
	]);

	Route::get('/register', [
		'uses' => 'RegisterController@getRegister',
		'as' => 'register'
	]);


});

