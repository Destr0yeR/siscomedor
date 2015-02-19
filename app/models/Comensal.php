<?php

class Comensal extends Eloquent {

	protected $table = 'comensales';
	
	public function user()
	{
		return $this->belongsTo('User');
	}

	public function eap()
	{
		return $this->belongsTo('Eap');
	}

	public function reservas()
	{
		return $this->hasMany('Reserva');
	}
}