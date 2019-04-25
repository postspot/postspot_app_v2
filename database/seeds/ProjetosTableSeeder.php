<?php

use Illuminate\Database\Seeder;

class ProjetosTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('projetos')->delete();
        
        \DB::table('projetos')->insert(array (
            0 => 
            array (
                'id_projeto' => 4,
                'nome_projeto' => 'negocio',
                'segmento_projeto' => 'segmento',
                'agencia_projeto' => '2',
                'cadastro_projeto' => '2019-04-08 16:55:47',
                'site_projeto' => 'site',
                'status_projeto' => 1,
                'projeto_ativo' => '1',
                'responsavel_projeto' => 297,
            ),
        ));
        
        
    }
}