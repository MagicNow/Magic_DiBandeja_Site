<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBebidasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('bebidas', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('nome')->nullable();
			$table->integer('teor_alcolico')->nullable();
			$table->text('historico', 65535)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('bebidas');
	}

}
