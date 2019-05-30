<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdatePublicacoesTableAddColumnIdUsuario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('publicacoes', function (Blueprint $table) {
            $table->unsignedInteger('id_usuario');

            $table->index(["id_usuario"], 'log_tarefas_id_usuario_index');

            $table->foreign('id_usuario', 'fk_log_tarefas_usuarios1_idx')
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
        Schema::table('publicacoes', function (Blueprint $table) {
            //
        });
    }
}
