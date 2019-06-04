<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name')->nullable();
			$table->string('email', 60);
			$table->dateTime('email_verified_at')->nullable();
			$table->string('password');
			$table->dateTime('nascimento_usuario')->nullable();
			$table->string('sexo_usuario', 1)->nullable();
			$table->string('status_usuario', 1)->nullable();
			$table->string('codigo_usuario', 5)->nullable();
			$table->string('remember_token', 100)->nullable();
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
		Schema::drop('users');
	}

}
