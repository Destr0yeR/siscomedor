<?php

class ProgramacionController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	protected $dias;

	public function __construct()
	{
		$this->dias[1] = 'Lunes';
		$this->dias[2] = 'Martes';
		$this->dias[3] = 'Miercoles';
		$this->dias[4] = 'Jueves';
		$this->dias[5] = 'Viernes';
		$this->dias[6] = 'Sabado';
		$this->dias[7] = 'Domingo';
	}

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

	public function mostrarMenuSemanal()
	{
		$hoy = date('N');

		$offset = $hoy - 1;

		$inicio = date('Y-m-d',strtotime(date('Y-m-d').' - '.$offset.' day'));

		$fin = date('Y-m-d',strtotime($inicio.'+ 6 day'));

		$fecha = array();

		$platos 	= Plato::lists('nombre','id');
		$refrescos 	= Refresco::lists('nombre','id');
		$entradas	= Entrada::lists('nombre','id');
		$postres	= Postre::lists('nombre','id');

		$almuerzos 	= array();
		$cenas 		= array();
		$almuerzo_raciones  = array();
		$cena_raciones		= array();

		$amenu_id = NULL;
		$cmenu_id = NULL;

		for( $i = 1 ; $i < 8 ; $i++ )	
		{
			$fecha[$i] 			= date('Y-m-d',strtotime($inicio.' + '.($i-1).' day'));
			$almuerzo 			= Menu::where('fecha','=',$fecha[$i])->where('tipo',0)->first();
			$almuerzo_raciones[$i]= $almuerzo->raciones;
			$almuerzos[$i]		= DB::table('menu_x_platos')->where('menu_id',$almuerzo->id)->first();
			$cena 				= Menu::where('fecha','=',$fecha[$i])->where('tipo',1)->first();
			$cena_raciones[$i]	= $cena->raciones;
			$cenas[$i]			= DB::table('menu_x_platos')->where('menu_id',$cena->id)->first();
			if($hoy == $i)
			{
				$amenu_id = $almuerzo->id;
				$cmenu_id = $cena->id;
			}
		}

		$almuerzo_turnos = array();
		$cena_turnos	 = array();

		foreach (Turno::where('tipo',0)->get() as $turno)
		{
			$almuerzo_turnos[$turno->id] = $turno->inicio.' - '.$turno->fin;
		}
		foreach (Turno::where('tipo',1)->get() as $turno)
		{
			$cena_turnos[$turno->id] = $turno->inicio.' - '.$turno->fin;
		}

		$reserva_almuerzo 	= false;
		$reserva_cena 		= false;
		if(Auth::check())
		{
			$user		= Auth::user();
			$comensal 	= $user->comensal;

			$reserva_almuerzo = Reserva::where('comensal_id',$comensal->id)->where('menu_id',$amenu_id)->first();
			$reserva_cena = Reserva::where('comensal_id',$comensal->id)->where('menu_id',$cmenu_id)->first();
			if($reserva_almuerzo)
			{
				$reserva_almuerzo = true;
			}
			else
			{
				$reserva_almuerzo = false;
			}

			if($reserva_cena)
			{
				$reserva_cena = true;
			}
			else
			{
				$reserva_cena = false;
			}
		}
		$data = array(
			'title'				=> 'SISCOMEDOR',
			'dias'				=> $this->dias,
			'hoy'				=> $hoy,
			'mañana'			=> $hoy+1,
			'fechas' 			=> $fecha,
			'platos'			=> $platos,
			'refrescos'			=> $refrescos,
			'entradas'			=> $entradas,
			'postres'			=> $postres,
			'inicio'			=> $inicio,
			'fin'				=> $fin,
			'almuerzos'			=> $almuerzos,
			'cenas'				=> $cenas,
			'almuerzo_raciones'	=> $almuerzo_raciones,
			'cena_raciones'		=> $cena_raciones,
			'almuerzo_turnos'	=> $almuerzo_turnos,
			'cena_turnos'		=> $cena_turnos,
			'amenu_id'			=> $amenu_id,
			'cmenu_id'			=> $cmenu_id,
			'reserva_almuerzo'	=> $reserva_almuerzo,
			'reserva_cena'		=> $reserva_cena,
		);
		return View::make('menu.index',$data);
	}
}
