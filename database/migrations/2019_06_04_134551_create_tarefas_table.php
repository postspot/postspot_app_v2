<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTarefasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tarefas', function(Blueprint $table)
		{
			$table->increments('id_tarefa');
			$table->timestamp('data_criacao')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->string('nome_tarefa')->nullable();
			$table->string('palavra_chave')->nullable();
			$table->text('briefing_tarefa', 65535)->nullable();
			$table->string('estagio_compra', 45)->nullable();
			$table->text('tipo_cta', 65535)->nullable();
			$table->text('referencias', 65535)->nullable();
			$table->text('consideracoes_gerais', 65535)->nullable();
			$table->date('data_entrega');
			$table->string('link_publicado', 200)->nullable();
			$table->string('nota_tarefa', 3)->nullable();
			$table->integer('id_persona');
			$table->integer('id_projeto')->unsigned()->index();
			$table->integer('id_equipe')->unsigned()->nullable()->index();
			$table->integer('id_tipo')->unsigned()->index();
			$table->integer('id_tamanho')->index('id_tamanho');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tarefas');
	}

}
