<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConteudoTesteCandidatoTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'conteudo_teste_candidato';

    /**
     * Run the migrations.
     * @table conteudo_teste_candidato
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id_conteudo_teste_candidato');
            $table->text('especificacoes_conteudo_teste_candidato');
            $table->text('pauta_conteudo_teste_candidato');
            $table->integer('id_teste_candidato')->unsigned()->index();
            $table->integer('id_habilidade')->unsigned()->index();

            $table->index(["id_teste_candidato"], 'id_teste_candidato');

            $table->index(["id_habilidade"], 'fk_id_habilidade');


            $table->foreign('id_habilidade', 'fk_id_habilidade')
                ->references('id_habilidade')->on('habilidades')
                ->onDelete('restrict')
                ->onUpdate('restrict');

            $table->foreign('id_teste_candidato', 'id_teste_candidato')
                ->references('id_teste_candidato')->on('teste_candidato')
                ->onDelete('no action')
                ->onUpdate('no action');
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
