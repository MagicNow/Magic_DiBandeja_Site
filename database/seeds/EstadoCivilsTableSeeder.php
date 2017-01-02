<?php

use Illuminate\Database\Seeder;

class EstadoCivilsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('estado_civils')->delete();
        
        \DB::table('estado_civils')->insert(array (
            0 => 
            array (
                'id' => 1,
                'desc' => 'Solteiro',
            ),
            1 => 
            array (
                'id' => 2,
                'desc' => 'Casado',
            ),
        ));
        
        
    }
}