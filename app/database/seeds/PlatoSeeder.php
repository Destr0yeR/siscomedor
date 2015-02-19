<?php

class PlatoSeeder extends Seeder {

	public function run()
	{
		//Plato::create(array('nombre' => ''));
		Plato::create(array('nombre' => 'Chaufa'));
		Plato::create(array('nombre' => 'Arroz con pollo'));
		Plato::create(array('nombre' => 'Arroz con lentejas'));
		Plato::create(array('nombre' => 'Quinua con pollo'));
		Plato::create(array('nombre' => 'Olluco de pollo'));
		Plato::create(array('nombre' => 'Aji de pollo'));
		Plato::create(array('nombre' => 'Arroz con pescado'));
		Plato::create(array('nombre' => 'Pallares con pollo'));
	}
}