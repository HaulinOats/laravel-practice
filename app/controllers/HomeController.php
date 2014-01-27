<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/


	public function getIndex()
	{
		return View::make('login');
	}

	public function signupPage()
	{
		return View::make('signup');
	}

	public function userSignup()
	{
		$input = Input::all();

		if($input['password'] == $input['password2']) {

			$user = new User;
			$user->username = $input['username'];
			$user->password = Hash::make($input['password']);
			$user->save();

			if (Auth::attempt(array('username' => $input['username'], 'password' => $input['password'])))
			{
			    return Redirect::route('user.show', array(Auth::user()->id));
			}
		} else {
			echo "passwords don't match";
		}
	}

	public function userSignin()
	{
		$input = Input::all();

		if (Auth::attempt(['username' => $input['username'], 'password' => $input['password']])) {
			Notification::success('Logged In');
			return Redirect::route('user.show', array(Auth::user()->id));

		} else {
			Notification::error('Incorrect username or password');
			return Redirect::to('/login');
		}
	}

	public function show($id)
	{
		$user  = User::find($id);
		return View::make('home')->with('user', $user);
	}

	public function logout()
	{

		Auth::logout();
		return Redirect::to('/login');
	}

}