<?php

class MenuSemanalSeeder extends Seeder {

	public function run()
	{
		MenuSemanal::create(array('fecha_inicio' => '2014-10-27', 'fecha_fin' => '2014-11-02'));
	}
}