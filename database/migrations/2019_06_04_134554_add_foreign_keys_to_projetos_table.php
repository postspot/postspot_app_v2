<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToProjetosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('projetos', function(Blueprint $table)
		{
			$table->foreign('responsavel_projeto', 'fk_projetos_usuarios_idx')->references('id')->on('usuarios')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('projetos', function(Blueprint $table)
		{
			$table->dropForeign('fk_projetos_usuarios_idx');
		});
	}

}
