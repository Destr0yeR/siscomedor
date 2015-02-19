<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScannersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('scanners', function($table){
			$table->integer('id')->unsigned();

			$table->timestamps();
		});

		Schema::table('scanners', function($table){
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
		Schema::table('scanners', function($table){
			$table->dropForeign('scanners_id_foreign');
		});

		Schema::drop('scanners');
	}

}
