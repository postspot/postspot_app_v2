<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCandidatosTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'candidatos';

    /**
     * Run the migrations.
     * @table candidatos
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id_candidato');
            $table->integer('id_usuario')->unsigned()->index();
            $table->string('rede_social_candidato', 50)->nullable()->default(null);
            $table->string('estado_candidato', 50)->nullable()->default(null);
            $table->string('cidade_candidato', 50)->nullable()->default(null);
            $table->text('certificacao_candidato')->nullable()->default(null);
            $table->text('linkedin_candidato')->nullable()->default(null);
            $table->text('portifolio_candidato')->nullable()->default(null);
            $table->string('experiencia_candidato', 50)->nullable()->default(null);
            $table->string('producao_candidato', 50)->nullable()->default(null);
            $table->string('formacao_candidato', 50)->nullable()->default(null);
            $table->string('area_estudo_candidato', 50)->nullable()->default(null);
            $table->string('curso_candidato', 50)->nullable()->default(null);
            $table->string('profissao_candidato', 50)->nullable()->default(null);
            $table->string('ingles_candidato', 15)->nullable()->default(null);
            $table->string('espanhol_candidato', 15)->nullable()->default(null);
            $table->string('outro_idioma_candidato', 50)->nullable()->default(null);
            $table->integer('status_candidato');
            $table->timestamp('data_cadastro_candidato')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->text('modalidade_candidatos')->nullable()->default(null);
            $table->integer('especialidade_candidatos')->nullable()->default(null);
            $table->text('motivo_candidatos')->nullable()->default(null);
            $table->text('texto_candidatos')->nullable()->default(null);
            $table->string('razao_social_candidato', 50)->nullable()->default(null);
            $table->string('cnpj_candidato', 19)->nullable()->default(null);
            $table->integer('id_conteudo_teste_candidato')->nullable()->default(null);

            $table->index(["id_usuario"], 'fk_candidato_usuario');


            $table->foreign('id_usuario', 'fk_candidato_usuario')
                ->references('id_usuario')->on('usuarios')
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
