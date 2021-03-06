<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateParceirosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('parceiros', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('nome')->nullable();
			$table->string('apelido')->nullable();
			$table->string('profissao')->nullable();
			$table->string('url')->nullable();
			$table->string('email')->nullable();
			$table->string('telefone')->nullable();
			$table->string('endereco')->nullable();
			$table->string('bairro')->nullable();
			$table->string('cidade')->nullable();
			$table->string('cep')->nullable();
			$table->string('estado')->nullable();
			$table->string('pais')->nullable();
			$table->integer('numero')->nullable();
			$table->string('complemento')->nullable();
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
		Schema::drop('parceiros');
	}

}
