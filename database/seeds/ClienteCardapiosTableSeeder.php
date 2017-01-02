<?php

use Illuminate\Database\Seeder;

class ClienteCardapiosTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('cliente_cardapios')->delete();
        
        \DB::table('cliente_cardapios')->insert(array (
            0 => 
            array (
                'id' => 1,
                'cardapio_id' => 1,
                'cliente_id' => 1,
            ),
        ));
        
        
    }
}