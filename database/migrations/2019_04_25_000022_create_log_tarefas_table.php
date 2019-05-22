<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLogTarefasTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'log_tarefas';

    /**
     * Run the migrations.
     * @table log_tarefas
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id_log');
            $table->string('status', 1)->nullable()->default('1');
            $table->string('etapa', 2)->nullable()->default(null);
            $table->timestamp('data_criacao')->nullable()->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('data_prevista')->nullable()->default(null);
            $table->unsignedInteger('id_tarefa');
            $table->unsignedInteger('id_usuario');

            $table->index(["id_usuario"], 'log_tarefas_id_usuario_index');

            $table->index(["id_usuario"], 'fk_log_tarefas_usuarios1_idx');

            $table->index(["id_tarefa"], 'fk_log_tarefas_tarefas1_idx');

            $table->index(["id_tarefa"], 'log_tarefas_id_tarefa_index');


            $table->foreign('id_tarefa', 'fk_log_tarefas_tarefas1_idx')
                ->references('id_tarefa')->on('tarefas')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('id_usuario', 'fk_log_tarefas_usuarios1_idx')
                ->references('id')->on('usuarios')
                ->onDelete('cascade')
                ->onUpdate('cascade');
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
