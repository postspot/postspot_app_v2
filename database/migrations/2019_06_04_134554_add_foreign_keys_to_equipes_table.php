<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToEquipesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('equipes', function(Blueprint $table)
		{
			$table->foreign('id_projeto', 'fk_equipes_projetos1_idx')->references('id_projeto')->on('projetos')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('equipes', function(Blueprint $table)
		{
			$table->dropForeign('fk_equipes_projetos1_idx');
		});
	}

}
