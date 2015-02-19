<?php

class RefrescoSeeder extends Seeder {

	public function run()
	{
		//Refresco::create(array('nombre' => ''));
		Refresco::create(array('nombre' => 'Maracuya'));
		Refresco::create(array('nombre' => 'Manzana'));
		Refresco::create(array('nombre' => 'Membrillo'));
		Refresco::create(array('nombre' => 'Cebada'));
	}
}