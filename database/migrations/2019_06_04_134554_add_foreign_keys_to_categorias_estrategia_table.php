<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToCategoriasEstrategiaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('categorias_estrategia', function(Blueprint $table)
		{
			$table->foreign('id_categoria', 'fk_categorias_estrategia_categorias1_idx')->references('id_categoria')->on('categorias')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('id_estrategia', 'fk_categorias_estrategia_estrategias1_idx')->references('id_estrategia')->on('estrategias')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('categorias_estrategia', function(Blueprint $table)
		{
			$table->dropForeign('fk_categorias_estrategia_categorias1_idx');
			$table->dropForeign('fk_categorias_estrategia_estrategias1_idx');
		});
	}

}
