<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'users';

    /**
     * Run the migrations.
     * @table users
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name')->nullable()->default(null);
            $table->string('email', 60);
            $table->timestamp('email_verified_at')->nullable()->default(null);
            $table->string('password');
            $table->dateTime('nascimento_usuario')->nullable()->default(null);
            $table->string('sexo_usuario', 1)->nullable()->default(null);
            $table->string('status_usuario', 1)->nullable()->default(null);
            $table->string('codigo_usuario', 5)->nullable()->default(null);
            $table->rememberToken();

            $table->unique(["id"], 'id_UNIQUE');
            $table->nullableTimestamps();
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
