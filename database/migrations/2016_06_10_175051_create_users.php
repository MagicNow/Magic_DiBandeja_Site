<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsers extends Migration
{
      public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nickname');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->unique();
            $table->string('cpf')->unique();
            $table->char('sexo',1);
            $table->date('data_nascimento');
            $table->string('cel');
            $table->string('tel');
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}
