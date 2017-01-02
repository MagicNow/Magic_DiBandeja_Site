<?php

use Illuminate\Database\Seeder;

class PeriodosTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('periodos')->delete();
        
        \DB::table('periodos')->insert(array (
            0 => 
            array (
                'id' => 1,
                'desc' => 'Diário',
                'dias' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'desc' => 'Semanal',
                'dias' => 7,
            ),
            2 => 
            array (
                'id' => 3,
                'desc' => 'Quinzenal',
                'dias' => 15,
            ),
            3 => 
            array (
                'id' => 4,
                'desc' => 'Mensal',
                'dias' => 30,
            ),
            4 => 
            array (
                'id' => 5,
                'desc' => 'Trimestral',
                'dias' => 90,
            ),
            5 => 
            array (
                'id' => 6,
                'desc' => 'Semestral',
                'dias' => 180,
            ),
        ));
        
        
    }
}