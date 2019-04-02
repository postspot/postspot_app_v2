<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email', 60);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->dateTime('nascimento_usuario')->nullable();
            $table->string('sexo_usuario', 1)->nullable();
            $table->string('status_usuario', 1)->nullable();
            $table->string('codigo_usuario', 5)->nullable();
            $table->rememberToken();
            $table->timestamps();

            $table->unique(["id"], 'id_UNIQUE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
