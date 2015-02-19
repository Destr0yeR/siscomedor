<?php

class MenuSemanal extends Eloquent {

	protected $table = 'menu_semanales';

	public function menus()
	{
		return $this->hasMany('Menu');
	}
}