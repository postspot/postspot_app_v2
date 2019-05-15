<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        /*$this->call(TarefasTableSeeder::class);
        $this->call(EstrategiasTableSeeder::class);
        $this->call(LogTarefasTableSeeder::class);
        $this->call(PersonasTableSeeder::class);
        $this->call(ProjetosTableSeeder::class);*/
        $this->call(UsuariosTableSeeder::class);
    }
}
