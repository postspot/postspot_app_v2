<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsuariosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('usuarios', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name', 45)->nullable();
			$table->string('sobrenome', 50)->nullable();
			$table->string('sexo_usuario', 1)->nullable();
			$table->string('foto_usuario', 50)->nullable()->default('sem_foto.png');
			$table->string('funcao_usuario', 1)->nullable();
			$table->text('obs', 65535)->nullable();
			$table->string('doc_usuario', 50)->nullable();
			$table->string('tipo_conta_usuario', 16)->nullable();
			$table->string('modalidade_conta_usuario', 18)->nullable();
			$table->string('cod_banco_usuario', 5)->nullable();
			$table->string('banco_usuario', 50)->nullable();
			$table->string('agencia_usuario', 50)->nullable();
			$table->string('conta_usuario', 50)->nullable();
			$table->string('digito_verificador_usuario', 3)->nullable();
			$table->string('email', 45)->nullable();
			$table->text('password', 65535)->nullable();
			$table->text('status_usuario', 65535)->nullable();
			$table->text('recupera_senha', 65535)->nullable();
			$table->date('nascimento_usuario')->nullable();
			$table->string('telefone_usuario', 15)->nullable();
			$table->dateTime('cadastro_usuario')->nullable();
			$table->timestamps();
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
		Schema::drop('usuarios');
	}

}
