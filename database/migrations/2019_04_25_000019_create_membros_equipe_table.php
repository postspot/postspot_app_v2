<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembrosEquipeTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'membros_equipe';

    /**
     * Run the migrations.
     * @table membros_equipe
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id_membros');
            $table->unsignedInteger('id_equipe');
            $table->unsignedInteger('id_usuario');

            $table->index(["id_usuario"], 'membros_equipe_id_usuario_index');

            $table->index(["id_equipe"], 'membros_equipe_id_equipe_index');

            $table->index(["id_equipe"], 'fk_membro_equipe_equipes1_idx');

            $table->index(["id_usuario"], 'fk_membro_equipe_usuarios1_idx');


            $table->foreign('id_equipe', 'fk_membro_equipe_equipes1_idx')
                ->references('id_equipe')->on('equipes')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('id_usuario', 'fk_membro_equipe_usuarios1_idx')
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
