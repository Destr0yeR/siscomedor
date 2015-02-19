<?php

class ComensalController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

	public function reservar()
	{
		if(Input::get('reservarAlmuerzo'))
		{
			return Redirect::action('reservarAlmuerzo',array('menu_id' => Input::get('amenu_id'), 'turno_id' => Input::get('aturno')));
		}
		if(Input::get('reservarCena'))
		{
			return Redirect::action('reservarCena',array('menu_id' => Input::get('cmenu_id'), 'turno_id' => Input::get('cturno')));
		}
	}
	public function reservarAlmuerzo($menu_id,$turno_id)
	{
		$menu 		= Menu::find($menu_id);
		$turno 		= Turno::find($turno_id);
		$user		= Auth::user();
		$comensal 	= $user->comensal;

		$reserva = Reserva::where('comensal_id',$comensal->id)->where('menu_id',$menu_id)->first();

		if($menu->raciones == 0)
		{
			return Redirect::to('/menu')->with('warning','No hay raciones suficientes');
		}

		if(!$reserva)
		{
			$reserva = new Reserva;

			$reserva->comensal_id	= $comensal->id;
			$reserva->menu_id		= $menu->id;
			$reserva->turno_id		= $turno->id;

			$reserva->save();

			$menu->raciones--;
			$menu->save();

			return Redirect::to('/menu')->with('message','Reserva de turno correcta');
		}
		return Redirect::to('/menu')->with('warning','Ya realizo reserva de este menu');
	}

	public function reservarCena($menu_id,$turno_id)
	{
		$menu 		= Menu::find($menu_id);
		$turno 		= Turno::find($turno_id);
		$user		= Auth::user();
		$comensal 	= $user->comensal;

		$reserva = Reserva::where('comensal_id',$comensal->id)->where('menu_id',$menu_id)->first();

		if($menu->raciones == 0)
		{
			return Redirect::to('/menu')->with('warning','No hay raciones suficientes');
		}

		if(!$reserva)
		{
			$reserva = new Reserva;

			$reserva->comensal_id	= $comensal->id;
			$reserva->menu_id		= $menu->id;
			$reserva->turno_id		= $turno->id;

			$reserva->save();

			$menu->raciones--;
			$menu->save();

			return Redirect::to('/menu')->with('message','Reserva de turno correcta');
		}
		return Redirect::to('/menu')->with('warning','Ya realizo reserva de este menu');
	}

}
