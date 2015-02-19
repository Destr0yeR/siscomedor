<?php 

class UsuarioTipoSeeder extends Seeder {

	public function run()
	{
		//UsuarioTipo::create(array('nombre' => ''));
		UsuarioTipo::create(array('nombre' => 'Comensal'));
		UsuarioTipo::create(array('nombre' => 'Nutricionista'));
		UsuarioTipo::create(array('nombre' => 'Scanner'));
	}
}