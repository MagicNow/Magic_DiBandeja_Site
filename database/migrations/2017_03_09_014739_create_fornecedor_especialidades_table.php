<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFornecedorEspecialidadesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('fornecedor_especialidades', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('fornecedor_id')->nullable();
			$table->integer('especialidade_id')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('fornecedor_especialidades');
	}

}
