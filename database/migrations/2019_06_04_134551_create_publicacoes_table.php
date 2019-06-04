<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePublicacoesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('publicacoes', function(Blueprint $table)
		{
			$table->increments('id_publicacao');
			$table->text('texto_publicacao', 65535)->nullable();
			$table->string('status_publicacao', 1)->nullable();
			$table->timestamp('data_criacao')->nullable()->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->integer('id_tarefa')->unsigned()->index();
			$table->integer('id_usuario')->nullable()->index();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('publicacoes');
	}

}
