<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePublicacoesTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'publicacoes';

    /**
     * Run the migrations.
     * @table publicacoes
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id_publicacao');
            $table->text('texto_publicacao')->nullable()->default(null);
            $table->string('status_publicacao', 1)->nullable()->default(null);
            $table->timestamp('data_criacao')->nullable()->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->integer('id_tarefa')->unsigned()->index();

            $table->index(["id_tarefa"], 'fk_publicacoes_tarefas1_idx');


            $table->foreign('id_tarefa', 'fk_publicacoes_tarefas1_idx')
                ->references('id_tarefa')->on('tarefas')
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
