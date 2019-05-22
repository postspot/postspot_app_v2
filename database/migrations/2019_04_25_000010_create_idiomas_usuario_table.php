<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIdiomasUsuarioTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'idiomas_usuario';

    /**
     * Run the migrations.
     * @table idiomas_usuario
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id_idiomas_usuario');
            $table->unsignedInteger('id_idioma');
            $table->unsignedInteger('id_usuario');

            $table->index(["id_usuario"], 'fk_idiomas_usuario_usuarios1_idx');

            $table->index(["id_idioma"], 'idiomas_usuario_id_idioma_index');

            $table->index(["id_idioma"], 'fk_idiomas_usuario_idiomas1_idx');

            $table->index(["id_usuario"], 'idiomas_usuario_id_usuario_index');


            $table->foreign('id_idioma', 'fk_idiomas_usuario_idiomas1_idx')
                ->references('id_idioma')->on('idiomas')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('id_usuario', 'fk_idiomas_usuario_usuarios1_idx')
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
