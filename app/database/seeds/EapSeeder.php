<?php

class EapSeeder extends Seeder {

	public function run()
	{
		//Eap::create(array('nombre' => '', 'facultad_id' => ));
		Eap::create(array('nombre' => 'Ingeniería de Software', 'facultad_id' => 1));
	}
}