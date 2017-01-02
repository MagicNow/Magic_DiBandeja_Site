<?php

use Illuminate\Database\Seeder;

class SexosTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('sexos')->delete();
        
        \DB::table('sexos')->insert(array (
            0 => 
            array (
                'id' => 1,
                'tipo' => 'Masculino',
            ),
            1 => 
            array (
                'id' => 2,
                'tipo' => 'Feminino',
            ),
        ));
        
        
    }
}