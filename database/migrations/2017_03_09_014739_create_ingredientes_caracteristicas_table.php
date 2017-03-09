<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateIngredientesCaracteristicasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ingredientes_caracteristicas', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('ingrediente_id')->index('ingrediente_id');
			$table->integer('caracteristica_id')->nullable()->index('caracteristica_id');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('ingredientes_caracteristicas');
	}

}
