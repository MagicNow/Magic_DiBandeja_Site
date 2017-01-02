<?php

use Illuminate\Database\Seeder;

class ParceirosTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('parceiros')->delete();
        
        \DB::table('parceiros')->insert(array (
            0 => 
            array (
                'id' => 2,
                'nome' => 'Das',
                'apelido' => 'asdsa',
                'profissao' => 'asda',
                'url' => 'adsa',
                'email' => 'asda',
                'telefone' => 'asda',
                'endereco' => 'asd',
                'bairro' => 'adsa',
                'cidade' => 'ads',
                'cep' => 'asda',
                'estado' => 'asda',
                'pais' => NULL,
                'numero' => NULL,
                'complemento' => NULL,
                'created_at' => '2016-12-15 02:39:45',
                'updated_at' => '2016-12-15 02:39:45',
            ),
            1 => 
            array (
                'id' => 3,
                'nome' => 'Ana Cecilia Doria',
                'apelido' => 'Ana Cecilia',
                'profissao' => 'Publicitária',
                'url' => 'www.casadamariajoana.com.br',
                'email' => 'cicadoria@ahoo.com.br',
                'telefone' => '11 996182722',
                'endereco' => 'Rua Malvinas',
                'bairro' => 'Jardim Guedala',
                'cidade' => 'São Paulo',
                'cep' => '05609-010',
                'estado' => 'São Paulo',
                'pais' => NULL,
                'numero' => 41,
                'complemento' => '',
                'created_at' => '2016-12-15 18:29:52',
                'updated_at' => '2016-12-15 18:29:52',
            ),
            2 => 
            array (
                'id' => 4,
                'nome' => 'Ana Ceclia Doria',
                'apelido' => 'Ana Cecilia',
                'profissao' => 'Publicitaria',
                'url' => '',
                'email' => 'cicadoria@yahoo.com.br',
            'telefone' => '(11) 99618-2722',
                'endereco' => 'Rua Malvinas',
                'bairro' => 'Jardim Guedala',
                'cidade' => 'São Paulo',
                'cep' => '05609-010',
                'estado' => 'São Paulo',
                'pais' => NULL,
                'numero' => 41,
                'complemento' => '',
                'created_at' => '2016-12-22 15:21:14',
                'updated_at' => '2016-12-22 15:21:14',
            ),
        ));
        
        
    }
}