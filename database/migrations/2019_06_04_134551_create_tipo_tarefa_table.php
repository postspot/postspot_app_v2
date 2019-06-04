<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTipoTarefaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tipo_tarefa', function(Blueprint $table)
		{
			$table->increments('id_tipo');
			$table->string('nome_tipo', 45)->nullable();
			$table->string('cor_tarefa', 8);
			$table->decimal('valor_pauta_tipo_tarefa', 10)->nullable();
			$table->decimal('valor_conteudo_tipo_tarefa', 10);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tipo_tarefa');
	}

}
