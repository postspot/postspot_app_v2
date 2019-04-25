<?php

use Illuminate\Database\Seeder;

class LogTarefasTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('log_tarefas')->delete();
        
        \DB::table('log_tarefas')->insert(array (
            0 => 
            array (
                'id_log' => 1,
                'status' => '1',
                'etapa' => '0',
                'data_criacao' => '2019-04-15 14:42:19',
                'data_prevista' => '2019-04-18 00:00:00',
                'id_tarefa' => 2,
                'id_usuario' => 297,
            ),
            1 => 
            array (
                'id_log' => 3,
                'status' => '0',
                'etapa' => '0',
                'data_criacao' => '2019-04-22 10:58:57',
                'data_prevista' => '1970-01-01 00:00:01',
                'id_tarefa' => 6,
                'id_usuario' => 297,
            ),
            2 => 
            array (
                'id_log' => 8,
                'status' => '1',
                'etapa' => '8',
                'data_criacao' => '2019-04-23 00:00:00',
                'data_prevista' => '2019-04-26 00:00:00',
                'id_tarefa' => 6,
                'id_usuario' => 297,
            ),
        ));
        
        
    }
}