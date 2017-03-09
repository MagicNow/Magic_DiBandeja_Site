<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateIngredientesRelacionadosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ingredientes_relacionados', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('ingrediente_id_to')->index('ingrediente_id_to');
			$table->integer('ingrediente_id_from')->index('ingrediente_id_from');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('ingredientes_relacionados');
	}

}
