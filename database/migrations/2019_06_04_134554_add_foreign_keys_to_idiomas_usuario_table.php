<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToIdiomasUsuarioTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('idiomas_usuario', function(Blueprint $table)
		{
			$table->foreign('id_idioma', 'fk_idiomas_usuario_idiomas1_idx')->references('id_idioma')->on('idiomas')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('id_usuario', 'fk_idiomas_usuario_usuarios1_idx')->references('id')->on('usuarios')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('idiomas_usuario', function(Blueprint $table)
		{
			$table->dropForeign('fk_idiomas_usuario_idiomas1_idx');
			$table->dropForeign('fk_idiomas_usuario_usuarios1_idx');
		});
	}

}
