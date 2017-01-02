<?php

use Illuminate\Database\Seeder;

class ReceitasTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('receitas')->delete();
        
        \DB::table('receitas')->insert(array (
            0 => 
            array (
                'id' => 2,
                'nome' => 'Molho de Tomate',
                'tipo_receita_id' => 27,
                'data' => NULL,
                'congela' => 180,
                'bebida_id' => 0,
                'fonte_id' => 1,
                'picture_file_name' => NULL,
                'qtd_porcao' => NULL,
                'preparo' => '<p class="MsoNormal" style="margin-top: .1pt; margin-right: 0cm; margin-bottom: .1pt; margin-left: 0cm; mso-para-margin-top: .01gd; mso-para-margin-right: 0cm; mso-para-margin-bottom: .01gd; mso-para-margin-left: 0cm;">Lavar bem os tomates com uma escovinha para legumes e deix&aacute;-los de molho por 10 minutos no Hydrosteril. Depois, tirar as sementes e cortar em cubinhos.<br />Lavar as cebolas, descascar e ralar.</p>
<p class="MsoNormal" style="margin-top: .1pt; margin-right: 0cm; margin-bottom: .1pt; margin-left: 0cm; mso-para-margin-top: .01gd; mso-para-margin-right: 0cm; mso-para-margin-bottom: .01gd; mso-para-margin-left: 0cm;">Lavar os alhos, descascar, tirar o fio branco central de cada dente e esprem&ecirc;-los.</p>
<p class="MsoNormal" style="margin-top: .1pt; margin-right: 0cm; margin-bottom: .1pt; margin-left: 0cm; mso-para-margin-top: .01gd; mso-para-margin-right: 0cm; mso-para-margin-bottom: .01gd; mso-para-margin-left: 0cm;">Lavar bem os ramos de salsa e deix&aacute;-los junto com os tomates de molho por 10 minutos no Hydrosteril. Depois, com um barbante, amarrar os 8 ramos juntos, pois ser&atilde;o retirados do molho ao final.</p>
<p class="MsoNormal" style="margin-top: .1pt; margin-right: 0cm; margin-bottom: .1pt; margin-left: 0cm; mso-para-margin-top: .01gd; mso-para-margin-right: 0cm; mso-para-margin-bottom: .01gd; mso-para-margin-left: 0cm;">Em uma panela, colocar as cebolas, o alho, o azeite e o &oacute;leo. Deixar dourar um pouco.<br /> Acrescentar os tomates, o a&ccedil;&uacute;car, as ervas finas, o louro, os ramos de salsa, o leite, o sal e a pimenta dedo-de-mo&ccedil;a inteira. Deixar ferver bem at&eacute; o molho ficar bem encorpado.<br /> Retirar a panela do fogo, retirar as folhas de louro, a pimenta vermelha dedo-de-mo&ccedil;a e o amarrado de salsa, levar ao liquidificador e bater bem.</p>
<p class="MsoNormal" style="margin-top: .1pt; margin-right: 0cm; margin-bottom: .1pt; margin-left: 0cm; mso-para-margin-top: .01gd; mso-para-margin-right: 0cm; mso-para-margin-bottom: .01gd; mso-para-margin-left: 0cm;">Deixar esfriar, distribuir em v&aacute;rios potes, deixar um na geladeira para ser usado e levar os outros ao <em>freezer</em> para congelar.</p>
<p class="MsoNormal" style="margin-top: .1pt; margin-right: 0cm; margin-bottom: .1pt; margin-left: 0cm; mso-para-margin-top: .01gd; mso-para-margin-right: 0cm; mso-para-margin-bottom: .01gd; mso-para-margin-left: 0cm;">Pode-se usar tamb&eacute;m forminhas de gelo para congelar o molho em pequenas por&ccedil;&otilde;es. Depois de congelados os cubinhos, retire-os das forminhas de gelo e coloque-os em um saco pl&aacute;stico para congelamento, bem fechado e amarrado. Quando precisar, tire a quantidade necess&aacute;ria.</p>
<p><span style="font-size: 12.0pt; font-family: Arial; mso-fareast-font-family: &quot;Times New Roman&quot;; mso-bidi-font-family: &quot;Times New Roman&quot;; mso-ansi-language: PT-BR; mso-fareast-language: PT-BR; mso-bidi-language: AR-SA;">&nbsp;</span></p>',
                'historico' => '',
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 3,
                'nome' => 'Caldo de Frango Elaborado',
                'tipo_receita_id' => 1,
                'data' => NULL,
                'congela' => NULL,
                'bebida_id' => 0,
                'fonte_id' => 0,
                'picture_file_name' => NULL,
                'qtd_porcao' => NULL,
                'preparo' => '<ol>
<li><span style="mso-bidi-font-family: Verdana; font-variant: small-caps; mso-ansi-language: EN-US;" lang="EN-US">Antes de qualquer coisa, para limpar as impurezas, coloque as carcassas numa &aacute;gua fervendo por 5 minutos, tire desta </span><span style="mso-bidi-font-family: Verdana; font-variant: small-caps; mso-ansi-language: EN-US;" lang="EN-US">&aacute;gua</span><span style="mso-bidi-font-family: Verdana; font-variant: small-caps; mso-ansi-language: EN-US;" lang="EN-US"> e lave bem debaixo da torneira com </span><span style="mso-bidi-font-family: Verdana; font-variant: small-caps; mso-ansi-language: EN-US;" lang="EN-US">&aacute;gua</span><span style="mso-bidi-font-family: Verdana; font-variant: small-caps; mso-ansi-language: EN-US;" lang="EN-US"> fria corrente, limpando sangue e impurezas.</span></li>
<li><span style="mso-bidi-font-family: Verdana; font-variant: small-caps; mso-ansi-language: EN-US;" lang="EN-US">Numa panela, coloque os 5 litros de </span><span style="mso-bidi-font-family: Verdana; font-variant: small-caps; mso-ansi-language: EN-US;" lang="EN-US">&aacute;gua</span><span style="mso-bidi-font-family: Verdana; font-variant: small-caps; mso-ansi-language: EN-US;" lang="EN-US">, as carcassas e leve &aring; ebuli&ccedil;&atilde;o.</span></li>
<li><span style="mso-bidi-font-family: Verdana; font-variant: small-caps; mso-ansi-language: EN-US;" lang="EN-US">Passe a escumadeira e retire toda a espuma e sujeirinha que subiu para a superf&iacute;cie. Jogue fora.</span></li>
<li><span style="mso-bidi-font-family: Verdana; font-variant: small-caps; mso-ansi-language: EN-US;" lang="EN-US">prepare as cebolas <em>piquet</em> e o <em>bouquet garni </em>(abaixo descri&ccedil;&atilde;o)<br /></span></li>
<li><span style="mso-bidi-font-family: Verdana; font-variant: small-caps; mso-ansi-language: EN-US;" lang="EN-US">Junte, ent&atilde;o, o alho-porr&oacute;, o sals&atilde;o e a cenoura picados grosseiramente. Junte tamb&eacute;m as cebolas <em>piquet</em> e o <em>bouquet garni</em>.</span></li>
<li><span style="mso-bidi-font-family: Verdana; font-variant: small-caps; mso-ansi-language: EN-US;" lang="EN-US">Coloque sal, pimenta e deixe tudo cozinhando devagar, em fogo baixo, por 2 a 3 horas. </span></li>
<li><span style="mso-bidi-font-family: Verdana; font-variant: small-caps; mso-ansi-language: EN-US;" lang="EN-US">Neste tempo, enquanto est&aacute; cozinhando, v&aacute; retirando toda a gordura que eventualmente suba &aring; superf&iacute;cie. Para isso, use a escumadeira.</span></li>
<li><span style="mso-bidi-font-family: Verdana; font-variant: small-caps; mso-ansi-language: EN-US;" lang="EN-US">Ao final do tempo, passe o caldo pelo <em>chinois</em>. Se for utiliz</span><span style="mso-bidi-font-family: Verdana; font-variant: small-caps; mso-ansi-language: EN-US;" lang="EN-US">&aacute;</span><span style="mso-bidi-font-family: Verdana; font-variant: small-caps; mso-ansi-language: EN-US;" lang="EN-US">-lo de imediato, fa&ccedil;a-o. Caso contr&aacute;rio, esfrie o caldo, coloque-o em forminhas de gelo, congele e depois de congelados, desenforme e guarde congelado, dentro de sacos pl&aacute;sticos ou <em>tupperware</em> dentro do congelador para uso posterior.</span></li>
</ol>
<p class="MsoNormal" style="line-height: 150%;"><em><strong><span style="font-variant: small-caps;" lang="EN-US">Bouquet Garni</span></strong></em></p>
<p class="MsoNormal" style="line-height: 150%;"><span style="mso-bidi-font-family: Verdana; font-variant: small-caps; mso-ansi-language: EN-US;" lang="EN-US">1 ramo de tomilho </span></p>
<p class="MsoNormal" style="line-height: 150%;"><span style="mso-bidi-font-family: Verdana; font-variant: small-caps; mso-ansi-language: EN-US;" lang="EN-US">1 ramo de alecrim </span></p>
<p class="MsoNormal" style="line-height: 150%;"><span style="mso-bidi-font-family: Verdana; font-variant: small-caps; mso-ansi-language: EN-US;" lang="EN-US">1 talo de salsa </span></p>
<p class="MsoNormal" style="line-height: 150%;"><span style="mso-bidi-font-family: Verdana; font-variant: small-caps; mso-ansi-language: EN-US;" lang="EN-US">1 folha de louro</span></p>
<p class="MsoNormal" style="line-height: 150%;"><span style="mso-bidi-font-family: Verdana; font-variant: small-caps; mso-ansi-language: EN-US;" lang="EN-US">3 gr&atilde;os de pimenta do reino branca amassados</span></p>
<p class="MsoNormal" style="line-height: 150%;"><span style="mso-bidi-font-family: Verdana; font-variant: small-caps; mso-ansi-language: EN-US;" lang="EN-US">1 folha de alho-porr&oacute; para embrulhar tudo<br /></span></p>
<p class="MsoNormal" style="line-height: 150%;"><span style="mso-bidi-font-family: Verdana; font-variant: small-caps; mso-ansi-language: EN-US;" lang="EN-US">enrolar tudo dentro da folha do alho-porr&oacute; e amarrar bem com um barbante. apertar bem.</span></p>
<p class="MsoNormal" style="line-height: 150%;"><strong><span style="font-variant: small-caps;" lang="EN-US">cebola <em>piquet </em></span></strong><span style="font-variant: small-caps;" lang="EN-US">&eacute; </span><span style="font-variant: small-caps;" lang="EN-US">uma cebola espetada de cravos para dar sabor ao preparo de alguns pratos.<br /></span></p>',
                'historico' => '',
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 4,
                'nome' => 'Caldo de Frango Simples',
                'tipo_receita_id' => 1,
                'data' => NULL,
                'congela' => 30,
                'bebida_id' => 0,
                'fonte_id' => 0,
                'picture_file_name' => NULL,
                'qtd_porcao' => NULL,
                'preparo' => '<ol>
<li><span style="mso-bidi-font-family: Verdana; font-variant: small-caps; mso-ansi-language: EN-US;" lang="EN-US">Antes de qualquer coisa, para limpar as impurezas, coloque as carca&ccedil;as numa &aacute;gua fervendo por 5 minutos, tire desta </span><span style="mso-bidi-font-family: Verdana; font-variant: small-caps; mso-ansi-language: EN-US;" lang="EN-US">&aacute;gua</span><span style="mso-bidi-font-family: Verdana; font-variant: small-caps; mso-ansi-language: EN-US;" lang="EN-US"> e lave bem debaixo da torneira com </span><span style="mso-bidi-font-family: Verdana; font-variant: small-caps; mso-ansi-language: EN-US;" lang="EN-US">&aacute;gua</span><span style="mso-bidi-font-family: Verdana; font-variant: small-caps; mso-ansi-language: EN-US;" lang="EN-US"> fria corrente, limpando sangue e impurezas.</span></li>
<li><span style="mso-bidi-font-family: Verdana; font-variant: small-caps; mso-ansi-language: EN-US;" lang="EN-US">coloque o frango em uma panela e cubra totalmente com &aacute;gua. Acrescente a cenoura, a cebola, o sals&atilde;o e as ervas picados grosseiramente. </span></li>
<li><span style="mso-bidi-font-family: Verdana; font-variant: small-caps; mso-ansi-language: EN-US;" lang="EN-US">cozinhe por 30 a 40 minutos e coe com a ajuda de um <em>chinois</em>.</span></li>
<li><span style="mso-bidi-font-family: Verdana; font-variant: small-caps; mso-ansi-language: EN-US;" lang="EN-US">Ao final do tempo, passe o caldo pelo <em>chinois</em>. Se for utiliz</span><span style="mso-bidi-font-family: Verdana; font-variant: small-caps; mso-ansi-language: EN-US;" lang="EN-US">&aacute;</span><span style="mso-bidi-font-family: Verdana; font-variant: small-caps; mso-ansi-language: EN-US;" lang="EN-US">-lo  de imediato, fa&ccedil;a-o. Caso contr&aacute;rio, esfrie o caldo, coloque-o em  forminhas de gelo, congele e depois de congelados, desenforme e guarde  congelado, dentro de sacos pl&aacute;sticos ou <em>tupperware</em> dentro do congelador para uso posterior.</span></li>
</ol><ol> </ol>',
                'historico' => '',
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 5,
                'nome' => 'Caldo de Legumes',
                'tipo_receita_id' => 1,
                'data' => NULL,
                'congela' => 30,
                'bebida_id' => 0,
                'fonte_id' => 0,
                'picture_file_name' => NULL,
                'qtd_porcao' => NULL,
                'preparo' => '<p class="MsoNormal" style="line-height: 150%;"><span style="mso-bidi-font-family: Verdana; font-variant: small-caps; mso-ansi-language: EN-US;" lang="EN-US">Cortar a cenoura, a cebola, o sals&atilde;o e o alho-porr&oacute; em peda&ccedil;os grandes.</span></p>
<p class="MsoNormal" style="line-height: 150%;"><span style="mso-bidi-font-family: Verdana; font-variant: small-caps; mso-ansi-language: EN-US;" lang="EN-US">Coloc&aacute;-los em uma panela juntamente com as folhas de louro e os dentes de alho (pode ser com casca).</span></p>
<p class="MsoNormal" style="line-height: 150%;"><span style="mso-bidi-font-family: Verdana; font-variant: small-caps; mso-ansi-language: EN-US;" lang="EN-US">Juntar o vinho branco e deixar ferver.</span></p>
<p class="MsoNormal" style="line-height: 150%;"><span style="mso-bidi-font-family: Verdana; font-variant: small-caps; mso-ansi-language: EN-US;" lang="EN-US">Assim que ferver, adicionar os 2 litros de &aacute;gua e deixar fervendo por aproximadamente 40 minutos.</span></p>
<p class="MsoNormal" style="line-height: 150%;"><span style="mso-bidi-font-family: Verdana; font-variant: small-caps; mso-ansi-language: EN-US;" lang="EN-US">ap&oacute;s os 40 minutos, os legumes estar&atilde;o cozidos e o caldo bem saboroso e perfumado. coar o caldo.</span></p>
<p class="MsoNormal" style="line-height: 150%;"><span style="mso-bidi-font-family: Verdana; font-variant: small-caps; mso-ansi-language: EN-US;" lang="EN-US">se for utiliz&aacute;-lo de imediato, fa&ccedil;a-o. caso contr&aacute;rio, esfrie o caldo, coloque em forminhas de gelo, congele e depois de congelados, desenforme e guarde congelado, dentro de sacos pl&aacute;sticos ou <em>tupperware</em>, dentro do congelador, para uso posterior.<br /></span></p>',
                'historico' => '',
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 6,
            'nome' => 'Caldo de Carne Claro (3 litros)',
                'tipo_receita_id' => 1,
                'data' => NULL,
                'congela' => 30,
                'bebida_id' => 0,
                'fonte_id' => 0,
                'picture_file_name' => NULL,
                'qtd_porcao' => NULL,
                'preparo' => '<ol>
<li><span style="mso-bidi-font-family: Verdana; font-variant: small-caps; mso-ansi-language: EN-US;" lang="EN-US">Antes de qualquer coisa, para limpar as impurezas, coloque os ossos numa &aacute;gua fervendo por 5 minutos, tire desta </span><span style="mso-bidi-font-family: Verdana; font-variant: small-caps; mso-ansi-language: EN-US;" lang="EN-US">&aacute;gua</span><span style="mso-bidi-font-family: Verdana; font-variant: small-caps; mso-ansi-language: EN-US;" lang="EN-US"> e lave bem debaixo da torneira com </span><span style="mso-bidi-font-family: Verdana; font-variant: small-caps; mso-ansi-language: EN-US;" lang="EN-US">&aacute;gua</span><span style="mso-bidi-font-family: Verdana; font-variant: small-caps; mso-ansi-language: EN-US;" lang="EN-US"> fria corrente, limpando sangue e impurezas.</span></li>
<li><span style="mso-bidi-font-family: Verdana; font-variant: small-caps; mso-ansi-language: EN-US;" lang="EN-US">Numa panela, coloque os 5 litros de </span><span style="mso-bidi-font-family: Verdana; font-variant: small-caps; mso-ansi-language: EN-US;" lang="EN-US">&aacute;gua</span><span style="mso-bidi-font-family: Verdana; font-variant: small-caps; mso-ansi-language: EN-US;" lang="EN-US">, os ossos e leve &aring; ebuli&ccedil;&atilde;o.</span></li>
<li><span style="mso-bidi-font-family: Verdana; font-variant: small-caps; mso-ansi-language: EN-US;" lang="EN-US">Passe a escumadeira e retire toda a espuma e sujeirinha que subiu para a superf&iacute;cie. Jogue fora.</span></li>
<li><span style="mso-bidi-font-family: Verdana; font-variant: small-caps; mso-ansi-language: EN-US;" lang="EN-US">Junte, ent&atilde;o, o alho-porr&oacute;, o sals&atilde;o e a cenoura picados grosseiramente. Junte tamb&eacute;m as cebolas <em>piquet</em> e o <em>bouquet garni</em>.</span></li>
<li><span style="mso-bidi-font-family: Verdana; font-variant: small-caps; mso-ansi-language: EN-US;" lang="EN-US">Coloque sal, pimenta e deixe tudo cozinhando devagar, em fogo baixo, por 5 a 7 horas. </span></li>
<li><span style="mso-bidi-font-family: Verdana; font-variant: small-caps; mso-ansi-language: EN-US;" lang="EN-US">Neste tempo, enquanto est&aacute; cozinhando, v&aacute; retirando toda a gordura que eventualmente suba a superf&iacute;cie. Para isso, use a escumadeira.</span></li>
<li><span style="mso-bidi-font-family: Verdana; font-variant: small-caps; mso-ansi-language: EN-US;" lang="EN-US">ao final do tempo, passe o caldo pelo <em>chinois</em>. se for utiliz&aacute;-lo de imediato, fa&ccedil;a-o. caso contr&aacute;rio, esfrie o caldo, coloque-o em forminhas de gelo, congele e depois de congelado, desenforme e guarde congelado dentro de sacos pl&aacute;sticos ou <em>tupperware</em>, dentro do congelador para uso posterior.<br /></span></li>
</ol>',
                'historico' => '',
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 8,
                'nome' => 'Tomates Confit',
                'tipo_receita_id' => 14,
                'data' => NULL,
                'congela' => NULL,
                'bebida_id' => 0,
                'fonte_id' => 56,
                'picture_file_name' => NULL,
                'qtd_porcao' => 2,
                'preparo' => '<ol>
<li> <!--  /* Font Definitions */ @font-face 	{font-family:Arial; 	panose-1:2 11 6 4 2 2 2 2 2 4; 	mso-font-charset:0; 	mso-generic-font-family:auto; 	mso-font-pitch:variable; 	mso-font-signature:-536859905 -1073711037 9 0 511 0;} @font-face 	{font-family:Verdana; 	panose-1:2 11 6 4 3 5 4 4 2 4; 	mso-font-charset:0; 	mso-generic-font-family:auto; 	mso-font-pitch:variable; 	mso-font-signature:-1593833729 1073750107 16 0 415 0;} @font-face 	{font-family:"Cambria Math"; 	panose-1:2 4 5 3 5 4 6 3 2 4; 	mso-font-charset:0; 	mso-generic-font-family:auto; 	mso-font-pitch:variable; 	mso-font-signature:-536870145 1107305727 0 0 415 0;}  /* Style Definitions */ p.MsoNormal, li.MsoNormal, div.MsoNormal 	{mso-style-unhide:no; 	mso-style-qformat:yes; 	mso-style-parent:""; 	margin:0cm; 	margin-bottom:.0001pt; 	mso-pagination:widow-orphan; 	font-size:12.0pt; 	font-family:Arial; 	mso-fareast-font-family:"Times New Roman"; 	mso-bidi-font-family:"Times New Roman"; 	mso-fareast-language:PT-BR;} .MsoChpDefault 	{mso-style-type:export-only; 	mso-default-props:yes;} @page WordSection1 	{size:612.0pt 792.0pt; 	margin:72.0pt 90.0pt 72.0pt 90.0pt; 	mso-header-margin:36.0pt; 	mso-footer-margin:36.0pt; 	mso-paper-source:0;} div.WordSection1 	{page:WordSection1;} --> <span style="mso-bidi-font-family: Verdana; font-variant: small-caps; mso-ansi-language: EN-US;" lang="EN-US">lave bem e higienize os tomates</span></li>
<li><span style="mso-bidi-font-family: Verdana; font-variant: small-caps; mso-ansi-language: EN-US;" lang="EN-US">Corte os tomates em quatro, retire e descarte as sementes</span></li>
<li><span style="mso-bidi-font-family: Verdana; font-variant: small-caps; mso-ansi-language: EN-US;" lang="EN-US">Em um tabuleiro, coloque os tomates com a pele virada para cima. Tempere com sal, pimenta, uma pitada de a&ccedil;&uacute;car e alho. Regue com um bom azeite e asse por aproximadamente 40 minutos a 180 graus</span></li>
<li><span style="mso-bidi-font-family: Verdana; font-variant: small-caps; mso-ansi-language: EN-US;" lang="EN-US">Retire do&nbsp;forno e mexa um pouco</span></li>
<li><span style="mso-bidi-font-family: Verdana; font-variant: small-caps; mso-ansi-language: EN-US;" lang="EN-US">montagem: em um prato, coloque a mussarela de b&uacute;fala no centro, com a r&uacute;cula e os tomates <em>confit</em> em volta. regue com um bom azeite e sirva<br /></span></li>
</ol>',
                'historico' => '',
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 9,
                'nome' => 'Linguine com Vieiras',
                'tipo_receita_id' => 12,
                'data' => NULL,
                'congela' => NULL,
                'bebida_id' => 0,
                'fonte_id' => 56,
                'picture_file_name' => NULL,
                'qtd_porcao' => 2,
                'preparo' => '<ol>
<li><span style="mso-bidi-font-family: Verdana; font-variant: small-caps; mso-ansi-language: EN-US;" lang="EN-US">lave, higienize a cebola, o lim&atilde;o e a salsa</span></li>
<li><span style="mso-bidi-font-family: Verdana; font-variant: small-caps; mso-ansi-language: EN-US;" lang="EN-US">corte a cebola em rodelas bem finas</span></li>
<li><span style="mso-bidi-font-family: Verdana; font-variant: small-caps; mso-ansi-language: EN-US;" lang="EN-US">raspe a casca do lim&atilde;o e esprema o suco dele. reserve ambos</span></li>
<li><span style="mso-bidi-font-family: Verdana; font-variant: small-caps; mso-ansi-language: EN-US;" lang="EN-US">pique bem pequenininho a salsinha<br /></span></li>
<li><span style="mso-bidi-font-family: Verdana; font-variant: small-caps; mso-ansi-language: EN-US;" lang="EN-US">Cozinhe a massa em &aacute;gua com sal pelo tempo indicado na embalagem. Escorra e reserve</span></li>
<li><span style="mso-bidi-font-family: Verdana; font-variant: small-caps; mso-ansi-language: EN-US;" lang="EN-US">Em uma panela, derreta a manteiga e coloque as rodelas de cebola. Deixe fritar</span></li>
<li><span style="mso-bidi-font-family: Verdana; font-variant: small-caps; mso-ansi-language: EN-US;" lang="EN-US">Em uma tigela, tempere as vieiras com o suco do lim&atilde;o, sal e pimenta do reino mo&iacute;da na hora, reserve</span></li>
<li><span style="mso-bidi-font-family: Verdana; font-variant: small-caps; mso-ansi-language: EN-US;" lang="EN-US">Adicione as raspas de lim&atilde;o &agrave; panela com a cebola. Quando a cebola estiver moreninha, coloque as vieiras e sele por 30 segundos de cada lado</span></li>
<li><span style="mso-bidi-font-family: Verdana; font-variant: small-caps; mso-ansi-language: EN-US;" lang="EN-US">Adicione a massa na panela com as vieiras. Jogue a salsinha picada e sirva</span></li>
</ol>',
                'historico' => '',
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 10,
                'nome' => 'Massa Podre Salgada para Torta e Empada',
                'tipo_receita_id' => 1,
                'data' => NULL,
                'congela' => NULL,
                'bebida_id' => 0,
                'fonte_id' => 5,
                'picture_file_name' => NULL,
                'qtd_porcao' => NULL,
                'preparo' => '<ol>
<li> &lt;!--  /* Font Definitions */ @font-face 	{font-family:Arial; 	panose-1:2 11 6 4 2 2 2 2 2 4; 	mso-font-charset:0; 	mso-generic-font-family:auto; 	mso-font-pitch:variable; 	mso-font-signature:-536859905 -1073711037 9 0 511 0;} @font-face 	{font-family:"Cambria Math"; 	panose-1:2 4 5 3 5 4 6 3 2 4; 	mso-font-charset:0; 	mso-generic-font-family:auto; 	mso-font-pitch:variable; 	mso-font-signature:-536870145 1107305727 0 0 415 0;}  /* Style Definitions */ p.MsoNormal, li.MsoNormal, div.MsoNormal 	{mso-style-unhide:no; 	mso-style-qformat:yes; 	mso-style-parent:""; 	margin:0cm; 	margin-bottom:.0001pt; 	mso-pagination:widow-orphan; 	font-size:12.0pt; 	font-family:Arial; 	mso-fareast-font-family:"Times New Roman"; 	mso-bidi-font-family:"Times New Roman"; 	mso-fareast-language:PT-BR;} .MsoChpDefault 	{mso-style-type:export-only; 	mso-default-props:yes;} @page WordSection1 	{size:612.0pt 792.0pt; 	margin:72.0pt 90.0pt 72.0pt 90.0pt; 	mso-header-margin:36.0pt; 	mso-footer-margin:36.0pt; 	mso-paper-source:0;} div.WordSection1 	{page:WordSection1;} --&gt;      <span style="font-size: 12.0pt; font-family: Arial; mso-fareast-font-family: &quot;Times New Roman&quot;; mso-bidi-font-family: &quot;Times New Roman&quot;; mso-ansi-language: PT-BR; mso-fareast-language: PT-BR; mso-bidi-language: AR-SA;">Misturar a farinha com a margarina e o sal. Amassar bem.</span></li>
<li><span style="font-size: 12.0pt; font-family: Arial; mso-fareast-font-family: &quot;Times New Roman&quot;; mso-bidi-font-family: &quot;Times New Roman&quot;; mso-ansi-language: PT-BR; mso-fareast-language: PT-BR; mso-bidi-language: AR-SA;">Acrescentar as gemas e amassar bem.</span></li>
<li><span style="font-size: 12.0pt; font-family: Arial; mso-fareast-font-family: &quot;Times New Roman&quot;; mso-bidi-font-family: &quot;Times New Roman&quot;; mso-ansi-language: PT-BR; mso-fareast-language: PT-BR; mso-bidi-language: AR-SA;">Deixar a massa homog&ecirc;nea, formar uma bola, embrulhar no filme pl&aacute;stico e levar &aring; geladeira para gelar um pouco antes do manuseio.</span></li>
<li><span style="font-size: 12.0pt; font-family: Arial; mso-fareast-font-family: &quot;Times New Roman&quot;; mso-bidi-font-family: &quot;Times New Roman&quot;; mso-ansi-language: PT-BR; mso-fareast-language: PT-BR; mso-bidi-language: AR-SA;">Para us&aacute;-la, pegue pequenos peda&ccedil;os, abra com os dedos para que fique bem fina e v&aacute; colocando na forma de fundo solto at&eacute; cobr&iacute;-la completamente.</span></li>
<li><span style="font-size: 12.0pt; font-family: Arial; mso-fareast-font-family: &quot;Times New Roman&quot;; mso-bidi-font-family: &quot;Times New Roman&quot;; mso-ansi-language: PT-BR; mso-fareast-language: PT-BR; mso-bidi-language: AR-SA;">Fa&ccedil;a furinhos com um garfo e d&ecirc; uma pr&eacute;-assada na massa, antes de colocar o recheio desejado.</span></li>
<li><span style="font-size: 12.0pt; font-family: Arial; mso-fareast-font-family: &quot;Times New Roman&quot;; mso-bidi-font-family: &quot;Times New Roman&quot;; mso-ansi-language: PT-BR; mso-fareast-language: PT-BR; mso-bidi-language: AR-SA;">Coloque o recheio. Cubra com massa e leve para assar.<br /></span></li>
</ol>',
                'historico' => '',
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 12,
            'nome' => 'Recheio de Frango para Torta (1 torta grande), Empada, Panqueca',
                'tipo_receita_id' => 1,
                'data' => NULL,
                'congela' => NULL,
                'bebida_id' => 0,
                'fonte_id' => 5,
                'picture_file_name' => NULL,
                'qtd_porcao' => 6,
                'preparo' => '<ol>
<li> &lt;!--  /* Font Definitions */ @font-face 	{font-family:Arial; 	panose-1:2 11 6 4 2 2 2 2 2 4; 	mso-font-charset:0; 	mso-generic-font-family:auto; 	mso-font-pitch:variable; 	mso-font-signature:-536859905 -1073711037 9 0 511 0;} @font-face 	{font-family:"Cambria Math"; 	panose-1:2 4 5 3 5 4 6 3 2 4; 	mso-font-charset:0; 	mso-generic-font-family:auto; 	mso-font-pitch:variable; 	mso-font-signature:-536870145 1107305727 0 0 415 0;}  /* Style Definitions */ p.MsoNormal, li.MsoNormal, div.MsoNormal 	{mso-style-unhide:no; 	mso-style-qformat:yes; 	mso-style-parent:""; 	margin:0cm; 	margin-bottom:.0001pt; 	mso-pagination:widow-orphan; 	font-size:12.0pt; 	font-family:Arial; 	mso-fareast-font-family:"Times New Roman"; 	mso-bidi-font-family:"Times New Roman"; 	mso-fareast-language:PT-BR;} .MsoChpDefault 	{mso-style-type:export-only; 	mso-default-props:yes;} @page WordSection1 	{size:612.0pt 792.0pt; 	margin:72.0pt 90.0pt 72.0pt 90.0pt; 	mso-header-margin:36.0pt; 	mso-footer-margin:36.0pt; 	mso-paper-source:0;} div.WordSection1 	{page:WordSection1;} --&gt;        Colocar em uma panela grande o frango inteiro, limpo para cozinhar com o vinagre e o sal at&eacute; que o frango fique bem cozido e molinho.</li>
<li>Deixe o frango esfriar.</li>
<li>Reserve o caldo onde cozinhou o frango.</li>
<li>Depois de frio, desfiar o frango bem pequenino, bem desfiadinho. N&atilde;o colocar a pele, jogue ela fora.</li>
<li>Coloque numa panela, azeite, cebola, alho e o frango e v&aacute; refogando e colocando, aos poucos, um pouco do caldo onde cozinhou o frango, para que ele n&atilde;o fique ressecado.</li>
<li>Depois, colocar o cubo de caldo de frango e ir refogando. Sempre que precisar, coloque um pouco do caldo do frango para que ele n&atilde;o resseque.</li>
<li>Num copo, coloque um pouco do caldo FRIO onde cozinhou o frango, e dissolva a Maisena. Misture bem.</li>
<li>V&aacute; colocando aos poucos esta Maisena no refogado somente para dar uma encorpadinha. CUIDADO para n&atilde;o engrossar demais e n&atilde;o ficar seco.</li>
<li>Desligar o fogo, colocar a azeitona preta e a azeitona verde SEM caro&ccedil;os e bem picadinhas, a salsinha e a ervilha em lata.</li>
<li>Deixe esfriar.</li>
<li>Use para rechear a torta depois que a massa tiver sido previamente assada muito de leve no forno.</li>
</ol>',
                'historico' => '',
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 13,
                'nome' => 'Massa Podre de Torta Doce, Tartelete',
                'tipo_receita_id' => 1,
                'data' => NULL,
                'congela' => NULL,
                'bebida_id' => 0,
                'fonte_id' => 5,
                'picture_file_name' => NULL,
                'qtd_porcao' => 6,
                'preparo' => '<ol>
<li>Medir e peneirar bem a farinha e o a&ccedil;&uacute;car.</li>
<li>Misturar bem os ingredientes secos e a margarina.</li>
<li>Por &uacute;ltimo, acrescentar as gemas e amassar bem.</li>
<li>Deixar a massa homog&ecirc;nea, formar uma bola, embrulhar no filme pl&aacute;stico e levar &aring; geladeira para gelar um pouco antes do manuseio.</li>
<li>Para us&aacute;-la, pegue pequenos peda&ccedil;os, abra com os dedos para que fique bem fina e v&aacute; colocando na forma de fundo solto at&eacute; cobr&iacute;-la completamente.</li>
<li>Fa&ccedil;a furinhos com um garfo e d&ecirc; uma pr&eacute;-assada na massa, antes de colocar o recheio desejado.</li>
<li>Coloque o recheio e dependendo do que for volte ao forno ou sirva imediatamente.</li>
</ol>',
                'historico' => '',
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 16,
                'nome' => 'Massa de Macarrão Básica',
                'tipo_receita_id' => 1,
                'data' => NULL,
                'congela' => NULL,
                'bebida_id' => 0,
                'fonte_id' => 5,
                'picture_file_name' => NULL,
                'qtd_porcao' => 4,
                'preparo' => '<p>Misture bem todos os ingredientes at&eacute; a massa ficar homog&ecirc;nea.</p>
<p>Sove.</p>
<p>Passe na m&aacute;quina de macarr&atilde;o para abr&iacute;-la e depois escolha qual o formato de massa vai querer para usar a m&aacute;quina novamente e finalizar a massa.</p>
<p>Deixe secar.</p>
<p>Cozinhe em &aacute;gua fervendo com sal e azeite at&eacute; que fique al dente.</p>
<p>Coloque o molho ou o ingrediente de sua prefer&ecirc;ncia e sirva.</p>',
                'historico' => '',
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 17,
                'nome' => 'Mirepoix',
                'tipo_receita_id' => 1,
                'data' => NULL,
                'congela' => NULL,
                'bebida_id' => 0,
                'fonte_id' => 0,
                'picture_file_name' => NULL,
                'qtd_porcao' => 2,
                'preparo' => '<p>O <em>Mirepoix</em> &eacute; preparado, higienizando-se os ingredientes e depois cortando-os em quadradinhos pequenos para serem usados como aromatizantes de prepara&ccedil;&otilde;es.</p>
<p>Depois de cortados, eles s&atilde;o refogados na manteiga e ent&atilde;o acrescentados durante o cozimento de caldos,  molhos e assados, agregando-lhes sabor vegetal e corpo<em>.</em></p>
<p>As propor&ccedil;&otilde;es s&atilde;o:</p>
<p><span style="text-decoration: underline;">Receita do <em>Mirepoix</em></span><br /> 50% de cebola<br /> 25% sals&atilde;o<br /> 25% cenoura</p>
<p>Op&ccedil;&atilde;o com alho-porr&oacute;<br /> 40% de cebola&nbsp; + 20%  sals&atilde;o + 20% cenoura + 20% alho-porr&oacute;</p>
<ul>
<li><strong>Mirepoix</strong> (2 partes de cebola, 1 parte de sals&atilde;o e 1  parte de cenoura. Em cubos) &ndash; este &eacute; o principal arom&aacute;tico. Por ter  cenoura, o mirepoix interfere na cor do preparo, escurecendo-o. Para  preparos mais escuros, a cebola e a cenoura podem ser refogados  (acrescentar o sals&atilde;o s&oacute; no final, para n&atilde;o ficar amargo) at&eacute; ficarem  marrons (caramelizados). Para uma cor ainda mais escura, &eacute; poss&iacute;vel  adicionar, no fim, molho/massa/polpa de tomate e caramelizar tamb&eacute;m  (chamada de pin&ccedil;age). Al&eacute;m da cor morrom, a carameliza&ccedil;&atilde;o confere sabor  de assado no preparo.</li>
<li><strong>Mirepoix branco 1</strong> (2 partes de cebola, 1 parte de sals&atilde;o, 1 parte de alho por&oacute;. Em cubos)  &ndash; alternativa ao mirepoix, para preparos de cor clara. Como tem alho  por&oacute; no lugar da cenoura, n&atilde;o interfere na cor do preparo.</li>
<li><strong>Mirepoix branco 2</strong> (1 parte de cebola, 1 parte de  nabo japon&ecirc;s, 1 parte de sals&atilde;o, 1 parte de alho por&oacute;) &ndash; outra op&ccedil;&atilde;o de  mirepoix branco, muito usado em preparos com peixe.</li>
<li><strong>Matignon</strong> (mirepoix + 1 parte de gordura (presunto  ou bacon)) &ndash; &eacute; comum us&aacute;-lo em preparos em que o mirepoix permanece at&eacute; o  fim (n&atilde;o &eacute; coado). Assim, costuma se cortado em cubos pequenos e bem  regulares.</li>
</ul>
<p>&nbsp;</p>',
                'historico' => '',
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => 18,
            'nome' => 'Consommé Básico de Carne (800 ml)',
                'tipo_receita_id' => 14,
                'data' => NULL,
                'congela' => 60,
                'bebida_id' => 0,
                'fonte_id' => 5,
                'picture_file_name' => NULL,
                'qtd_porcao' => NULL,
                'preparo' => '<p>&lt;!--  /* Font Definitions */ @font-face 	{font-family:Arial; 	panose-1:2 11 6 4 2 2 2 2 2 4; 	mso-font-charset:0; 	mso-generic-font-family:auto; 	mso-font-pitch:variable; 	mso-font-signature:-536859905 -1073711037 9 0 511 0;} @font-face 	{font-family:Arial; 	panose-1:2 11 6 4 2 2 2 2 2 4; 	mso-font-charset:0; 	mso-generic-font-family:auto; 	mso-font-pitch:variable; 	mso-font-signature:-536859905 -1073711037 9 0 511 0;}  /* Style Definitions */ p.MsoNormal, li.MsoNormal, div.MsoNormal 	{mso-style-unhide:no; 	mso-style-qformat:yes; 	mso-style-parent:""; 	margin:0cm; 	margin-bottom:.0001pt; 	mso-pagination:widow-orphan; 	font-size:12.0pt; 	font-family:Arial; 	mso-fareast-font-family:"Times New Roman"; 	mso-bidi-font-family:"Times New Roman"; 	mso-fareast-language:PT-BR;} .MsoChpDefault 	{mso-style-type:export-only; 	mso-default-props:yes;} @page WordSection1 	{size:612.0pt 792.0pt; 	margin:72.0pt 90.0pt 72.0pt 90.0pt; 	mso-header-margin:36.0pt; 	mso-footer-margin:36.0pt; 	mso-paper-source:0;} div.WordSection1 	{page:WordSection1;} -</p>
<ol>
<li><span style="font-size: 12.0pt; font-family: Arial; mso-fareast-font-family: &quot;Times New Roman&quot;; mso-bidi-font-family: &quot;Times New Roman&quot;; mso-ansi-language: PT-BR; mso-fareast-language: PT-BR; mso-bidi-language: AR-SA;">Misture todos os ingredientes e leve ao fogo moderado mexendo sempre.</span></li>
<li><span style="font-size: 12.0pt; font-family: Arial; mso-fareast-font-family: &quot;Times New Roman&quot;; mso-bidi-font-family: &quot;Times New Roman&quot;; mso-ansi-language: PT-BR; mso-fareast-language: PT-BR; mso-bidi-language: AR-SA;">Deixar ferver em fogo lento at&eacute; que se forme uma espuma (esta espuma s&atilde;o as impurezas coaguladas que formam um tamp&atilde;o). <br /></span></li>
<li><span style="font-size: 12.0pt; font-family: Arial; mso-fareast-font-family: &quot;Times New Roman&quot;; mso-bidi-font-family: &quot;Times New Roman&quot;; mso-ansi-language: PT-BR; mso-fareast-language: PT-BR; mso-bidi-language: AR-SA;">Fa&ccedil;a um furo neste tamp&atilde;o e siga com a coc&ccedil;&atilde;o por 30 a 40 minutos.</span></li>
<li><span style="font-size: 12.0pt; font-family: Arial; mso-fareast-font-family: &quot;Times New Roman&quot;; mso-bidi-font-family: &quot;Times New Roman&quot;; mso-ansi-language: PT-BR; mso-fareast-language: PT-BR; mso-bidi-language: AR-SA;">Coe o <em>consomm&eacute;&nbsp; </em><span style="text-decoration: underline;">com cuidado</span> em filtro de papel ou pano etamine.</span></li>
<li><span style="font-size: 12.0pt; font-family: Arial; mso-fareast-font-family: &quot;Times New Roman&quot;; mso-bidi-font-family: &quot;Times New Roman&quot;; mso-ansi-language: PT-BR; mso-fareast-language: PT-BR; mso-bidi-language: AR-SA;">Ajuste o tempero (sal e pimenta) e decore com a guarni&ccedil;&atilde;o.</span></li>
</ol>
<p><span style="text-decoration: underline;">Receita do <em>mirepoix</em></span><br /> 50% de cebola<br /> 25% sals&atilde;o<br /> 25% cenoura</p>
<p>Op&ccedil;&atilde;o com alho por&oacute;<br /> 40% de cebola&nbsp; + 20%  sals&atilde;o + 20% cenoura + 20% alho porr&oacute;</p>',
                'historico' => '',
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => 19,
                'nome' => 'Fummet de Peixe',
                'tipo_receita_id' => 1,
                'data' => NULL,
                'congela' => 90,
                'bebida_id' => 0,
                'fonte_id' => 59,
                'picture_file_name' => NULL,
                'qtd_porcao' => NULL,
                'preparo' => '<ol>
<li> &lt;!--  /* Font Definitions */ @font-face 	{font-family:Arial; 	panose-1:2 11 6 4 2 2 2 2 2 4; 	mso-font-charset:0; 	mso-generic-font-family:auto; 	mso-font-pitch:variable; 	mso-font-signature:3 0 0 0 1 0;} @font-face 	{font-family:Arial; 	panose-1:2 11 6 4 2 2 2 2 2 4; 	mso-font-charset:0; 	mso-generic-font-family:auto; 	mso-font-pitch:variable; 	mso-font-signature:3 0 0 0 1 0;}  /* Style Definitions */ p.MsoNormal, li.MsoNormal, div.MsoNormal 	{mso-style-unhide:no; 	mso-style-qformat:yes; 	mso-style-parent:""; 	margin:0cm; 	margin-bottom:.0001pt; 	mso-pagination:widow-orphan; 	font-size:12.0pt; 	font-family:Arial; 	mso-fareast-font-family:"Times New Roman"; 	mso-bidi-font-family:"Times New Roman"; 	mso-fareast-language:PT-BR;} .MsoChpDefault 	{mso-style-type:export-only; 	mso-default-props:yes;} @page WordSection1 	{size:612.0pt 792.0pt; 	margin:72.0pt 90.0pt 72.0pt 90.0pt; 	mso-header-margin:36.0pt; 	mso-footer-margin:36.0pt; 	mso-paper-source:0;} div.WordSection1 	{page:WordSection1;} --&gt; </li>
<li><span style="mso-bidi-font-family: Verdana; font-variant: small-caps; mso-ansi-language: EN-US;" lang="EN-US">Antes de qualquer coisa, para limpar as impurezas, coloque as carcassas numa &aacute;gua fervendo por 5 minutos, tire desta </span><span style="mso-bidi-font-family: Verdana; font-variant: small-caps; mso-ansi-language: EN-US;" lang="EN-US">&aacute;gua</span><span style="mso-bidi-font-family: Verdana; font-variant: small-caps; mso-ansi-language: EN-US;" lang="EN-US"> e lave bem debaixo da torneira com </span><span style="mso-bidi-font-family: Verdana; font-variant: small-caps; mso-ansi-language: EN-US;" lang="EN-US">&aacute;gua</span><span style="mso-bidi-font-family: Verdana; font-variant: small-caps; mso-ansi-language: EN-US;" lang="EN-US"> fria corrente, limpando sangue e impurezas.</span></li>
<li><span style="font-size: 12.0pt; font-family: Arial; mso-fareast-font-family: &quot;Times New Roman&quot;; mso-bidi-font-family: &quot;Times New Roman&quot;; mso-ansi-language: PT-BR; mso-fareast-language: PT-BR; mso-bidi-language: AR-SA;">Lave bem e higienize os vegetais.</span></li>
<li><span style="font-size: 12.0pt; font-family: Arial; mso-fareast-font-family: &quot;Times New Roman&quot;; mso-bidi-font-family: &quot;Times New Roman&quot;; mso-ansi-language: PT-BR; mso-fareast-language: PT-BR; mso-bidi-language: AR-SA;">Corte os vegetais em cubos pequenos para fazer o <em>Mirepoix</em>.</span></li>
<li><span style="font-size: 12.0pt; font-family: Arial; mso-fareast-font-family: &quot;Times New Roman&quot;; mso-bidi-font-family: &quot;Times New Roman&quot;; mso-ansi-language: PT-BR; mso-fareast-language: PT-BR; mso-bidi-language: AR-SA;">Aque&ccedil;a o &oacute;leo e acrescente o <em>mirepoix</em>, a carca&ccedil;a e deixe suar por 3 a 5 minutos.</span></li>
<li><span style="font-size: 12.0pt; font-family: Arial; mso-fareast-font-family: &quot;Times New Roman&quot;; mso-bidi-font-family: &quot;Times New Roman&quot;; mso-ansi-language: PT-BR; mso-fareast-language: PT-BR; mso-bidi-language: AR-SA;">Acrescente os cogumelos, a &aacute;gua, o vinho e o <em>bouquet garni </em>e cozinhar em <em>simmer</em> por 30 a 40 minutos.</span> </li>
</ol>',
                'historico' => '',
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            14 => 
            array (
                'id' => 20,
                'nome' => 'Cebola Brulé',
                'tipo_receita_id' => 1,
                'data' => NULL,
                'congela' => NULL,
                'bebida_id' => 0,
                'fonte_id' => 0,
                'picture_file_name' => NULL,
                'qtd_porcao' => 1,
                'preparo' => '<p><strong>Cebola Br&ucirc;l&eacute;</strong>: meia cebola, com o lado cortado caramelizado em uma frigideira seca &ndash; usado para dar cor marrom aos preparos.</p>',
                'historico' => '',
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            15 => 
            array (
                'id' => 21,
                'nome' => 'Cebola Piquet',
                'tipo_receita_id' => 1,
                'data' => NULL,
                'congela' => NULL,
                'bebida_id' => 0,
                'fonte_id' => 60,
                'picture_file_name' => NULL,
                'qtd_porcao' => 1,
            'preparo' => '<p><strong>Cebola piqu&eacute;</strong>: 1 cebola, com 1 folha de louro e 3 ou 4  cravos espetados nela &ndash; &eacute; o arom&aacute;tico caracter&iacute;stico do molho <em>b&eacute;chamel</em> (molho branco) e de algumas sopas.</p>',
                'historico' => '',
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            16 => 
            array (
                'id' => 22,
                'nome' => 'Sachet D\'épice',
                'tipo_receita_id' => 1,
                'data' => NULL,
                'congela' => NULL,
                'bebida_id' => 0,
                'fonte_id' => 60,
                'picture_file_name' => NULL,
                'qtd_porcao' => 1,
                'preparo' => '<p><strong>Sachet d&rsquo;&eacute;pices</strong>: 1 folha de louro, 4 gr&atilde;os de pimenta  do reino, 1 ramo de tomilho, 2 talos de salsa, 1 dente de alho, 1 cravo.  Tudo em uma trouxinha de tecido &ndash; fica muito bom combinado com o <em> mirepoix</em>. Em vez da trouxinha de tecido, uma alternativa pr&aacute;tica &eacute; usar  aqueles infusores de inox para ch&aacute;.</p>',
                'historico' => '',
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            17 => 
            array (
                'id' => 23,
                'nome' => 'Bouquet Garni',
                'tipo_receita_id' => 1,
                'data' => NULL,
                'congela' => NULL,
                'bebida_id' => 0,
                'fonte_id' => 60,
                'picture_file_name' => NULL,
                'qtd_porcao' => 1,
                'preparo' => '<p><strong>Bouquet Garni</strong>: 1 peda&ccedil;o de talo de sals&atilde;o, 2 talos de  salsinha, 1 ramo de tomilho, 1 folha de louro, envolvidos em 1 folha de  alho-por&oacute;. Tudo amarrado com um barbante &ndash; &eacute; muito usado em assados e  guisados.</p>',
                'historico' => '',
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            18 => 
            array (
                'id' => 24,
                'nome' => 'Molho Verde para Peixes e Frutos do Mar',
                'tipo_receita_id' => 27,
                'data' => NULL,
                'congela' => NULL,
                'bebida_id' => 0,
                'fonte_id' => 59,
                'picture_file_name' => NULL,
                'qtd_porcao' => NULL,
                'preparo' => '<ol>
<li>Lave e higienize todas as ervas frescas.</li>
<li>Coloque todos os ingredientes numa processadora ou liquidificador e misture tudo muito bem para formar um creme homog&ecirc;neo.</li>
</ol>',
                'historico' => '',
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            19 => 
            array (
                'id' => 26,
                'nome' => 'Camarões ao Curry',
                'tipo_receita_id' => 12,
                'data' => NULL,
                'congela' => 30,
                'bebida_id' => 0,
                'fonte_id' => 59,
                'picture_file_name' => NULL,
                'qtd_porcao' => 2,
                'preparo' => '<ol>
<li>Lave a cebola e o alho. Descasque-os. Tire o filete branco de dentro do centro do alho.</li>
<li>Lave bem os camar&otilde;es, limpe, tire a barrigueira e enxugue de leve em papel toalha os camar&otilde;es.</li>
<li>Misture a farinha e o <em>curry</em>.</li>
<li>Pique a cebola e corte o alho bem fininho.</li>
<li>Em frigideira grande, aque&ccedil;a a manteiga e o &oacute;leo em fogo m&eacute;dio, junte a cebola e sue por 5 minutos, at&eacute; que fique macia.</li>
<li>Junte o alho e doure-o mexendo sempre, por mais 2 minutos.</li>
<li>Coloque os camar&otilde;es em uma tigela e salpique sobre eles a farinha com o <em>curry</em>.</li>
<li>Na frigideira, acrescente os camar&otilde;es e refogue-os, mexendo sempre, por 2 minutos ou at&eacute; que fiquem rosados.</li>
<li>Reduza a chama, coloque o iogurte e aque&ccedil;a por 1 minuto ou at&eacute; que comece a borbulhar.</li>
<li>Desligue, tempere com sal e pimenta e sirva.</li>
</ol>',
                'historico' => '',
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            20 => 
            array (
                'id' => 27,
                'nome' => 'Massa para Pizza Básica',
                'tipo_receita_id' => 1,
                'data' => NULL,
                'congela' => 0,
                'bebida_id' => 0,
                'fonte_id' => 61,
                'picture_file_name' => NULL,
                'qtd_porcao' => 30,
                'preparo' => '<ol>
<li>Separar todos os ingredientes e utens&iacute;lios.</li>
<li>Colocar a farinha sobre uma bancada de pedra e fazer uma cratera no centro.</li>
<li>Colocar o azeite nesta cratera e misturar um pouco.</li>
<li>Misturar a &aacute;gua com o a&ccedil;&uacute;car e o fermento, bem misturado.</li>
<li>Colocar a mistura de &aacute;gua com a&ccedil;&uacute;car e fermento aos poucos, misturando bem.</li>
<li>Chegando no ponto, sovar muito a massa at&eacute; ficar lisa.</li>
<li>Deixar a massa descansar, embrulhada em um pano de prato, em local morno.</li>
<li>Pode tamb&eacute;m j&aacute; fracionar a massa em pequenas bolas para cada disco de pizza e deixar a massa descansar, coberta pelo pano, em local morno, j&aacute; fracionada.</li>
</ol>',
                'historico' => '',
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            21 => 
            array (
                'id' => 29,
                'nome' => 'Massa para Pizza Elaborada',
                'tipo_receita_id' => 1,
                'data' => NULL,
                'congela' => 0,
                'bebida_id' => 0,
                'fonte_id' => 62,
                'picture_file_name' => NULL,
                'qtd_porcao' => 40,
                'preparo' => '<ol>
<li> &lt;!--  /* Font Definitions */ @font-face 	{font-family:Arial; 	panose-1:2 11 6 4 2 2 2 2 2 4; 	mso-font-charset:0; 	mso-generic-font-family:auto; 	mso-font-pitch:variable; 	mso-font-signature:3 0 0 0 1 0;} @font-face 	{font-family:"Cambria Math"; 	panose-1:2 4 5 3 5 4 6 3 2 4; 	mso-font-charset:0; 	mso-generic-font-family:auto; 	mso-font-pitch:variable; 	mso-font-signature:3 0 0 0 1 0;}  /* Style Definitions */ p.MsoNormal, li.MsoNormal, div.MsoNormal 	{mso-style-unhide:no; 	mso-style-qformat:yes; 	mso-style-parent:""; 	margin:0cm; 	margin-bottom:.0001pt; 	mso-pagination:widow-orphan; 	font-size:12.0pt; 	font-family:Arial; 	mso-fareast-font-family:"Times New Roman"; 	mso-bidi-font-family:"Times New Roman"; 	mso-fareast-language:PT-BR;} .MsoChpDefault 	{mso-style-type:export-only; 	mso-default-props:yes;} @page WordSection1 	{size:612.0pt 792.0pt; 	margin:72.0pt 90.0pt 72.0pt 90.0pt; 	mso-header-margin:36.0pt; 	mso-footer-margin:36.0pt; 	mso-paper-source:0;} div.WordSection1 	{page:WordSection1;} --&gt; Em uma vasilha grande, coloque a &aacute;gua com g&aacute;s, metade da farinha (1 kg) e os demais ingredientes.</li>
<li>Misture bem com a ajuda de um garfo.</li>
<li>O restante da farinha deve ser colocado gradualmente, at&eacute; que a massa comece a se desprender das m&atilde;os e da vasilha.</li>
<li>Retire toda a massa da vasilha e coloque-a sobre uma superf&iacute;cie lisa, preferencialmente de m&aacute;rmore, previamente enfarinhada.</li>
<li>Sove bem a massa nesta superf&iacute;cie. Se ainda estiver pegajosa, coloque um pouco de mais de farinha e continue sovando, at&eacute; ficar macia, lisa e el&aacute;stica. Este processo dura em torno de 30 minutos</li>
<li>Para levedar a massa, devolva-a &aring; vasilha, cubra-a com pl&aacute;stico e deixe-a descansar na parte inferior da geladeira por cerca de 4 a 6 horas.</li>
<li>Quando for fazer a pizza, retire a massa da geladeira 2 horas antes. Pegue peda&ccedil;os desta massa, cerca de 200 g cada peda&ccedil;o, e fa&ccedil;a bolas pequenas (panetto)</li>
<li>Coloque estas bolas em caixas, bandejas ou recipientes pl&aacute;sticos grandes e deixe levedar novamente, em temperatura ambiente, cobertas com um pano de prato, por cerca de 1 hora e meia. A&iacute; ent&atilde;o a massa estar&aacute; pronta para ser usada</li>
<li>Com um movimento do centro para a parte externa, e com a press&atilde;o dos dedos das duas m&atilde;os, fa&ccedil;a um disco de massa de cerca de 35 cm, de modo que a borda n&atilde;o seja superior a 1 ou 2 cm, ficando um pouco mais alta que o centro e formando, assim, o cornicione.</li>
</ol>
<p>Na falta do Lievito, pode substitu&iacute;-lo por fermento biol&oacute;gico seco.</p>',
                'historico' => '',
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            22 => 
            array (
                'id' => 30,
                'nome' => 'Molho de Tomate para Pizza Rápido',
                'tipo_receita_id' => 1,
                'data' => NULL,
                'congela' => 90,
                'bebida_id' => 0,
                'fonte_id' => 62,
                'picture_file_name' => NULL,
                'qtd_porcao' => 40,
                'preparo' => '<ol>
<li> &lt;!--  /* Font Definitions */ @font-face 	{font-family:Arial; 	panose-1:2 11 6 4 2 2 2 2 2 4; 	mso-font-charset:0; 	mso-generic-font-family:auto; 	mso-font-pitch:variable; 	mso-font-signature:3 0 0 0 1 0;} @font-face 	{font-family:"Cambria Math"; 	panose-1:2 4 5 3 5 4 6 3 2 4; 	mso-font-charset:0; 	mso-generic-font-family:auto; 	mso-font-pitch:variable; 	mso-font-signature:3 0 0 0 1 0;}  /* Style Definitions */ p.MsoNormal, li.MsoNormal, div.MsoNormal 	{mso-style-unhide:no; 	mso-style-qformat:yes; 	mso-style-parent:""; 	margin:0cm; 	margin-bottom:.0001pt; 	mso-pagination:widow-orphan; 	font-size:12.0pt; 	font-family:Arial; 	mso-fareast-font-family:"Times New Roman"; 	mso-bidi-font-family:"Times New Roman"; 	mso-fareast-language:PT-BR;} .MsoChpDefault 	{mso-style-type:export-only; 	mso-default-props:yes;} @page WordSection1 	{size:612.0pt 792.0pt; 	margin:72.0pt 90.0pt 72.0pt 90.0pt; 	mso-header-margin:36.0pt; 	mso-footer-margin:36.0pt; 	mso-paper-source:0;} div.WordSection1 	{page:WordSection1;} --&gt;        Lave e higienize bem os tomates.</li>
<li>Retire a pele e as sementes dos tomates e depois bata-os levemente no liquidificador, ou no mixer, ou no moedor de carne manual. O molho n&atilde;o deve ficar fluido, mas em peda&ccedil;os grosseiramente desfeitos.</li>
<li>Para finalizar, acrescente o sal e o a&ccedil;&uacute;car e misture bem.</li>
</ol>',
                'historico' => '',
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            23 => 
            array (
                'id' => 31,
                'nome' => 'Molho de Tomate para Pizza Elaborado',
                'tipo_receita_id' => 1,
                'data' => NULL,
                'congela' => 90,
                'bebida_id' => 0,
                'fonte_id' => 63,
                'picture_file_name' => NULL,
                'qtd_porcao' => 4,
                'preparo' => '<ol>
<li> &lt;!--  /* Font Definitions */ @font-face 	{font-family:Arial; 	panose-1:2 11 6 4 2 2 2 2 2 4; 	mso-font-charset:0; 	mso-generic-font-family:auto; 	mso-font-pitch:variable; 	mso-font-signature:3 0 0 0 1 0;} @font-face 	{font-family:"Cambria Math"; 	panose-1:2 4 5 3 5 4 6 3 2 4; 	mso-font-charset:0; 	mso-generic-font-family:auto; 	mso-font-pitch:variable; 	mso-font-signature:3 0 0 0 1 0;}  /* Style Definitions */ p.MsoNormal, li.MsoNormal, div.MsoNormal 	{mso-style-unhide:no; 	mso-style-qformat:yes; 	mso-style-parent:""; 	margin:0cm; 	margin-bottom:.0001pt; 	mso-pagination:widow-orphan; 	font-size:12.0pt; 	font-family:Arial; 	mso-fareast-font-family:"Times New Roman"; 	mso-bidi-font-family:"Times New Roman"; 	mso-fareast-language:PT-BR;} .MsoChpDefault 	{mso-style-type:export-only; 	mso-default-props:yes;} @page WordSection1 	{size:612.0pt 792.0pt; 	margin:72.0pt 90.0pt 72.0pt 90.0pt; 	mso-header-margin:36.0pt; 	mso-footer-margin:36.0pt; 	mso-paper-source:0;} div.WordSection1 	{page:WordSection1;} --&gt;        Lave e higienize os tomates, a cebola, o alho e as ervas.</li>
<li>Fa&ccedil;a a cebola batidinha.</li>
<li>Esprema o alho.</li>
<li>Pique os tomates.</li>
<li>Pique bem as ervas. Todas as ervas juntas e picadas, devem dar uma colher de sopa.</li>
<li>Aque&ccedil;a o azeite na panela, acrescente a cebola e o alho e frite-os por cerca de 5 minutos, at&eacute; que estejam macios.</li>
<li>Adicione os tomates, o pur&ecirc; de tomate, as ervas, o a&ccedil;&uacute;car e os temperos.</li>
<li>Cozinhe lentamente, sem tampa, mexendo &agrave;s vezes, por 15 a 20 minutos, ou at&eacute; reduzir o molho a uma pasta ligeiramente grossa.</li>
</ol>',
                'historico' => '',
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            24 => 
            array (
                'id' => 32,
                'nome' => 'Biscoito Negro de Chocolate com Aveia',
                'tipo_receita_id' => 17,
                'data' => NULL,
                'congela' => NULL,
                'bebida_id' => 0,
                'fonte_id' => 5,
                'picture_file_name' => NULL,
                'qtd_porcao' => NULL,
                'preparo' => '',
                'historico' => '',
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
        ));
        
        
    }
}