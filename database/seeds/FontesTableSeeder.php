<?php

use Illuminate\Database\Seeder;

class FontesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('fontes')->delete();
        
        \DB::table('fontes')->insert(array (
            0 => 
            array (
                'id' => 1,
                'nome' => 'BBel',
                'data' => '2012-06-09',
                'descricao' => '<p>Bebel Marrey</p>
<p>http://bbel.uol.com.br/culinaria.aspx</p>',
            ),
            1 => 
            array (
                'id' => 2,
                'nome' => 'Troisgros',
                'data' => '2012-07-12',
                'descricao' => '',
            ),
            2 => 
            array (
                'id' => 3,
                'nome' => 'Panelinha',
                'data' => '2012-07-12',
                'descricao' => '<p>http://panelinha.ig.com.br/site_novo/home/</p>',
            ),
            3 => 
            array (
                'id' => 4,
                'nome' => 'Heloisa Bacelar',
                'data' => '2012-07-12',
                'descricao' => '',
            ),
            4 => 
            array (
                'id' => 5,
                'nome' => 'Receita de Família',
                'data' => '2012-07-12',
                'descricao' => '',
            ),
            5 => 
            array (
                'id' => 6,
                'nome' => 'Livro - Legumes Vite Prêts, Marabout',
                'data' => '2012-07-12',
                'descricao' => '',
            ),
            6 => 
            array (
                'id' => 7,
                'nome' => 'Site Epicurious',
                'data' => '2012-07-12',
                'descricao' => '<p><span style="font-size: 12.0pt; font-family: Arial; mso-fareast-font-family: &quot;Times New Roman&quot;; mso-bidi-font-family: &quot;Times New Roman&quot;; mso-ansi-language: PT-BR; mso-fareast-language: PT-BR;">http://www.epicurious.com/recipes/food</span></p>',
            ),
            7 => 
            array (
                'id' => 8,
                'nome' => 'Site Mixirica',
                'data' => '2012-07-12',
                'descricao' => '<p>http://mixirica.uol.com.br/</p>',
            ),
            8 => 
            array (
                'id' => 9,
                'nome' => 'Paladar',
                'data' => '2012-07-12',
                'descricao' => '<p>http://www.estadao.com.br/suplementos/paladar/</p>',
            ),
            9 => 
            array (
                'id' => 10,
                'nome' => 'Site Mirepoix',
                'data' => '2012-07-12',
                'descricao' => '<p>http://chefdeboracordeiro.blogspot.com.br/</p>',
            ),
            10 => 
            array (
                'id' => 11,
                'nome' => 'Site Food 52',
                'data' => '2012-07-12',
                'descricao' => '<p>http://www.food52.com/</p>',
            ),
            11 => 
            array (
                'id' => 12,
                'nome' => 'Site Guia do Bebê',
                'data' => '2012-07-12',
                'descricao' => '<p>http://guiadobebe.uol.com.br</p>',
            ),
            12 => 
            array (
                'id' => 13,
                'nome' => 'Site Culinária Online',
                'data' => '2012-07-12',
                'descricao' => '<p>http://www.culinariaonline.com.br/</p>',
            ),
            13 => 
            array (
                'id' => 14,
                'nome' => 'Site Saborearte',
                'data' => '2012-07-12',
                'descricao' => '<p>http://www.saborearte.com.br/</p>',
            ),
            14 => 
            array (
                'id' => 15,
                'nome' => 'Site Caminhos da Roça',
                'data' => '2012-07-12',
                'descricao' => '<p>http://www.caminhosdaroca.com.br</p>',
            ),
            15 => 
            array (
                'id' => 16,
                'nome' => 'Site Elle France',
                'data' => '2012-07-12',
                'descricao' => '<p>http://www.elle.fr</p>',
            ),
            16 => 
            array (
                'id' => 17,
                'nome' => 'Site Recipe Source',
                'data' => '2012-07-12',
                'descricao' => '<p>http://www.recipesource.com/</p>',
            ),
            17 => 
            array (
                'id' => 18,
                'nome' => 'Site La Cucinetta',
                'data' => '2012-07-12',
                'descricao' => '<p>http://www.lacucinetta.com.br/</p>',
            ),
            18 => 
            array (
                'id' => 19,
                'nome' => 'Site 101 Cookbooks',
                'data' => '2012-07-12',
                'descricao' => '<p>http://www.101cookbooks.com/</p>',
            ),
            19 => 
            array (
                'id' => 20,
                'nome' => 'Site 80 Breakfasts',
                'data' => '2012-07-12',
                'descricao' => '<p>http://80breakfasts.blogspot.com.br/</p>',
            ),
            20 => 
            array (
                'id' => 21,
                'nome' => 'Site Bigode de Chocolate',
                'data' => '2012-07-12',
                'descricao' => '<p>http://bigodedechocolate.blogspot.com.br/</p>',
            ),
            21 => 
            array (
                'id' => 22,
                'nome' => 'Site Technicolor Kitchen',
                'data' => '2012-07-12',
                'descricao' => '<p>http://www.technicolorkitchen.blogspot.com.br/</p>',
            ),
            22 => 
            array (
                'id' => 23,
                'nome' => 'Site Lara Ferroni',
                'data' => '2012-07-12',
                'descricao' => '<p>http://www.laraferroni.com/</p>',
            ),
            23 => 
            array (
                'id' => 24,
                'nome' => 'Site Lara Ferroni',
                'data' => '2012-07-12',
                'descricao' => '<p>http://www.laraferroni.com/</p>',
            ),
            24 => 
            array (
                'id' => 25,
                'nome' => 'Site Cannelle et Vanille',
                'data' => '2012-07-12',
                'descricao' => '<p>http://www.cannellevanille.com/</p>',
            ),
            25 => 
            array (
                'id' => 26,
                'nome' => 'Site Tea and Weaten Bread',
                'data' => '2012-07-12',
                'descricao' => '<p>http://teandwheatenbread.blogspot.com.br/</p>',
            ),
            26 => 
            array (
                'id' => 27,
                'nome' => 'Site Recipe Muncher',
                'data' => '2012-07-12',
                'descricao' => '<p>http://www.recipemuncher.com/</p>',
            ),
            27 => 
            array (
                'id' => 28,
                'nome' => 'Site Gourmet',
                'data' => '2012-07-12',
                'descricao' => '<p>http://www.gourmet.com/food</p>',
            ),
            28 => 
            array (
                'id' => 29,
                'nome' => 'Site Food Gawker',
                'data' => '2012-07-12',
                'descricao' => '<p>http://foodgawker.com/</p>',
            ),
            29 => 
            array (
                'id' => 30,
                'nome' => 'Site da Tutu Galvão',
                'data' => '2012-07-13',
                'descricao' => '<p>http://tutugalvaobueno.blogspot.com.br</p>',
            ),
            30 => 
            array (
                'id' => 31,
                'nome' => 'Site Horta em Casa',
                'data' => '2012-07-13',
                'descricao' => '<p>http://www.hortaemcasa.com.br</p>',
            ),
            31 => 
            array (
                'id' => 32,
                'nome' => 'Site Livro de Receitas',
                'data' => '2012-07-13',
                'descricao' => '<p>http://www.livrodereceitas.com</p>',
            ),
            32 => 
            array (
                'id' => 33,
                'nome' => 'Site Cinara\'s Place',
                'data' => '2012-07-13',
                'descricao' => '<p>http://cinarasplace.blogspot.com.br</p>',
            ),
            33 => 
            array (
                'id' => 34,
                'nome' => 'Site Key Ingredient',
                'data' => '2012-07-13',
                'descricao' => '<p>http://www.keyingredient.com</p>',
            ),
            34 => 
            array (
                'id' => 35,
                'nome' => 'Site Tartuf Langhe',
                'data' => '2012-07-13',
                'descricao' => '<p>http://tartuflanghe.com</p>',
            ),
            35 => 
            array (
                'id' => 36,
                'nome' => 'Site Bottarga Gold',
                'data' => '2012-07-13',
                'descricao' => '<p>http://www.bottargagold.com</p>',
            ),
            36 => 
            array (
                'id' => 37,
                'nome' => 'Site 750 Grammes',
                'data' => '2012-07-13',
                'descricao' => '<p>http://www.750g.com</p>',
            ),
            37 => 
            array (
                'id' => 38,
                'nome' => 'Site Slow Food Brasil',
                'data' => '2012-07-13',
                'descricao' => '<p>http://www.slowfoodbrasil.com</p>',
            ),
            38 => 
            array (
                'id' => 39,
                'nome' => 'Site Lentilhas Foods and Funs',
                'data' => '2012-07-13',
                'descricao' => '<p>http://lentilhas.wordpress.com</p>',
            ),
            39 => 
            array (
                'id' => 40,
                'nome' => 'Site Whole Foods Market',
                'data' => '2012-07-13',
                'descricao' => '<p>http://www.wholefoodsmarket.com</p>',
            ),
            40 => 
            array (
                'id' => 41,
                'nome' => 'Site Tudo Gostoso',
                'data' => '2012-07-13',
                'descricao' => '<p>http://tudogostoso.uol.com.br</p>',
            ),
            41 => 
            array (
                'id' => 42,
                'nome' => 'Site Think Food',
                'data' => '2012-07-13',
                'descricao' => '<p>http://thinkfood.com.br</p>',
            ),
            42 => 
            array (
                'id' => 43,
                'nome' => 'Site Home Food',
                'data' => '2012-07-13',
                'descricao' => '<p>http://www.homefood.it</p>',
            ),
            43 => 
            array (
                'id' => 44,
                'nome' => 'Site Família Orgânica',
                'data' => '2012-07-13',
                'descricao' => '<p>http://familiaorganica.blogspot.com.br</p>',
            ),
            44 => 
            array (
                'id' => 45,
                'nome' => 'Site Na Minha Panela',
                'data' => '2012-07-13',
                'descricao' => '<p>http://naminhapanela.com</p>',
            ),
            45 => 
            array (
                'id' => 46,
                'nome' => 'Site Chocolatria',
                'data' => '2012-07-13',
                'descricao' => '<p>http://www.chocolatria.com</p>',
            ),
            46 => 
            array (
                'id' => 47,
                'nome' => 'Site Food Buzz',
                'data' => '2012-07-13',
                'descricao' => '<p>http://www.foodbuzz.com</p>',
            ),
            47 => 
            array (
                'id' => 48,
                'nome' => 'Site Gourmet Viajante',
                'data' => '2012-07-13',
                'descricao' => '<p>http://www.gourmetviajante.com.br</p>',
            ),
            48 => 
            array (
                'id' => 49,
                'nome' => 'Olivier Anquier',
                'data' => '2012-07-13',
                'descricao' => '<p>http://www.olivieranquier.com.br</p>',
            ),
            49 => 
            array (
                'id' => 50,
                'nome' => 'Site Cogumelos Online',
                'data' => '2012-07-13',
                'descricao' => '<p>http://www.cogumelosonline.com.br</p>',
            ),
            50 => 
            array (
                'id' => 51,
                'nome' => 'Site Fava de Baunilha',
                'data' => '2012-07-13',
                'descricao' => '<p>http://favadebaunilha.blogspot.com.br</p>',
            ),
            51 => 
            array (
                'id' => 52,
                'nome' => 'Site Capricoop',
                'data' => '2012-07-13',
                'descricao' => '<p>http://www.capricoop.com.br</p>',
            ),
            52 => 
            array (
                'id' => 53,
                'nome' => 'Site Companhia das Ervas',
                'data' => '2012-07-13',
                'descricao' => '<p>http://www.ciadaservas.com.br</p>',
            ),
            53 => 
            array (
                'id' => 54,
                'nome' => 'Site Frigideiras',
                'data' => '2012-07-13',
                'descricao' => '<p>http://www.frigideiras.com</p>',
            ),
            54 => 
            array (
                'id' => 55,
                'nome' => 'Site Nossas Receitas',
                'data' => '2012-07-13',
                'descricao' => '<p>http://nossasreceitas.com</p>',
            ),
            55 => 
            array (
                'id' => 56,
                'nome' => 'Blog Fava de Baunilha',
                'data' => '2012-09-11',
                'descricao' => '<p>Algumas pessoas que escrevem receitas para o site:</p>
<ul>
<li>Manuela Romanelli</li>
</ul>',
            ),
            56 => 
            array (
                'id' => 57,
                'nome' => 'Jorge Amado',
                'data' => '2012-09-11',
                'descricao' => '<p>Tieta do Agreste</p>',
            ),
            57 => 
            array (
                'id' => 58,
                'nome' => 'Site Adriana Aranha',
                'data' => '2012-09-11',
                'descricao' => '',
            ),
            58 => 
            array (
                'id' => 59,
                'nome' => 'Faculdade Anhembi Morumbi',
                'data' => '2012-09-12',
                'descricao' => '',
            ),
            59 => 
            array (
                'id' => 60,
                'nome' => 'Blog Tá na Mesa',
                'data' => '2012-09-12',
                'descricao' => '<p>http://blogtanamesa.wordpress.com</p>',
            ),
            60 => 
            array (
                'id' => 61,
                'nome' => 'Juliana Corteze',
                'data' => '2012-09-14',
                'descricao' => '',
            ),
            61 => 
            array (
                'id' => 62,
                'nome' => 'Revista Gosto',
                'data' => '2012-09-14',
                'descricao' => '',
            ),
            62 => 
            array (
                'id' => 63,
                'nome' => 'Shirley Gill',
                'data' => '2012-09-14',
                'descricao' => '',
            ),
        ));
        
        
    }
}