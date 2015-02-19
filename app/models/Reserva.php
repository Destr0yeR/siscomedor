<?php

class Reserva extends Eloquent {

	public function turno()
	{
		return $this->belongsTo('Turno');
	}

	public function menu()
	{
		return $this->belongsTo('Menu');
	}

	public function comensal()
	{
		return $this->belongsTo('Comensal');
	}
}