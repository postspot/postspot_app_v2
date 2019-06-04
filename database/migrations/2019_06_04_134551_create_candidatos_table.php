<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCandidatosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('candidatos', function(Blueprint $table)
		{
			$table->increments('id_candidato');
			$table->integer('id_usuario')->unsigned()->index();
			$table->string('rede_social_candidato', 50)->nullable();
			$table->string('estado_candidato', 50)->nullable();
			$table->string('cidade_candidato', 50)->nullable();
			$table->text('certificacao_candidato', 65535)->nullable();
			$table->text('linkedin_candidato', 65535)->nullable();
			$table->text('portifolio_candidato', 65535)->nullable();
			$table->string('experiencia_candidato', 50)->nullable();
			$table->string('producao_candidato', 50)->nullable();
			$table->string('formacao_candidato', 50)->nullable();
			$table->string('area_estudo_candidato', 50)->nullable();
			$table->string('curso_candidato', 50)->nullable();
			$table->string('profissao_candidato', 50)->nullable();
			$table->string('ingles_candidato', 15)->nullable();
			$table->string('espanhol_candidato', 15)->nullable();
			$table->string('outro_idioma_candidato', 50)->nullable();
			$table->integer('status_candidato');
			$table->timestamp('data_cadastro_candidato')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->text('modalidade_candidatos', 65535)->nullable();
			$table->integer('especialidade_candidatos')->nullable();
			$table->text('motivo_candidatos', 65535)->nullable();
			$table->text('texto_candidatos', 65535)->nullable();
			$table->string('razao_social_candidato', 50)->nullable();
			$table->string('cnpj_candidato', 19)->nullable();
			$table->integer('id_conteudo_teste_candidato')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('candidatos');
	}

}
