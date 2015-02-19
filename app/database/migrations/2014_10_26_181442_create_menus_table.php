<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenusTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('menus', function($table){
			$table->increments('id');
			$table->integer('semanal_id')->unsigned()->nullable();
			$table->date('fecha');
			$table->tinyInteger('tipo');
			$table->integer('raciones');
			$table->timestamps();
		});

		Schema::table('menus', function($table){
			$table->foreign('semanal_id')->references('id')
			->on('menu_semanales')->onDelete('set null');
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
		Schema::table('menus', function($table){
			$table->dropForeign('menus_semanal_id_foreign');
		});

		Schema::drop('menus');
	}

}
