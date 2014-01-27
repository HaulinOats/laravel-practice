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
Route::get('/signup', function(){
	return View::make('signup');
});
Route::post('/signup', array('as' => 'signup', 'uses' => 'HomeController@userSignup'));
Route::get('/login', array('as' => 'login', 'uses' => 'HomeController@getIndex'));
Route::post('/login', array('as' => 'login', 'uses' => 'HomeController@userSignin'));
Route::get('/logout', array('as' => 'logout', 'uses' => 'HomeController@logout'));
Route::resource('user', 'UserController');
Route::post('image/upload', array('as' => 'imageUpload', 'uses' => 'UserController@imageUpload'));

