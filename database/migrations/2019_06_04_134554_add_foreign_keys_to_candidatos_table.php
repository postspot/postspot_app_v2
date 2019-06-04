<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToCandidatosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('candidatos', function(Blueprint $table)
		{
			$table->foreign('id_usuario', 'fk_candidato_usuario')->references('id')->on('usuarios')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('candidatos', function(Blueprint $table)
		{
			$table->dropForeign('fk_candidato_usuario');
		});
	}

}
