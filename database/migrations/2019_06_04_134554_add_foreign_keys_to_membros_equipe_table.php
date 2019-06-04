<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToMembrosEquipeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('membros_equipe', function(Blueprint $table)
		{
			$table->foreign('id_equipe', 'fk_membro_equipe_equipes1_idx')->references('id_equipe')->on('equipes')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('id_usuario', 'fk_membro_equipe_usuarios1_idx')->references('id')->on('usuarios')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('membros_equipe', function(Blueprint $table)
		{
			$table->dropForeign('fk_membro_equipe_equipes1_idx');
			$table->dropForeign('fk_membro_equipe_usuarios1_idx');
		});
	}

}
