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
Route::get('/', array('as' => 'default', 'uses' => 'HomeController@getIndex'));
Route::post('/signup', array('as' => 'signupPost', 'uses' => 'HomeController@userSignup'));
Route::get('/signup', array('as' => 'signupPage', 'uses' => 'HomeController@signupPage'));
Route::get('/login', array('as' => 'login', 'uses' => 'HomeController@getIndex'));
Route::post('/login', array('as' => 'login', 'uses' => 'HomeController@userSignin'));
Route::get('/logout', array('as' => 'logout', 'uses' => 'HomeController@logout'));
Route::resource('user', 'UserController');
Route::post('image/upload', array('as' => 'imageUpload', 'uses' => 'UserController@imageUpload'));
Route::get('image/delete/{id}', array('as' => 'imageDelete', 'uses' => 'UserController@imageDelete'));

