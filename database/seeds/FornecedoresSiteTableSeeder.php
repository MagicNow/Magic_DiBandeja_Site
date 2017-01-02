<?php

use Illuminate\Database\Seeder;

class FornecedoresSiteTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('fornecedores_site')->delete();
        
        \DB::table('fornecedores_site')->insert(array (
            0 => 
            array (
                'id' => 2,
                'razao_social' => 'Das',
                'nome_fantasia' => 'DAS',
                'especialidade' => 'DASdas',
                'url' => 'DASdas',
                'cotacao' => 'das',
                'telefone' => 'das',
                'endereco' => 'DA',
                'numero' => NULL,
                'complemento' => NULL,
                'bairro' => 'da',
                'cidade' => 'DA',
                'cep' => 'DAS',
                'estado' => 'DA',
                'pais' => NULL,
                'created_at' => '2016-12-15 02:39:06',
                'updated_at' => '2016-12-15 02:39:06',
            ),
            1 => 
            array (
                'id' => 3,
                'razao_social' => 'Casa da Maria Joana',
                'nome_fantasia' => 'Casa da Maria Joana',
                'especialidade' => 'Frutaria',
                'url' => 'www.casadamariajoana.com.br',
                'cotacao' => '',
                'telefone' => '11 996182722',
                'endereco' => 'Rua Malvinas',
                'numero' => 41,
                'complemento' => '',
                'bairro' => 'Jardim Guedala',
                'cidade' => 'São Paulo',
                'cep' => '05609-010',
                'estado' => 'São Paulo',
                'pais' => NULL,
                'created_at' => '2016-12-15 18:23:45',
                'updated_at' => '2016-12-15 18:23:45',
            ),
            2 => 
            array (
                'id' => 4,
                'razao_social' => 'Casa da Maria Joana',
                'nome_fantasia' => 'Casa da Maria Joana',
                'especialidade' => 'Cozinha',
                'url' => 'www.casadamariajoana.com.br',
                'cotacao' => NULL,
            'telefone' => '(11) 99618-2722',
                'endereco' => 'Rua Malvinas',
                'numero' => 41,
                'complemento' => '',
                'bairro' => 'Jardim Guedala',
                'cidade' => 'São Paulo',
                'cep' => '05609-010',
                'estado' => 'São Paulo',
                'pais' => NULL,
                'created_at' => '2016-12-22 15:06:41',
                'updated_at' => '2016-12-22 15:06:41',
            ),
        ));
        
        
    }
}