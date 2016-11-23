<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('administrators')->insert([
            'name' => 'Admin',
            'email' => 'admin@admin.com.br',
            'password' => bcrypt('123'),
        ]);
    }
}
