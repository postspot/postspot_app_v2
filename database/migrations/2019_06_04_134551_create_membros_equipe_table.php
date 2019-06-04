<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMembrosEquipeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('membros_equipe', function(Blueprint $table)
		{
			$table->increments('id_membros');
			$table->integer('id_equipe')->unsigned()->index();
			$table->integer('id_usuario')->unsigned()->index();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('membros_equipe');
	}

}
