<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHabilidadesUsuarioTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'habilidades_usuario';

    /**
     * Run the migrations.
     * @table habilidades_usuario
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id_habilidade_usuario');
            $table->integer('id_habilidade')->unsigned()->index();
            $table->integer('id_usuario')->unsigned()->index();

            $table->index(["id_habilidade"], 'fk_habilidades_usuario_habilidades1_idx');

            $table->index(["id_usuario"], 'fk_habilidades_usuario_usuarios1_idx');


            $table->foreign('id_habilidade', 'fk_habilidades_usuario_habilidades1_idx')
                ->references('id_habilidade')->on('habilidades')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('id_usuario', 'fk_habilidades_usuario_usuarios1_idx')
                ->references('id_usuario')->on('usuarios')
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
