<?php

use Illuminate\Database\Seeder;

class EstadosTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('estados')->delete();
        
        \DB::table('estados')->insert(array (
            0 => 
            array (
                'id' => 1,
                'nome' => 'Acre',
                'uf' => 'AC',
            ),
            1 => 
            array (
                'id' => 2,
                'nome' => 'Alagoas',
                'uf' => 'AL',
            ),
            2 => 
            array (
                'id' => 3,
                'nome' => 'Amazonas',
                'uf' => 'AM',
            ),
            3 => 
            array (
                'id' => 4,
                'nome' => 'Amapá',
                'uf' => 'AP',
            ),
            4 => 
            array (
                'id' => 5,
                'nome' => 'Bahia',
                'uf' => 'BA',
            ),
            5 => 
            array (
                'id' => 6,
                'nome' => 'Ceará',
                'uf' => 'CE',
            ),
            6 => 
            array (
                'id' => 7,
                'nome' => 'Distrito Federal',
                'uf' => 'DF',
            ),
            7 => 
            array (
                'id' => 8,
                'nome' => 'Espírito Santo',
                'uf' => 'ES',
            ),
            8 => 
            array (
                'id' => 9,
                'nome' => 'Goiás',
                'uf' => 'GO',
            ),
            9 => 
            array (
                'id' => 10,
                'nome' => 'Maranhão',
                'uf' => 'MA',
            ),
            10 => 
            array (
                'id' => 11,
                'nome' => 'Minas Gerais',
                'uf' => 'MG',
            ),
            11 => 
            array (
                'id' => 12,
                'nome' => 'Mato Grosso do Sul',
                'uf' => 'MS',
            ),
            12 => 
            array (
                'id' => 13,
                'nome' => 'Mato Grosso',
                'uf' => 'MT',
            ),
            13 => 
            array (
                'id' => 14,
                'nome' => 'Pará',
                'uf' => 'PA',
            ),
            14 => 
            array (
                'id' => 15,
                'nome' => 'Paraíba',
                'uf' => 'PB',
            ),
            15 => 
            array (
                'id' => 16,
                'nome' => 'Pernambuco',
                'uf' => 'PE',
            ),
            16 => 
            array (
                'id' => 17,
                'nome' => 'Piauí',
                'uf' => 'PI',
            ),
            17 => 
            array (
                'id' => 18,
                'nome' => 'Paraná',
                'uf' => 'PR',
            ),
            18 => 
            array (
                'id' => 19,
                'nome' => 'Rio de Janeiro',
                'uf' => 'RJ',
            ),
            19 => 
            array (
                'id' => 20,
                'nome' => 'Rio Grande do Norte',
                'uf' => 'RN',
            ),
            20 => 
            array (
                'id' => 21,
                'nome' => 'Rondônia',
                'uf' => 'RO',
            ),
            21 => 
            array (
                'id' => 22,
                'nome' => 'Roraima',
                'uf' => 'RR',
            ),
            22 => 
            array (
                'id' => 23,
                'nome' => 'Rio Grande do Sul',
                'uf' => 'RS',
            ),
            23 => 
            array (
                'id' => 24,
                'nome' => 'Santa Catarina',
                'uf' => 'SC',
            ),
            24 => 
            array (
                'id' => 25,
                'nome' => 'Sergipe',
                'uf' => 'SE',
            ),
            25 => 
            array (
                'id' => 26,
                'nome' => 'São Paulo',
                'uf' => 'SP',
            ),
            26 => 
            array (
                'id' => 27,
                'nome' => 'Tocantins',
                'uf' => 'TO',
            ),
        ));
        
        
    }
}