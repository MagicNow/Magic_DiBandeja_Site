<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReceitas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('receitas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo');
            $table->string('subtitulo');
            $table->text('preparo');
            $table->text('observacoes');
            $table->timestamps();
        });

        Schema::create('receitas_ingredientes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('receita_id');
            $table->integer('ingrediente_id');


            $table->foreign('receita_id')->references('id')->on('receitas');
            $table->foreign('ingrediente_id')->references('id')->on('ingredientes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('receitas_ingredientes');
        Schema::drop('receitas');
    }
}
