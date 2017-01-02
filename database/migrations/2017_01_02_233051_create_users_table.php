<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->timestamps();
			$table->string('login')->index('index_users_on_login');
			$table->string('crypted_password');
			$table->string('password_salt');
			$table->string('persistence_token')->index('index_users_on_persistence_token');
			$table->integer('login_count')->default(0);
			$table->dateTime('last_request_at')->nullable()->index('index_users_on_last_request_at');
			$table->dateTime('last_login_at')->nullable();
			$table->dateTime('current_login_at')->nullable();
			$table->string('last_login_ip')->nullable();
			$table->string('current_login_ip')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
	}

}
