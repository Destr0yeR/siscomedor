<?php

class EntradaSeeder extends Seeder {

	public function run()
	{
		//Entrada::create(array('nombre' => ''));
		Entrada::create(array('nombre' => 'Sopa de pollo'));
		Entrada::create(array('nombre' => 'Chilcano'));
		Entrada::create(array('nombre' => 'Aguadito'));
		Entrada::create(array('nombre' => 'Sopa de leche'));
		Entrada::create(array('nombre' => 'Sopa de verduras'));
	}
}