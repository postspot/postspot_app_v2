<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToConteudoTesteCandidatoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('conteudo_teste_candidato', function(Blueprint $table)
		{
			$table->foreign('id_habilidade', 'fk_id_habilidade')->references('id_habilidade')->on('habilidades')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('id_teste_candidato', 'id_teste_candidato')->references('id_teste_candidato')->on('teste_candidato')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('conteudo_teste_candidato', function(Blueprint $table)
		{
			$table->dropForeign('fk_id_habilidade');
			$table->dropForeign('id_teste_candidato');
		});
	}

}
