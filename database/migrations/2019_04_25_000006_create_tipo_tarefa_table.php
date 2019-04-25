<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTipoTarefaTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'tipo_tarefa';

    /**
     * Run the migrations.
     * @table tipo_tarefa
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id_tipo');
            $table->string('nome_tipo', 45)->nullable()->default(null);
            $table->string('cor_tarefa', 8);
            $table->decimal('valor_pauta_tipo_tarefa', 10, 2)->nullable()->default(null);
            $table->decimal('valor_conteudo_tipo_tarefa', 10, 2);
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
