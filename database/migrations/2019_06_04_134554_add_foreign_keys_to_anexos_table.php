<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToAnexosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('anexos', function(Blueprint $table)
		{
			$table->foreign('id_responsavel', 'fk_anexos_membros_equipe1_idx')->references('id')->on('usuarios')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('id_projeto', 'fk_anexos_projetos1_idx')->references('id_projeto')->on('projetos')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('anexos', function(Blueprint $table)
		{
			$table->dropForeign('fk_anexos_membros_equipe1_idx');
			$table->dropForeign('fk_anexos_projetos1_idx');
		});
	}

}
