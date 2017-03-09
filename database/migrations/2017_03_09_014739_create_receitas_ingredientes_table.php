<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateReceitasIngredientesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('receitas_ingredientes', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('receita_id')->nullable();
			$table->integer('ingrediente_id')->nullable();
			$table->integer('unidade_id')->nullable();
			$table->float('quantidade', 10, 0)->nullable();
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
	}

}
