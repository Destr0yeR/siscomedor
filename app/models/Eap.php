<?php

class Eap extends Eloquent {
	protected $table = 'eaps';

	public function facultad()
	{
		return $this->belongsTo('Facultad');
	}

	public function estudiantes()
	{
		return $this->hasMany('Comensal');
	}
}