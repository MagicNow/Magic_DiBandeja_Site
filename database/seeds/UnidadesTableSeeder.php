<?php

use Illuminate\Database\Seeder;

class UnidadesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('unidades')->delete();
        
        \DB::table('unidades')->insert(array (
            0 => 
            array (
                'id' => 1,
                'unidade' => 'dente',
            ),
            1 => 
            array (
                'id' => 2,
                'unidade' => 'unidade',
            ),
            2 => 
            array (
                'id' => 3,
                'unidade' => 'colher de chá',
            ),
            3 => 
            array (
                'id' => 4,
                'unidade' => 'colher de sopa',
            ),
            4 => 
            array (
                'id' => 5,
                'unidade' => 'folha',
            ),
            5 => 
            array (
                'id' => 6,
                'unidade' => 'ramo',
            ),
            6 => 
            array (
                'id' => 7,
                'unidade' => 'xícara de chá',
            ),
            7 => 
            array (
                'id' => 9,
                'unidade' => 'colher de café',
            ),
            8 => 
            array (
                'id' => 10,
                'unidade' => 'talo',
            ),
            9 => 
            array (
                'id' => 11,
                'unidade' => 'ml',
            ),
            10 => 
            array (
                'id' => 12,
                'unidade' => 'litro',
            ),
            11 => 
            array (
                'id' => 13,
                'unidade' => 'kg',
            ),
            12 => 
            array (
                'id' => 14,
                'unidade' => 'Q.B.',
            ),
            13 => 
            array (
                'id' => 15,
                'unidade' => 'pitada',
            ),
            14 => 
            array (
                'id' => 16,
                'unidade' => 'gramas',
            ),
            15 => 
            array (
                'id' => 17,
                'unidade' => 'tablete',
            ),
            16 => 
            array (
                'id' => 18,
                'unidade' => 'colher de sobremesa',
            ),
            17 => 
            array (
                'id' => 19,
                'unidade' => 'grão',
            ),
            18 => 
            array (
                'id' => 20,
                'unidade' => 'pedaço médio',
            ),
            19 => 
            array (
                'id' => 21,
                'unidade' => 'pedaço pequeno',
            ),
            20 => 
            array (
                'id' => 25,
                'unidade' => 'xícara de cháara de chá',
            ),
        ));
        
        
    }
}