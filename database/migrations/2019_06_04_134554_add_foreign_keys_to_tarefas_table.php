<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTarefasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('tarefas', function(Blueprint $table)
		{
			$table->foreign('id_tamanho', 'fk_tamanho_tarefa')->references('id_tamanho')->on('tamanhos')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('id_equipe', 'fk_tarefas_equipes1_idx')->references('id_equipe')->on('equipes')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('id_projeto', 'fk_tarefas_projetos1_idx')->references('id_projeto')->on('projetos')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('id_tipo', 'fk_tarefas_tipo_tarefa1_idx')->references('id_tipo')->on('tipo_tarefa')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('tarefas', function(Blueprint $table)
		{
			$table->dropForeign('fk_tamanho_tarefa');
			$table->dropForeign('fk_tarefas_equipes1_idx');
			$table->dropForeign('fk_tarefas_projetos1_idx');
			$table->dropForeign('fk_tarefas_tipo_tarefa1_idx');
		});
	}

}
