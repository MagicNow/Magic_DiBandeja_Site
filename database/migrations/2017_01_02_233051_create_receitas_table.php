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
			$table->string('nome')->nullable();
			$table->integer('tipo_receita_id')->nullable();
			$table->date('data')->nullable();
			$table->integer('congela')->nullable();
			$table->integer('bebida_id')->nullable();
			$table->integer('fonte_id')->nullable();
			$table->string('picture_file_name')->nullable();
			$table->integer('qtd_porcao')->nullable();
			$table->text('preparo', 65535)->nullable();
			$table->text('historico', 65535)->nullable();
			$table->string('picture_content_type')->nullable();
			$table->integer('picture_file_size')->nullable();
			$table->dateTime('picture_updated_at')->nullable();
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
