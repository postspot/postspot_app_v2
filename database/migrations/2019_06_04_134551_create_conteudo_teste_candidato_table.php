<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateConteudoTesteCandidatoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('conteudo_teste_candidato', function(Blueprint $table)
		{
			$table->increments('id_conteudo_teste_candidato');
			$table->text('especificacoes_conteudo_teste_candidato', 65535);
			$table->text('pauta_conteudo_teste_candidato', 65535);
			$table->integer('id_teste_candidato')->unsigned()->index();
			$table->integer('id_habilidade')->unsigned()->index();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('conteudo_teste_candidato');
	}

}
