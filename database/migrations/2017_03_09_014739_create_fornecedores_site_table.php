<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFornecedoresSiteTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('fornecedores_site', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('razao_social')->nullable();
			$table->string('nome_fantasia')->nullable();
			$table->string('especialidade')->nullable();
			$table->string('url')->nullable();
			$table->string('cotacao')->nullable();
			$table->string('telefone')->nullable();
			$table->string('endereco')->nullable();
			$table->integer('numero')->nullable();
			$table->string('complemento')->nullable();
			$table->string('bairro')->nullable();
			$table->string('cidade')->nullable();
			$table->string('cep')->nullable();
			$table->string('estado')->nullable();
			$table->string('pais')->nullable();
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
		Schema::drop('fornecedores_site');
	}

}
