<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToLinguagensEstrategiaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('linguagens_estrategia', function(Blueprint $table)
		{
			$table->foreign('id_estrategia', 'fk_linguagens_estrategia_estrategias1_idx')->references('id_estrategia')->on('estrategias')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('id_linguagem', 'fk_linguagens_estrategia_linguagens1_idx')->references('id_linguagem')->on('linguagens')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('linguagens_estrategia', function(Blueprint $table)
		{
			$table->dropForeign('fk_linguagens_estrategia_estrategias1_idx');
			$table->dropForeign('fk_linguagens_estrategia_linguagens1_idx');
		});
	}

}
