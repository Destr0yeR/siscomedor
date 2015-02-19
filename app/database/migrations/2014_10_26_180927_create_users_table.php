<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('users', function($table){
			$table->increments('id');
			$table->string('nombres',50);
			$table->string('apellidos',50);
			$table->string('dni',8);
			$table->string('password',100);
			$table->string('remember_token',100);

			$table->integer('usuario_tipo_id')->unsigned()->nullable();

			$table->timestamps();
			$table->softDeletes();
		});

		Schema::table('users', function($table){
			$table->foreign('usuario_tipo_id')->references('id')
			->on('usuario_tipos')->onDelete('set null');
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
		Schema::table('users', function($table){
			$table->dropForeign('users_usuario_tipo_id_foreign');
		});

		Schema::drop('users');
	}

}
