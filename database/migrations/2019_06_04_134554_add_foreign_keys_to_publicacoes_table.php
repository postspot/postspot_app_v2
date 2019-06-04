<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPublicacoesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('publicacoes', function(Blueprint $table)
		{
			$table->foreign('id_tarefa', 'fk_publicacoes_tarefas1_idx')->references('id_tarefa')->on('tarefas')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('publicacoes', function(Blueprint $table)
		{
			$table->dropForeign('fk_publicacoes_tarefas1_idx');
		});
	}

}
