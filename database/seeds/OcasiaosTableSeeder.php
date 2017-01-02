<?php

use Illuminate\Database\Seeder;

class OcasiaosTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('ocasiaos')->delete();
        
        \DB::table('ocasiaos')->insert(array (
            0 => 
            array (
                'id' => 2,
                'nome' => 'Dia-a-Dia',
            ),
            1 => 
            array (
                'id' => 7,
                'nome' => 'Queijos & Vinhos',
            ),
            2 => 
            array (
                'id' => 8,
                'nome' => 'Verão',
            ),
            3 => 
            array (
                'id' => 9,
                'nome' => 'Outono',
            ),
            4 => 
            array (
                'id' => 10,
                'nome' => 'Inverno',
            ),
            5 => 
            array (
                'id' => 11,
                'nome' => 'Primavera',
            ),
            6 => 
            array (
                'id' => 12,
                'nome' => 'Culinária com Criança',
            ),
            7 => 
            array (
                'id' => 13,
                'nome' => 'Festa Infantil',
            ),
            8 => 
            array (
                'id' => 14,
                'nome' => 'Picnic',
            ),
            9 => 
            array (
                'id' => 15,
                'nome' => 'Especial',
            ),
            10 => 
            array (
                'id' => 16,
                'nome' => 'Batizado, Primeira Comunhão e Crisma',
            ),
            11 => 
            array (
                'id' => 18,
                'nome' => 'Natal',
            ),
            12 => 
            array (
                'id' => 19,
                'nome' => 'Páscoa',
            ),
            13 => 
            array (
                'id' => 20,
                'nome' => 'Dia-dos-Namorados',
            ),
            14 => 
            array (
                'id' => 21,
                'nome' => 'Aniversário de Casamento',
            ),
            15 => 
            array (
                'id' => 22,
                'nome' => 'Dia-das-Mães',
            ),
            16 => 
            array (
                'id' => 23,
                'nome' => 'Dia-dos-Pais',
            ),
            17 => 
            array (
                'id' => 24,
                'nome' => 'Dia-das-Crianças',
            ),
            18 => 
            array (
                'id' => 29,
                'nome' => 'Final-de-Semana',
            ),
            19 => 
            array (
                'id' => 30,
                'nome' => 'Festa Adolescente',
            ),
            20 => 
            array (
                'id' => 31,
                'nome' => 'Gostosura',
            ),
        ));
        
        
    }
}