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
            $table->increments('id');
            $table->string('name', 45)->nullable()->default(null);
            $table->string('sobrenome', 50)->nullable()->default(null);
            $table->string('sexo_usuario', 1)->nullable()->default(null);
            $table->string('foto_usuario', 50)->nullable()->default('sem_foto.png');
            $table->string('funcao_usuario', 1)->nullable()->default(null);
            $table->text('obs')->nullable()->default(null);
            $table->string('doc_usuario', 50)->nullable()->default(null);
            $table->string('tipo_conta_usuario', 16)->nullable()->default(null);
            $table->string('modalidade_conta_usuario', 18)->nullable()->default(null);
            $table->string('cod_banco_usuario', 5)->nullable()->default(null);
            $table->string('banco_usuario', 50)->nullable()->default(null);
            $table->string('agencia_usuario', 50)->nullable()->default(null);
            $table->string('conta_usuario', 50)->nullable()->default(null);
            $table->string('digito_verificador_usuario', 3)->nullable()->default(null);
            $table->string('email', 45)->nullable()->default(null);
            $table->text('password')->nullable()->default(null);
            $table->text('status_usuario')->nullable()->default(null);
            $table->text('recupera_senha')->nullable()->default(null);
            $table->date('nascimento_usuario')->nullable()->default(null);
            $table->string('telefone_usuario', 15)->nullable()->default(null);
            $table->dateTime('cadastro_usuario')->nullable()->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->softDeletes();
            $table->timestamps();
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
