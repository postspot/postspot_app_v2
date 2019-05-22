<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComentariosTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'comentarios';

    /**
     * Run the migrations.
     * @table comentarios
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id_comentario');
            $table->timestamp('data_criacao')->nullable()->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->text('comentario')->nullable()->default(null);
            $table->integer('status')->comment('0 > Pauta 1> Conteudo');
            $table->integer('visivel')->default('1');
            $table->integer('equipe')->default('0');
            $table->unsignedInteger('id_usuario');
            $table->unsignedInteger('id_tarefa');

            $table->index(["id_tarefa"], 'comentarios_id_tarefa_index');

            $table->index(["id_usuario"], 'fk_comentarios_usuarios1_idx');

            $table->index(["id_tarefa"], 'fk_comentarios_tarefas1_idx');

            $table->index(["id_usuario"], 'comentarios_id_usuario_index');


            $table->foreign('id_tarefa', 'fk_comentarios_tarefas1_idx')
                ->references('id_tarefa')->on('tarefas')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('id_usuario', 'fk_comentarios_usuarios1_idx')
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
