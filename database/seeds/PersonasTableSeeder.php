<?php

use Illuminate\Database\Seeder;

class PersonasTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('personas')->delete();
        
        \DB::table('personas')->insert(array (
            0 => 
            array (
                'id_persona' => 11,
                'data_criacao' => '2019-04-08 16:58:58',
                'nome' => 'José Bruno de Oliveira Magalhães',
                'idade' => '27',
                'sexo' => NULL,
                'caracteristicas' => 'caracteristicas',
                'educacao' => '3',
                'cargo' => 'cargo',
                'segmento' => 'segmento',
                'objetivos' => 'objetivos',
                'descricao' => NULL,
                'desafios' => 'desafios',
                'aprendizado' => NULL,
                'reconhecimento' => NULL,
                'consideracao' => 'ajudar',
                'decisao' => NULL,
                'foto' => NULL,
                'id_projeto' => 4,
                'data_cadastro' => '2019-04-08 16:58:58',
            ),
            1 => 
            array (
                'id_persona' => 12,
                'data_criacao' => '2019-04-08 17:01:54',
                'nome' => 'nome',
                'idade' => '11',
                'sexo' => NULL,
                'caracteristicas' => 'caracteriscas',
                'educacao' => '3',
                'cargo' => 'cargo',
                'segmento' => 'segmento',
                'objetivos' => 'objetivos',
                'descricao' => NULL,
                'desafios' => 'desafios',
                'aprendizado' => NULL,
                'reconhecimento' => NULL,
                'consideracao' => 'ajuidar',
                'decisao' => NULL,
                'foto' => NULL,
                'id_projeto' => 4,
                'data_cadastro' => '2019-04-08 17:01:54',
            ),
            2 => 
            array (
                'id_persona' => 13,
                'data_criacao' => '2019-04-08 17:11:14',
                'nome' => 'jose',
                'idade' => '10',
                'sexo' => NULL,
                'caracteristicas' => 'caracterias',
                'educacao' => '3',
                'cargo' => 'cargo',
                'segmento' => 'segmento',
                'objetivos' => 'objetivos',
                'descricao' => NULL,
                'desafios' => 'desafios',
                'aprendizado' => NULL,
                'reconhecimento' => NULL,
                'consideracao' => 'ajudar',
                'decisao' => NULL,
                'foto' => NULL,
                'id_projeto' => 4,
                'data_cadastro' => '2019-04-08 17:11:14',
            ),
        ));
        
        
    }
}