<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateIngredientesGruposTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ingredientes_grupos', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('ingrediente_id')->index('ingrediente_id');
			$table->integer('grupo_id')->index('grupo_id');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('ingredientes_grupos');
	}

}
