<?php

use Illuminate\Database\Seeder;

class TarefasTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tarefas')->delete();
        
        \DB::table('tarefas')->insert(array (
            0 => 
            array (
                'id_tarefa' => 2,
                'data_criacao' => '2019-04-15 14:13:44',
                'nome_tarefa' => 'O que é marketing digital',
                'palavra_chave' => 'palavra',
                'briefing_tarefa' => 'o conteudo vai ajudar dessa forma',
                'estagio_compra' => '1',
                'tipo_cta' => 'aqui vai a cta',
                'referencias' => 'referencia 1
referencia 2',
                'consideracoes_gerais' => NULL,
                'data_entrega' => '2019-04-25',
                'link_publicado' => 'ki',
                'nota_tarefa' => '0',
                'id_persona' => 12,
                'id_projeto' => 4,
                'id_equipe' => 1,
                'id_tipo' => 1,
            ),
            1 => 
            array (
                'id_tarefa' => 6,
                'data_criacao' => '2019-04-22 10:58:57',
                'nome_tarefa' => 'O que é um conteudo',
                'palavra_chave' => 'chave',
                'briefing_tarefa' => 'ajudar',
                'estagio_compra' => '3',
                'tipo_cta' => 'chamada1',
                'referencias' => 'links
link 2',
                'consideracoes_gerais' => NULL,
                'data_entrega' => '2019-04-16',
                'link_publicado' => NULL,
                'nota_tarefa' => NULL,
                'id_persona' => 13,
                'id_projeto' => 4,
                'id_equipe' => NULL,
                'id_tipo' => 2,
            ),
        ));
        
        
    }
}