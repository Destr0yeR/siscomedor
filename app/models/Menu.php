<?php

class Menu extends Eloquent {

	
	public function setFecha($fecha)
	{
		$this->fecha = $fecha;
	}

	public function getFecha()
	{
		return $this->fecha;
	}

	public function setTipo($tipo)
	{
		$this->tipo = $tipo;
	}

	public function getTipo()
	{
		return $this->tipo;
	}

	public function setEntrada($entrada)
	{
		$this->entrada = $entrada;
	}

	public function getEntrada()
	{
		return $this->entrada;
	}

	public function setSegundo($segundo)
	{
		$this->segundo = $segundo;
	}

	public function getSegundo()
	{
		return $this->segundo;
	}

	public function setRefresco($refresco)
	{
		$this->refresco = $refresco;
	}

	public function getRefresco()
	{
		return $this->refresco;
	}

	public function setPostre($postre)
	{
		$this->postre = $postre;
	}

	public function getPostre()
	{
		return $this->postre;
	}
}