<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateReceitaCardapiosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('receita_cardapios', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('receita_id')->nullable();
			$table->integer('cardapio_id')->nullable();
			$table->integer('dia')->nullable();
			$table->integer('refeicao')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('receita_cardapios');
	}

}
