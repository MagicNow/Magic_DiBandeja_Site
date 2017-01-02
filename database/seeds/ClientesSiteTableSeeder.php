<?php

use Illuminate\Database\Seeder;

class ClientesSiteTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('clientes_site')->delete();
        
        \DB::table('clientes_site')->insert(array (
            0 => 
            array (
                'id' => 2,
                'pessoa' => 'Física',
                'nome' => 'Das',
                'email' => 'dsadasas@dsaa.com',
                'razao_social' => NULL,
                'telefone' => 'das',
                'telefone2' => 'das',
                'endereco' => NULL,
                'numero' => NULL,
                'complemento' => NULL,
                'bairro' => NULL,
                'cidade' => NULL,
                'cep' => NULL,
                'estado' => NULL,
                'pais' => NULL,
                'url' => NULL,
                'created_at' => '2016-12-15 02:36:44',
                'updated_at' => '2016-12-15 02:36:44',
            ),
            1 => 
            array (
                'id' => 3,
                'pessoa' => 'Juridica',
                'nome' => NULL,
                'email' => 'asdsa',
                'razao_social' => 'DASd',
                'telefone' => 'asda',
                'telefone2' => 'asda',
                'endereco' => 'das',
                'numero' => NULL,
                'complemento' => NULL,
                'bairro' => 's',
                'cidade' => 'DASaa',
                'cep' => 'as',
                'estado' => 'adsa',
                'pais' => NULL,
                'url' => NULL,
                'created_at' => '2016-12-15 02:39:23',
                'updated_at' => '2016-12-15 02:39:23',
            ),
            2 => 
            array (
                'id' => 4,
                'pessoa' => 'Física',
                'nome' => 'Ana Cecilia DOria',
                'email' => 'cicadoria@yahoo.com.br',
                'razao_social' => NULL,
                'telefone' => '11 996192722',
                'telefone2' => '',
                'endereco' => NULL,
                'numero' => NULL,
                'complemento' => NULL,
                'bairro' => NULL,
                'cidade' => NULL,
                'cep' => NULL,
                'estado' => NULL,
                'pais' => NULL,
                'url' => NULL,
                'created_at' => '2016-12-15 18:16:59',
                'updated_at' => '2016-12-15 18:16:59',
            ),
            3 => 
            array (
                'id' => 5,
                'pessoa' => 'Juridica',
                'nome' => NULL,
                'email' => 'cicadoria@yahoo.com.br',
                'razao_social' => 'Casa da MAria Joana',
                'telefone' => '11 996182722',
                'telefone2' => '',
                'endereco' => 'Rua Malvinas',
                'numero' => 41,
                'complemento' => '',
                'bairro' => 'Jardim Guedala',
                'cidade' => 'São Paulo',
                'cep' => '05609-010',
                'estado' => 'São Paulo',
                'pais' => NULL,
                'url' => NULL,
                'created_at' => '2016-12-15 18:18:43',
                'updated_at' => '2016-12-15 18:18:43',
            ),
            4 => 
            array (
                'id' => 6,
                'pessoa' => 'Física',
                'nome' => 'graziella doria luna',
                'email' => 'gradorialuna@dibandeja.com.br',
                'razao_social' => NULL,
                'telefone' => '',
                'telefone2' => '',
                'endereco' => NULL,
                'numero' => NULL,
                'complemento' => NULL,
                'bairro' => NULL,
                'cidade' => NULL,
                'cep' => NULL,
                'estado' => NULL,
                'pais' => NULL,
                'url' => NULL,
                'created_at' => '2016-12-15 20:27:06',
                'updated_at' => '2016-12-15 20:27:06',
            ),
            5 => 
            array (
                'id' => 7,
                'pessoa' => 'Física',
                'nome' => 'Ana Ceclia Doria',
                'email' => 'cicadoria@ahoo.com.br',
                'razao_social' => NULL,
            'telefone' => '(11) 99618-2722',
                'telefone2' => '',
                'endereco' => NULL,
                'numero' => NULL,
                'complemento' => NULL,
                'bairro' => NULL,
                'cidade' => NULL,
                'cep' => NULL,
                'estado' => NULL,
                'pais' => NULL,
                'url' => NULL,
                'created_at' => '2016-12-22 14:46:29',
                'updated_at' => '2016-12-22 14:46:29',
            ),
        ));
        
        
    }
}