<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPersonasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('personas', function(Blueprint $table)
		{
			$table->foreign('id_projeto', 'fk_personas_projetos1_idx')->references('id_projeto')->on('projetos')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('personas', function(Blueprint $table)
		{
			$table->dropForeign('fk_personas_projetos1_idx');
		});
	}

}
