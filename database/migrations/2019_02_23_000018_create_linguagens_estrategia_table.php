<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLinguagensEstrategiaTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'linguagens_estrategia';

    /**
     * Run the migrations.
     * @table linguagens_estrategia
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id_linguagem_estrategia');
            $table->integer('id_linguagem')->unsigned()->index();
            $table->integer('id_estrategia')->unsigned()->index();

            $table->index(["id_estrategia"], 'fk_linguagens_estrategia_estrategias1_idx');

            $table->index(["id_linguagem"], 'fk_linguagens_estrategia_linguagens1_idx');


            $table->foreign('id_estrategia', 'fk_linguagens_estrategia_estrategias1_idx')
                ->references('id_estrategia')->on('estrategias')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('id_linguagem', 'fk_linguagens_estrategia_linguagens1_idx')
                ->references('id_linguagem')->on('linguagens')
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
