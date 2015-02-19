<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('reservas', function($table){
			$table->increments('id');
			$table->integer('comensal_id')->unsigned();
			$table->integer('menu_id')->unsigned();
			$table->integer('turno_id')->unsigned();

			$table->timestamps();
		});

		Schema::table('reservas', function($table){
			$table->foreign('comensal_id')->references('id')
			->on('comensales')->onDelete('cascade');

			$table->foreign('menu_id')->references('id')
			->on('menus')->onDelete('cascade');

			$table->foreign('turno_id')->references('id')
			->on('turnos')->onDelete('cascade');
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
		Schema::table('reservas', function($table){
			$table->dropForeign('reservas_menu_id_foreign');

			$table->dropForeign('reservas_comensal_id_foreign');

			$table->dropForeign('reservas_turno_id_foreign');
		});

		Schema::drop('reservas');
	}

}
