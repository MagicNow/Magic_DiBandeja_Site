<?php

class UsersTableSeeder extends Seeder
{
  public function run()
  {
    DB::table('users')->delete();
    
    User::create(array(
    	'name'     => 'Admin',
        'username' => 'admin',
        'email'    => 'admin@admin.com.br',
        'password' => Hash::make('123'),
    ));
  }
}