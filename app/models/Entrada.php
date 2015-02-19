<?php 

class Entrada extends Eloquent {
	
	public function menus()
	{
		return $this->belongsToMany('Plato','menu_x_platos');
	}
}