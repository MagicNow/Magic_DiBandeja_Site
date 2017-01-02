<?php

use Illuminate\Database\Seeder;

class IngredienteReceitasTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('ingrediente_receitas')->delete();
        
        \DB::table('ingrediente_receitas')->insert(array (
            0 => 
            array (
                'id' => 1,
                'receita_id' => 1,
                'ingrediente_id' => 42,
                'unidade_id' => 1,
                'quantidade' => 6,
            ),
            1 => 
            array (
                'id' => 2,
                'receita_id' => 1,
                'ingrediente_id' => 154,
                'unidade_id' => 2,
                'quantidade' => 3,
            ),
            2 => 
            array (
                'id' => 3,
                'receita_id' => 1,
                'ingrediente_id' => 301,
                'unidade_id' => 2,
                'quantidade' => 34,
            ),
            3 => 
            array (
                'id' => 4,
                'receita_id' => 1,
                'ingrediente_id' => 394,
                'unidade_id' => 3,
                'quantidade' => 5,
            ),
            4 => 
            array (
                'id' => 5,
                'receita_id' => 2,
                'ingrediente_id' => 42,
                'unidade_id' => 1,
                'quantidade' => 6,
            ),
            5 => 
            array (
                'id' => 6,
                'receita_id' => 2,
                'ingrediente_id' => 389,
                'unidade_id' => 4,
                'quantidade' => 3,
            ),
            6 => 
            array (
                'id' => 7,
                'receita_id' => 2,
                'ingrediente_id' => 301,
                'unidade_id' => 2,
                'quantidade' => 34,
            ),
            7 => 
            array (
                'id' => 8,
                'receita_id' => 2,
                'ingrediente_id' => 154,
                'unidade_id' => 2,
                'quantidade' => 3,
            ),
            8 => 
            array (
                'id' => 9,
                'receita_id' => 2,
                'ingrediente_id' => 390,
                'unidade_id' => 4,
                'quantidade' => 3,
            ),
            9 => 
            array (
                'id' => 10,
                'receita_id' => 2,
                'ingrediente_id' => 3,
                'unidade_id' => 5,
                'quantidade' => 4,
            ),
            10 => 
            array (
                'id' => 11,
                'receita_id' => 2,
                'ingrediente_id' => 259,
                'unidade_id' => 6,
                'quantidade' => 8,
            ),
            11 => 
            array (
                'id' => 12,
                'receita_id' => 2,
                'ingrediente_id' => 392,
                'unidade_id' => 3,
                'quantidade' => 1,
            ),
            12 => 
            array (
                'id' => 13,
                'receita_id' => 2,
                'ingrediente_id' => 254,
                'unidade_id' => 4,
                'quantidade' => 1,
            ),
            13 => 
            array (
                'id' => 14,
                'receita_id' => 2,
                'ingrediente_id' => 393,
                'unidade_id' => 7,
                'quantidade' => 1,
            ),
            14 => 
            array (
                'id' => 15,
                'receita_id' => 2,
                'ingrediente_id' => 74,
                'unidade_id' => 3,
                'quantidade' => 5,
            ),
            15 => 
            array (
                'id' => 16,
                'receita_id' => 2,
                'ingrediente_id' => 43,
                'unidade_id' => 2,
                'quantidade' => 1,
            ),
            16 => 
            array (
                'id' => 17,
                'receita_id' => 3,
                'ingrediente_id' => 408,
                'unidade_id' => 2,
                'quantidade' => 2,
            ),
            17 => 
            array (
                'id' => 18,
                'receita_id' => 3,
                'ingrediente_id' => 409,
                'unidade_id' => 8,
                'quantidade' => 5,
            ),
            18 => 
            array (
                'id' => 19,
                'receita_id' => 3,
                'ingrediente_id' => 387,
                'unidade_id' => 2,
                'quantidade' => 2,
            ),
            19 => 
            array (
                'id' => 20,
                'receita_id' => 3,
                'ingrediente_id' => 410,
                'unidade_id' => 2,
                'quantidade' => 3,
            ),
            20 => 
            array (
                'id' => 21,
                'receita_id' => 3,
                'ingrediente_id' => 36,
                'unidade_id' => 2,
                'quantidade' => 5,
            ),
            21 => 
            array (
                'id' => 22,
                'receita_id' => 3,
                'ingrediente_id' => 411,
                'unidade_id' => 2,
                'quantidade' => 1,
            ),
            22 => 
            array (
                'id' => 23,
                'receita_id' => 3,
                'ingrediente_id' => 412,
                'unidade_id' => 2,
                'quantidade' => 1,
            ),
            23 => 
            array (
                'id' => 24,
                'receita_id' => 3,
                'ingrediente_id' => 394,
                'unidade_id' => 9,
                'quantidade' => 2,
            ),
            24 => 
            array (
                'id' => 25,
                'receita_id' => 3,
                'ingrediente_id' => 413,
                'unidade_id' => 4,
                'quantidade' => 1,
            ),
            25 => 
            array (
                'id' => 26,
                'receita_id' => 4,
                'ingrediente_id' => 419,
                'unidade_id' => 2,
                'quantidade' => 1,
            ),
            26 => 
            array (
                'id' => 27,
                'receita_id' => 4,
                'ingrediente_id' => 409,
                'unidade_id' => 8,
                'quantidade' => 2,
            ),
            27 => 
            array (
                'id' => 28,
                'receita_id' => 4,
                'ingrediente_id' => 36,
                'unidade_id' => 2,
                'quantidade' => 1,
            ),
            28 => 
            array (
                'id' => 29,
                'receita_id' => 4,
                'ingrediente_id' => 383,
                'unidade_id' => 2,
                'quantidade' => 1,
            ),
            29 => 
            array (
                'id' => 30,
                'receita_id' => 4,
                'ingrediente_id' => 410,
                'unidade_id' => NULL,
                'quantidade' => 2,
            ),
            30 => 
            array (
                'id' => 31,
                'receita_id' => 5,
                'ingrediente_id' => 42,
                'unidade_id' => 1,
                'quantidade' => 3,
            ),
            31 => 
            array (
                'id' => 32,
                'receita_id' => 5,
                'ingrediente_id' => 36,
                'unidade_id' => 2,
                'quantidade' => 1,
            ),
            32 => 
            array (
                'id' => 33,
                'receita_id' => 5,
                'ingrediente_id' => 383,
                'unidade_id' => 2,
                'quantidade' => 1,
            ),
            33 => 
            array (
                'id' => 34,
                'receita_id' => 5,
                'ingrediente_id' => 410,
                'unidade_id' => 10,
                'quantidade' => 1,
            ),
            34 => 
            array (
                'id' => 35,
                'receita_id' => 5,
                'ingrediente_id' => 387,
                'unidade_id' => 10,
                'quantidade' => 1,
            ),
            35 => 
            array (
                'id' => 36,
                'receita_id' => 5,
                'ingrediente_id' => 3,
                'unidade_id' => 5,
                'quantidade' => 2,
            ),
            36 => 
            array (
                'id' => 37,
                'receita_id' => NULL,
                'ingrediente_id' => 3,
                'unidade_id' => NULL,
                'quantidade' => NULL,
            ),
            37 => 
            array (
                'id' => 38,
                'receita_id' => 5,
                'ingrediente_id' => 420,
                'unidade_id' => 11,
                'quantidade' => 500,
            ),
            38 => 
            array (
                'id' => 39,
                'receita_id' => 5,
                'ingrediente_id' => 409,
                'unidade_id' => 12,
                'quantidade' => 2,
            ),
            39 => 
            array (
                'id' => 40,
                'receita_id' => 6,
                'ingrediente_id' => 421,
                'unidade_id' => 13,
                'quantidade' => 3,
            ),
            40 => 
            array (
                'id' => 41,
                'receita_id' => 6,
                'ingrediente_id' => 409,
                'unidade_id' => 8,
                'quantidade' => 5,
            ),
            41 => 
            array (
                'id' => 42,
                'receita_id' => 6,
                'ingrediente_id' => 387,
                'unidade_id' => 2,
                'quantidade' => 2,
            ),
            42 => 
            array (
                'id' => 43,
                'receita_id' => 6,
                'ingrediente_id' => 410,
                'unidade_id' => 2,
                'quantidade' => 3,
            ),
            43 => 
            array (
                'id' => 44,
                'receita_id' => 6,
                'ingrediente_id' => 36,
                'unidade_id' => 2,
                'quantidade' => 5,
            ),
            44 => 
            array (
                'id' => 45,
                'receita_id' => 6,
                'ingrediente_id' => 411,
                'unidade_id' => 2,
                'quantidade' => 2,
            ),
            45 => 
            array (
                'id' => 46,
                'receita_id' => 6,
                'ingrediente_id' => 412,
                'unidade_id' => 2,
                'quantidade' => 1,
            ),
            46 => 
            array (
                'id' => 47,
                'receita_id' => 6,
                'ingrediente_id' => 3,
                'unidade_id' => 2,
                'quantidade' => 1,
            ),
            47 => 
            array (
                'id' => 48,
                'receita_id' => 6,
                'ingrediente_id' => 394,
                'unidade_id' => 9,
                'quantidade' => 2,
            ),
            48 => 
            array (
                'id' => 49,
                'receita_id' => 6,
                'ingrediente_id' => 413,
                'unidade_id' => 4,
                'quantidade' => 1,
            ),
            49 => 
            array (
                'id' => 50,
                'receita_id' => 7,
                'ingrediente_id' => 1,
                'unidade_id' => NULL,
                'quantidade' => 0,
            ),
            50 => 
            array (
                'id' => 51,
                'receita_id' => 8,
                'ingrediente_id' => 369,
                'unidade_id' => 2,
                'quantidade' => 6,
            ),
            51 => 
            array (
                'id' => 52,
                'receita_id' => 8,
                'ingrediente_id' => 394,
                'unidade_id' => 14,
                'quantidade' => NULL,
            ),
            52 => 
            array (
                'id' => 53,
                'receita_id' => 8,
                'ingrediente_id' => 414,
                'unidade_id' => 14,
                'quantidade' => NULL,
            ),
            53 => 
            array (
                'id' => 54,
                'receita_id' => 8,
                'ingrediente_id' => 392,
                'unidade_id' => 15,
                'quantidade' => 1,
            ),
            54 => 
            array (
                'id' => 55,
                'receita_id' => 8,
                'ingrediente_id' => 42,
                'unidade_id' => 1,
                'quantidade' => 1,
            ),
            55 => 
            array (
                'id' => 56,
                'receita_id' => 8,
                'ingrediente_id' => 390,
                'unidade_id' => 14,
                'quantidade' => NULL,
            ),
            56 => 
            array (
                'id' => 57,
                'receita_id' => 9,
                'ingrediente_id' => 418,
                'unidade_id' => 16,
                'quantidade' => 200,
            ),
            57 => 
            array (
                'id' => 58,
                'receita_id' => 9,
                'ingrediente_id' => 383,
                'unidade_id' => 2,
                'quantidade' => 1,
            ),
            58 => 
            array (
                'id' => 59,
                'receita_id' => 9,
                'ingrediente_id' => 415,
                'unidade_id' => 16,
                'quantidade' => 60,
            ),
            59 => 
            array (
                'id' => 60,
                'receita_id' => 9,
                'ingrediente_id' => 47,
                'unidade_id' => 2,
                'quantidade' => 1,
            ),
            60 => 
            array (
                'id' => 61,
                'receita_id' => 9,
                'ingrediente_id' => 417,
                'unidade_id' => 2,
                'quantidade' => 12,
            ),
            61 => 
            array (
                'id' => 62,
                'receita_id' => 9,
                'ingrediente_id' => 259,
                'unidade_id' => 14,
                'quantidade' => NULL,
            ),
            62 => 
            array (
                'id' => 63,
                'receita_id' => 9,
                'ingrediente_id' => 394,
                'unidade_id' => 14,
                'quantidade' => NULL,
            ),
            63 => 
            array (
                'id' => 64,
                'receita_id' => 9,
                'ingrediente_id' => 413,
                'unidade_id' => 14,
                'quantidade' => NULL,
            ),
            64 => 
            array (
                'id' => 65,
                'receita_id' => 10,
                'ingrediente_id' => 195,
                'unidade_id' => 16,
                'quantidade' => 250,
            ),
            65 => 
            array (
                'id' => 66,
                'receita_id' => 10,
                'ingrediente_id' => 422,
                'unidade_id' => 17,
                'quantidade' => 1,
            ),
            66 => 
            array (
                'id' => 67,
                'receita_id' => 10,
                'ingrediente_id' => 423,
                'unidade_id' => 2,
                'quantidade' => 2,
            ),
            67 => 
            array (
                'id' => 68,
                'receita_id' => 10,
                'ingrediente_id' => 394,
                'unidade_id' => 14,
                'quantidade' => NULL,
            ),
            68 => 
            array (
                'id' => 69,
                'receita_id' => 11,
                'ingrediente_id' => 419,
                'unidade_id' => 2,
                'quantidade' => 1,
            ),
            69 => 
            array (
                'id' => 70,
                'receita_id' => 11,
                'ingrediente_id' => 64,
                'unidade_id' => NULL,
                'quantidade' => NULL,
            ),
            70 => 
            array (
                'id' => 71,
                'receita_id' => 12,
                'ingrediente_id' => 419,
                'unidade_id' => 2,
                'quantidade' => 1,
            ),
            71 => 
            array (
                'id' => 72,
                'receita_id' => 12,
                'ingrediente_id' => 428,
                'unidade_id' => 18,
                'quantidade' => 1,
            ),
            72 => 
            array (
                'id' => 73,
                'receita_id' => 12,
                'ingrediente_id' => 390,
                'unidade_id' => 14,
                'quantidade' => NULL,
            ),
            73 => 
            array (
                'id' => 74,
                'receita_id' => 12,
                'ingrediente_id' => 383,
                'unidade_id' => 14,
                'quantidade' => NULL,
            ),
            74 => 
            array (
                'id' => 75,
                'receita_id' => 12,
                'ingrediente_id' => 42,
                'unidade_id' => 14,
                'quantidade' => NULL,
            ),
            75 => 
            array (
                'id' => 76,
                'receita_id' => 12,
                'ingrediente_id' => 433,
                'unidade_id' => 14,
                'quantidade' => NULL,
            ),
            76 => 
            array (
                'id' => 77,
                'receita_id' => 12,
                'ingrediente_id' => 438,
                'unidade_id' => 17,
                'quantidade' => 1,
            ),
            77 => 
            array (
                'id' => 78,
                'receita_id' => 12,
                'ingrediente_id' => 198,
                'unidade_id' => 3,
                'quantidade' => 1,
            ),
            78 => 
            array (
                'id' => 79,
                'receita_id' => 12,
                'ingrediente_id' => 305,
                'unidade_id' => 14,
                'quantidade' => NULL,
            ),
            79 => 
            array (
                'id' => 80,
                'receita_id' => 12,
                'ingrediente_id' => 306,
                'unidade_id' => 14,
                'quantidade' => NULL,
            ),
            80 => 
            array (
                'id' => 81,
                'receita_id' => 12,
                'ingrediente_id' => 259,
                'unidade_id' => 14,
                'quantidade' => NULL,
            ),
            81 => 
            array (
                'id' => 82,
                'receita_id' => 12,
                'ingrediente_id' => 440,
                'unidade_id' => 14,
                'quantidade' => NULL,
            ),
            82 => 
            array (
                'id' => 83,
                'receita_id' => 13,
                'ingrediente_id' => 195,
                'unidade_id' => 16,
                'quantidade' => 250,
            ),
            83 => 
            array (
                'id' => 84,
                'receita_id' => 13,
                'ingrediente_id' => 422,
                'unidade_id' => 17,
                'quantidade' => 1,
            ),
            84 => 
            array (
                'id' => 85,
                'receita_id' => 13,
                'ingrediente_id' => 423,
                'unidade_id' => 2,
                'quantidade' => 2,
            ),
            85 => 
            array (
                'id' => 86,
                'receita_id' => 13,
                'ingrediente_id' => 392,
                'unidade_id' => 4,
                'quantidade' => 2,
            ),
            86 => 
            array (
                'id' => 87,
                'receita_id' => NULL,
                'ingrediente_id' => 1,
                'unidade_id' => NULL,
                'quantidade' => 0,
            ),
            87 => 
            array (
                'id' => 88,
                'receita_id' => 15,
                'ingrediente_id' => 403,
                'unidade_id' => 2,
                'quantidade' => 4,
            ),
            88 => 
            array (
                'id' => 89,
                'receita_id' => 15,
                'ingrediente_id' => 195,
                'unidade_id' => 16,
                'quantidade' => 400,
            ),
            89 => 
            array (
                'id' => 90,
                'receita_id' => 15,
                'ingrediente_id' => 84,
                'unidade_id' => NULL,
                'quantidade' => NULL,
            ),
            90 => 
            array (
                'id' => 91,
                'receita_id' => 16,
                'ingrediente_id' => 403,
                'unidade_id' => 2,
                'quantidade' => 4,
            ),
            91 => 
            array (
                'id' => 92,
                'receita_id' => 16,
                'ingrediente_id' => 195,
                'unidade_id' => 16,
                'quantidade' => 200,
            ),
            92 => 
            array (
                'id' => 93,
                'receita_id' => 16,
                'ingrediente_id' => 83,
                'unidade_id' => 16,
                'quantidade' => 200,
            ),
            93 => 
            array (
                'id' => 94,
                'receita_id' => 17,
                'ingrediente_id' => 154,
                'unidade_id' => 2,
                'quantidade' => 2,
            ),
            94 => 
            array (
                'id' => 95,
                'receita_id' => 17,
                'ingrediente_id' => 410,
                'unidade_id' => 2,
                'quantidade' => 1,
            ),
            95 => 
            array (
                'id' => 96,
                'receita_id' => 17,
                'ingrediente_id' => 36,
                'unidade_id' => 2,
                'quantidade' => 1,
            ),
            96 => 
            array (
                'id' => 97,
                'receita_id' => 18,
                'ingrediente_id' => 442,
                'unidade_id' => 16,
                'quantidade' => 250,
            ),
            97 => 
            array (
                'id' => 98,
                'receita_id' => 18,
                'ingrediente_id' => 424,
                'unidade_id' => 2,
                'quantidade' => 3,
            ),
            98 => 
            array (
                'id' => 99,
                'receita_id' => 18,
                'ingrediente_id' => 446,
                'unidade_id' => 16,
                'quantidade' => 85,
            ),
            99 => 
            array (
                'id' => 100,
                'receita_id' => 18,
                'ingrediente_id' => 445,
                'unidade_id' => 2,
                'quantidade' => 1,
            ),
            100 => 
            array (
                'id' => 101,
                'receita_id' => 18,
                'ingrediente_id' => 451,
                'unidade_id' => 2,
                'quantidade' => 1,
            ),
            101 => 
            array (
                'id' => 102,
                'receita_id' => 18,
                'ingrediente_id' => 452,
                'unidade_id' => 12,
                'quantidade' => 1,
            ),
            102 => 
            array (
                'id' => 103,
                'receita_id' => 18,
                'ingrediente_id' => 394,
                'unidade_id' => 14,
                'quantidade' => NULL,
            ),
            103 => 
            array (
                'id' => 104,
                'receita_id' => 18,
                'ingrediente_id' => 453,
                'unidade_id' => 16,
                'quantidade' => 125,
            ),
            104 => 
            array (
                'id' => 105,
                'receita_id' => 18,
                'ingrediente_id' => 413,
                'unidade_id' => 14,
                'quantidade' => NULL,
            ),
            105 => 
            array (
                'id' => 106,
                'receita_id' => 19,
                'ingrediente_id' => 454,
                'unidade_id' => 11,
                'quantidade' => 15,
            ),
            106 => 
            array (
                'id' => 107,
                'receita_id' => 19,
                'ingrediente_id' => 455,
                'unidade_id' => 16,
                'quantidade' => 500,
            ),
            107 => 
            array (
                'id' => 108,
                'receita_id' => 19,
                'ingrediente_id' => 453,
                'unidade_id' => 16,
                'quantidade' => 60,
            ),
            108 => 
            array (
                'id' => 109,
                'receita_id' => 20,
                'ingrediente_id' => 154,
                'unidade_id' => NULL,
                'quantidade' => 0,
            ),
            109 => 
            array (
                'id' => 110,
                'receita_id' => 21,
                'ingrediente_id' => 154,
                'unidade_id' => NULL,
                'quantidade' => 0,
            ),
            110 => 
            array (
                'id' => 111,
                'receita_id' => 21,
                'ingrediente_id' => 3,
                'unidade_id' => 5,
                'quantidade' => 1,
            ),
            111 => 
            array (
                'id' => 112,
                'receita_id' => NULL,
                'ingrediente_id' => 3,
                'unidade_id' => NULL,
                'quantidade' => NULL,
            ),
            112 => 
            array (
                'id' => 113,
                'receita_id' => 21,
                'ingrediente_id' => 456,
                'unidade_id' => 2,
                'quantidade' => 4,
            ),
            113 => 
            array (
                'id' => 114,
                'receita_id' => 22,
                'ingrediente_id' => 3,
                'unidade_id' => 5,
                'quantidade' => 1,
            ),
            114 => 
            array (
                'id' => 115,
                'receita_id' => 22,
                'ingrediente_id' => 414,
                'unidade_id' => 19,
                'quantidade' => 4,
            ),
            115 => 
            array (
                'id' => 116,
                'receita_id' => 22,
                'ingrediente_id' => 141,
                'unidade_id' => 6,
                'quantidade' => 1,
            ),
            116 => 
            array (
                'id' => 117,
                'receita_id' => 22,
                'ingrediente_id' => 259,
                'unidade_id' => 10,
                'quantidade' => 2,
            ),
            117 => 
            array (
                'id' => 118,
                'receita_id' => 22,
                'ingrediente_id' => 42,
                'unidade_id' => 1,
                'quantidade' => 1,
            ),
            118 => 
            array (
                'id' => 119,
                'receita_id' => 22,
                'ingrediente_id' => 456,
                'unidade_id' => 2,
                'quantidade' => 1,
            ),
            119 => 
            array (
                'id' => 120,
                'receita_id' => 23,
                'ingrediente_id' => 410,
                'unidade_id' => 21,
                'quantidade' => 1,
            ),
            120 => 
            array (
                'id' => 121,
                'receita_id' => 23,
                'ingrediente_id' => 259,
                'unidade_id' => 10,
                'quantidade' => 2,
            ),
            121 => 
            array (
                'id' => 122,
                'receita_id' => 23,
                'ingrediente_id' => 141,
                'unidade_id' => 6,
                'quantidade' => 1,
            ),
            122 => 
            array (
                'id' => 123,
                'receita_id' => 23,
                'ingrediente_id' => 3,
                'unidade_id' => 5,
                'quantidade' => 1,
            ),
            123 => 
            array (
                'id' => 124,
                'receita_id' => 23,
                'ingrediente_id' => 387,
                'unidade_id' => 5,
                'quantidade' => 1,
            ),
            124 => 
            array (
                'id' => 125,
                'receita_id' => 19,
                'ingrediente_id' => 458,
                'unidade_id' => 16,
                'quantidade' => 30,
            ),
            125 => 
            array (
                'id' => 126,
                'receita_id' => 19,
                'ingrediente_id' => 459,
                'unidade_id' => 11,
                'quantidade' => 100,
            ),
            126 => 
            array (
                'id' => 127,
                'receita_id' => 19,
                'ingrediente_id' => 412,
                'unidade_id' => 2,
                'quantidade' => 1,
            ),
            127 => 
            array (
                'id' => 128,
                'receita_id' => 24,
                'ingrediente_id' => 460,
                'unidade_id' => 22,
                'quantidade' => 1,
            ),
            128 => 
            array (
                'id' => 129,
                'receita_id' => 24,
                'ingrediente_id' => 461,
                'unidade_id' => 7,
                'quantidade' => 1,
            ),
            129 => 
            array (
                'id' => 130,
                'receita_id' => 24,
                'ingrediente_id' => 462,
                'unidade_id' => 4,
                'quantidade' => 2,
            ),
            130 => 
            array (
                'id' => 131,
                'receita_id' => 24,
                'ingrediente_id' => 466,
                'unidade_id' => 4,
                'quantidade' => 2,
            ),
            131 => 
            array (
                'id' => 132,
                'receita_id' => 24,
                'ingrediente_id' => 259,
                'unidade_id' => 4,
                'quantidade' => 2,
            ),
            132 => 
            array (
                'id' => 133,
                'receita_id' => 24,
                'ingrediente_id' => 465,
                'unidade_id' => 3,
                'quantidade' => 1,
            ),
            133 => 
            array (
                'id' => 134,
                'receita_id' => 24,
                'ingrediente_id' => 467,
                'unidade_id' => NULL,
                'quantidade' => NULL,
            ),
            134 => 
            array (
                'id' => 135,
                'receita_id' => 25,
                'ingrediente_id' => 384,
                'unidade_id' => NULL,
                'quantidade' => 0,
            ),
            135 => 
            array (
                'id' => 136,
                'receita_id' => 26,
                'ingrediente_id' => 384,
                'unidade_id' => 2,
                'quantidade' => 1,
            ),
            136 => 
            array (
                'id' => 137,
                'receita_id' => 26,
                'ingrediente_id' => 42,
                'unidade_id' => 1,
                'quantidade' => 1,
            ),
            137 => 
            array (
                'id' => 138,
                'receita_id' => 26,
                'ingrediente_id' => 416,
                'unidade_id' => 4,
                'quantidade' => 2,
            ),
            138 => 
            array (
                'id' => 139,
                'receita_id' => 26,
                'ingrediente_id' => 389,
                'unidade_id' => 4,
                'quantidade' => 1,
            ),
            139 => 
            array (
                'id' => 140,
                'receita_id' => 26,
                'ingrediente_id' => 474,
                'unidade_id' => 16,
                'quantidade' => 300,
            ),
            140 => 
            array (
                'id' => 141,
                'receita_id' => 26,
                'ingrediente_id' => 195,
                'unidade_id' => 4,
                'quantidade' => 1,
            ),
            141 => 
            array (
                'id' => 142,
                'receita_id' => 26,
                'ingrediente_id' => 468,
                'unidade_id' => 4,
                'quantidade' => 2,
            ),
            142 => 
            array (
                'id' => 143,
                'receita_id' => 26,
                'ingrediente_id' => 461,
                'unidade_id' => 7,
                'quantidade' => 1,
            ),
            143 => 
            array (
                'id' => 144,
                'receita_id' => 26,
                'ingrediente_id' => 394,
                'unidade_id' => 14,
                'quantidade' => NULL,
            ),
            144 => 
            array (
                'id' => 145,
                'receita_id' => 26,
                'ingrediente_id' => 413,
                'unidade_id' => 14,
                'quantidade' => NULL,
            ),
            145 => 
            array (
                'id' => 146,
                'receita_id' => 26,
                'ingrediente_id' => 259,
                'unidade_id' => 23,
                'quantidade' => NULL,
            ),
            146 => 
            array (
                'id' => 147,
                'receita_id' => 27,
                'ingrediente_id' => 195,
                'unidade_id' => 13,
                'quantidade' => 1,
            ),
            147 => 
            array (
                'id' => 148,
                'receita_id' => 27,
                'ingrediente_id' => 390,
                'unidade_id' => 4,
                'quantidade' => 3,
            ),
            148 => 
            array (
                'id' => 149,
                'receita_id' => 27,
                'ingrediente_id' => 477,
                'unidade_id' => 11,
                'quantidade' => 750,
            ),
            149 => 
            array (
                'id' => 150,
                'receita_id' => 27,
                'ingrediente_id' => 392,
                'unidade_id' => 3,
                'quantidade' => 3,
            ),
            150 => 
            array (
                'id' => 151,
                'receita_id' => 27,
                'ingrediente_id' => 479,
                'unidade_id' => 17,
                'quantidade' => 2,
            ),
            151 => 
            array (
                'id' => 152,
                'receita_id' => 28,
                'ingrediente_id' => 1,
                'unidade_id' => NULL,
                'quantidade' => 0,
            ),
            152 => 
            array (
                'id' => 153,
                'receita_id' => 29,
                'ingrediente_id' => 480,
                'unidade_id' => 13,
                'quantidade' => 1,
            ),
            153 => 
            array (
                'id' => 154,
                'receita_id' => 29,
                'ingrediente_id' => 481,
                'unidade_id' => 16,
                'quantidade' => 500,
            ),
            154 => 
            array (
                'id' => 155,
                'receita_id' => 29,
                'ingrediente_id' => 482,
                'unidade_id' => 12,
                'quantidade' => 1,
            ),
            155 => 
            array (
                'id' => 156,
                'receita_id' => 29,
                'ingrediente_id' => 394,
                'unidade_id' => 16,
                'quantidade' => 30,
            ),
            156 => 
            array (
                'id' => 157,
                'receita_id' => 29,
                'ingrediente_id' => 392,
                'unidade_id' => 16,
                'quantidade' => 60,
            ),
            157 => 
            array (
                'id' => 158,
                'receita_id' => 29,
                'ingrediente_id' => 483,
                'unidade_id' => 11,
                'quantidade' => 20,
            ),
            158 => 
            array (
                'id' => 159,
                'receita_id' => 29,
                'ingrediente_id' => 484,
                'unidade_id' => 16,
                'quantidade' => 5,
            ),
            159 => 
            array (
                'id' => 160,
                'receita_id' => 30,
                'ingrediente_id' => 301,
                'unidade_id' => 13,
                'quantidade' => 2,
            ),
            160 => 
            array (
                'id' => 161,
                'receita_id' => 30,
                'ingrediente_id' => 394,
                'unidade_id' => 16,
                'quantidade' => 5,
            ),
            161 => 
            array (
                'id' => 162,
                'receita_id' => 30,
                'ingrediente_id' => 392,
                'unidade_id' => 16,
                'quantidade' => 10,
            ),
            162 => 
            array (
                'id' => 163,
                'receita_id' => 31,
                'ingrediente_id' => 390,
                'unidade_id' => 4,
                'quantidade' => 1,
            ),
            163 => 
            array (
                'id' => 164,
                'receita_id' => 31,
                'ingrediente_id' => 383,
                'unidade_id' => 2,
                'quantidade' => 1,
            ),
            164 => 
            array (
                'id' => 165,
                'receita_id' => 31,
                'ingrediente_id' => 42,
                'unidade_id' => 1,
                'quantidade' => 1,
            ),
            165 => 
            array (
                'id' => 166,
                'receita_id' => 31,
                'ingrediente_id' => 301,
                'unidade_id' => 16,
                'quantidade' => 400,
            ),
            166 => 
            array (
                'id' => 167,
                'receita_id' => 31,
                'ingrediente_id' => 486,
                'unidade_id' => 4,
                'quantidade' => 1,
            ),
            167 => 
            array (
                'id' => 168,
                'receita_id' => 31,
                'ingrediente_id' => 259,
                'unidade_id' => 3,
                'quantidade' => 1,
            ),
            168 => 
            array (
                'id' => 169,
                'receita_id' => 31,
                'ingrediente_id' => 141,
                'unidade_id' => 3,
                'quantidade' => 1,
            ),
            169 => 
            array (
                'id' => 170,
                'receita_id' => 31,
                'ingrediente_id' => 14,
                'unidade_id' => 3,
                'quantidade' => 1,
            ),
            170 => 
            array (
                'id' => 171,
                'receita_id' => 31,
                'ingrediente_id' => 263,
                'unidade_id' => 3,
                'quantidade' => 1,
            ),
            171 => 
            array (
                'id' => 172,
                'receita_id' => 31,
                'ingrediente_id' => 392,
                'unidade_id' => 15,
                'quantidade' => 1,
            ),
            172 => 
            array (
                'id' => 173,
                'receita_id' => 31,
                'ingrediente_id' => 394,
                'unidade_id' => 14,
                'quantidade' => NULL,
            ),
            173 => 
            array (
                'id' => 174,
                'receita_id' => 31,
                'ingrediente_id' => 414,
                'unidade_id' => 14,
                'quantidade' => NULL,
            ),
            174 => 
            array (
                'id' => 175,
                'receita_id' => 32,
                'ingrediente_id' => 195,
                'unidade_id' => 7,
                'quantidade' => 2,
            ),
            175 => 
            array (
                'id' => 176,
                'receita_id' => 32,
                'ingrediente_id' => 303,
                'unidade_id' => 7,
                'quantidade' => 1,
            ),
            176 => 
            array (
                'id' => 177,
                'receita_id' => 32,
                'ingrediente_id' => 392,
                'unidade_id' => 25,
                'quantidade' => 1,
            ),
            177 => 
            array (
                'id' => 178,
                'receita_id' => NULL,
                'ingrediente_id' => 392,
                'unidade_id' => NULL,
                'quantidade' => NULL,
            ),
            178 => 
            array (
                'id' => 179,
                'receita_id' => 33,
                'ingrediente_id' => 184,
                'unidade_id' => NULL,
                'quantidade' => 0,
            ),
            179 => 
            array (
                'id' => 180,
                'receita_id' => NULL,
                'ingrediente_id' => 1,
                'unidade_id' => NULL,
                'quantidade' => NULL,
            ),
            180 => 
            array (
                'id' => 181,
                'receita_id' => 33,
                'ingrediente_id' => 394,
                'unidade_id' => NULL,
                'quantidade' => NULL,
            ),
        ));
        
        
    }
}