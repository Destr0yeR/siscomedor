<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenuTable extends Migration {

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
			$table->string('entrada', 100);
			$table->string('segundo',100);
			$table->string('refresco',100);
			$table->string('postre',100);
			$table->integer('tipo');
			$table->timestamp('fecha');
			$table->timestamps();
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
		Schema::drop('menus');
	}

}
