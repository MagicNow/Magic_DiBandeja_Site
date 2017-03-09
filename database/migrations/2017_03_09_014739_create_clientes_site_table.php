<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateClientesSiteTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('clientes_site', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('pessoa')->nullable();
			$table->string('nome')->nullable();
			$table->string('email')->nullable();
			$table->string('razao_social')->nullable();
			$table->string('telefone')->nullable();
			$table->string('telefone2')->nullable();
			$table->string('endereco')->nullable();
			$table->integer('numero')->nullable();
			$table->string('complemento')->nullable();
			$table->string('bairro')->nullable();
			$table->string('cidade')->nullable();
			$table->string('cep')->nullable();
			$table->string('estado')->nullable();
			$table->string('pais')->nullable();
			$table->string('url')->nullable();
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
		Schema::drop('clientes_site');
	}

}
