<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuariosTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'usuarios';

    /**
     * Run the migrations.
     * @table usuarios
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id_usuario');
            $table->string('nome_usuario', 45)->nullable()->default(null);
            $table->string('sobrenome_usuario', 50)->nullable()->default(null);
            $table->string('sexo_usuario', 1)->nullable()->default(null);
            $table->text('foto_usuario')->nullable()->default(null);
            $table->string('funcao_usuario', 1)->nullable()->default(null);
            $table->text('obs');
            $table->string('doc_usuario', 50)->nullable()->default(null);
            $table->string('tipo_conta_usuario', 16)->nullable()->default(null);
            $table->string('modalidade_conta_usuario', 18)->nullable()->default(null);
            $table->string('cod_banco_usuario', 5)->nullable()->default(null);
            $table->string('banco_usuario', 50)->nullable()->default(null);
            $table->string('agencia_usuario', 50)->nullable()->default(null);
            $table->string('conta_usuario', 50)->nullable()->default(null);
            $table->string('digito_verificador_usuario', 3)->nullable()->default(null);
            $table->string('email_usuario', 45)->nullable()->default(null);
            $table->string('senha_usuario', 45)->nullable()->default(null);
            $table->timestamp('cadastro_usuario')->nullable()->default(null);
            $table->date('nascimento_usuario')->nullable()->default(null);
            $table->string('telefone_usuario', 15)->nullable()->default(null);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
     {
       Schema::dropIfExists($this->tableName);
     }
}
