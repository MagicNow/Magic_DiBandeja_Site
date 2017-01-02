<?php

use Illuminate\Database\Seeder;

class MomentosTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('momentos')->delete();
        
        \DB::table('momentos')->insert(array (
            0 => 
            array (
                'id' => 1,
                'nome' => 'Café-da-Manhã',
            ),
            1 => 
            array (
                'id' => 2,
                'nome' => 'Lanche-da-Manhã',
            ),
            2 => 
            array (
                'id' => 3,
                'nome' => 'Almoço',
            ),
            3 => 
            array (
                'id' => 4,
                'nome' => 'Lanche-da-Tarde',
            ),
            4 => 
            array (
                'id' => 5,
                'nome' => 'Happy Hour',
            ),
            5 => 
            array (
                'id' => 6,
                'nome' => 'Jantar',
            ),
            6 => 
            array (
                'id' => 7,
                'nome' => 'Chá-da-Tarde',
            ),
            7 => 
            array (
                'id' => 8,
                'nome' => 'Lanche da Noite',
            ),
        ));
        
        
    }
}