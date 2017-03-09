<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFornecedoresIngredientesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('fornecedores_ingredientes', function(Blueprint $table)
		{
			$table->integer('fornecedor_id')->nullable();
			$table->integer('ingrediente_id')->nullable();
			$table->float('custo', 10, 0)->nullable();
			$table->string('medida', 50)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('fornecedores_ingredientes');
	}

}
