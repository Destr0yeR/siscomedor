<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComensalesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('comensales', function($table){
			$table->integer('id')->unsigned();
			$table->string('codigo',8);
			$table->integer('eap_id')->unsigned()->nullable();

			$table->timestamps();
		});

		Schema::table('comensales', function($table){
			$table->foreign('eap_id')->references('id')
			->on('eaps')->onDelte('set null');

			$table->foreign('id')->references('id')
			->on('users')->onDelte('cascade');

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
		Schema::table('comensales', function($table){
			$table->dropForeign('comensales_eap_id_foreign');

			$table->dropForeign(' comensales_id_foreign');
		});

		Schema::drop('comensales');
	}

}
