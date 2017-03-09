<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCardapiosOcasiaosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cardapios_ocasiaos', function(Blueprint $table)
		{
			$table->integer('ocasiao_id')->nullable();
			$table->integer('cardapio_id')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('cardapios_ocasiaos');
	}

}
