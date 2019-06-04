<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLogTarefasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('log_tarefas', function(Blueprint $table)
		{
			$table->increments('id_log');
			$table->string('status', 1)->nullable()->default('1');
			$table->string('etapa', 2)->nullable();
			$table->timestamp('data_criacao')->nullable()->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->dateTime('data_prevista')->nullable();
			$table->integer('id_tarefa')->unsigned()->index('fk_log_tarefas_tarefas1_idx');
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
		Schema::drop('log_tarefas');
	}

}
