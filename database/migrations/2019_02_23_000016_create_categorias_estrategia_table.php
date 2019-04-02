<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriasEstrategiaTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'categorias_estrategia';

    /**
     * Run the migrations.
     * @table categorias_estrategia
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id_categoria_estrategia');
            $table->integer('id_estrategia')->unsigned()->index();
            $table->integer('id_categoria')->unsigned()->index();

            $table->index(["id_categoria"], 'fk_categorias_estrategia_categorias1_idx');

            $table->index(["id_estrategia"], 'fk_categorias_estrategia_estrategias1_idx');


            $table->foreign('id_categoria', 'fk_categorias_estrategia_categorias1_idx')
                ->references('id_categoria')->on('categorias')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('id_estrategia', 'fk_categorias_estrategia_estrategias1_idx')
                ->references('id_estrategia')->on('estrategias')
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
