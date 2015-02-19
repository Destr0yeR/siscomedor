<?php

class Refresco extends Eloquent {

	public function menus()
	{
		return $this->belongsToMany('Menu','menu_x_platos');
	}
}