<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateComentariosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('comentarios', function(Blueprint $table)
		{
			$table->increments('id_comentario');
			$table->timestamp('data_criacao')->nullable()->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->text('comentario', 65535)->nullable();
			$table->integer('status')->default(1)->comment('0 > Pauta 1> Conteudo');
			$table->integer('visivel')->default(1);
			$table->integer('equipe')->default(0);
			$table->integer('id_usuario')->unsigned()->index();
			$table->integer('id_tarefa')->unsigned()->index();
			$table->softDeletes();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('comentarios');
	}

}
