<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTarefasTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'tarefas';

    /**
     * Run the migrations.
     * @table tarefas
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id_tarefa');
            $table->timestamp('data_criacao')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->string('nome_tarefa')->nullable()->default(null);
            $table->string('palavra_chave')->nullable()->default(null);
            $table->text('briefing_tarefa')->nullable()->default(null);
            $table->string('estagio_compra', 45)->nullable()->default(null);
            $table->text('tipo_cta')->nullable()->default(null);
            $table->text('referencias')->nullable()->default(null);
            $table->text('consideracoes_gerais')->nullable()->default(null);
            $table->date('data_entrega');
            $table->string('link_publicado', 200)->nullable()->default(null);
            $table->string('nota_tarefa', 3)->nullable()->default(null);
            $table->integer('id_persona');
            $table->unsignedInteger('id_projeto');
            $table->unsignedInteger('id_equipe')->nullable()->default(null);
            $table->unsignedInteger('id_tipo');

            $table->index(["id_equipe"], 'tarefas_id_equipe_index');

            $table->index(["id_tipo"], 'fk_tarefas_tipo_tarefa1_idx');

            $table->index(["id_projeto"], 'fk_tarefas_projetos1_idx');

            $table->index(["id_tipo"], 'tarefas_id_tipo_index');

            $table->index(["id_equipe"], 'fk_tarefas_equipes1_idx');

            $table->index(["id_projeto"], 'tarefas_id_projeto_index');


            $table->foreign('id_equipe', 'fk_tarefas_equipes1_idx')
                ->references('id_equipe')->on('equipes')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('id_projeto', 'fk_tarefas_projetos1_idx')
                ->references('id_projeto')->on('projetos')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('id_tipo', 'fk_tarefas_tipo_tarefa1_idx')
                ->references('id_tipo')->on('tipo_tarefa')
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
