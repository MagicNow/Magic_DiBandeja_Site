<?php

use Illuminate\Database\Seeder;

class TipoCardapiosTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tipo_cardapios')->delete();
        
        \DB::table('tipo_cardapios')->insert(array (
            0 => 
            array (
                'id' => 1,
                'tipo' => 'Residencial',
            ),
            1 => 
            array (
                'id' => 2,
                'tipo' => 'Comercial',
            ),
        ));
        
        
    }
}