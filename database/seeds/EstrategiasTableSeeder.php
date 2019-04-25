<?php

use Illuminate\Database\Seeder;

class EstrategiasTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('estrategias')->delete();
        
        \DB::table('estrategias')->insert(array (
            0 => 
            array (
                'id_estrategia' => 4,
                'data_criacao' => '2019-04-08 16:57:13',
                'empresa' => NULL,
                'site' => NULL,
                'projeto' => NULL,
                'blog' => 'blog',
                'facebook' => 'facebook',
                'instagram' => 'instagram',
                'linkedin' => 'linkedin',
                'twitter' => 'twitter',
                'produtos_servicos' => NULL,
                'links' => NULL,
                'objetivo_primario' => '0',
                'kpis_primario' => NULL,
                'apresentacao' => NULL,
                'objetivo_secundario' => NULL,
                'kpis_secundario' => NULL,
                'concorrente1' => NULL,
                'concorrente2' => NULL,
                'concorrente3' => NULL,
                'com_quem_falar' => NULL,
                'com_quem_nao_falar' => NULL,
                'abordar' => NULL,
                'evitar' => NULL,
                'linguagem' => NULL,
                'referencia1' => NULL,
                'referencia2' => NULL,
                'referencia3' => NULL,
                'voz' => NULL,
                'tom' => NULL,
                'consideracoes_gerais' => NULL,
                'categorias' => NULL,
                'id_projeto' => 4,
                'termos_proibidos' => NULL,
                'mapeamentos_aprendizado' => NULL,
                'mapeamentos_reconhecimento' => NULL,
                'mapeamentos_consideracoes' => NULL,
                'mapeamentos_decisao' => NULL,
            ),
        ));
        
        
    }
}