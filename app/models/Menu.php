<?php

class Menu extends Eloquent {

	public function plato()
	{
		return $this->belongsToMany('Plato','menu_x_platos');
	}

	public function entrada()
	{
		return $this->belongsToMany('Entrada','menu_x_platos');
	}

	public function refresco()
	{
		return $this->belongsToMany('Refresco','menu_x_platos');
	}

	public function postre()
	{
		return $this->belongsToMany('Postre','menu_x_platos');
	}

	public function semana()
	{
		return $this->belongsTo('MenuSemanal','semanal_id');
	}

	public function reservas()
	{
		return $this->hasMany('Reserva');
	}
}