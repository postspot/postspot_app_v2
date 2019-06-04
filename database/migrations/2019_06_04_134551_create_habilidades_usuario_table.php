<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateHabilidadesUsuarioTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('habilidades_usuario', function(Blueprint $table)
		{
			$table->increments('id_habilidade_usuario');
			$table->integer('id_habilidade')->unsigned()->index();
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
		Schema::drop('habilidades_usuario');
	}

}
