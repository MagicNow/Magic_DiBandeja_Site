<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateIngredienteBebidasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ingrediente_bebidas', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('bebida_id')->nullable();
			$table->integer('ingrediente_id')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('ingrediente_bebidas');
	}

}
