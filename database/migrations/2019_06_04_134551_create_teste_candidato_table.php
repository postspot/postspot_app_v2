<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTesteCandidatoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('teste_candidato', function(Blueprint $table)
		{
			$table->increments('id_teste_candidato');
			$table->string('nome_teste_candidato', 25);
			$table->text('especificacoes_teste_candidato', 65535);
			$table->text('pauta_teste_candidato', 65535);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('teste_candidato');
	}

}
