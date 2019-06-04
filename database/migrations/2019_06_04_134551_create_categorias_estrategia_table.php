<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCategoriasEstrategiaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('categorias_estrategia', function(Blueprint $table)
		{
			$table->increments('id_categoria_estrategia');
			$table->integer('id_estrategia')->unsigned()->index('fk_categorias_estrategia_estrategias1_idx');
			$table->integer('id_categoria')->unsigned()->index();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('categorias_estrategia');
	}

}
