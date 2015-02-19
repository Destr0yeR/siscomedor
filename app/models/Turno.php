<?php

class Turno extends Eloquent {

	public function reservas()
	{
		return $this->hasMany('Reserva');
	}
}