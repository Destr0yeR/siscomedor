<?php

class PostreSeeder extends Seeder {

	public function run()
	{
		//Postre::create(array('nombre' => ''));
		Postre::create(array('nombre' => 'Platano'));
		Postre::create(array('nombre' => 'Manzana'));
		Postre::create(array('nombre' => 'Naranja'));
		Postre::create(array('nombre' => 'Mandarina'));
		Postre::create(array('nombre' => 'Mazamorra de membrillo'));
		Postre::create(array('nombre' => 'Mazamorra morada'));
	}
}