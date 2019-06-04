<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAnexosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('anexos', function(Blueprint $table)
		{
			$table->increments('id_anexo');
			$table->timestamp('data_criacao')->nullable()->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->text('nome_anexo', 65535)->nullable();
			$table->integer('link_tarefa')->nullable();
			$table->integer('id_responsavel')->unsigned()->index();
			$table->integer('id_projeto')->unsigned()->index();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('anexos');
	}

}
