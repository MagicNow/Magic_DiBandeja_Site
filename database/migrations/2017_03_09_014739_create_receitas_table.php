<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateReceitasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('receitas', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('titulo')->nullable();
			$table->string('subtitulo');
			$table->integer('tipo_receita_id')->nullable();
			$table->date('data')->nullable();
			$table->integer('congela')->nullable();
			$table->integer('bebida_id')->nullable();
			$table->integer('fonte_id')->nullable();
			$table->string('picture_file_name')->nullable();
			$table->integer('qtd_porcao')->nullable();
			$table->text('observacoes', 65535)->nullable();
			$table->text('preparo', 65535)->nullable();
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
		Schema::drop('receitas');
	}

}
