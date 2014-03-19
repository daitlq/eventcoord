<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('home');
});

Route::get('account/register', array(
	'as'	=> 'account-register-get',
	'uses' 	=> 'AccountController@getRegister' 
));

Route::post('/account/register', array(
	'as' 	=> 'account-register-post',
	'uses' 	=> 'AccountController@postRegister' 
));