<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonasTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'personas';

    /**
     * Run the migrations.
     * @table personas
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id_persona');
            $table->timestamp('data_criacao')->nullable()->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->string('nome', 45)->nullable()->default(null);
            $table->string('idade', 3)->nullable()->default(null);
            $table->string('sexo', 1)->nullable()->default(null);
            $table->text('caracteristicas')->nullable()->default(null);
            $table->string('educacao', 100)->nullable()->default(null);
            $table->string('cargo', 100)->nullable()->default(null);
            $table->string('segmento', 100)->nullable()->default(null);
            $table->text('objetivos')->nullable()->default(null);
            $table->text('descricao')->nullable()->default(null);
            $table->text('desafios')->nullable()->default(null);
            $table->text('aprendizado')->nullable()->default(null);
            $table->text('reconhecimento')->nullable()->default(null);
            $table->text('consideracao')->nullable()->default(null);
            $table->text('decisao')->nullable()->default(null);
            $table->string('foto', 100)->nullable()->default(null);
            $table->unsignedInteger('id_projeto');
            $table->timestamp('data_cadastro')->nullable()->default(DB::raw('CURRENT_TIMESTAMP'));

            $table->index(["id_projeto"], 'personas_id_projeto_index');

            $table->index(["id_projeto"], 'fk_personas_projetos1_idx');


            $table->foreign('id_projeto', 'fk_personas_projetos1_idx')
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
