<?php

class MenuController extends \BaseController {

	public function ingresar()
	{

		return View::make('menu.ingresar');
	}
	public function ingresarPost()
	{
		$input = Input::all();
		var_dump($input);

		$data = array(
			'dia' 		=> Input::get('dia'),
			'entrada' 	=> Input::get('entrada'),
			'segundo' 	=> Input::get('segundo'),
			'refresco'	=> Input::get('refresco'),
			'postre'  	=> Input::get('postre')
		);

		$rules = array(
			'dia' 		=> 'required',
			'entrada' 	=> 'required',
			'segundo' 	=> 'required',
			'refresco'	=> 'required',
			'postre'  	=> 'required'
		);

		$validation = Validator::make($data,$rules);

		if($validation->fails())
		{
			return Redirect::to('/ingresar')->withErrors($validation);
		}


		return Redirect::to('/ingresar')->with('message','Se ha ingresdo correctamente');
	}
}