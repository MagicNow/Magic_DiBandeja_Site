<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateClientesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('clientes', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('tipo')->nullable();
			$table->string('nome')->nullable();
			$table->integer('sexo_id')->nullable();
			$table->integer('idade')->nullable();
			$table->integer('estadoCivil_id')->nullable();
			$table->integer('qtd_filhos')->nullable();
			$table->string('telefone')->nullable();
			$table->string('endereco')->nullable();
			$table->string('numero')->nullable();
			$table->string('bairro')->nullable();
			$table->string('cidade')->nullable();
			$table->string('pais')->nullable();
			$table->string('email')->nullable();
			$table->string('url')->nullable();
			$table->string('cep')->nullable();
			$table->string('image')->nullable();
			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('clientes');
	}

}
