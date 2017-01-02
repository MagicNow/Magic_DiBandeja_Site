<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCardapiosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cardapios', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->date('data')->nullable();
			$table->integer('tipo_cardapio_id')->nullable();
			$table->integer('periodo_id')->nullable();
			$table->integer('calendario_key')->nullable();
			$table->boolean('show_fornecedores')->nullable();
			$table->boolean('show_receitas')->nullable();
			$table->boolean('show_ingredientes')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('cardapios');
	}

}
