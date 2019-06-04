<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEstrategiasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('estrategias', function(Blueprint $table)
		{
			$table->increments('id_estrategia');
			$table->timestamp('data_criacao')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->text('empresa', 65535)->nullable();
			$table->string('site', 100)->nullable();
			$table->text('projeto', 65535)->nullable();
			$table->string('blog', 100)->nullable();
			$table->string('facebook', 50)->nullable();
			$table->string('instagram', 50)->nullable();
			$table->string('linkedin', 50)->nullable();
			$table->string('twitter', 50)->nullable();
			$table->text('produtos_servicos', 65535)->nullable();
			$table->text('links', 65535)->nullable();
			$table->string('objetivo_primario', 100)->nullable()->default('0');
			$table->string('kpis_primario', 100)->nullable();
			$table->text('apresentacao', 65535)->nullable();
			$table->string('objetivo_secundario', 100)->nullable();
			$table->string('kpis_secundario', 100)->nullable();
			$table->text('concorrente1', 65535)->nullable();
			$table->text('concorrente2', 65535)->nullable();
			$table->text('concorrente3', 65535)->nullable();
			$table->text('com_quem_falar', 65535)->nullable();
			$table->text('com_quem_nao_falar', 65535)->nullable();
			$table->text('abordar', 65535)->nullable();
			$table->text('evitar', 65535)->nullable();
			$table->text('linguagem', 65535)->nullable();
			$table->text('referencia1', 65535)->nullable();
			$table->text('referencia2', 65535)->nullable();
			$table->text('referencia3', 65535)->nullable();
			$table->text('voz', 65535)->nullable();
			$table->text('tom', 65535)->nullable();
			$table->text('consideracoes_gerais', 65535)->nullable();
			$table->text('categorias', 65535)->nullable();
			$table->integer('id_projeto')->unsigned()->index();
			$table->text('termos_proibidos', 65535)->nullable();
			$table->string('mapeamentos_aprendizado', 1)->nullable();
			$table->string('mapeamentos_reconhecimento', 1)->nullable();
			$table->string('mapeamentos_consideracoes', 1)->nullable();
			$table->string('mapeamentos_decisao', 1)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('estrategias');
	}

}
