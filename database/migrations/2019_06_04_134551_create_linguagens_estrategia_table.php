<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLinguagensEstrategiaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('linguagens_estrategia', function(Blueprint $table)
		{
			$table->increments('id_linguagem_estrategia');
			$table->integer('id_linguagem')->unsigned()->index('fk_linguagens_estrategia_linguagens1_idx');
			$table->integer('id_estrategia')->unsigned()->index();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('linguagens_estrategia');
	}

}
