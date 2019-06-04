<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToLogTarefasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('log_tarefas', function(Blueprint $table)
		{
			$table->foreign('id_tarefa', 'fk_log_tarefas_tarefas1_idx')->references('id_tarefa')->on('tarefas')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('id_usuario', 'fk_log_tarefas_usuarios1_idx')->references('id')->on('usuarios')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('log_tarefas', function(Blueprint $table)
		{
			$table->dropForeign('fk_log_tarefas_tarefas1_idx');
			$table->dropForeign('fk_log_tarefas_usuarios1_idx');
		});
	}

}
