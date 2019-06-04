<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToHabilidadesUsuarioTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('habilidades_usuario', function(Blueprint $table)
		{
			$table->foreign('id_habilidade', 'fk_habilidades_usuario_habilidades1_idx')->references('id_habilidade')->on('habilidades')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('id_usuario', 'fk_habilidades_usuario_usuarios1_idx')->references('id')->on('usuarios')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('habilidades_usuario', function(Blueprint $table)
		{
			$table->dropForeign('fk_habilidades_usuario_habilidades1_idx');
			$table->dropForeign('fk_habilidades_usuario_usuarios1_idx');
		});
	}

}
