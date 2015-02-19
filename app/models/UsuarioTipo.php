<?php

class UsuarioTipo extends Eloquent {

	public function users()
	{
		return $this->hasMany('User');
	}
}