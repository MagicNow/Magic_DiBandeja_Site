<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToIngredientesCaracteristicasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('ingredientes_caracteristicas', function(Blueprint $table)
		{
			$table->foreign('ingrediente_id', 'ingredientes_caracteristicas_ibfk_1')->references('id')->on('ingredientes')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('caracteristica_id', 'ingredientes_caracteristicas_ibfk_2')->references('id')->on('caracteristicas')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('ingredientes_caracteristicas', function(Blueprint $table)
		{
			$table->dropForeign('ingredientes_caracteristicas_ibfk_1');
			$table->dropForeign('ingredientes_caracteristicas_ibfk_2');
		});
	}

}
