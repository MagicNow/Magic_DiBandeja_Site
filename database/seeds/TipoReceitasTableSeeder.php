<?php

use Illuminate\Database\Seeder;

class TipoReceitasTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tipo_receitas')->delete();
        
        \DB::table('tipo_receitas')->insert(array (
            0 => 
            array (
                'id' => 1,
                'nome' => 'Receita-Base',
            ),
            1 => 
            array (
                'id' => 2,
                'nome' => 'Aperitivo',
            ),
            2 => 
            array (
                'id' => 3,
                'nome' => 'Sopa',
            ),
            3 => 
            array (
                'id' => 4,
                'nome' => 'Salada',
            ),
            4 => 
            array (
                'id' => 5,
                'nome' => 'Prato Principal: Carne Bovina',
            ),
            5 => 
            array (
                'id' => 6,
                'nome' => 'Prato Principal: Carne de Caça Silvestre',
            ),
            6 => 
            array (
                'id' => 7,
                'nome' => 'Prato Principal: Carne de Ave',
            ),
            7 => 
            array (
                'id' => 8,
                'nome' => 'Prato Principal: Carne de Ovino',
            ),
            8 => 
            array (
                'id' => 9,
                'nome' => 'Prato Principal: Carne de Suíno',
            ),
            9 => 
            array (
                'id' => 10,
                'nome' => 'Prato Principal: Carne de Caça Selvagem',
            ),
            10 => 
            array (
                'id' => 11,
                'nome' => 'Prato Principal: Carne Exótica',
            ),
            11 => 
            array (
                'id' => 12,
                'nome' => 'Prato Principal: Pescados',
            ),
            12 => 
            array (
                'id' => 13,
                'nome' => 'Prato Principal: Vegetariano',
            ),
            13 => 
            array (
                'id' => 14,
                'nome' => 'Acompanhamento',
            ),
            14 => 
            array (
                'id' => 15,
                'nome' => 'Sobremesa',
            ),
            15 => 
            array (
                'id' => 16,
                'nome' => 'Papinha Infantil',
            ),
            16 => 
            array (
                'id' => 17,
                'nome' => 'Lanche Escolar',
            ),
            17 => 
            array (
                'id' => 18,
                'nome' => 'Bebida: Suco',
            ),
            18 => 
            array (
                'id' => 19,
                'nome' => 'Bebida: Chá',
            ),
            19 => 
            array (
                'id' => 20,
                'nome' => 'Bebida: Café',
            ),
            20 => 
            array (
                'id' => 21,
                'nome' => 'Bebida: Chocolate',
            ),
            21 => 
            array (
                'id' => 22,
                'nome' => 'Bebida: Frapé',
            ),
            22 => 
            array (
                'id' => 23,
                'nome' => 'Bebida: Smoothie',
            ),
            23 => 
            array (
                'id' => 24,
                'nome' => 'Conserva: Geléia',
            ),
            24 => 
            array (
                'id' => 25,
                'nome' => 'Conserva: Chutney',
            ),
            25 => 
            array (
                'id' => 26,
                'nome' => 'Manteiga',
            ),
            26 => 
            array (
                'id' => 27,
                'nome' => 'Molhos',
            ),
        ));
        
        
    }
}