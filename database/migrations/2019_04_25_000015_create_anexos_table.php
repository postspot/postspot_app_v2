<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnexosTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'anexos';

    /**
     * Run the migrations.
     * @table anexos
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id_anexo');
            $table->timestamp('data_criacao')->nullable()->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->text('nome_anexo')->nullable()->default(null);
            $table->integer('link_tarefa')->nullable()->default(null);
            $table->unsignedInteger('id_responsavel');
            $table->unsignedInteger('id_projeto');

            $table->index(["id_responsavel"], 'anexos_id_responsavel_index');

            $table->index(["id_projeto"], 'anexos_id_projeto_index');

            $table->index(["id_responsavel"], 'fk_anexos_membros_equipe1_idx');

            $table->index(["id_projeto"], 'fk_anexos_projetos1_idx');


            $table->foreign('id_responsavel', 'fk_anexos_membros_equipe1_idx')
                ->references('id')->on('usuarios')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('id_projeto', 'fk_anexos_projetos1_idx')
                ->references('id_projeto')->on('projetos')
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
