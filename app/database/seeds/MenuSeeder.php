<?php

class MenuSeeder extends Seeder {

	public function run()
	{
		//Menu::create(array('semanal_id' => '', 'fecha' => '', 'tipo' => ));
		Menu::create(array('semanal_id' => 1, 'fecha' => '2015-02-16', 'tipo' => 0, 'raciones' => 1500));
		Menu::create(array('semanal_id' => 1, 'fecha' => '2015-02-16', 'tipo' => 1, 'raciones' => 500));

		Menu::create(array('semanal_id' => 1, 'fecha' => '2015-02-17', 'tipo' => 0, 'raciones' => 1500));
		Menu::create(array('semanal_id' => 1, 'fecha' => '2015-02-17', 'tipo' => 1, 'raciones' => 500));

		Menu::create(array('semanal_id' => 1, 'fecha' => '2015-02-18', 'tipo' => 0, 'raciones' => 1500));
		Menu::create(array('semanal_id' => 1, 'fecha' => '2015-02-18', 'tipo' => 1, 'raciones' => 500));

		Menu::create(array('semanal_id' => 1, 'fecha' => '2015-02-19', 'tipo' => 0, 'raciones' => 1500));
		Menu::create(array('semanal_id' => 1, 'fecha' => '2015-02-19', 'tipo' => 1, 'raciones' => 500));

		Menu::create(array('semanal_id' => 1, 'fecha' => '2015-02-20', 'tipo' => 0, 'raciones' => 1500));
		Menu::create(array('semanal_id' => 1, 'fecha' => '2015-02-20', 'tipo' => 1, 'raciones' => 500));

		Menu::create(array('semanal_id' => 1, 'fecha' => '2015-02-21', 'tipo' => 0, 'raciones' => 1500));
		Menu::create(array('semanal_id' => 1, 'fecha' => '2015-02-21', 'tipo' => 1, 'raciones' => 500));

		Menu::create(array('semanal_id' => 1, 'fecha' => '2015-02-22', 'tipo' => 0, 'raciones' => 1500));
		Menu::create(array('semanal_id' => 1, 'fecha' => '2015-02-22', 'tipo' => 1, 'raciones' => 500));

		DB::table('menu_x_platos')->insert(array('menu_id' => 1, 'plato_id' => 1, 'entrada_id' => 5, 'postre_id' => 1, 'refresco_id' => 1));
		DB::table('menu_x_platos')->insert(array('menu_id' => 2, 'plato_id' => 2, 'entrada_id' => 4, 'postre_id' => 3, 'refresco_id' => 2));
		DB::table('menu_x_platos')->insert(array('menu_id' => 3, 'plato_id' => 3, 'entrada_id' => 3, 'postre_id' => 5, 'refresco_id' => 3));
		DB::table('menu_x_platos')->insert(array('menu_id' => 4, 'plato_id' => 4, 'entrada_id' => 2, 'postre_id' => 2, 'refresco_id' => 4));
		DB::table('menu_x_platos')->insert(array('menu_id' => 5, 'plato_id' => 5, 'entrada_id' => 1, 'postre_id' => 4, 'refresco_id' => 1));
		DB::table('menu_x_platos')->insert(array('menu_id' => 6, 'plato_id' => 6, 'entrada_id' => 1, 'postre_id' => 6, 'refresco_id' => 3));
		DB::table('menu_x_platos')->insert(array('menu_id' => 7, 'plato_id' => 7, 'entrada_id' => 2, 'postre_id' => 1, 'refresco_id' => 2));

		DB::table('menu_x_platos')->insert(array('menu_id' => 8, 'plato_id' => 8, 'entrada_id' => 3, 'postre_id' => 2, 'refresco_id' => 4));
		DB::table('menu_x_platos')->insert(array('menu_id' => 9, 'plato_id' => 1, 'entrada_id' => 4, 'postre_id' => 3, 'refresco_id' => 1));
		DB::table('menu_x_platos')->insert(array('menu_id' => 10, 'plato_id' => 2, 'entrada_id' => 5, 'postre_id' => 4, 'refresco_id' => 4));
		DB::table('menu_x_platos')->insert(array('menu_id' => 11, 'plato_id' => 3, 'entrada_id' => 1, 'postre_id' => 5, 'refresco_id' => 3));
		DB::table('menu_x_platos')->insert(array('menu_id' => 12, 'plato_id' => 4, 'entrada_id' => 2, 'postre_id' => 6, 'refresco_id' => 2));
		DB::table('menu_x_platos')->insert(array('menu_id' => 13, 'plato_id' => 5, 'entrada_id' => 3, 'postre_id' => 4, 'refresco_id' => 4));
		DB::table('menu_x_platos')->insert(array('menu_id' => 14, 'plato_id' => 6, 'entrada_id' => 4, 'postre_id' => 2, 'refresco_id' => 3));


	}
}