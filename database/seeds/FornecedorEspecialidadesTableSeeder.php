<?php

use Illuminate\Database\Seeder;

class FornecedorEspecialidadesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('fornecedor_especialidades')->delete();
        
        \DB::table('fornecedor_especialidades')->insert(array (
            0 => 
            array (
                'id' => 10,
                'fornecedor_id' => 1,
                'especialidade_id' => 6,
            ),
            1 => 
            array (
                'id' => 11,
                'fornecedor_id' => 1,
                'especialidade_id' => 7,
            ),
            2 => 
            array (
                'id' => 12,
                'fornecedor_id' => 1,
                'especialidade_id' => 9,
            ),
            3 => 
            array (
                'id' => 13,
                'fornecedor_id' => 1,
                'especialidade_id' => 22,
            ),
            4 => 
            array (
                'id' => 14,
                'fornecedor_id' => 1,
                'especialidade_id' => 28,
            ),
            5 => 
            array (
                'id' => 15,
                'fornecedor_id' => 1,
                'especialidade_id' => 33,
            ),
            6 => 
            array (
                'id' => 16,
                'fornecedor_id' => 1,
                'especialidade_id' => 34,
            ),
            7 => 
            array (
                'id' => 17,
                'fornecedor_id' => 1,
                'especialidade_id' => 35,
            ),
            8 => 
            array (
                'id' => 18,
                'fornecedor_id' => 1,
                'especialidade_id' => 39,
            ),
            9 => 
            array (
                'id' => 19,
                'fornecedor_id' => 1,
                'especialidade_id' => 41,
            ),
            10 => 
            array (
                'id' => 20,
                'fornecedor_id' => 1,
                'especialidade_id' => 45,
            ),
            11 => 
            array (
                'id' => 21,
                'fornecedor_id' => 1,
                'especialidade_id' => 3,
            ),
            12 => 
            array (
                'id' => 22,
                'fornecedor_id' => 1,
                'especialidade_id' => 48,
            ),
            13 => 
            array (
                'id' => 23,
                'fornecedor_id' => 1,
                'especialidade_id' => 67,
            ),
            14 => 
            array (
                'id' => 24,
                'fornecedor_id' => 1,
                'especialidade_id' => 69,
            ),
            15 => 
            array (
                'id' => 25,
                'fornecedor_id' => 2,
                'especialidade_id' => 6,
            ),
            16 => 
            array (
                'id' => 26,
                'fornecedor_id' => 2,
                'especialidade_id' => 9,
            ),
            17 => 
            array (
                'id' => 27,
                'fornecedor_id' => 2,
                'especialidade_id' => 13,
            ),
            18 => 
            array (
                'id' => 28,
                'fornecedor_id' => 2,
                'especialidade_id' => 14,
            ),
            19 => 
            array (
                'id' => 29,
                'fornecedor_id' => 2,
                'especialidade_id' => 20,
            ),
            20 => 
            array (
                'id' => 30,
                'fornecedor_id' => 2,
                'especialidade_id' => 22,
            ),
            21 => 
            array (
                'id' => 31,
                'fornecedor_id' => 2,
                'especialidade_id' => 24,
            ),
            22 => 
            array (
                'id' => 32,
                'fornecedor_id' => 2,
                'especialidade_id' => 27,
            ),
            23 => 
            array (
                'id' => 33,
                'fornecedor_id' => 2,
                'especialidade_id' => 28,
            ),
            24 => 
            array (
                'id' => 34,
                'fornecedor_id' => 2,
                'especialidade_id' => 33,
            ),
            25 => 
            array (
                'id' => 35,
                'fornecedor_id' => 2,
                'especialidade_id' => 34,
            ),
            26 => 
            array (
                'id' => 36,
                'fornecedor_id' => 2,
                'especialidade_id' => 35,
            ),
            27 => 
            array (
                'id' => 37,
                'fornecedor_id' => 2,
                'especialidade_id' => 39,
            ),
            28 => 
            array (
                'id' => 38,
                'fornecedor_id' => 2,
                'especialidade_id' => 42,
            ),
            29 => 
            array (
                'id' => 39,
                'fornecedor_id' => 2,
                'especialidade_id' => 48,
            ),
            30 => 
            array (
                'id' => 40,
                'fornecedor_id' => 2,
                'especialidade_id' => 67,
            ),
            31 => 
            array (
                'id' => 41,
                'fornecedor_id' => 2,
                'especialidade_id' => 69,
            ),
            32 => 
            array (
                'id' => 42,
                'fornecedor_id' => 2,
                'especialidade_id' => 74,
            ),
            33 => 
            array (
                'id' => 43,
                'fornecedor_id' => 2,
                'especialidade_id' => 78,
            ),
            34 => 
            array (
                'id' => 44,
                'fornecedor_id' => 2,
                'especialidade_id' => 79,
            ),
            35 => 
            array (
                'id' => 45,
                'fornecedor_id' => 2,
                'especialidade_id' => 88,
            ),
            36 => 
            array (
                'id' => 46,
                'fornecedor_id' => 2,
                'especialidade_id' => 92,
            ),
            37 => 
            array (
                'id' => 47,
                'fornecedor_id' => 2,
                'especialidade_id' => 97,
            ),
            38 => 
            array (
                'id' => 48,
                'fornecedor_id' => 2,
                'especialidade_id' => 96,
            ),
            39 => 
            array (
                'id' => 49,
                'fornecedor_id' => 2,
                'especialidade_id' => 94,
            ),
            40 => 
            array (
                'id' => 50,
                'fornecedor_id' => 1,
                'especialidade_id' => 97,
            ),
            41 => 
            array (
                'id' => 51,
                'fornecedor_id' => 1,
                'especialidade_id' => 96,
            ),
            42 => 
            array (
                'id' => 52,
                'fornecedor_id' => 1,
                'especialidade_id' => 94,
            ),
            43 => 
            array (
                'id' => 53,
                'fornecedor_id' => 1,
                'especialidade_id' => 92,
            ),
            44 => 
            array (
                'id' => 54,
                'fornecedor_id' => 1,
                'especialidade_id' => 88,
            ),
            45 => 
            array (
                'id' => 55,
                'fornecedor_id' => 1,
                'especialidade_id' => 89,
            ),
            46 => 
            array (
                'id' => 56,
                'fornecedor_id' => 1,
                'especialidade_id' => 79,
            ),
            47 => 
            array (
                'id' => 57,
                'fornecedor_id' => 1,
                'especialidade_id' => 78,
            ),
            48 => 
            array (
                'id' => 58,
                'fornecedor_id' => 1,
                'especialidade_id' => 74,
            ),
            49 => 
            array (
                'id' => 59,
                'fornecedor_id' => 1,
                'especialidade_id' => 56,
            ),
            50 => 
            array (
                'id' => 60,
                'fornecedor_id' => 1,
                'especialidade_id' => 64,
            ),
            51 => 
            array (
                'id' => 61,
                'fornecedor_id' => 2,
                'especialidade_id' => 7,
            ),
            52 => 
            array (
                'id' => 62,
                'fornecedor_id' => 3,
                'especialidade_id' => 6,
            ),
            53 => 
            array (
                'id' => 63,
                'fornecedor_id' => 3,
                'especialidade_id' => 7,
            ),
            54 => 
            array (
                'id' => 64,
                'fornecedor_id' => 3,
                'especialidade_id' => 8,
            ),
            55 => 
            array (
                'id' => 65,
                'fornecedor_id' => 3,
                'especialidade_id' => 13,
            ),
            56 => 
            array (
                'id' => 66,
                'fornecedor_id' => 3,
                'especialidade_id' => 16,
            ),
            57 => 
            array (
                'id' => 67,
                'fornecedor_id' => 3,
                'especialidade_id' => 20,
            ),
            58 => 
            array (
                'id' => 68,
                'fornecedor_id' => 3,
                'especialidade_id' => 22,
            ),
            59 => 
            array (
                'id' => 69,
                'fornecedor_id' => 3,
                'especialidade_id' => 24,
            ),
            60 => 
            array (
                'id' => 70,
                'fornecedor_id' => 3,
                'especialidade_id' => 28,
            ),
            61 => 
            array (
                'id' => 71,
                'fornecedor_id' => 1,
                'especialidade_id' => 24,
            ),
            62 => 
            array (
                'id' => 72,
                'fornecedor_id' => 3,
                'especialidade_id' => 33,
            ),
            63 => 
            array (
                'id' => 73,
                'fornecedor_id' => 3,
                'especialidade_id' => 34,
            ),
            64 => 
            array (
                'id' => 74,
                'fornecedor_id' => 3,
                'especialidade_id' => 35,
            ),
            65 => 
            array (
                'id' => 75,
                'fornecedor_id' => 3,
                'especialidade_id' => 39,
            ),
            66 => 
            array (
                'id' => 76,
                'fornecedor_id' => 3,
                'especialidade_id' => 41,
            ),
            67 => 
            array (
                'id' => 77,
                'fornecedor_id' => 2,
                'especialidade_id' => 41,
            ),
            68 => 
            array (
                'id' => 78,
                'fornecedor_id' => 2,
                'especialidade_id' => 43,
            ),
            69 => 
            array (
                'id' => 79,
                'fornecedor_id' => 3,
                'especialidade_id' => 48,
            ),
            70 => 
            array (
                'id' => 80,
                'fornecedor_id' => 3,
                'especialidade_id' => 67,
            ),
            71 => 
            array (
                'id' => 81,
                'fornecedor_id' => 3,
                'especialidade_id' => 69,
            ),
            72 => 
            array (
                'id' => 82,
                'fornecedor_id' => 3,
                'especialidade_id' => 78,
            ),
            73 => 
            array (
                'id' => 83,
                'fornecedor_id' => 3,
                'especialidade_id' => 79,
            ),
            74 => 
            array (
                'id' => 84,
                'fornecedor_id' => 3,
                'especialidade_id' => 88,
            ),
            75 => 
            array (
                'id' => 85,
                'fornecedor_id' => 3,
                'especialidade_id' => 94,
            ),
            76 => 
            array (
                'id' => 86,
                'fornecedor_id' => 3,
                'especialidade_id' => 96,
            ),
            77 => 
            array (
                'id' => 87,
                'fornecedor_id' => 3,
                'especialidade_id' => 97,
            ),
            78 => 
            array (
                'id' => 88,
                'fornecedor_id' => 4,
                'especialidade_id' => 6,
            ),
            79 => 
            array (
                'id' => 89,
                'fornecedor_id' => 4,
                'especialidade_id' => 151,
            ),
            80 => 
            array (
                'id' => 90,
                'fornecedor_id' => 4,
                'especialidade_id' => 152,
            ),
            81 => 
            array (
                'id' => 91,
                'fornecedor_id' => 5,
                'especialidade_id' => 22,
            ),
            82 => 
            array (
                'id' => 92,
                'fornecedor_id' => 6,
                'especialidade_id' => 19,
            ),
            83 => 
            array (
                'id' => 93,
                'fornecedor_id' => 6,
                'especialidade_id' => 20,
            ),
            84 => 
            array (
                'id' => 94,
                'fornecedor_id' => 7,
                'especialidade_id' => 6,
            ),
            85 => 
            array (
                'id' => 95,
                'fornecedor_id' => 7,
                'especialidade_id' => 152,
            ),
            86 => 
            array (
                'id' => 96,
                'fornecedor_id' => 7,
                'especialidade_id' => 151,
            ),
            87 => 
            array (
                'id' => 97,
                'fornecedor_id' => 8,
                'especialidade_id' => 6,
            ),
            88 => 
            array (
                'id' => 98,
                'fornecedor_id' => 8,
                'especialidade_id' => 152,
            ),
            89 => 
            array (
                'id' => 99,
                'fornecedor_id' => 9,
                'especialidade_id' => 7,
            ),
            90 => 
            array (
                'id' => 100,
                'fornecedor_id' => 9,
                'especialidade_id' => 6,
            ),
            91 => 
            array (
                'id' => 101,
                'fornecedor_id' => 9,
                'especialidade_id' => 13,
            ),
            92 => 
            array (
                'id' => 102,
                'fornecedor_id' => 9,
                'especialidade_id' => 16,
            ),
            93 => 
            array (
                'id' => 103,
                'fornecedor_id' => 9,
                'especialidade_id' => 20,
            ),
            94 => 
            array (
                'id' => 104,
                'fornecedor_id' => 9,
                'especialidade_id' => 22,
            ),
            95 => 
            array (
                'id' => 105,
                'fornecedor_id' => 9,
                'especialidade_id' => 24,
            ),
            96 => 
            array (
                'id' => 106,
                'fornecedor_id' => 9,
                'especialidade_id' => 25,
            ),
            97 => 
            array (
                'id' => 107,
                'fornecedor_id' => 9,
                'especialidade_id' => 28,
            ),
            98 => 
            array (
                'id' => 108,
                'fornecedor_id' => 9,
                'especialidade_id' => 32,
            ),
            99 => 
            array (
                'id' => 109,
                'fornecedor_id' => 9,
                'especialidade_id' => 33,
            ),
            100 => 
            array (
                'id' => 110,
                'fornecedor_id' => 9,
                'especialidade_id' => 34,
            ),
            101 => 
            array (
                'id' => 111,
                'fornecedor_id' => 9,
                'especialidade_id' => 39,
            ),
            102 => 
            array (
                'id' => 112,
                'fornecedor_id' => 9,
                'especialidade_id' => 41,
            ),
            103 => 
            array (
                'id' => 113,
                'fornecedor_id' => 9,
                'especialidade_id' => 42,
            ),
            104 => 
            array (
                'id' => 114,
                'fornecedor_id' => 9,
                'especialidade_id' => 50,
            ),
            105 => 
            array (
                'id' => 115,
                'fornecedor_id' => 9,
                'especialidade_id' => 67,
            ),
            106 => 
            array (
                'id' => 116,
                'fornecedor_id' => 9,
                'especialidade_id' => 69,
            ),
            107 => 
            array (
                'id' => 117,
                'fornecedor_id' => 9,
                'especialidade_id' => 78,
            ),
            108 => 
            array (
                'id' => 118,
                'fornecedor_id' => 9,
                'especialidade_id' => 79,
            ),
            109 => 
            array (
                'id' => 119,
                'fornecedor_id' => 9,
                'especialidade_id' => 88,
            ),
            110 => 
            array (
                'id' => 120,
                'fornecedor_id' => 9,
                'especialidade_id' => 89,
            ),
            111 => 
            array (
                'id' => 121,
                'fornecedor_id' => 9,
                'especialidade_id' => 92,
            ),
            112 => 
            array (
                'id' => 122,
                'fornecedor_id' => 9,
                'especialidade_id' => 94,
            ),
            113 => 
            array (
                'id' => 123,
                'fornecedor_id' => 9,
                'especialidade_id' => 95,
            ),
            114 => 
            array (
                'id' => 124,
                'fornecedor_id' => 9,
                'especialidade_id' => 96,
            ),
            115 => 
            array (
                'id' => 125,
                'fornecedor_id' => 9,
                'especialidade_id' => 151,
            ),
            116 => 
            array (
                'id' => 126,
                'fornecedor_id' => 9,
                'especialidade_id' => 152,
            ),
            117 => 
            array (
                'id' => 127,
                'fornecedor_id' => 1,
                'especialidade_id' => 32,
            ),
            118 => 
            array (
                'id' => 128,
                'fornecedor_id' => 1,
                'especialidade_id' => 25,
            ),
            119 => 
            array (
                'id' => 129,
                'fornecedor_id' => 2,
                'especialidade_id' => 25,
            ),
            120 => 
            array (
                'id' => 130,
                'fornecedor_id' => 2,
                'especialidade_id' => 32,
            ),
            121 => 
            array (
                'id' => 131,
                'fornecedor_id' => 10,
                'especialidade_id' => 9,
            ),
            122 => 
            array (
                'id' => 132,
                'fornecedor_id' => 10,
                'especialidade_id' => 33,
            ),
            123 => 
            array (
                'id' => 133,
                'fornecedor_id' => 10,
                'especialidade_id' => 50,
            ),
            124 => 
            array (
                'id' => 134,
                'fornecedor_id' => 10,
                'especialidade_id' => 82,
            ),
            125 => 
            array (
                'id' => 135,
                'fornecedor_id' => 10,
                'especialidade_id' => 94,
            ),
            126 => 
            array (
                'id' => 136,
                'fornecedor_id' => 10,
                'especialidade_id' => 88,
            ),
            127 => 
            array (
                'id' => 137,
                'fornecedor_id' => 10,
                'especialidade_id' => 78,
            ),
            128 => 
            array (
                'id' => 138,
                'fornecedor_id' => 11,
                'especialidade_id' => 9,
            ),
            129 => 
            array (
                'id' => 139,
                'fornecedor_id' => 11,
                'especialidade_id' => 154,
            ),
            130 => 
            array (
                'id' => 140,
                'fornecedor_id' => 11,
                'especialidade_id' => 88,
            ),
            131 => 
            array (
                'id' => 141,
                'fornecedor_id' => 11,
                'especialidade_id' => 153,
            ),
            132 => 
            array (
                'id' => 142,
                'fornecedor_id' => 1,
                'especialidade_id' => 154,
            ),
            133 => 
            array (
                'id' => 143,
                'fornecedor_id' => 1,
                'especialidade_id' => 153,
            ),
            134 => 
            array (
                'id' => 144,
                'fornecedor_id' => 2,
                'especialidade_id' => 153,
            ),
            135 => 
            array (
                'id' => 145,
                'fornecedor_id' => 2,
                'especialidade_id' => 154,
            ),
            136 => 
            array (
                'id' => 146,
                'fornecedor_id' => 3,
                'especialidade_id' => 154,
            ),
            137 => 
            array (
                'id' => 147,
                'fornecedor_id' => 11,
                'especialidade_id' => 78,
            ),
            138 => 
            array (
                'id' => 148,
                'fornecedor_id' => 12,
                'especialidade_id' => 66,
            ),
            139 => 
            array (
                'id' => 149,
                'fornecedor_id' => 12,
                'especialidade_id' => 10,
            ),
            140 => 
            array (
                'id' => 150,
                'fornecedor_id' => 12,
                'especialidade_id' => 155,
            ),
            141 => 
            array (
                'id' => 151,
                'fornecedor_id' => 12,
                'especialidade_id' => 156,
            ),
            142 => 
            array (
                'id' => 152,
                'fornecedor_id' => 12,
                'especialidade_id' => 157,
            ),
            143 => 
            array (
                'id' => 153,
                'fornecedor_id' => 13,
                'especialidade_id' => 64,
            ),
            144 => 
            array (
                'id' => 154,
                'fornecedor_id' => 13,
                'especialidade_id' => 11,
            ),
            145 => 
            array (
                'id' => 155,
                'fornecedor_id' => 13,
                'especialidade_id' => 12,
            ),
            146 => 
            array (
                'id' => 156,
                'fornecedor_id' => 13,
                'especialidade_id' => 13,
            ),
            147 => 
            array (
                'id' => 157,
                'fornecedor_id' => 13,
                'especialidade_id' => 14,
            ),
            148 => 
            array (
                'id' => 158,
                'fornecedor_id' => 13,
                'especialidade_id' => 16,
            ),
            149 => 
            array (
                'id' => 159,
                'fornecedor_id' => 13,
                'especialidade_id' => 17,
            ),
            150 => 
            array (
                'id' => 160,
                'fornecedor_id' => 13,
                'especialidade_id' => 29,
            ),
            151 => 
            array (
                'id' => 161,
                'fornecedor_id' => 13,
                'especialidade_id' => 89,
            ),
            152 => 
            array (
                'id' => 162,
                'fornecedor_id' => 13,
                'especialidade_id' => 88,
            ),
            153 => 
            array (
                'id' => 163,
                'fornecedor_id' => 13,
                'especialidade_id' => 154,
            ),
            154 => 
            array (
                'id' => 164,
                'fornecedor_id' => 13,
                'especialidade_id' => 78,
            ),
            155 => 
            array (
                'id' => 165,
                'fornecedor_id' => 13,
                'especialidade_id' => 79,
            ),
            156 => 
            array (
                'id' => 166,
                'fornecedor_id' => 13,
                'especialidade_id' => 94,
            ),
            157 => 
            array (
                'id' => 167,
                'fornecedor_id' => 13,
                'especialidade_id' => 74,
            ),
            158 => 
            array (
                'id' => 168,
                'fornecedor_id' => 14,
                'especialidade_id' => 24,
            ),
            159 => 
            array (
                'id' => 169,
                'fornecedor_id' => 14,
                'especialidade_id' => 74,
            ),
            160 => 
            array (
                'id' => 170,
                'fornecedor_id' => 14,
                'especialidade_id' => 6,
            ),
            161 => 
            array (
                'id' => 171,
                'fornecedor_id' => 15,
                'especialidade_id' => 158,
            ),
            162 => 
            array (
                'id' => 172,
                'fornecedor_id' => 15,
                'especialidade_id' => 74,
            ),
            163 => 
            array (
                'id' => 173,
                'fornecedor_id' => 52,
                'especialidade_id' => 74,
            ),
            164 => 
            array (
                'id' => 174,
                'fornecedor_id' => 52,
                'especialidade_id' => 158,
            ),
            165 => 
            array (
                'id' => 175,
                'fornecedor_id' => 16,
                'especialidade_id' => 48,
            ),
            166 => 
            array (
                'id' => 176,
                'fornecedor_id' => 16,
                'especialidade_id' => 159,
            ),
            167 => 
            array (
                'id' => 177,
                'fornecedor_id' => 17,
                'especialidade_id' => 67,
            ),
            168 => 
            array (
                'id' => 178,
                'fornecedor_id' => 17,
                'especialidade_id' => 68,
            ),
            169 => 
            array (
                'id' => 179,
                'fornecedor_id' => 17,
                'especialidade_id' => 70,
            ),
            170 => 
            array (
                'id' => 180,
                'fornecedor_id' => 17,
                'especialidade_id' => 160,
            ),
            171 => 
            array (
                'id' => 181,
                'fornecedor_id' => 17,
                'especialidade_id' => 161,
            ),
            172 => 
            array (
                'id' => 182,
                'fornecedor_id' => 18,
                'especialidade_id' => 48,
            ),
            173 => 
            array (
                'id' => 183,
                'fornecedor_id' => 18,
                'especialidade_id' => 39,
            ),
            174 => 
            array (
                'id' => 184,
                'fornecedor_id' => 18,
                'especialidade_id' => 40,
            ),
            175 => 
            array (
                'id' => 185,
                'fornecedor_id' => 18,
                'especialidade_id' => 50,
            ),
            176 => 
            array (
                'id' => 186,
                'fornecedor_id' => 19,
                'especialidade_id' => 33,
            ),
            177 => 
            array (
                'id' => 187,
                'fornecedor_id' => 19,
                'especialidade_id' => 154,
            ),
            178 => 
            array (
                'id' => 188,
                'fornecedor_id' => 20,
                'especialidade_id' => 33,
            ),
            179 => 
            array (
                'id' => 189,
                'fornecedor_id' => 20,
                'especialidade_id' => 154,
            ),
            180 => 
            array (
                'id' => 190,
                'fornecedor_id' => 20,
                'especialidade_id' => 9,
            ),
            181 => 
            array (
                'id' => 191,
                'fornecedor_id' => 20,
                'especialidade_id' => 24,
            ),
            182 => 
            array (
                'id' => 192,
                'fornecedor_id' => 20,
                'especialidade_id' => 74,
            ),
            183 => 
            array (
                'id' => 193,
                'fornecedor_id' => 20,
                'especialidade_id' => 78,
            ),
            184 => 
            array (
                'id' => 194,
                'fornecedor_id' => 20,
                'especialidade_id' => 79,
            ),
            185 => 
            array (
                'id' => 195,
                'fornecedor_id' => 20,
                'especialidade_id' => 64,
            ),
            186 => 
            array (
                'id' => 196,
                'fornecedor_id' => 20,
                'especialidade_id' => 13,
            ),
            187 => 
            array (
                'id' => 197,
                'fornecedor_id' => 20,
                'especialidade_id' => 14,
            ),
            188 => 
            array (
                'id' => 198,
                'fornecedor_id' => 20,
                'especialidade_id' => 88,
            ),
            189 => 
            array (
                'id' => 199,
                'fornecedor_id' => 20,
                'especialidade_id' => 94,
            ),
            190 => 
            array (
                'id' => 200,
                'fornecedor_id' => 21,
                'especialidade_id' => 74,
            ),
            191 => 
            array (
                'id' => 201,
                'fornecedor_id' => 22,
                'especialidade_id' => 82,
            ),
            192 => 
            array (
                'id' => 202,
                'fornecedor_id' => 22,
                'especialidade_id' => 78,
            ),
            193 => 
            array (
                'id' => 203,
                'fornecedor_id' => 22,
                'especialidade_id' => 94,
            ),
            194 => 
            array (
                'id' => 204,
                'fornecedor_id' => 22,
                'especialidade_id' => 74,
            ),
            195 => 
            array (
                'id' => 205,
                'fornecedor_id' => 22,
                'especialidade_id' => 97,
            ),
            196 => 
            array (
                'id' => 206,
                'fornecedor_id' => 22,
                'especialidade_id' => 12,
            ),
            197 => 
            array (
                'id' => 207,
                'fornecedor_id' => NULL,
                'especialidade_id' => 43,
            ),
            198 => 
            array (
                'id' => 208,
                'fornecedor_id' => 22,
                'especialidade_id' => 162,
            ),
            199 => 
            array (
                'id' => 209,
                'fornecedor_id' => 22,
                'especialidade_id' => 57,
            ),
            200 => 
            array (
                'id' => 210,
                'fornecedor_id' => 22,
                'especialidade_id' => 163,
            ),
            201 => 
            array (
                'id' => 211,
                'fornecedor_id' => 22,
                'especialidade_id' => 154,
            ),
            202 => 
            array (
                'id' => 212,
                'fornecedor_id' => 23,
                'especialidade_id' => 53,
            ),
            203 => 
            array (
                'id' => 213,
                'fornecedor_id' => 23,
                'especialidade_id' => 54,
            ),
            204 => 
            array (
                'id' => 214,
                'fornecedor_id' => 24,
                'especialidade_id' => 55,
            ),
            205 => 
            array (
                'id' => 215,
                'fornecedor_id' => 25,
                'especialidade_id' => 12,
            ),
            206 => 
            array (
                'id' => 216,
                'fornecedor_id' => 25,
                'especialidade_id' => 32,
            ),
            207 => 
            array (
                'id' => 217,
                'fornecedor_id' => 25,
                'especialidade_id' => 78,
            ),
            208 => 
            array (
                'id' => 218,
                'fornecedor_id' => 25,
                'especialidade_id' => 97,
            ),
            209 => 
            array (
                'id' => 219,
                'fornecedor_id' => 26,
                'especialidade_id' => 53,
            ),
            210 => 
            array (
                'id' => 220,
                'fornecedor_id' => 27,
                'especialidade_id' => 78,
            ),
            211 => 
            array (
                'id' => 221,
                'fornecedor_id' => 27,
                'especialidade_id' => 74,
            ),
            212 => 
            array (
                'id' => 222,
                'fornecedor_id' => 27,
                'especialidade_id' => 32,
            ),
            213 => 
            array (
                'id' => 223,
                'fornecedor_id' => 27,
                'especialidade_id' => 12,
            ),
            214 => 
            array (
                'id' => 224,
                'fornecedor_id' => 27,
                'especialidade_id' => 97,
            ),
            215 => 
            array (
                'id' => 225,
                'fornecedor_id' => 27,
                'especialidade_id' => 79,
            ),
            216 => 
            array (
                'id' => 226,
                'fornecedor_id' => 27,
                'especialidade_id' => 29,
            ),
            217 => 
            array (
                'id' => 227,
                'fornecedor_id' => 27,
                'especialidade_id' => 164,
            ),
            218 => 
            array (
                'id' => 228,
                'fornecedor_id' => 27,
                'especialidade_id' => 55,
            ),
            219 => 
            array (
                'id' => 229,
                'fornecedor_id' => 27,
                'especialidade_id' => 59,
            ),
            220 => 
            array (
                'id' => 230,
                'fornecedor_id' => 28,
                'especialidade_id' => 78,
            ),
            221 => 
            array (
                'id' => 231,
                'fornecedor_id' => 28,
                'especialidade_id' => 74,
            ),
            222 => 
            array (
                'id' => 232,
                'fornecedor_id' => 28,
                'especialidade_id' => 17,
            ),
            223 => 
            array (
                'id' => 233,
                'fornecedor_id' => 28,
                'especialidade_id' => 164,
            ),
            224 => 
            array (
                'id' => 234,
                'fornecedor_id' => 28,
                'especialidade_id' => 79,
            ),
            225 => 
            array (
                'id' => 235,
                'fornecedor_id' => 28,
                'especialidade_id' => 14,
            ),
            226 => 
            array (
                'id' => 236,
                'fornecedor_id' => 28,
                'especialidade_id' => 29,
            ),
            227 => 
            array (
                'id' => 237,
                'fornecedor_id' => 28,
                'especialidade_id' => 32,
            ),
            228 => 
            array (
                'id' => 238,
                'fornecedor_id' => 28,
                'especialidade_id' => 89,
            ),
            229 => 
            array (
                'id' => 239,
                'fornecedor_id' => 28,
                'especialidade_id' => 12,
            ),
            230 => 
            array (
                'id' => 240,
                'fornecedor_id' => 28,
                'especialidade_id' => 53,
            ),
            231 => 
            array (
                'id' => 241,
                'fornecedor_id' => 29,
                'especialidade_id' => 39,
            ),
            232 => 
            array (
                'id' => 242,
                'fornecedor_id' => 30,
                'especialidade_id' => 39,
            ),
            233 => 
            array (
                'id' => 243,
                'fornecedor_id' => 30,
                'especialidade_id' => 48,
            ),
            234 => 
            array (
                'id' => 244,
                'fornecedor_id' => 31,
                'especialidade_id' => 39,
            ),
            235 => 
            array (
                'id' => 245,
                'fornecedor_id' => 31,
                'especialidade_id' => 48,
            ),
            236 => 
            array (
                'id' => 246,
                'fornecedor_id' => 31,
                'especialidade_id' => 47,
            ),
            237 => 
            array (
                'id' => 247,
                'fornecedor_id' => 31,
                'especialidade_id' => 43,
            ),
            238 => 
            array (
                'id' => 248,
                'fornecedor_id' => 31,
                'especialidade_id' => 45,
            ),
            239 => 
            array (
                'id' => 249,
                'fornecedor_id' => 31,
                'especialidade_id' => 67,
            ),
            240 => 
            array (
                'id' => 250,
                'fornecedor_id' => 31,
                'especialidade_id' => 41,
            ),
            241 => 
            array (
                'id' => 251,
                'fornecedor_id' => 32,
                'especialidade_id' => 39,
            ),
            242 => 
            array (
                'id' => 252,
                'fornecedor_id' => 32,
                'especialidade_id' => 48,
            ),
            243 => 
            array (
                'id' => 253,
                'fornecedor_id' => 32,
                'especialidade_id' => 50,
            ),
            244 => 
            array (
                'id' => 254,
                'fornecedor_id' => 33,
                'especialidade_id' => 48,
            ),
            245 => 
            array (
                'id' => 255,
                'fornecedor_id' => 33,
                'especialidade_id' => 71,
            ),
            246 => 
            array (
                'id' => 256,
                'fornecedor_id' => 33,
                'especialidade_id' => 97,
            ),
            247 => 
            array (
                'id' => 257,
                'fornecedor_id' => 33,
                'especialidade_id' => 41,
            ),
            248 => 
            array (
                'id' => 258,
                'fornecedor_id' => 33,
                'especialidade_id' => 14,
            ),
            249 => 
            array (
                'id' => 259,
                'fornecedor_id' => 33,
                'especialidade_id' => 12,
            ),
            250 => 
            array (
                'id' => 260,
                'fornecedor_id' => 34,
                'especialidade_id' => 6,
            ),
            251 => 
            array (
                'id' => 261,
                'fornecedor_id' => 34,
                'especialidade_id' => 21,
            ),
            252 => 
            array (
                'id' => 262,
                'fornecedor_id' => 34,
                'especialidade_id' => 152,
            ),
            253 => 
            array (
                'id' => 263,
                'fornecedor_id' => 34,
                'especialidade_id' => 33,
            ),
            254 => 
            array (
                'id' => 264,
                'fornecedor_id' => 34,
                'especialidade_id' => 88,
            ),
            255 => 
            array (
                'id' => 265,
                'fornecedor_id' => 34,
                'especialidade_id' => 89,
            ),
            256 => 
            array (
                'id' => 266,
                'fornecedor_id' => 34,
                'especialidade_id' => 74,
            ),
            257 => 
            array (
                'id' => 267,
                'fornecedor_id' => 34,
                'especialidade_id' => 32,
            ),
            258 => 
            array (
                'id' => 268,
                'fornecedor_id' => 35,
                'especialidade_id' => 98,
            ),
            259 => 
            array (
                'id' => 269,
                'fornecedor_id' => 36,
                'especialidade_id' => 98,
            ),
            260 => 
            array (
                'id' => 270,
                'fornecedor_id' => 37,
                'especialidade_id' => 61,
            ),
            261 => 
            array (
                'id' => 271,
                'fornecedor_id' => 37,
                'especialidade_id' => 60,
            ),
            262 => 
            array (
                'id' => 272,
                'fornecedor_id' => 37,
                'especialidade_id' => 23,
            ),
            263 => 
            array (
                'id' => 273,
                'fornecedor_id' => 37,
                'especialidade_id' => 27,
            ),
            264 => 
            array (
                'id' => 274,
                'fornecedor_id' => 38,
                'especialidade_id' => 60,
            ),
            265 => 
            array (
                'id' => 275,
                'fornecedor_id' => 38,
                'especialidade_id' => 32,
            ),
            266 => 
            array (
                'id' => 276,
                'fornecedor_id' => 38,
                'especialidade_id' => 89,
            ),
            267 => 
            array (
                'id' => 277,
                'fornecedor_id' => 38,
                'especialidade_id' => 12,
            ),
            268 => 
            array (
                'id' => 278,
                'fornecedor_id' => 38,
                'especialidade_id' => 88,
            ),
            269 => 
            array (
                'id' => 279,
                'fornecedor_id' => 38,
                'especialidade_id' => 14,
            ),
            270 => 
            array (
                'id' => 280,
                'fornecedor_id' => 38,
                'especialidade_id' => 19,
            ),
            271 => 
            array (
                'id' => 281,
                'fornecedor_id' => 38,
                'especialidade_id' => 79,
            ),
            272 => 
            array (
                'id' => 282,
                'fornecedor_id' => 39,
                'especialidade_id' => 61,
            ),
            273 => 
            array (
                'id' => 283,
                'fornecedor_id' => 39,
                'especialidade_id' => 79,
            ),
            274 => 
            array (
                'id' => 284,
                'fornecedor_id' => 40,
                'especialidade_id' => 8,
            ),
            275 => 
            array (
                'id' => 285,
                'fornecedor_id' => 40,
                'especialidade_id' => 60,
            ),
            276 => 
            array (
                'id' => 286,
                'fornecedor_id' => 40,
                'especialidade_id' => 12,
            ),
            277 => 
            array (
                'id' => 287,
                'fornecedor_id' => 41,
                'especialidade_id' => 61,
            ),
            278 => 
            array (
                'id' => 288,
                'fornecedor_id' => 41,
                'especialidade_id' => 23,
            ),
            279 => 
            array (
                'id' => 289,
                'fornecedor_id' => 41,
                'especialidade_id' => 22,
            ),
            280 => 
            array (
                'id' => 290,
                'fornecedor_id' => 41,
                'especialidade_id' => 79,
            ),
            281 => 
            array (
                'id' => 291,
                'fornecedor_id' => 41,
                'especialidade_id' => 12,
            ),
            282 => 
            array (
                'id' => 292,
                'fornecedor_id' => 41,
                'especialidade_id' => 14,
            ),
            283 => 
            array (
                'id' => 293,
                'fornecedor_id' => 42,
                'especialidade_id' => 61,
            ),
            284 => 
            array (
                'id' => 294,
                'fornecedor_id' => 43,
                'especialidade_id' => 3,
            ),
            285 => 
            array (
                'id' => 295,
                'fornecedor_id' => 43,
                'especialidade_id' => 6,
            ),
            286 => 
            array (
                'id' => 296,
                'fornecedor_id' => 43,
                'especialidade_id' => 7,
            ),
            287 => 
            array (
                'id' => 297,
                'fornecedor_id' => 43,
                'especialidade_id' => 8,
            ),
            288 => 
            array (
                'id' => 298,
                'fornecedor_id' => 43,
                'especialidade_id' => 9,
            ),
            289 => 
            array (
                'id' => 299,
                'fornecedor_id' => 43,
                'especialidade_id' => 10,
            ),
            290 => 
            array (
                'id' => 300,
                'fornecedor_id' => 43,
                'especialidade_id' => 11,
            ),
            291 => 
            array (
                'id' => 301,
                'fornecedor_id' => 43,
                'especialidade_id' => 12,
            ),
            292 => 
            array (
                'id' => 302,
                'fornecedor_id' => 43,
                'especialidade_id' => 13,
            ),
            293 => 
            array (
                'id' => 303,
                'fornecedor_id' => 43,
                'especialidade_id' => 14,
            ),
            294 => 
            array (
                'id' => 304,
                'fornecedor_id' => 43,
                'especialidade_id' => 16,
            ),
            295 => 
            array (
                'id' => 305,
                'fornecedor_id' => 43,
                'especialidade_id' => 17,
            ),
            296 => 
            array (
                'id' => 306,
                'fornecedor_id' => 43,
                'especialidade_id' => 20,
            ),
            297 => 
            array (
                'id' => 307,
                'fornecedor_id' => 43,
                'especialidade_id' => 22,
            ),
            298 => 
            array (
                'id' => 308,
                'fornecedor_id' => 43,
                'especialidade_id' => 24,
            ),
            299 => 
            array (
                'id' => 309,
                'fornecedor_id' => 43,
                'especialidade_id' => 25,
            ),
            300 => 
            array (
                'id' => 310,
                'fornecedor_id' => 43,
                'especialidade_id' => 27,
            ),
            301 => 
            array (
                'id' => 311,
                'fornecedor_id' => 43,
                'especialidade_id' => 28,
            ),
            302 => 
            array (
                'id' => 312,
                'fornecedor_id' => 43,
                'especialidade_id' => 29,
            ),
            303 => 
            array (
                'id' => 313,
                'fornecedor_id' => 43,
                'especialidade_id' => 32,
            ),
            304 => 
            array (
                'id' => 314,
                'fornecedor_id' => 43,
                'especialidade_id' => 33,
            ),
            305 => 
            array (
                'id' => 315,
                'fornecedor_id' => 43,
                'especialidade_id' => 154,
            ),
            306 => 
            array (
                'id' => 316,
                'fornecedor_id' => 43,
                'especialidade_id' => 34,
            ),
            307 => 
            array (
                'id' => 317,
                'fornecedor_id' => 43,
                'especialidade_id' => 35,
            ),
            308 => 
            array (
                'id' => 318,
                'fornecedor_id' => 43,
                'especialidade_id' => 39,
            ),
            309 => 
            array (
                'id' => 319,
                'fornecedor_id' => 43,
                'especialidade_id' => 41,
            ),
            310 => 
            array (
                'id' => 320,
                'fornecedor_id' => 43,
                'especialidade_id' => 42,
            ),
            311 => 
            array (
                'id' => 321,
                'fornecedor_id' => 43,
                'especialidade_id' => 43,
            ),
            312 => 
            array (
                'id' => 322,
                'fornecedor_id' => 43,
                'especialidade_id' => 48,
            ),
            313 => 
            array (
                'id' => 323,
                'fornecedor_id' => 43,
                'especialidade_id' => 50,
            ),
            314 => 
            array (
                'id' => 324,
                'fornecedor_id' => 43,
                'especialidade_id' => 66,
            ),
            315 => 
            array (
                'id' => 325,
                'fornecedor_id' => 43,
                'especialidade_id' => 67,
            ),
            316 => 
            array (
                'id' => 326,
                'fornecedor_id' => 43,
                'especialidade_id' => 69,
            ),
            317 => 
            array (
                'id' => 327,
                'fornecedor_id' => 43,
                'especialidade_id' => 71,
            ),
            318 => 
            array (
                'id' => 328,
                'fornecedor_id' => 43,
                'especialidade_id' => 73,
            ),
            319 => 
            array (
                'id' => 329,
                'fornecedor_id' => 43,
                'especialidade_id' => 74,
            ),
            320 => 
            array (
                'id' => 330,
                'fornecedor_id' => 43,
                'especialidade_id' => 78,
            ),
            321 => 
            array (
                'id' => 331,
                'fornecedor_id' => 43,
                'especialidade_id' => 79,
            ),
            322 => 
            array (
                'id' => 332,
                'fornecedor_id' => 43,
                'especialidade_id' => 88,
            ),
            323 => 
            array (
                'id' => 333,
                'fornecedor_id' => 43,
                'especialidade_id' => 89,
            ),
            324 => 
            array (
                'id' => 334,
                'fornecedor_id' => 43,
                'especialidade_id' => 92,
            ),
            325 => 
            array (
                'id' => 335,
                'fornecedor_id' => 43,
                'especialidade_id' => 94,
            ),
            326 => 
            array (
                'id' => 336,
                'fornecedor_id' => 43,
                'especialidade_id' => 95,
            ),
            327 => 
            array (
                'id' => 337,
                'fornecedor_id' => 43,
                'especialidade_id' => 96,
            ),
            328 => 
            array (
                'id' => 338,
                'fornecedor_id' => 43,
                'especialidade_id' => 97,
            ),
            329 => 
            array (
                'id' => 339,
                'fornecedor_id' => 43,
                'especialidade_id' => 151,
            ),
            330 => 
            array (
                'id' => 340,
                'fornecedor_id' => 43,
                'especialidade_id' => 152,
            ),
            331 => 
            array (
                'id' => 341,
                'fornecedor_id' => 43,
                'especialidade_id' => 153,
            ),
            332 => 
            array (
                'id' => 342,
                'fornecedor_id' => 43,
                'especialidade_id' => 155,
            ),
            333 => 
            array (
                'id' => 343,
                'fornecedor_id' => 43,
                'especialidade_id' => 163,
            ),
            334 => 
            array (
                'id' => 344,
                'fornecedor_id' => 43,
                'especialidade_id' => 164,
            ),
            335 => 
            array (
                'id' => 345,
                'fornecedor_id' => 37,
                'especialidade_id' => 96,
            ),
            336 => 
            array (
                'id' => 346,
                'fornecedor_id' => 38,
                'especialidade_id' => 96,
            ),
            337 => 
            array (
                'id' => 347,
                'fornecedor_id' => 39,
                'especialidade_id' => 96,
            ),
            338 => 
            array (
                'id' => 348,
                'fornecedor_id' => 40,
                'especialidade_id' => 96,
            ),
            339 => 
            array (
                'id' => 349,
                'fornecedor_id' => 41,
                'especialidade_id' => 96,
            ),
            340 => 
            array (
                'id' => 350,
                'fornecedor_id' => 42,
                'especialidade_id' => 96,
            ),
            341 => 
            array (
                'id' => 351,
                'fornecedor_id' => 44,
                'especialidade_id' => 30,
            ),
            342 => 
            array (
                'id' => 352,
                'fornecedor_id' => 44,
                'especialidade_id' => 31,
            ),
            343 => 
            array (
                'id' => 353,
                'fornecedor_id' => 143,
                'especialidade_id' => 98,
            ),
            344 => 
            array (
                'id' => 354,
                'fornecedor_id' => 45,
                'especialidade_id' => 64,
            ),
            345 => 
            array (
                'id' => 355,
                'fornecedor_id' => 46,
                'especialidade_id' => 82,
            ),
            346 => 
            array (
                'id' => 356,
                'fornecedor_id' => 46,
                'especialidade_id' => 43,
            ),
            347 => 
            array (
                'id' => 357,
                'fornecedor_id' => 46,
                'especialidade_id' => 163,
            ),
            348 => 
            array (
                'id' => 358,
                'fornecedor_id' => 47,
                'especialidade_id' => 165,
            ),
            349 => 
            array (
                'id' => 359,
                'fornecedor_id' => NULL,
                'especialidade_id' => 11,
            ),
            350 => 
            array (
                'id' => 360,
                'fornecedor_id' => NULL,
                'especialidade_id' => 19,
            ),
            351 => 
            array (
                'id' => 361,
                'fornecedor_id' => 48,
                'especialidade_id' => 166,
            ),
            352 => 
            array (
                'id' => 362,
                'fornecedor_id' => 49,
                'especialidade_id' => 154,
            ),
            353 => 
            array (
                'id' => 363,
                'fornecedor_id' => 50,
                'especialidade_id' => 9,
            ),
            354 => 
            array (
                'id' => 364,
                'fornecedor_id' => 50,
                'especialidade_id' => 29,
            ),
            355 => 
            array (
                'id' => 365,
                'fornecedor_id' => 50,
                'especialidade_id' => 79,
            ),
            356 => 
            array (
                'id' => 366,
                'fornecedor_id' => 50,
                'especialidade_id' => 14,
            ),
            357 => 
            array (
                'id' => 367,
                'fornecedor_id' => 50,
                'especialidade_id' => 94,
            ),
            358 => 
            array (
                'id' => 368,
                'fornecedor_id' => 50,
                'especialidade_id' => 74,
            ),
            359 => 
            array (
                'id' => 369,
                'fornecedor_id' => 50,
                'especialidade_id' => 58,
            ),
            360 => 
            array (
                'id' => 370,
                'fornecedor_id' => 50,
                'especialidade_id' => 88,
            ),
            361 => 
            array (
                'id' => 371,
                'fornecedor_id' => 50,
                'especialidade_id' => 89,
            ),
            362 => 
            array (
                'id' => 372,
                'fornecedor_id' => 50,
                'especialidade_id' => 78,
            ),
            363 => 
            array (
                'id' => 373,
                'fornecedor_id' => 51,
                'especialidade_id' => 36,
            ),
            364 => 
            array (
                'id' => 374,
                'fornecedor_id' => 53,
                'especialidade_id' => 3,
            ),
            365 => 
            array (
                'id' => 375,
                'fornecedor_id' => 53,
                'especialidade_id' => 85,
            ),
            366 => 
            array (
                'id' => 376,
                'fornecedor_id' => 53,
                'especialidade_id' => 77,
            ),
            367 => 
            array (
                'id' => 377,
                'fornecedor_id' => 53,
                'especialidade_id' => 81,
            ),
            368 => 
            array (
                'id' => 378,
                'fornecedor_id' => 54,
                'especialidade_id' => 81,
            ),
            369 => 
            array (
                'id' => 379,
                'fornecedor_id' => 56,
                'especialidade_id' => 43,
            ),
            370 => 
            array (
                'id' => 380,
                'fornecedor_id' => 56,
                'especialidade_id' => 46,
            ),
            371 => 
            array (
                'id' => 381,
                'fornecedor_id' => 56,
                'especialidade_id' => 47,
            ),
            372 => 
            array (
                'id' => 382,
                'fornecedor_id' => 56,
                'especialidade_id' => 159,
            ),
            373 => 
            array (
                'id' => 383,
                'fornecedor_id' => 16,
                'especialidade_id' => 46,
            ),
            374 => 
            array (
                'id' => 384,
                'fornecedor_id' => 16,
                'especialidade_id' => 165,
            ),
            375 => 
            array (
                'id' => 385,
                'fornecedor_id' => 57,
                'especialidade_id' => 24,
            ),
            376 => 
            array (
                'id' => 386,
                'fornecedor_id' => 57,
                'especialidade_id' => 3,
            ),
            377 => 
            array (
                'id' => 387,
                'fornecedor_id' => 55,
                'especialidade_id' => 43,
            ),
            378 => 
            array (
                'id' => 388,
                'fornecedor_id' => 55,
                'especialidade_id' => 44,
            ),
            379 => 
            array (
                'id' => 389,
                'fornecedor_id' => 58,
                'especialidade_id' => 22,
            ),
            380 => 
            array (
                'id' => 390,
                'fornecedor_id' => 58,
                'especialidade_id' => 28,
            ),
            381 => 
            array (
                'id' => 391,
                'fornecedor_id' => 58,
                'especialidade_id' => 39,
            ),
            382 => 
            array (
                'id' => 392,
                'fornecedor_id' => 58,
                'especialidade_id' => 41,
            ),
            383 => 
            array (
                'id' => 393,
                'fornecedor_id' => 58,
                'especialidade_id' => 43,
            ),
            384 => 
            array (
                'id' => 394,
                'fornecedor_id' => 58,
                'especialidade_id' => 159,
            ),
            385 => 
            array (
                'id' => 395,
                'fornecedor_id' => 58,
                'especialidade_id' => 67,
            ),
            386 => 
            array (
                'id' => 396,
                'fornecedor_id' => 58,
                'especialidade_id' => 68,
            ),
            387 => 
            array (
                'id' => 397,
                'fornecedor_id' => 58,
                'especialidade_id' => 69,
            ),
            388 => 
            array (
                'id' => 398,
                'fornecedor_id' => NULL,
                'especialidade_id' => 48,
            ),
            389 => 
            array (
                'id' => 399,
                'fornecedor_id' => NULL,
                'especialidade_id' => 39,
            ),
            390 => 
            array (
                'id' => 400,
                'fornecedor_id' => 59,
                'especialidade_id' => 24,
            ),
            391 => 
            array (
                'id' => 401,
                'fornecedor_id' => 60,
                'especialidade_id' => 80,
            ),
            392 => 
            array (
                'id' => 402,
                'fornecedor_id' => 60,
                'especialidade_id' => 57,
            ),
            393 => 
            array (
                'id' => 403,
                'fornecedor_id' => 60,
                'especialidade_id' => 58,
            ),
            394 => 
            array (
                'id' => 404,
                'fornecedor_id' => 61,
                'especialidade_id' => 167,
            ),
            395 => 
            array (
                'id' => 405,
                'fornecedor_id' => 61,
                'especialidade_id' => 165,
            ),
            396 => 
            array (
                'id' => 406,
                'fornecedor_id' => 61,
                'especialidade_id' => 48,
            ),
            397 => 
            array (
                'id' => 407,
                'fornecedor_id' => 62,
                'especialidade_id' => 167,
            ),
            398 => 
            array (
                'id' => 408,
                'fornecedor_id' => 62,
                'especialidade_id' => 165,
            ),
            399 => 
            array (
                'id' => 409,
                'fornecedor_id' => 62,
                'especialidade_id' => 48,
            ),
            400 => 
            array (
                'id' => 410,
                'fornecedor_id' => 63,
                'especialidade_id' => 68,
            ),
            401 => 
            array (
                'id' => 411,
                'fornecedor_id' => 63,
                'especialidade_id' => 70,
            ),
            402 => 
            array (
                'id' => 412,
                'fornecedor_id' => 63,
                'especialidade_id' => 51,
            ),
            403 => 
            array (
                'id' => 413,
                'fornecedor_id' => 63,
                'especialidade_id' => 69,
            ),
            404 => 
            array (
                'id' => 414,
                'fornecedor_id' => 63,
                'especialidade_id' => 71,
            ),
            405 => 
            array (
                'id' => 415,
                'fornecedor_id' => 65,
                'especialidade_id' => 56,
            ),
            406 => 
            array (
                'id' => 416,
                'fornecedor_id' => 65,
                'especialidade_id' => 33,
            ),
            407 => 
            array (
                'id' => 417,
                'fornecedor_id' => 65,
                'especialidade_id' => 48,
            ),
            408 => 
            array (
                'id' => 418,
                'fornecedor_id' => 65,
                'especialidade_id' => 71,
            ),
            409 => 
            array (
                'id' => 419,
                'fornecedor_id' => 66,
                'especialidade_id' => 163,
            ),
            410 => 
            array (
                'id' => 420,
                'fornecedor_id' => 66,
                'especialidade_id' => 151,
            ),
            411 => 
            array (
                'id' => 421,
                'fornecedor_id' => 66,
                'especialidade_id' => 165,
            ),
            412 => 
            array (
                'id' => 422,
                'fornecedor_id' => 66,
                'especialidade_id' => 39,
            ),
            413 => 
            array (
                'id' => 423,
                'fornecedor_id' => 67,
                'especialidade_id' => 50,
            ),
            414 => 
            array (
                'id' => 424,
                'fornecedor_id' => 67,
                'especialidade_id' => 48,
            ),
            415 => 
            array (
                'id' => 425,
                'fornecedor_id' => 67,
                'especialidade_id' => 11,
            ),
            416 => 
            array (
                'id' => 426,
                'fornecedor_id' => 67,
                'especialidade_id' => 12,
            ),
            417 => 
            array (
                'id' => 427,
                'fornecedor_id' => 68,
                'especialidade_id' => 87,
            ),
            418 => 
            array (
                'id' => 428,
                'fornecedor_id' => 69,
                'especialidade_id' => 33,
            ),
            419 => 
            array (
                'id' => 429,
                'fornecedor_id' => 69,
                'especialidade_id' => 154,
            ),
            420 => 
            array (
                'id' => 430,
                'fornecedor_id' => 70,
                'especialidade_id' => 52,
            ),
            421 => 
            array (
                'id' => 431,
                'fornecedor_id' => 70,
                'especialidade_id' => 51,
            ),
            422 => 
            array (
                'id' => 432,
                'fornecedor_id' => 70,
                'especialidade_id' => 93,
            ),
            423 => 
            array (
                'id' => 433,
                'fornecedor_id' => 70,
                'especialidade_id' => 81,
            ),
            424 => 
            array (
                'id' => 434,
                'fornecedor_id' => 71,
                'especialidade_id' => 81,
            ),
            425 => 
            array (
                'id' => 435,
                'fornecedor_id' => 71,
                'especialidade_id' => 52,
            ),
            426 => 
            array (
                'id' => 436,
                'fornecedor_id' => 71,
                'especialidade_id' => 85,
            ),
            427 => 
            array (
                'id' => 437,
                'fornecedor_id' => 72,
                'especialidade_id' => 13,
            ),
            428 => 
            array (
                'id' => 438,
                'fornecedor_id' => 72,
                'especialidade_id' => 14,
            ),
            429 => 
            array (
                'id' => 439,
                'fornecedor_id' => 72,
                'especialidade_id' => 158,
            ),
            430 => 
            array (
                'id' => 440,
                'fornecedor_id' => 52,
                'especialidade_id' => 13,
            ),
            431 => 
            array (
                'id' => 441,
                'fornecedor_id' => 52,
                'especialidade_id' => 14,
            ),
            432 => 
            array (
                'id' => 442,
                'fornecedor_id' => 73,
                'especialidade_id' => 22,
            ),
            433 => 
            array (
                'id' => 443,
                'fornecedor_id' => 73,
                'especialidade_id' => 23,
            ),
            434 => 
            array (
                'id' => 444,
                'fornecedor_id' => 74,
                'especialidade_id' => 74,
            ),
            435 => 
            array (
                'id' => 445,
                'fornecedor_id' => 74,
                'especialidade_id' => 75,
            ),
            436 => 
            array (
                'id' => 446,
                'fornecedor_id' => 74,
                'especialidade_id' => 168,
            ),
            437 => 
            array (
                'id' => 447,
                'fornecedor_id' => 75,
                'especialidade_id' => 27,
            ),
            438 => 
            array (
                'id' => 448,
                'fornecedor_id' => 75,
                'especialidade_id' => 28,
            ),
            439 => 
            array (
                'id' => 449,
                'fornecedor_id' => 75,
                'especialidade_id' => 169,
            ),
            440 => 
            array (
                'id' => 450,
                'fornecedor_id' => 76,
                'especialidade_id' => 25,
            ),
            441 => 
            array (
                'id' => 451,
                'fornecedor_id' => 76,
                'especialidade_id' => 22,
            ),
            442 => 
            array (
                'id' => 452,
                'fornecedor_id' => 77,
                'especialidade_id' => 27,
            ),
            443 => 
            array (
                'id' => 453,
                'fornecedor_id' => 1,
                'especialidade_id' => 170,
            ),
            444 => 
            array (
                'id' => 454,
                'fornecedor_id' => 2,
                'especialidade_id' => 170,
            ),
            445 => 
            array (
                'id' => 455,
                'fornecedor_id' => 3,
                'especialidade_id' => 170,
            ),
            446 => 
            array (
                'id' => 456,
                'fornecedor_id' => 108,
                'especialidade_id' => 170,
            ),
            447 => 
            array (
                'id' => 457,
                'fornecedor_id' => 108,
                'especialidade_id' => 6,
            ),
            448 => 
            array (
                'id' => 458,
                'fornecedor_id' => 108,
                'especialidade_id' => 7,
            ),
            449 => 
            array (
                'id' => 459,
                'fornecedor_id' => 108,
                'especialidade_id' => 8,
            ),
            450 => 
            array (
                'id' => 460,
                'fornecedor_id' => 108,
                'especialidade_id' => 9,
            ),
            451 => 
            array (
                'id' => 461,
                'fornecedor_id' => 108,
                'especialidade_id' => 11,
            ),
            452 => 
            array (
                'id' => 462,
                'fornecedor_id' => 108,
                'especialidade_id' => 12,
            ),
            453 => 
            array (
                'id' => 463,
                'fornecedor_id' => 108,
                'especialidade_id' => 13,
            ),
            454 => 
            array (
                'id' => 464,
                'fornecedor_id' => 108,
                'especialidade_id' => 14,
            ),
            455 => 
            array (
                'id' => 465,
                'fornecedor_id' => 108,
                'especialidade_id' => 16,
            ),
            456 => 
            array (
                'id' => 466,
                'fornecedor_id' => 108,
                'especialidade_id' => 17,
            ),
            457 => 
            array (
                'id' => 467,
                'fornecedor_id' => 108,
                'especialidade_id' => 20,
            ),
            458 => 
            array (
                'id' => 468,
                'fornecedor_id' => 108,
                'especialidade_id' => 22,
            ),
            459 => 
            array (
                'id' => 469,
                'fornecedor_id' => 108,
                'especialidade_id' => 24,
            ),
            460 => 
            array (
                'id' => 470,
                'fornecedor_id' => 108,
                'especialidade_id' => 25,
            ),
            461 => 
            array (
                'id' => 471,
                'fornecedor_id' => 108,
                'especialidade_id' => 27,
            ),
            462 => 
            array (
                'id' => 472,
                'fornecedor_id' => 108,
                'especialidade_id' => 28,
            ),
            463 => 
            array (
                'id' => 473,
                'fornecedor_id' => 108,
                'especialidade_id' => 29,
            ),
            464 => 
            array (
                'id' => 474,
                'fornecedor_id' => 108,
                'especialidade_id' => 32,
            ),
            465 => 
            array (
                'id' => 475,
                'fornecedor_id' => 108,
                'especialidade_id' => 33,
            ),
            466 => 
            array (
                'id' => 476,
                'fornecedor_id' => 108,
                'especialidade_id' => 34,
            ),
            467 => 
            array (
                'id' => 477,
                'fornecedor_id' => 108,
                'especialidade_id' => 35,
            ),
            468 => 
            array (
                'id' => 478,
                'fornecedor_id' => 108,
                'especialidade_id' => 39,
            ),
            469 => 
            array (
                'id' => 479,
                'fornecedor_id' => 108,
                'especialidade_id' => 41,
            ),
            470 => 
            array (
                'id' => 480,
                'fornecedor_id' => 108,
                'especialidade_id' => 42,
            ),
            471 => 
            array (
                'id' => 481,
                'fornecedor_id' => 108,
                'especialidade_id' => 43,
            ),
            472 => 
            array (
                'id' => 482,
                'fornecedor_id' => 108,
                'especialidade_id' => 45,
            ),
            473 => 
            array (
                'id' => 483,
                'fornecedor_id' => 108,
                'especialidade_id' => 48,
            ),
            474 => 
            array (
                'id' => 484,
                'fornecedor_id' => 108,
                'especialidade_id' => 50,
            ),
            475 => 
            array (
                'id' => 485,
                'fornecedor_id' => 108,
                'especialidade_id' => 53,
            ),
            476 => 
            array (
                'id' => 486,
                'fornecedor_id' => 108,
                'especialidade_id' => 57,
            ),
            477 => 
            array (
                'id' => 487,
                'fornecedor_id' => 108,
                'especialidade_id' => 58,
            ),
            478 => 
            array (
                'id' => 488,
                'fornecedor_id' => 108,
                'especialidade_id' => 60,
            ),
            479 => 
            array (
                'id' => 489,
                'fornecedor_id' => 108,
                'especialidade_id' => 67,
            ),
            480 => 
            array (
                'id' => 490,
                'fornecedor_id' => 108,
                'especialidade_id' => 68,
            ),
            481 => 
            array (
                'id' => 491,
                'fornecedor_id' => 108,
                'especialidade_id' => 69,
            ),
            482 => 
            array (
                'id' => 492,
                'fornecedor_id' => 108,
                'especialidade_id' => 71,
            ),
            483 => 
            array (
                'id' => 493,
                'fornecedor_id' => 108,
                'especialidade_id' => 73,
            ),
            484 => 
            array (
                'id' => 494,
                'fornecedor_id' => 108,
                'especialidade_id' => 74,
            ),
            485 => 
            array (
                'id' => 495,
                'fornecedor_id' => 108,
                'especialidade_id' => 78,
            ),
            486 => 
            array (
                'id' => 496,
                'fornecedor_id' => 108,
                'especialidade_id' => 79,
            ),
            487 => 
            array (
                'id' => 497,
                'fornecedor_id' => 108,
                'especialidade_id' => 88,
            ),
            488 => 
            array (
                'id' => 498,
                'fornecedor_id' => 108,
                'especialidade_id' => 89,
            ),
            489 => 
            array (
                'id' => 499,
                'fornecedor_id' => 108,
                'especialidade_id' => 92,
            ),
            490 => 
            array (
                'id' => 500,
                'fornecedor_id' => 108,
                'especialidade_id' => 94,
            ),
            491 => 
            array (
                'id' => 501,
                'fornecedor_id' => 108,
                'especialidade_id' => 95,
            ),
            492 => 
            array (
                'id' => 502,
                'fornecedor_id' => 108,
                'especialidade_id' => 96,
            ),
            493 => 
            array (
                'id' => 503,
                'fornecedor_id' => 108,
                'especialidade_id' => 97,
            ),
            494 => 
            array (
                'id' => 504,
                'fornecedor_id' => 108,
                'especialidade_id' => 151,
            ),
            495 => 
            array (
                'id' => 505,
                'fornecedor_id' => 108,
                'especialidade_id' => 152,
            ),
            496 => 
            array (
                'id' => 506,
                'fornecedor_id' => 108,
                'especialidade_id' => 155,
            ),
            497 => 
            array (
                'id' => 507,
                'fornecedor_id' => 108,
                'especialidade_id' => 158,
            ),
            498 => 
            array (
                'id' => 508,
                'fornecedor_id' => 108,
                'especialidade_id' => 160,
            ),
            499 => 
            array (
                'id' => 509,
                'fornecedor_id' => 108,
                'especialidade_id' => 161,
            ),
        ));
        \DB::table('fornecedor_especialidades')->insert(array (
            0 => 
            array (
                'id' => 510,
                'fornecedor_id' => 108,
                'especialidade_id' => 163,
            ),
            1 => 
            array (
                'id' => 511,
                'fornecedor_id' => 108,
                'especialidade_id' => 165,
            ),
            2 => 
            array (
                'id' => 512,
                'fornecedor_id' => 79,
                'especialidade_id' => 20,
            ),
            3 => 
            array (
                'id' => 513,
                'fornecedor_id' => 79,
                'especialidade_id' => 22,
            ),
            4 => 
            array (
                'id' => 514,
                'fornecedor_id' => 79,
                'especialidade_id' => 24,
            ),
            5 => 
            array (
                'id' => 515,
                'fornecedor_id' => 79,
                'especialidade_id' => 28,
            ),
            6 => 
            array (
                'id' => 516,
                'fornecedor_id' => 79,
                'especialidade_id' => 170,
            ),
            7 => 
            array (
                'id' => 517,
                'fornecedor_id' => 80,
                'especialidade_id' => 29,
            ),
            8 => 
            array (
                'id' => 518,
                'fornecedor_id' => 80,
                'especialidade_id' => 15,
            ),
            9 => 
            array (
                'id' => 519,
                'fornecedor_id' => 80,
                'especialidade_id' => 9,
            ),
            10 => 
            array (
                'id' => 520,
                'fornecedor_id' => 80,
                'especialidade_id' => 64,
            ),
            11 => 
            array (
                'id' => 521,
                'fornecedor_id' => 81,
                'especialidade_id' => 97,
            ),
            12 => 
            array (
                'id' => 522,
                'fornecedor_id' => 82,
                'especialidade_id' => 32,
            ),
            13 => 
            array (
                'id' => 523,
                'fornecedor_id' => 82,
                'especialidade_id' => 81,
            ),
            14 => 
            array (
                'id' => 524,
                'fornecedor_id' => 78,
                'especialidade_id' => 11,
            ),
            15 => 
            array (
                'id' => 525,
                'fornecedor_id' => 78,
                'especialidade_id' => 12,
            ),
            16 => 
            array (
                'id' => 526,
                'fornecedor_id' => 78,
                'especialidade_id' => 13,
            ),
            17 => 
            array (
                'id' => 527,
                'fornecedor_id' => 78,
                'especialidade_id' => 14,
            ),
            18 => 
            array (
                'id' => 528,
                'fornecedor_id' => 78,
                'especialidade_id' => 41,
            ),
            19 => 
            array (
                'id' => 529,
                'fornecedor_id' => 78,
                'especialidade_id' => 172,
            ),
            20 => 
            array (
                'id' => 530,
                'fornecedor_id' => 78,
                'especialidade_id' => 53,
            ),
            21 => 
            array (
                'id' => 531,
                'fornecedor_id' => 78,
                'especialidade_id' => 60,
            ),
            22 => 
            array (
                'id' => 532,
                'fornecedor_id' => 78,
                'especialidade_id' => 63,
            ),
            23 => 
            array (
                'id' => 533,
                'fornecedor_id' => 78,
                'especialidade_id' => 171,
            ),
            24 => 
            array (
                'id' => 534,
                'fornecedor_id' => 64,
                'especialidade_id' => 11,
            ),
            25 => 
            array (
                'id' => 535,
                'fornecedor_id' => 64,
                'especialidade_id' => 12,
            ),
            26 => 
            array (
                'id' => 536,
                'fornecedor_id' => 64,
                'especialidade_id' => 74,
            ),
            27 => 
            array (
                'id' => 537,
                'fornecedor_id' => 83,
                'especialidade_id' => 83,
            ),
            28 => 
            array (
                'id' => 538,
                'fornecedor_id' => 83,
                'especialidade_id' => 84,
            ),
            29 => 
            array (
                'id' => 539,
                'fornecedor_id' => 84,
                'especialidade_id' => 52,
            ),
            30 => 
            array (
                'id' => 540,
                'fornecedor_id' => 85,
                'especialidade_id' => 49,
            ),
            31 => 
            array (
                'id' => 541,
                'fornecedor_id' => 86,
                'especialidade_id' => 67,
            ),
            32 => 
            array (
                'id' => 542,
                'fornecedor_id' => 86,
                'especialidade_id' => 68,
            ),
            33 => 
            array (
                'id' => 543,
                'fornecedor_id' => 86,
                'especialidade_id' => 70,
            ),
            34 => 
            array (
                'id' => 544,
                'fornecedor_id' => 86,
                'especialidade_id' => 173,
            ),
            35 => 
            array (
                'id' => 545,
                'fornecedor_id' => 87,
                'especialidade_id' => 63,
            ),
            36 => 
            array (
                'id' => 546,
                'fornecedor_id' => 88,
                'especialidade_id' => 174,
            ),
            37 => 
            array (
                'id' => 547,
                'fornecedor_id' => 89,
                'especialidade_id' => 67,
            ),
            38 => 
            array (
                'id' => 548,
                'fornecedor_id' => 89,
                'especialidade_id' => 68,
            ),
            39 => 
            array (
                'id' => 549,
                'fornecedor_id' => 89,
                'especialidade_id' => 70,
            ),
            40 => 
            array (
                'id' => 550,
                'fornecedor_id' => 89,
                'especialidade_id' => 72,
            ),
            41 => 
            array (
                'id' => 551,
                'fornecedor_id' => 91,
                'especialidade_id' => 11,
            ),
            42 => 
            array (
                'id' => 552,
                'fornecedor_id' => 91,
                'especialidade_id' => 16,
            ),
            43 => 
            array (
                'id' => 553,
                'fornecedor_id' => 91,
                'especialidade_id' => 13,
            ),
            44 => 
            array (
                'id' => 554,
                'fornecedor_id' => 91,
                'especialidade_id' => 20,
            ),
            45 => 
            array (
                'id' => 555,
                'fornecedor_id' => 91,
                'especialidade_id' => 19,
            ),
            46 => 
            array (
                'id' => 556,
                'fornecedor_id' => 91,
                'especialidade_id' => 74,
            ),
            47 => 
            array (
                'id' => 557,
                'fornecedor_id' => 91,
                'especialidade_id' => 158,
            ),
            48 => 
            array (
                'id' => 558,
                'fornecedor_id' => 92,
                'especialidade_id' => 66,
            ),
            49 => 
            array (
                'id' => 559,
                'fornecedor_id' => 92,
                'especialidade_id' => 10,
            ),
            50 => 
            array (
                'id' => 560,
                'fornecedor_id' => 92,
                'especialidade_id' => 71,
            ),
            51 => 
            array (
                'id' => 561,
                'fornecedor_id' => 92,
                'especialidade_id' => 64,
            ),
            52 => 
            array (
                'id' => 562,
                'fornecedor_id' => 92,
                'especialidade_id' => 155,
            ),
            53 => 
            array (
                'id' => 563,
                'fornecedor_id' => 93,
                'especialidade_id' => 9,
            ),
            54 => 
            array (
                'id' => 564,
                'fornecedor_id' => 93,
                'especialidade_id' => 79,
            ),
            55 => 
            array (
                'id' => 565,
                'fornecedor_id' => 93,
                'especialidade_id' => 88,
            ),
            56 => 
            array (
                'id' => 566,
                'fornecedor_id' => 93,
                'especialidade_id' => 74,
            ),
            57 => 
            array (
                'id' => 567,
                'fornecedor_id' => 93,
                'especialidade_id' => 16,
            ),
            58 => 
            array (
                'id' => 568,
                'fornecedor_id' => 93,
                'especialidade_id' => 17,
            ),
            59 => 
            array (
                'id' => 569,
                'fornecedor_id' => 93,
                'especialidade_id' => 158,
            ),
            60 => 
            array (
                'id' => 570,
                'fornecedor_id' => 93,
                'especialidade_id' => 78,
            ),
            61 => 
            array (
                'id' => 571,
                'fornecedor_id' => 93,
                'especialidade_id' => 94,
            ),
            62 => 
            array (
                'id' => 572,
                'fornecedor_id' => 93,
                'especialidade_id' => 29,
            ),
            63 => 
            array (
                'id' => 573,
                'fornecedor_id' => 93,
                'especialidade_id' => 89,
            ),
            64 => 
            array (
                'id' => 574,
                'fornecedor_id' => 13,
                'especialidade_id' => 9,
            ),
            65 => 
            array (
                'id' => 575,
                'fornecedor_id' => 13,
                'especialidade_id' => 74,
            ),
            66 => 
            array (
                'id' => 576,
                'fornecedor_id' => 13,
                'especialidade_id' => 158,
            ),
            67 => 
            array (
                'id' => 577,
                'fornecedor_id' => 94,
                'especialidade_id' => 45,
            ),
            68 => 
            array (
                'id' => 578,
                'fornecedor_id' => 94,
                'especialidade_id' => 159,
            ),
            69 => 
            array (
                'id' => 579,
                'fornecedor_id' => 94,
                'especialidade_id' => 97,
            ),
            70 => 
            array (
                'id' => 580,
                'fornecedor_id' => 94,
                'especialidade_id' => 74,
            ),
            71 => 
            array (
                'id' => 581,
                'fornecedor_id' => 94,
                'especialidade_id' => 11,
            ),
            72 => 
            array (
                'id' => 582,
                'fornecedor_id' => 94,
                'especialidade_id' => 12,
            ),
            73 => 
            array (
                'id' => 583,
                'fornecedor_id' => 94,
                'especialidade_id' => 13,
            ),
            74 => 
            array (
                'id' => 584,
                'fornecedor_id' => 94,
                'especialidade_id' => 14,
            ),
            75 => 
            array (
                'id' => 585,
                'fornecedor_id' => 95,
                'especialidade_id' => 175,
            ),
            76 => 
            array (
                'id' => 586,
                'fornecedor_id' => 96,
                'especialidade_id' => 76,
            ),
            77 => 
            array (
                'id' => 587,
                'fornecedor_id' => 97,
                'especialidade_id' => 65,
            ),
            78 => 
            array (
                'id' => 588,
                'fornecedor_id' => 98,
                'especialidade_id' => 96,
            ),
            79 => 
            array (
                'id' => 589,
                'fornecedor_id' => 99,
                'especialidade_id' => 79,
            ),
            80 => 
            array (
                'id' => 590,
                'fornecedor_id' => 101,
                'especialidade_id' => 86,
            ),
            81 => 
            array (
                'id' => 591,
                'fornecedor_id' => 101,
                'especialidade_id' => 42,
            ),
            82 => 
            array (
                'id' => 592,
                'fornecedor_id' => 101,
                'especialidade_id' => 74,
            ),
            83 => 
            array (
                'id' => 593,
                'fornecedor_id' => 101,
                'especialidade_id' => 88,
            ),
            84 => 
            array (
                'id' => 594,
                'fornecedor_id' => 101,
                'especialidade_id' => 26,
            ),
            85 => 
            array (
                'id' => 595,
                'fornecedor_id' => 101,
                'especialidade_id' => 6,
            ),
            86 => 
            array (
                'id' => 596,
                'fornecedor_id' => 102,
                'especialidade_id' => 45,
            ),
            87 => 
            array (
                'id' => 597,
                'fornecedor_id' => 102,
                'especialidade_id' => 159,
            ),
            88 => 
            array (
                'id' => 598,
                'fornecedor_id' => 103,
                'especialidade_id' => 176,
            ),
            89 => 
            array (
                'id' => 599,
                'fornecedor_id' => 104,
                'especialidade_id' => 40,
            ),
            90 => 
            array (
                'id' => 600,
                'fornecedor_id' => 104,
                'especialidade_id' => 41,
            ),
            91 => 
            array (
                'id' => 601,
                'fornecedor_id' => 104,
                'especialidade_id' => 43,
            ),
            92 => 
            array (
                'id' => 602,
                'fornecedor_id' => 104,
                'especialidade_id' => 44,
            ),
            93 => 
            array (
                'id' => 603,
                'fornecedor_id' => 104,
                'especialidade_id' => 163,
            ),
            94 => 
            array (
                'id' => 604,
                'fornecedor_id' => 104,
                'especialidade_id' => 49,
            ),
            95 => 
            array (
                'id' => 605,
                'fornecedor_id' => 104,
                'especialidade_id' => 42,
            ),
            96 => 
            array (
                'id' => 606,
                'fornecedor_id' => 105,
                'especialidade_id' => 14,
            ),
            97 => 
            array (
                'id' => 607,
                'fornecedor_id' => 105,
                'especialidade_id' => 13,
            ),
            98 => 
            array (
                'id' => 608,
                'fornecedor_id' => 105,
                'especialidade_id' => 33,
            ),
            99 => 
            array (
                'id' => 609,
                'fornecedor_id' => 105,
                'especialidade_id' => 50,
            ),
            100 => 
            array (
                'id' => 610,
                'fornecedor_id' => 105,
                'especialidade_id' => 74,
            ),
            101 => 
            array (
                'id' => 611,
                'fornecedor_id' => 106,
                'especialidade_id' => 54,
            ),
            102 => 
            array (
                'id' => 612,
                'fornecedor_id' => 106,
                'especialidade_id' => 17,
            ),
            103 => 
            array (
                'id' => 613,
                'fornecedor_id' => 106,
                'especialidade_id' => 27,
            ),
            104 => 
            array (
                'id' => 614,
                'fornecedor_id' => 106,
                'especialidade_id' => 29,
            ),
            105 => 
            array (
                'id' => 615,
                'fornecedor_id' => 106,
                'especialidade_id' => 74,
            ),
            106 => 
            array (
                'id' => 616,
                'fornecedor_id' => 106,
                'especialidade_id' => 32,
            ),
            107 => 
            array (
                'id' => 617,
                'fornecedor_id' => 106,
                'especialidade_id' => 78,
            ),
            108 => 
            array (
                'id' => 618,
                'fornecedor_id' => 106,
                'especialidade_id' => 14,
            ),
            109 => 
            array (
                'id' => 619,
                'fornecedor_id' => 106,
                'especialidade_id' => 13,
            ),
            110 => 
            array (
                'id' => 620,
                'fornecedor_id' => 106,
                'especialidade_id' => 20,
            ),
            111 => 
            array (
                'id' => 621,
                'fornecedor_id' => 106,
                'especialidade_id' => 19,
            ),
            112 => 
            array (
                'id' => 622,
                'fornecedor_id' => 106,
                'especialidade_id' => 89,
            ),
            113 => 
            array (
                'id' => 623,
                'fornecedor_id' => 106,
                'especialidade_id' => 177,
            ),
            114 => 
            array (
                'id' => 624,
                'fornecedor_id' => 107,
                'especialidade_id' => 97,
            ),
            115 => 
            array (
                'id' => 625,
                'fornecedor_id' => 107,
                'especialidade_id' => 78,
            ),
            116 => 
            array (
                'id' => 626,
                'fornecedor_id' => 107,
                'especialidade_id' => 50,
            ),
            117 => 
            array (
                'id' => 627,
                'fornecedor_id' => 107,
                'especialidade_id' => 33,
            ),
            118 => 
            array (
                'id' => 628,
                'fornecedor_id' => 107,
                'especialidade_id' => 74,
            ),
            119 => 
            array (
                'id' => 629,
                'fornecedor_id' => 107,
                'especialidade_id' => 32,
            ),
            120 => 
            array (
                'id' => 630,
                'fornecedor_id' => 107,
                'especialidade_id' => 29,
            ),
            121 => 
            array (
                'id' => 631,
                'fornecedor_id' => 107,
                'especialidade_id' => 16,
            ),
            122 => 
            array (
                'id' => 632,
                'fornecedor_id' => 107,
                'especialidade_id' => 17,
            ),
            123 => 
            array (
                'id' => 633,
                'fornecedor_id' => 107,
                'especialidade_id' => 13,
            ),
            124 => 
            array (
                'id' => 634,
                'fornecedor_id' => 107,
                'especialidade_id' => 14,
            ),
            125 => 
            array (
                'id' => 635,
                'fornecedor_id' => 109,
                'especialidade_id' => 23,
            ),
            126 => 
            array (
                'id' => 636,
                'fornecedor_id' => 109,
                'especialidade_id' => 19,
            ),
            127 => 
            array (
                'id' => 637,
                'fornecedor_id' => 109,
                'especialidade_id' => 20,
            ),
            128 => 
            array (
                'id' => 638,
                'fornecedor_id' => 109,
                'especialidade_id' => 170,
            ),
            129 => 
            array (
                'id' => 639,
                'fornecedor_id' => 110,
                'especialidade_id' => 19,
            ),
            130 => 
            array (
                'id' => 640,
                'fornecedor_id' => 110,
                'especialidade_id' => 20,
            ),
            131 => 
            array (
                'id' => 641,
                'fornecedor_id' => 112,
                'especialidade_id' => 170,
            ),
            132 => 
            array (
                'id' => 642,
                'fornecedor_id' => 112,
                'especialidade_id' => 178,
            ),
            133 => 
            array (
                'id' => 643,
                'fornecedor_id' => 114,
                'especialidade_id' => 6,
            ),
            134 => 
            array (
                'id' => 644,
                'fornecedor_id' => 114,
                'especialidade_id' => 22,
            ),
            135 => 
            array (
                'id' => 645,
                'fornecedor_id' => 109,
                'especialidade_id' => 178,
            ),
            136 => 
            array (
                'id' => 646,
                'fornecedor_id' => 72,
                'especialidade_id' => 178,
            ),
            137 => 
            array (
                'id' => 647,
                'fornecedor_id' => 113,
                'especialidade_id' => 179,
            ),
            138 => 
            array (
                'id' => 648,
                'fornecedor_id' => 115,
                'especialidade_id' => 39,
            ),
            139 => 
            array (
                'id' => 649,
                'fornecedor_id' => 115,
                'especialidade_id' => 48,
            ),
            140 => 
            array (
                'id' => 650,
                'fornecedor_id' => 115,
                'especialidade_id' => 45,
            ),
            141 => 
            array (
                'id' => 651,
                'fornecedor_id' => 115,
                'especialidade_id' => 165,
            ),
            142 => 
            array (
                'id' => 652,
                'fornecedor_id' => 115,
                'especialidade_id' => 49,
            ),
            143 => 
            array (
                'id' => 653,
                'fornecedor_id' => 115,
                'especialidade_id' => 167,
            ),
            144 => 
            array (
                'id' => 654,
                'fornecedor_id' => 115,
                'especialidade_id' => 44,
            ),
            145 => 
            array (
                'id' => 655,
                'fornecedor_id' => 115,
                'especialidade_id' => 41,
            ),
            146 => 
            array (
                'id' => 656,
                'fornecedor_id' => 115,
                'especialidade_id' => 43,
            ),
            147 => 
            array (
                'id' => 657,
                'fornecedor_id' => 115,
                'especialidade_id' => 163,
            ),
            148 => 
            array (
                'id' => 658,
                'fornecedor_id' => 115,
                'especialidade_id' => 172,
            ),
            149 => 
            array (
                'id' => 659,
                'fornecedor_id' => 116,
                'especialidade_id' => 50,
            ),
            150 => 
            array (
                'id' => 660,
                'fornecedor_id' => 117,
                'especialidade_id' => 90,
            ),
            151 => 
            array (
                'id' => 661,
                'fornecedor_id' => 118,
                'especialidade_id' => 180,
            ),
            152 => 
            array (
                'id' => 662,
                'fornecedor_id' => 118,
                'especialidade_id' => 181,
            ),
            153 => 
            array (
                'id' => 663,
                'fornecedor_id' => 119,
                'especialidade_id' => 39,
            ),
            154 => 
            array (
                'id' => 664,
                'fornecedor_id' => 119,
                'especialidade_id' => 48,
            ),
            155 => 
            array (
                'id' => 665,
                'fornecedor_id' => 119,
                'especialidade_id' => 50,
            ),
            156 => 
            array (
                'id' => 666,
                'fornecedor_id' => 119,
                'especialidade_id' => 159,
            ),
            157 => 
            array (
                'id' => 667,
                'fornecedor_id' => 119,
                'especialidade_id' => 165,
            ),
            158 => 
            array (
                'id' => 668,
                'fornecedor_id' => 119,
                'especialidade_id' => 167,
            ),
            159 => 
            array (
                'id' => 669,
                'fornecedor_id' => 119,
                'especialidade_id' => 49,
            ),
            160 => 
            array (
                'id' => 670,
                'fornecedor_id' => 119,
                'especialidade_id' => 41,
            ),
            161 => 
            array (
                'id' => 671,
                'fornecedor_id' => 119,
                'especialidade_id' => 43,
            ),
            162 => 
            array (
                'id' => 672,
                'fornecedor_id' => 119,
                'especialidade_id' => 45,
            ),
            163 => 
            array (
                'id' => 673,
                'fornecedor_id' => 119,
                'especialidade_id' => 181,
            ),
            164 => 
            array (
                'id' => 674,
                'fornecedor_id' => 120,
                'especialidade_id' => 23,
            ),
            165 => 
            array (
                'id' => 675,
                'fornecedor_id' => 120,
                'especialidade_id' => 170,
            ),
            166 => 
            array (
                'id' => 676,
                'fornecedor_id' => 121,
                'especialidade_id' => 9,
            ),
            167 => 
            array (
                'id' => 677,
                'fornecedor_id' => 121,
                'especialidade_id' => 17,
            ),
            168 => 
            array (
                'id' => 678,
                'fornecedor_id' => 121,
                'especialidade_id' => 12,
            ),
            169 => 
            array (
                'id' => 679,
                'fornecedor_id' => 121,
                'especialidade_id' => 14,
            ),
            170 => 
            array (
                'id' => 680,
                'fornecedor_id' => 121,
                'especialidade_id' => 29,
            ),
            171 => 
            array (
                'id' => 681,
                'fornecedor_id' => 121,
                'especialidade_id' => 74,
            ),
            172 => 
            array (
                'id' => 682,
                'fornecedor_id' => 121,
                'especialidade_id' => 32,
            ),
            173 => 
            array (
                'id' => 683,
                'fornecedor_id' => 121,
                'especialidade_id' => 3,
            ),
            174 => 
            array (
                'id' => 684,
                'fornecedor_id' => 121,
                'especialidade_id' => 78,
            ),
            175 => 
            array (
                'id' => 685,
                'fornecedor_id' => 121,
                'especialidade_id' => 97,
            ),
            176 => 
            array (
                'id' => 686,
                'fornecedor_id' => 121,
                'especialidade_id' => 88,
            ),
            177 => 
            array (
                'id' => 687,
                'fornecedor_id' => 121,
                'especialidade_id' => 89,
            ),
            178 => 
            array (
                'id' => 688,
                'fornecedor_id' => 121,
                'especialidade_id' => 33,
            ),
            179 => 
            array (
                'id' => 689,
                'fornecedor_id' => 121,
                'especialidade_id' => 50,
            ),
            180 => 
            array (
                'id' => 690,
                'fornecedor_id' => 3,
                'especialidade_id' => 87,
            ),
            181 => 
            array (
                'id' => 691,
                'fornecedor_id' => 123,
                'especialidade_id' => 182,
            ),
            182 => 
            array (
                'id' => 692,
                'fornecedor_id' => 122,
                'especialidade_id' => 60,
            ),
            183 => 
            array (
                'id' => 693,
                'fornecedor_id' => 122,
                'especialidade_id' => 96,
            ),
            184 => 
            array (
                'id' => 694,
                'fornecedor_id' => 122,
                'especialidade_id' => 14,
            ),
            185 => 
            array (
                'id' => 695,
                'fornecedor_id' => 122,
                'especialidade_id' => 89,
            ),
            186 => 
            array (
                'id' => 696,
                'fornecedor_id' => 125,
                'especialidade_id' => 183,
            ),
            187 => 
            array (
                'id' => 697,
                'fornecedor_id' => 125,
                'especialidade_id' => 33,
            ),
            188 => 
            array (
                'id' => 698,
                'fornecedor_id' => 126,
                'especialidade_id' => 62,
            ),
            189 => 
            array (
                'id' => 699,
                'fornecedor_id' => 126,
                'especialidade_id' => 33,
            ),
            190 => 
            array (
                'id' => 700,
                'fornecedor_id' => 126,
                'especialidade_id' => 88,
            ),
            191 => 
            array (
                'id' => 701,
                'fornecedor_id' => 126,
                'especialidade_id' => 89,
            ),
            192 => 
            array (
                'id' => 702,
                'fornecedor_id' => 126,
                'especialidade_id' => 74,
            ),
            193 => 
            array (
                'id' => 703,
                'fornecedor_id' => 127,
                'especialidade_id' => 9,
            ),
            194 => 
            array (
                'id' => 704,
                'fornecedor_id' => 127,
                'especialidade_id' => 74,
            ),
            195 => 
            array (
                'id' => 705,
                'fornecedor_id' => 127,
                'especialidade_id' => 88,
            ),
            196 => 
            array (
                'id' => 706,
                'fornecedor_id' => 127,
                'especialidade_id' => 89,
            ),
            197 => 
            array (
                'id' => 707,
                'fornecedor_id' => 127,
                'especialidade_id' => 94,
            ),
            198 => 
            array (
                'id' => 708,
                'fornecedor_id' => 127,
                'especialidade_id' => 32,
            ),
            199 => 
            array (
                'id' => 709,
                'fornecedor_id' => 127,
                'especialidade_id' => 78,
            ),
            200 => 
            array (
                'id' => 710,
                'fornecedor_id' => 128,
                'especialidade_id' => 33,
            ),
            201 => 
            array (
                'id' => 711,
                'fornecedor_id' => 128,
                'especialidade_id' => 35,
            ),
            202 => 
            array (
                'id' => 712,
                'fornecedor_id' => 128,
                'especialidade_id' => 50,
            ),
            203 => 
            array (
                'id' => 713,
                'fornecedor_id' => 128,
                'especialidade_id' => 74,
            ),
            204 => 
            array (
                'id' => 714,
                'fornecedor_id' => 128,
                'especialidade_id' => 88,
            ),
            205 => 
            array (
                'id' => 715,
                'fornecedor_id' => 128,
                'especialidade_id' => 89,
            ),
            206 => 
            array (
                'id' => 716,
                'fornecedor_id' => 128,
                'especialidade_id' => 92,
            ),
            207 => 
            array (
                'id' => 717,
                'fornecedor_id' => 129,
                'especialidade_id' => 13,
            ),
            208 => 
            array (
                'id' => 718,
                'fornecedor_id' => 129,
                'especialidade_id' => 14,
            ),
            209 => 
            array (
                'id' => 719,
                'fornecedor_id' => 129,
                'especialidade_id' => 79,
            ),
            210 => 
            array (
                'id' => 720,
                'fornecedor_id' => 129,
                'especialidade_id' => 63,
            ),
            211 => 
            array (
                'id' => 721,
                'fornecedor_id' => 129,
                'especialidade_id' => 64,
            ),
            212 => 
            array (
                'id' => 722,
                'fornecedor_id' => 129,
                'especialidade_id' => 29,
            ),
            213 => 
            array (
                'id' => 723,
                'fornecedor_id' => 130,
                'especialidade_id' => 154,
            ),
            214 => 
            array (
                'id' => 724,
                'fornecedor_id' => 131,
                'especialidade_id' => 53,
            ),
            215 => 
            array (
                'id' => 725,
                'fornecedor_id' => 131,
                'especialidade_id' => 54,
            ),
            216 => 
            array (
                'id' => 726,
                'fornecedor_id' => 131,
                'especialidade_id' => 55,
            ),
            217 => 
            array (
                'id' => 727,
                'fornecedor_id' => 132,
                'especialidade_id' => 184,
            ),
            218 => 
            array (
                'id' => 728,
                'fornecedor_id' => 133,
                'especialidade_id' => 28,
            ),
            219 => 
            array (
                'id' => 729,
                'fornecedor_id' => 133,
                'especialidade_id' => 27,
            ),
            220 => 
            array (
                'id' => 730,
                'fornecedor_id' => 133,
                'especialidade_id' => 24,
            ),
            221 => 
            array (
                'id' => 731,
                'fornecedor_id' => 133,
                'especialidade_id' => 185,
            ),
            222 => 
            array (
                'id' => 732,
                'fornecedor_id' => 134,
                'especialidade_id' => 49,
            ),
            223 => 
            array (
                'id' => 733,
                'fornecedor_id' => 135,
                'especialidade_id' => 186,
            ),
            224 => 
            array (
                'id' => 734,
                'fornecedor_id' => 136,
                'especialidade_id' => 56,
            ),
            225 => 
            array (
                'id' => 735,
                'fornecedor_id' => 139,
                'especialidade_id' => 38,
            ),
            226 => 
            array (
                'id' => 736,
                'fornecedor_id' => 141,
                'especialidade_id' => 37,
            ),
            227 => 
            array (
                'id' => 737,
                'fornecedor_id' => 142,
                'especialidade_id' => 72,
            ),
            228 => 
            array (
                'id' => 738,
                'fornecedor_id' => 142,
                'especialidade_id' => 160,
            ),
            229 => 
            array (
                'id' => 739,
                'fornecedor_id' => 142,
                'especialidade_id' => 161,
            ),
            230 => 
            array (
                'id' => 740,
                'fornecedor_id' => 142,
                'especialidade_id' => 187,
            ),
        ));
        
        
    }
}