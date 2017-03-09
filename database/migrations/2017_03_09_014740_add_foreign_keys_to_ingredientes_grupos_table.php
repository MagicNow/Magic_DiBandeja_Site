<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToIngredientesGruposTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('ingredientes_grupos', function(Blueprint $table)
		{
			$table->foreign('ingrediente_id', 'ingredientes_grupos_ibfk_1')->references('id')->on('ingredientes')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('grupo_id', 'ingredientes_grupos_ibfk_2')->references('id')->on('grupos')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('ingredientes_grupos', function(Blueprint $table)
		{
			$table->dropForeign('ingredientes_grupos_ibfk_1');
			$table->dropForeign('ingredientes_grupos_ibfk_2');
		});
	}

}
