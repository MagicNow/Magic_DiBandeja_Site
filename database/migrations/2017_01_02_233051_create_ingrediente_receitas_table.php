<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateIngredienteReceitasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ingrediente_receitas', function(Blueprint $table)
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
		Schema::drop('ingrediente_receitas');
	}

}
