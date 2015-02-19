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

	public function showWelcome()
	{
		return View::make('hello');
	}

	public function showLogin()
	{
		return View::make('login.login');
	}
	public function login()
	{
		$credentials = array(
					'dni'=>Input::get('dni'),
					'password'=>Input::get('password')
					);

		if (Auth::attempt($credentials))
		{
		    return Redirect::intended('/menu');
		}
		else
		{
			return Redirect::to('/')->with('warning','Wrong User/Password combination')->withInput();
		}
	}

	public function logout()
	{
			Auth::logout();
			return Redirect::to('/')->with('warning','You just Logged Out');		
	}

}
