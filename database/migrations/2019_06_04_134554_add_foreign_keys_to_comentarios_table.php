<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToComentariosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('comentarios', function(Blueprint $table)
		{
			$table->foreign('id_tarefa', 'fk_comentarios_tarefas1_idx')->references('id_tarefa')->on('tarefas')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('id_usuario', 'fk_comentarios_usuarios1_idx')->references('id')->on('usuarios')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('comentarios', function(Blueprint $table)
		{
			$table->dropForeign('fk_comentarios_tarefas1_idx');
			$table->dropForeign('fk_comentarios_usuarios1_idx');
		});
	}

}
