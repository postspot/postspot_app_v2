<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProjetosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('projetos', function(Blueprint $table)
		{
			$table->increments('id_projeto');
			$table->string('nome_projeto', 45)->nullable();
			$table->string('segmento_projeto', 100);
			$table->string('agencia_projeto', 1);
			$table->timestamp('cadastro_projeto')->nullable()->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->string('site_projeto', 45)->nullable();
			$table->integer('status_projeto')->default(1);
			$table->string('projeto_ativo', 1)->nullable()->default('1');
			$table->integer('responsavel_projeto')->unsigned()->index();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('projetos');
	}

}
