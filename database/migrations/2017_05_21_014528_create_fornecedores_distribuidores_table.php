<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFornecedoresDistribuidoresTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('fornecedores_distribuidores', function(Blueprint $table)
		{
			$table->integer('fornecedor_id')->nullable()->index('fk_fd_fornecedor_id');
			$table->integer('distribuidor_id')->nullable()->index('fk_fd_distribuidor_id');
			$table->integer('nota')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('fornecedores_distribuidores');
	}

}
