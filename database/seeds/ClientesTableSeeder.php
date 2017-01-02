<?php

use Illuminate\Database\Seeder;

class ClientesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('clientes')->delete();
        
        \DB::table('clientes')->insert(array (
            0 => 
            array (
                'id' => 1,
                'nome' => 'Glorita Martins Ribeiro',
                'sexo_id' => 2,
                'idade' => NULL,
                'estadoCivil_id' => 2,
                'qtd_filhos' => 4,
                'telefone' => '55 21 11 3031-7975',
                'endereco' => 'rua Malvinas, 41',
                'bairro' => 'Jardim Guedala',
                'cidade' => 'São Paulo',
                'email' => 'gloritamartinsribeiro@yahoo.com.br',
                'cep' => '05609010',
            ),
            1 => 
            array (
                'id' => 2,
                'nome' => 'Cristina Prieto Luna',
                'sexo_id' => 2,
                'idade' => 55,
                'estadoCivil_id' => 1,
                'qtd_filhos' => NULL,
                'telefone' => '55 21 13 3261-5926',
                'endereco' => 'Av. dos Bancários, 80 #23',
                'bairro' => 'Ponta da Praia',
                'cidade' => 'Santos',
                'email' => 'anaprieto@uol.com.br',
                'cep' => '11030300',
            ),
            2 => 
            array (
                'id' => 3,
                'nome' => 'Juliana Cortese Mazzer',
                'sexo_id' => 2,
                'idade' => 39,
                'estadoCivil_id' => 2,
                'qtd_filhos' => 2,
                'telefone' => '55 21 11 2372-5124',
                'endereco' => 'rua: Haddock Lobo, 250 #1106',
                'bairro' => 'Cerqueira César',
                'cidade' => 'São Paulo',
                'email' => 'ju_pcm@hotmail.com',
                'cep' => '01414000',
            ),
            3 => 
            array (
                'id' => 4,
                'nome' => 'Eleonora Doria Lemes',
                'sexo_id' => 2,
                'idade' => 23,
                'estadoCivil_id' => 2,
                'qtd_filhos' => 2,
                'telefone' => '55 21 11 996010363',
                'endereco' => 'rua Dr. Virgilio de Carvalho Pinto, 343 #162',
                'bairro' => 'Pinheiros',
                'cidade' => 'Sao Paulo',
                'email' => 'eleonora_doria@yahoo.com.br',
                'cep' => '05415-030',
            ),
            4 => 
            array (
                'id' => 5,
                'nome' => 'Ana Cecilia de Sampaio Doria',
                'sexo_id' => 2,
                'idade' => 30,
                'estadoCivil_id' => 1,
                'qtd_filhos' => NULL,
                'telefone' => '55 21 11 99618-2722',
                'endereco' => 'Al. Gabriel Monteiro da Silva, 2105 #21',
                'bairro' => 'Jardim Paulistano',
                'cidade' => 'Sao Paulo',
                'email' => 'cicadoria@yahoo.com.br',
                'cep' => '01441-001',
            ),
            5 => 
            array (
                'id' => 6,
                'nome' => 'Luis Antonio de Sampaio Doria Neto',
                'sexo_id' => 1,
                'idade' => 8,
                'estadoCivil_id' => 2,
                'qtd_filhos' => 3,
                'telefone' => '55 21 11 3167-5994',
                'endereco' => 'Rua Professor Carlos de Carvalho, 155 #7',
                'bairro' => 'Itaim Bibi',
                'cidade' => 'São Paulo',
                'email' => 'gordodoria@uol.com.br',
                'cep' => '04531-080',
            ),
        ));
        
        
    }
}