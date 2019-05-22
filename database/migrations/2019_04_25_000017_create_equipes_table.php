<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEquipesTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'equipes';

    /**
     * Run the migrations.
     * @table equipes
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id_equipe');
            $table->timestamp('cadastro_equipe')->nullable()->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->unsignedInteger('id_projeto');

            $table->index(["id_projeto"], 'equipes_id_projeto_index');

            $table->index(["id_projeto"], 'fk_equipes_projetos1_idx');


            $table->foreign('id_projeto', 'fk_equipes_projetos1_idx')
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
