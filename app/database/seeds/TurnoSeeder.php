<?php

class TurnoSeeder extends Seeder {

	public function run()
	{
		//Turno::create(array('inicio' => '', 'fin' => ''));
		Turno::create(array('inicio' => '12:00:00', 'fin' => '12:25:00', 'tipo' => 0));
		Turno::create(array('inicio' => '12:25:00', 'fin' => '12:50:00', 'tipo' => 0));
		Turno::create(array('inicio' => '12:50:00', 'fin' => '13:15:00', 'tipo' => 0));
		Turno::create(array('inicio' => '13:15:00', 'fin' => '13:40:00', 'tipo' => 0));

		Turno::create(array('inicio' => '17:00:00', 'fin' => '17:20:00', 'tipo' => 1));
		Turno::create(array('inicio' => '17:20:00', 'fin' => '17:40:00', 'tipo' => 1));
		Turno::create(array('inicio' => '17:40:00', 'fin' => '18:00:00', 'tipo' => 1));
		Turno::create(array('inicio' => '18:00:00', 'fin' => '18:20:00', 'tipo' => 1));
	}
}