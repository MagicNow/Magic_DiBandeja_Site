<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToIngredientesRelacionadosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('ingredientes_relacionados', function(Blueprint $table)
		{
			$table->foreign('ingrediente_id_to', 'ingredientes_relacionados_ibfk_1')->references('id')->on('ingredientes')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('ingrediente_id_from', 'ingredientes_relacionados_ibfk_2')->references('id')->on('ingredientes')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('ingredientes_relacionados', function(Blueprint $table)
		{
			$table->dropForeign('ingredientes_relacionados_ibfk_1');
			$table->dropForeign('ingredientes_relacionados_ibfk_2');
		});
	}

}
