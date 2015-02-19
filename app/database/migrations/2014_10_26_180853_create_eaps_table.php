<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEapsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('eaps', function($table){
			$table->increments('id');
			$table->string('nombre',60);
			$table->integer('facultad_id')->unsigned();

			$table->timestamps();
		});

		Schema::table('eaps', function($table){
			$table->foreign('facultad_id')->references('id')
			->on('facultades')->onDelete('cascade');
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
		Schema::table('eaps', function($table){
			$table->dropForeign('eaps_facultad_id_foreign');
		});

		Schema::drop('eaps');
	}

}
