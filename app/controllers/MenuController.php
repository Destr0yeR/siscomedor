<?php

class MenuController extends \BaseController {

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

	public function showMenu()
	{
		$data = array(
			'title' => 'SISCOMEDOR'
		);
		return View::make('menu.index',$data);
	}

	public function menuCargar()
	{	
		$hoy = date('N');

		$offset = 8 - $hoy;

		$inicio_proxima = date('Y-m-d',strtotime(date('Y-m-d').' + '.$offset.' day'));

		$fin_proxima = date('Y-m-d',strtotime($inicio_proxima.'+ 6 day'));

		$fechas = array();

		$platos 	= Plato::lists('nombre','id');
		$refrescos 	= Refresco::lists('nombre','id');
		$entradas	= Entrada::lists('nombre','id');
		$postres	= Postre::lists('nombre','id');

		for( $i = 1 ; $i < 8 ; $i++ )
		{
			$indice = $offset - 1  + $i;
			$fechas[$i] = date('Y-m-d',strtotime(date('Y-m-d').' + '.$indice.' day'));
		}

		$data = array(
			'title'		=> 'SISCOMEDOR',
			'dias'		=> $this->dias,
			'hoy'		=> $hoy,
			'fechas' 	=> $fechas,
			'platos'	=> $platos,
			'refrescos'	=> $refrescos,
			'entradas'	=> $entradas,
			'postres'	=> $postres,
			'inicio'	=> $inicio_proxima,
			'fin'		=> $fin_proxima,
		);

		return View::make('menu.carga',$data);
	}

	public function menuCargarPost()
	{
		$menu_semanal = MenuSemanal::where('fecha_inicio','=',date('Y-m-d',strtotime(Input::get('inicio'))))
		->where('fecha_fin','=',date('Y-m-d',strtotime(Input::get('fin'))))->first();

		/*var_dump($menu_semanal);
		die();*/

		if(!$menu_semanal)
		{
			$menu_semanal = new MenuSemanal;
		}

		$menu_semanal->fecha_inicio = date('Y-m-d',strtotime(Input::get('inicio')));
		$menu_semanal->fecha_fin = date('Y-m-d',strtotime(Input::get('fin')));
		$menu_semanal->save();

		for( $i = 1 ; $i < 8 ; $i++)
		{
			// almuerzo
			$existe_almuerzo = true;
			$almuerzo = Menu::where('tipo','=','0')->where('fecha','=',date('Y-m-d',strtotime(Input::get('fecha'.$i))))->first();
			if(!$almuerzo)
			{
				$almuerzo = new Menu;
				$existe_almuerzo = false;
			}

			$almuerzo->tipo = 0;
			$almuerzo->semanal_id = $menu_semanal->id;
			$almuerzo->fecha = date('Y-m-d',strtotime(Input::get('fecha'.$i)));
			$almuerzo->save();

			if($existe_almuerzo)
			{
				DB::table('menu_x_platos')->where('menu_id',$almuerzo->id)
				->update(
					array(	'plato_id'		=> Input::get('afondo'.$i),
						 	'entrada_id' 	=> Input::get('aentrada'.$i), 
						 	'refresco_id' 	=> Input::get('arefresco'.$i), 
						 	'postre_id' 	=> Input::get('apostre'.$i)
						));
			}
			else
			{
				DB::table('menu_x_platos')->insert(
					array( 	'menu_id' 		=> $almuerzo->id,
						 	'plato_id'		=> Input::get('afondo'.$i),
						 	'entrada_id' 	=> Input::get('aentrada'.$i), 
						 	'refresco_id' 	=> Input::get('arefresco'.$i), 
						 	'postre_id' 	=> Input::get('apostre'.$i)
						));
			}
			

			// cena
			$existe_cena = true;
			$cena = Menu::where('tipo','=','1')->where('fecha','=',date('Y-m-d',strtotime(Input::get('fecha'.$i))))->first();
			if(!$cena)
			{
				$cena = new Menu;
				$existe_cena = false;
			}

			$cena->tipo = 1;
			$cena->semanal_id = $menu_semanal->id;
			$cena->fecha = date('Y-m-d',strtotime(Input::get('fecha'.$i)));
			$cena->save();


			if($existe_cena)
			{
				DB::table('menu_x_platos')->where('menu_id',$cena->id)
				->update(
					array( 	'plato_id'		=> Input::get('cfondo'.$i),
						 	'entrada_id' 	=> Input::get('centrada'.$i), 
						 	'refresco_id' 	=> Input::get('crefresco'.$i), 
						 	'postre_id' 	=> Input::get('cpostre'.$i)
					));
			}
			else
			{
				DB::table('menu_x_platos')->insert(
					array( 	'menu_id' 		=> $cena->id,
							'plato_id'		=> Input::get('cfondo'.$i),
						 	'entrada_id' 	=> Input::get('centrada'.$i), 
						 	'refresco_id' 	=> Input::get('crefresco'.$i), 
						 	'postre_id' 	=> Input::get('cpostre'.$i)
						));
			}
		}
	}
}
