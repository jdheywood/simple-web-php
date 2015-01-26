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

	public function home() {
		$this->layout->messages = array();

		$var = 'alreet';
		$pageTitle = 'does this set the page title tho?';

		$this->layout->content = View::make('home.basic', array('var' => $var, 'pageTitle' => $pageTitle));
	}

}
