<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateIngredientesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ingredientes', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('nome')->nullable();
			$table->float('preco', 10, 0)->nullable();
			$table->integer('grupo_id')->nullable();
			$table->text('descricao', 65535)->nullable();
			$table->string('picture_file_name')->nullable();
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
		Schema::drop('ingredientes');
	}

}
