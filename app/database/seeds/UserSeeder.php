<?php

class UserSeeder extends Seeder {

	public function run()
	{
		/*User::create(array(
			'nombres' 			=> '',
			'apellidos' 			=> '',
			'dni' 				=> '',
			'password' 			=> Hash::make(''),
			'usuario_tipo_id' 	=> ));*/
		User::create(array(
			'nombres' 			=> 'Javier Francisco',
			'apellidos' 		=> 'Palomino Pinchi',
			'dni' 				=> '72573726',
			'password' 			=> Hash::make('pass'),
			'usuario_tipo_id' 	=> 1));

		User::create(array(
			'nombres' 			=> 'Francisco Antonio',
			'apellidos' 		=> 'Mora Arambulo',
			'dni' 				=> '76286924',
			'password' 			=> Hash::make('pass'),
			'usuario_tipo_id' 	=> 1));

		User::create(array(
			'nombres' 			=> 'Diego Alejandro',
			'apellidos' 		=> 'Marquina Rojas',
			'dni' 				=> '47485907',
			'password' 			=> Hash::make('pass'),
			'usuario_tipo_id' 	=> 1));

		User::create(array(
			'nombres' 			=> 'Jeromy U',
			'apellidos' 		=> 'Llerena Arroyo',
			'dni' 				=> '72754023',
			'password' 			=> Hash::make('pass'),
			'usuario_tipo_id' 	=> 1));

		User::create(array(
			'nombres' 			=> 'Karem',
			'apellidos' 		=> 'Aguirre Lazo',
			'dni' 				=> '71469180',
			'password' 			=> Hash::make('pass'),
			'usuario_tipo_id' 	=> 1));

		User::create(array(
			'nombres' 			=> 'Piero Jurandyr',
			'apellidos' 		=> 'Loza Palma',
			'dni' 				=> '72179728',
			'password' 			=> Hash::make('pass'),
			'usuario_tipo_id' 	=> 1));
	}
}