<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstrategiasTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'estrategias';

    /**
     * Run the migrations.
     * @table estrategias
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id_estrategia');
            $table->timestamp('data_criacao')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->text('empresa')->nullable()->default(null);
            $table->string('site', 100)->nullable()->default(null);
            $table->text('projeto')->nullable()->default(null);
            $table->string('blog', 100)->nullable()->default(null);
            $table->string('facebook', 50)->nullable()->default(null);
            $table->string('instagram', 50)->nullable()->default(null);
            $table->string('linkedin', 50)->nullable()->default(null);
            $table->string('twitter', 50)->nullable()->default(null);
            $table->text('produtos_servicos')->nullable()->default(null);
            $table->text('links')->nullable()->default(null);
            $table->string('objetivo_primario', 100)->nullable()->default('0');
            $table->string('kpis_primario', 100)->nullable()->default(null);
            $table->text('apresentacao')->nullable()->default(null);
            $table->string('objetivo_secundario', 100)->nullable()->default(null);
            $table->string('kpis_secundario', 100)->nullable()->default(null);
            $table->text('concorrente1')->nullable()->default(null);
            $table->text('concorrente2')->nullable()->default(null);
            $table->text('concorrente3')->nullable()->default(null);
            $table->text('com_quem_falar')->nullable()->default(null);
            $table->text('com_quem_nao_falar')->nullable()->default(null);
            $table->text('abordar')->nullable()->default(null);
            $table->text('evitar')->nullable()->default(null);
            $table->text('linguagem')->nullable()->default(null);
            $table->text('referencia1')->nullable()->default(null);
            $table->text('referencia2')->nullable()->default(null);
            $table->text('referencia3')->nullable()->default(null);
            $table->text('voz')->nullable()->default(null);
            $table->text('tom')->nullable()->default(null);
            $table->text('consideracoes_gerais')->nullable()->default(null);
            $table->text('categorias')->nullable()->default(null);
            $table->unsignedInteger('id_projeto');
            $table->text('termos_proibidos')->nullable()->default(null);
            $table->string('mapeamentos_aprendizado', 1)->nullable()->default(null);
            $table->string('mapeamentos_reconhecimento', 1)->nullable()->default(null);
            $table->string('mapeamentos_consideracoes', 1)->nullable()->default(null);
            $table->string('mapeamentos_decisao', 1)->nullable()->default(null);

            $table->index(["id_projeto"], 'estrategias_id_projeto_index');

            $table->index(["id_projeto"], 'fk_estrategias_projetos1_idx');


            $table->foreign('id_projeto', 'fk_estrategias_projetos1_idx')
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
