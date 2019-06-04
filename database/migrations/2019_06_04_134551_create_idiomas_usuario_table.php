<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateIdiomasUsuarioTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('idiomas_usuario', function(Blueprint $table)
		{
			$table->increments('id_idiomas_usuario');
			$table->integer('id_idioma')->unsigned()->index('fk_idiomas_usuario_idiomas1_idx');
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
		Schema::drop('idiomas_usuario');
	}

}
