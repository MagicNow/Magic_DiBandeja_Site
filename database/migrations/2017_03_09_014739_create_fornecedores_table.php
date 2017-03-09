<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFornecedoresTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('fornecedores', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('nome')->nullable();
			$table->string('telefone')->nullable();
			$table->string('complemento')->nullable();
			$table->string('endereco')->nullable();
			$table->string('bairro')->nullable();
			$table->string('cidade')->nullable();
			$table->string('site')->nullable();
			$table->string('cep')->nullable();
			$table->string('estado')->nullable();
			$table->string('pais')->nullable();
			$table->string('razao_social')->nullable();
			$table->string('url')->nullable();
			$table->string('especialidade')->nullable();
			$table->string('cotacao')->nullable();
			$table->string('imagem')->nullable();
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
		Schema::drop('fornecedores');
	}

}
