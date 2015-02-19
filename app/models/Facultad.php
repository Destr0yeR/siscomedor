<?php

class Facultad extends Eloquent {

	protected $table = 'facultades';
	public function eaps()
	{
		return $this->hasMany('Eap');
	}
}