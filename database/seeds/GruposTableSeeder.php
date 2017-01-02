<?php

use Illuminate\Database\Seeder;

class GruposTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('grupos')->delete();
        
        \DB::table('grupos')->insert(array (
            0 => 
            array (
                'id' => 1,
                'nome' => 'Ervas Frescas',
            ),
            1 => 
            array (
                'id' => 2,
                'nome' => 'Temperos Secos',
            ),
            2 => 
            array (
                'id' => 3,
                'nome' => 'Mel, Geleias e Cremes',
            ),
            3 => 
            array (
                'id' => 4,
                'nome' => 'Açúcar, Xaropes e Adoçantes',
            ),
            4 => 
            array (
                'id' => 5,
                'nome' => 'Essências e Corantes',
            ),
            5 => 
            array (
                'id' => 6,
                'nome' => 'Condimentos',
            ),
            6 => 
            array (
                'id' => 7,
                'nome' => 'Farinhas e Aditivos',
            ),
            7 => 
            array (
                'id' => 8,
                'nome' => 'Enfeites',
            ),
            8 => 
            array (
                'id' => 9,
                'nome' => 'Mostardas e Pastas',
            ),
            9 => 
            array (
                'id' => 10,
                'nome' => 'Molhos',
            ),
            10 => 
            array (
                'id' => 11,
                'nome' => 'Pickels e Conservas',
            ),
            11 => 
            array (
                'id' => 12,
                'nome' => 'Vinagre',
            ),
            12 => 
            array (
                'id' => 13,
                'nome' => 'Óleos e Gorduras',
            ),
            13 => 
            array (
                'id' => 14,
                'nome' => 'Lacticínios',
            ),
            14 => 
            array (
                'id' => 15,
                'nome' => 'Ovos',
            ),
            15 => 
            array (
                'id' => 16,
                'nome' => 'Folhas',
            ),
            16 => 
            array (
                'id' => 17,
                'nome' => 'Raizes',
            ),
            17 => 
            array (
                'id' => 18,
                'nome' => 'Frutos',
            ),
            18 => 
            array (
                'id' => 19,
                'nome' => 'Temperos Frescos',
            ),
            19 => 
            array (
                'id' => 20,
                'nome' => 'Leguminosas',
            ),
            20 => 
            array (
                'id' => 21,
                'nome' => 'Cogumelos e Fungos',
            ),
            21 => 
            array (
                'id' => 22,
                'nome' => 'Frutas Frescas',
            ),
            22 => 
            array (
                'id' => 23,
                'nome' => 'Frutas Secas e Nozes',
            ),
            23 => 
            array (
                'id' => 24,
                'nome' => 'Grãos Secos e Cereais',
            ),
            24 => 
            array (
                'id' => 25,
                'nome' => 'Massas',
            ),
            25 => 
            array (
                'id' => 26,
                'nome' => 'Pescados',
            ),
            26 => 
            array (
                'id' => 27,
                'nome' => 'Algas e Plantas Aquáticas',
            ),
            27 => 
            array (
                'id' => 28,
            'nome' => 'Ovinos (Ovelhas, Carneiros e Cordeiros)',
            ),
            28 => 
            array (
                'id' => 29,
                'nome' => 'Suínos',
            ),
            29 => 
            array (
                'id' => 30,
                'nome' => 'Bovinos',
            ),
            30 => 
            array (
                'id' => 31,
                'nome' => 'Aves',
            ),
            31 => 
            array (
                'id' => 32,
                'nome' => 'Caças',
            ),
            32 => 
            array (
                'id' => 33,
                'nome' => 'Bebidas',
            ),
            33 => 
            array (
                'id' => 34,
                'nome' => 'Especialidades Locais',
            ),
            34 => 
            array (
                'id' => 35,
                'nome' => 'Caldos',
            ),
            35 => 
            array (
                'id' => 36,
                'nome' => 'Legume Caule ou Rebento',
            ),
            36 => 
            array (
                'id' => 37,
                'nome' => 'Outros',
            ),
        ));
        
        
    }
}