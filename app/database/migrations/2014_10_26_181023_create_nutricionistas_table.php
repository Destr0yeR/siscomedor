<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNutricionistasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('nutricionistas', function($table){
			$table->integer('id')->unsigned();
			$table->string('credencial',6);

			$table->timestamps();
		});

		Schema::table('nutricionistas', function($table){
			$table->foreign('id')->references('id')
			->on('users')->onDelete('cascade');

			$table->primary('id');
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
		Schema::table('nutricionistas', function($table){
			$table->dropForeign('nutricionistas_id_foreign');
		});

		Schema::drop('nutricionistas');
	}

}
