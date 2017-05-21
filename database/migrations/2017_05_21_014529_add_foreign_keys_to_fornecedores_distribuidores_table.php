<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToFornecedoresDistribuidoresTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('fornecedores_distribuidores', function(Blueprint $table)
		{
			$table->foreign('distribuidor_id', 'fk_fd_distribuidor_id')->references('id')->on('distribuidores')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('fornecedor_id', 'fk_fd_fornecedor_id')->references('id')->on('fornecedores')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('fornecedores_distribuidores', function(Blueprint $table)
		{
			$table->dropForeign('fk_fd_distribuidor_id');
			$table->dropForeign('fk_fd_fornecedor_id');
		});
	}

}
