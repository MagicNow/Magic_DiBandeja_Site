<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterIngredientes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ingredientes', function ($table) {
            $table->string('nome_cientifico');
            $table->text('propriedades_nutricionais');
            $table->text('qualificacoes');
            $table->text('beneficios');
            $table->text('restricoes');
            $table->text('historico');
            $table->string('custo');
            $table->string('medida');
            $table->dateTime('sazonalidade_inicial');
            $table->dateTime('sazonalidade_final');
        });


        Schema::create('ingredientes_caracteristicas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('caracteristica_id');
            $table->integer('ingrediente_id');
        });

        Schema::create('ingredientes_grupos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('grupo_id');
            $table->integer('ingrediente_id');
        });

        Schema::create('ingredientes_fornecedores', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('fornecedor_id');
            $table->integer('ingrediente_id');
        });

        Schema::create('ingredientes_relacionados', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('ingrediente_id_to');
            $table->integer('ingrediente_id_from');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
