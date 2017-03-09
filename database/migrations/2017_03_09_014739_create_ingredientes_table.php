<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateIngredientesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ingredientes', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('nome')->nullable();
			$table->string('nome_cientifico')->nullable();
			$table->float('preco', 10, 0)->nullable();
			$table->string('propriedades_nutricionais')->nullable();
			$table->integer('grupo_id')->nullable();
			$table->text('descricao', 65535)->nullable();
			$table->string('beneficios')->nullable();
			$table->string('qualificacoes')->nullable();
			$table->string('restricoes')->nullable();
			$table->text('historico', 65535)->nullable();
			$table->dateTime('picture_updated_at')->nullable();
			$table->dateTime('sazonalidade_inicial')->nullable();
			$table->dateTime('sazonalidade_final')->nullable();
			$table->string('image')->nullable();
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
		Schema::drop('ingredientes');
	}

}
