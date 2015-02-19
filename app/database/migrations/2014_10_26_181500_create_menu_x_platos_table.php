<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenuXPlatosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('menu_x_platos',function($table){

			$table->increments('id');

			$table->integer('menu_id')->unsigned();

			$table->integer('plato_id')->unsigned()->nullable();
			$table->integer('entrada_id')->unsigned()->nullable();
			$table->integer('postre_id')->unsigned()->nullable();
			$table->integer('refresco_id')->unsigned()->nullable();
		});

		Schema::table('menu_x_platos', function($table){
			$table->foreign('menu_id')->references('id')
			->on('menus')->onDelete('cascade');

			$table->foreign('plato_id')->references('id')
			->on('platos')->onDelete('set null');

			$table->foreign('entrada_id')->references('id')
			->on('entradas')->onDelete('set null');

			$table->foreign('postre_id')->references('id')
			->on('postres')->onDelete('set null');

			$table->foreign('refresco_id')->references('id')
			->on('refrescos')->onDelete('set null');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
		Schema::table('menu_x_platos', function($table){
			$table->dropForeign('menu_x_platos_menu_id_foreign');

			$table->dropForeign('menu_x_platos_plato_id_foreign');

			$table->dropForeign('menu_x_platos_postre_id_foreign');

			$table->dropForeign('menu_x_platos_refresco_id_foreign');
		});
		Schema::drop('menu_x_platos');
	}

}
