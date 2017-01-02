<?php

use Illuminate\Database\Seeder;

class EspecialidadesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('especialidades')->delete();
        
        \DB::table('especialidades')->insert(array (
            0 => 
            array (
                'id' => 3,
                'nome' => 'Agricultura Natural',
            ),
            1 => 
            array (
                'id' => 6,
                'nome' => 'Produtos Orgânicos',
            ),
            2 => 
            array (
                'id' => 7,
                'nome' => 'Supermercado Convencional',
            ),
            3 => 
            array (
                'id' => 8,
                'nome' => 'Supermercado Especial',
            ),
            4 => 
            array (
                'id' => 9,
                'nome' => 'Produtos de Alta Gastronomia',
            ),
            5 => 
            array (
                'id' => 10,
                'nome' => 'Caviares',
            ),
            6 => 
            array (
                'id' => 11,
                'nome' => 'Temperos Nacionais e a Granel',
            ),
            7 => 
            array (
                'id' => 12,
                'nome' => 'Temperos Importados e a Granel',
            ),
            8 => 
            array (
                'id' => 13,
                'nome' => 'Condimentos Nacionais',
            ),
            9 => 
            array (
                'id' => 14,
                'nome' => 'Condimentos Importados',
            ),
            10 => 
            array (
                'id' => 15,
                'nome' => 'Condimentos a Granel',
            ),
            11 => 
            array (
                'id' => 16,
                'nome' => 'Especiarias Nacionais',
            ),
            12 => 
            array (
                'id' => 17,
                'nome' => 'Especiarias Importadas',
            ),
            13 => 
            array (
                'id' => 18,
                'nome' => 'Especiarias a Granel',
            ),
            14 => 
            array (
                'id' => 19,
                'nome' => 'Ervas Exóticas ou Especiais',
            ),
            15 => 
            array (
                'id' => 20,
                'nome' => 'Ervas Convencionais ',
            ),
            16 => 
            array (
                'id' => 21,
                'nome' => 'Produtos Biodinâmicos',
            ),
            17 => 
            array (
                'id' => 22,
                'nome' => 'Hortifruti Convencional',
            ),
            18 => 
            array (
                'id' => 23,
                'nome' => 'Hortifruti Exóticos',
            ),
            19 => 
            array (
                'id' => 24,
                'nome' => 'Cogumelos',
            ),
            20 => 
            array (
                'id' => 25,
                'nome' => 'Polpa de Frutas Variadas Congeladas',
            ),
            21 => 
            array (
                'id' => 26,
                'nome' => 'Caldas de Frutas',
            ),
            22 => 
            array (
                'id' => 27,
                'nome' => 'Frutas Especiais',
            ),
            23 => 
            array (
                'id' => 28,
                'nome' => 'Frutas Convencionais',
            ),
            24 => 
            array (
                'id' => 29,
                'nome' => 'Frutas Secas',
            ),
            25 => 
            array (
                'id' => 30,
                'nome' => 'Sementes Convencionais',
            ),
            26 => 
            array (
                'id' => 31,
                'nome' => 'Sementes Exóticas',
            ),
            27 => 
            array (
                'id' => 32,
                'nome' => 'Grãos',
            ),
            28 => 
            array (
                'id' => 33,
                'nome' => 'Laticínios',
            ),
            29 => 
            array (
                'id' => 34,
                'nome' => 'Frios Convencionais',
            ),
            30 => 
            array (
                'id' => 35,
                'nome' => 'Frios Especiais',
            ),
            31 => 
            array (
                'id' => 36,
                'nome' => 'Frios Especiais Feitos å Mão',
            ),
            32 => 
            array (
                'id' => 37,
                'nome' => 'Animais Vivos',
            ),
            33 => 
            array (
                'id' => 38,
                'nome' => 'Aves Abatidas na Hora',
            ),
            34 => 
            array (
                'id' => 39,
                'nome' => 'Carnes Convencionais',
            ),
            35 => 
            array (
                'id' => 40,
                'nome' => 'Carnes: Artigos Difíceis',
            ),
            36 => 
            array (
                'id' => 41,
                'nome' => 'Carne de Aves Convencionais',
            ),
            37 => 
            array (
                'id' => 42,
                'nome' => 'Ovos',
            ),
            38 => 
            array (
                'id' => 43,
                'nome' => 'Carne de Aves Especiais',
            ),
            39 => 
            array (
                'id' => 44,
                'nome' => 'Carne de Aves Raras',
            ),
            40 => 
            array (
                'id' => 45,
            'nome' => 'Carne de Caça (Silvestres e Selvagens)',
            ),
            41 => 
            array (
                'id' => 48,
                'nome' => 'Carnes Nobres e Especiais',
            ),
            42 => 
            array (
                'id' => 49,
                'nome' => 'Carne de Coelho',
            ),
            43 => 
            array (
                'id' => 50,
                'nome' => 'Embutidos',
            ),
            44 => 
            array (
                'id' => 51,
                'nome' => 'Iguarias do Norte do Brasil: Peixes Amazônicos',
            ),
            45 => 
            array (
                'id' => 52,
                'nome' => 'Ingredientes Regionais Brasileiros',
            ),
            46 => 
            array (
                'id' => 53,
                'nome' => 'Produtos Árabes',
            ),
            47 => 
            array (
                'id' => 54,
                'nome' => 'Produtos Sírios',
            ),
            48 => 
            array (
                'id' => 55,
                'nome' => 'Produtos Libaneses',
            ),
            49 => 
            array (
                'id' => 56,
                'nome' => 'Produtos Judáicos',
            ),
            50 => 
            array (
                'id' => 57,
                'nome' => 'Produtos Franceses',
            ),
            51 => 
            array (
                'id' => 58,
                'nome' => 'Produtos Italianos',
            ),
            52 => 
            array (
                'id' => 59,
                'nome' => 'Produtos Mediterrâneos',
            ),
            53 => 
            array (
                'id' => 60,
                'nome' => 'Produtos Orientais',
            ),
            54 => 
            array (
                'id' => 61,
                'nome' => 'Produtos Japoneses',
            ),
            55 => 
            array (
                'id' => 62,
                'nome' => 'Produtos Típicos de Minas Gerais',
            ),
            56 => 
            array (
                'id' => 63,
                'nome' => 'Produtos Típicos do Nordeste',
            ),
            57 => 
            array (
                'id' => 64,
                'nome' => 'Bacalhau de Alta Qualidade, Secos e Molhados',
            ),
            58 => 
            array (
                'id' => 65,
                'nome' => 'Ostras de Cananéia',
            ),
            59 => 
            array (
                'id' => 66,
                'nome' => 'Ovas',
            ),
            60 => 
            array (
                'id' => 67,
                'nome' => 'Pescados Convencionais',
            ),
            61 => 
            array (
                'id' => 68,
                'nome' => 'Pescados Frescos Variados',
            ),
            62 => 
            array (
                'id' => 69,
                'nome' => 'Pescados Congelados Variados',
            ),
            63 => 
            array (
                'id' => 70,
                'nome' => 'Pescados Frescos Especiais',
            ),
            64 => 
            array (
                'id' => 71,
                'nome' => 'Pescados Congelados Especiais',
            ),
            65 => 
            array (
                'id' => 72,
                'nome' => 'Pescados Inteiros',
            ),
            66 => 
            array (
                'id' => 73,
                'nome' => 'Tinta de Lula',
            ),
            67 => 
            array (
                'id' => 74,
                'nome' => 'Conservas',
            ),
            68 => 
            array (
                'id' => 75,
                'nome' => 'Cebolinhas para Conserva',
            ),
            69 => 
            array (
                'id' => 76,
                'nome' => 'Alho Negro',
            ),
            70 => 
            array (
                'id' => 77,
                'nome' => 'Araruta Natural, sem aditivos químicos',
            ),
            71 => 
            array (
                'id' => 78,
                'nome' => 'Azeites',
            ),
            72 => 
            array (
                'id' => 79,
                'nome' => 'Chás',
            ),
            73 => 
            array (
                'id' => 80,
                'nome' => 'Escargots de Salvatore Loi',
            ),
            74 => 
            array (
                'id' => 81,
                'nome' => 'Farinhas de Diversas Qualidades e a Granel',
            ),
            75 => 
            array (
                'id' => 82,
                'nome' => 'Foie Gras',
            ),
            76 => 
            array (
                'id' => 83,
                'nome' => 'Goiabada-Cascão do Suflê do Carlota',
            ),
            77 => 
            array (
                'id' => 84,
                'nome' => 'Bananada de Tacho',
            ),
            78 => 
            array (
                'id' => 85,
                'nome' => 'Mandiocas e derivados',
            ),
            79 => 
            array (
                'id' => 86,
                'nome' => 'Manteiga Clarificada',
            ),
            80 => 
            array (
                'id' => 87,
                'nome' => 'Massa Philo',
            ),
            81 => 
            array (
                'id' => 88,
                'nome' => 'Massas',
            ),
            82 => 
            array (
                'id' => 89,
                'nome' => 'Molhos',
            ),
            83 => 
            array (
                'id' => 90,
                'nome' => 'Pães Indianos Nan',
            ),
            84 => 
            array (
                'id' => 91,
                'nome' => 'Palmito Juçara',
            ),
            85 => 
            array (
                'id' => 92,
                'nome' => 'Rotisseria',
            ),
            86 => 
            array (
                'id' => 93,
                'nome' => 'Sorvetes Exóticos',
            ),
            87 => 
            array (
                'id' => 94,
                'nome' => 'Vinagres',
            ),
            88 => 
            array (
                'id' => 95,
                'nome' => 'Pingas',
            ),
            89 => 
            array (
                'id' => 96,
                'nome' => 'Saquês',
            ),
            90 => 
            array (
                'id' => 97,
                'nome' => 'Bebidas Finas Importadas',
            ),
            91 => 
            array (
                'id' => 98,
                'nome' => 'Equipamentos para Restaurantes',
            ),
            92 => 
            array (
                'id' => 151,
                'nome' => 'Aves Orgânicas',
            ),
            93 => 
            array (
                'id' => 152,
                'nome' => 'Hortifruti Orgânico',
            ),
            94 => 
            array (
                'id' => 153,
                'nome' => 'Trufas e Derivados',
            ),
            95 => 
            array (
                'id' => 154,
                'nome' => 'Laticínio Especial e Feito å Mão',
            ),
            96 => 
            array (
                'id' => 155,
                'nome' => 'Pescados Defumados Especiais',
            ),
            97 => 
            array (
                'id' => 156,
                'nome' => 'Blinis',
            ),
            98 => 
            array (
                'id' => 157,
                'nome' => 'Sour Cream',
            ),
            99 => 
            array (
                'id' => 158,
                'nome' => 'Pimentas Variadas',
            ),
            100 => 
            array (
                'id' => 159,
                'nome' => 'Carnes Exóticas',
            ),
            101 => 
            array (
                'id' => 160,
                'nome' => 'Frutos do Mar Importados',
            ),
            102 => 
            array (
                'id' => 161,
                'nome' => 'Frutos do Mar Nacionais',
            ),
            103 => 
            array (
                'id' => 162,
                'nome' => 'Confit de Pato',
            ),
            104 => 
            array (
                'id' => 163,
                'nome' => 'Magret de Pato',
            ),
            105 => 
            array (
                'id' => 164,
                'nome' => 'Aromas',
            ),
            106 => 
            array (
                'id' => 165,
                'nome' => 'Carne de Suínos',
            ),
            107 => 
            array (
                'id' => 166,
            'nome' => 'Ervas e Temperos Orgânicos (Mudas)',
            ),
            108 => 
            array (
                'id' => 167,
                'nome' => 'Carne de Ovinos',
            ),
            109 => 
            array (
                'id' => 168,
            'nome' => 'Hortifruti Específico (cebola roxa, batatas, abóbora japonesa)',
            ),
            110 => 
            array (
                'id' => 169,
            'nome' => 'Hortifruti Específico (bananas variadas)',
            ),
            111 => 
            array (
                'id' => 170,
                'nome' => 'Hortifruti Selecionado',
            ),
            112 => 
            array (
                'id' => 171,
                'nome' => 'Caldos de Legumes',
            ),
            113 => 
            array (
                'id' => 172,
            'nome' => 'Carne Específica (costela)',
            ),
            114 => 
            array (
                'id' => 173,
            'nome' => 'Pescado Específico (lagosta)',
            ),
            115 => 
            array (
                'id' => 174,
                'nome' => 'Carne: Miúdos',
            ),
            116 => 
            array (
                'id' => 175,
                'nome' => 'Conservas Especiais',
            ),
            117 => 
            array (
                'id' => 176,
                'nome' => 'Conserva Específica: pescados em conserva de azeite',
            ),
            118 => 
            array (
                'id' => 177,
                'nome' => 'Óleos',
            ),
            119 => 
            array (
                'id' => 178,
            'nome' => 'Hortifruti Específico (mini-legumes e mini folhas)',
            ),
            120 => 
            array (
                'id' => 179,
            'nome' => 'Pescado Específico (saint pierre ou tilápia vermelha e tilápia prateada)',
            ),
            121 => 
            array (
                'id' => 180,
            'nome' => 'Aves Específicas (Patos Canard de Barbarie)',
            ),
            122 => 
            array (
                'id' => 181,
            'nome' => 'Aves Específicas (Galinhas D\'Angola e Codornas)',
            ),
            123 => 
            array (
                'id' => 182,
            'nome' => 'Carne de Caça Específica (javali)',
            ),
            124 => 
            array (
                'id' => 183,
            'nome' => 'Laticínio Específico (búfala)',
            ),
            125 => 
            array (
                'id' => 184,
                'nome' => 'Batatas Nacionais de Todos os Tipos',
            ),
            126 => 
            array (
                'id' => 185,
                'nome' => 'Frutas Exóticas',
            ),
            127 => 
            array (
                'id' => 186,
            'nome' => 'Condimentos Específicos (Indiano)',
            ),
            128 => 
            array (
                'id' => 187,
            'nome' => 'Pescado Específico (truta)',
            ),
        ));
        
        
    }
}