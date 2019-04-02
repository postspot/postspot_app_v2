<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjetosTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'projetos';

    /**
     * Run the migrations.
     * @table projetos
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id_projeto');
            $table->string('nome_projeto', 45)->nullable()->default(null);
            $table->timestamp('cadastro_projeto')->nullable()->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->string('site_projeto', 45)->nullable()->default(null);
            $table->integer('responsavel_projeto')->unsigned()->index();

            $table->index(["responsavel_projeto"], 'fk_projetos_usuarios_idx');


            $table->foreign('responsavel_projeto', 'fk_projetos_usuarios_idx')
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
