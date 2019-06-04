<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePersonasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('personas', function(Blueprint $table)
		{
			$table->increments('id_persona');
			$table->timestamp('data_criacao')->nullable()->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->string('nome', 45)->nullable();
			$table->string('idade', 3)->nullable();
			$table->string('sexo', 1)->nullable();
			$table->text('caracteristicas', 65535)->nullable();
			$table->string('educacao', 100)->nullable();
			$table->string('cargo', 100)->nullable();
			$table->string('segmento', 100)->nullable();
			$table->text('objetivos', 65535)->nullable();
			$table->text('descricao', 65535)->nullable();
			$table->text('desafios', 65535)->nullable();
			$table->text('aprendizado', 65535)->nullable();
			$table->text('reconhecimento', 65535)->nullable();
			$table->text('consideracao', 65535)->nullable();
			$table->text('decisao', 65535)->nullable();
			$table->string('foto', 100)->nullable();
			$table->integer('id_projeto')->unsigned()->index();
			$table->timestamp('data_cadastro')->nullable()->default(DB::raw('CURRENT_TIMESTAMP'));
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('personas');
	}

}
