<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		// $this->call('UserTableSeeder');
		$this->call('PostreSeeder');
		$this->call('RefrescoSeeder');
		$this->call('PlatoSeeder');
		$this->call('EntradaSeeder');
		$this->call('UsuarioTipoSeeder');
		$this->call('FacultadSeeder');
		$this->call('EapSeeder');
		$this->call('UserSeeder');
		$this->call('ComensalSeeder');
		$this->call('MenuSemanalSeeder');
		$this->call('MenuSeeder');
		$this->call('TurnoSeeder');
	}

}
