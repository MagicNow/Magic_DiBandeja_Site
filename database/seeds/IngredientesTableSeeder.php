<?php

use Illuminate\Database\Seeder;

class IngredientesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('ingredientes')->delete();
        
        \DB::table('ingredientes')->insert(array (
            0 => 
            array (
                'id' => 1,
                'nome' => 'Coentro ou Cilantro ou Salsa Chinesa',
                'preco' => NULL,
                'grupo_id' => 1,
                'descricao' => '<p>Suas folhas e ra&iacute;zes s&atilde;o usadas no caril verde Tahiland&ecirc;s.</p>
<p>Muito usado na cozinha do Mediterr&acirc;neo, da Am&eacute;rica Latina e da &Aacute;sia.</p>
<p>No Peru ele &eacute; usado para dar frescor e leveza &acirc; comida.</p>
<p>Pode ser usado da seguinte forma:</p>
<ol>
<li><strong>raiz</strong> - tem cheiro quase t&atilde;o potente quanto o das folhas e &eacute; usada na cozinha Tailandesa e indiana, quando macerada com sal para temperar a carne.</li>
<li><strong>broto</strong> - &eacute; o primeiro rebento da semente e tem sabor e aroma ligeiramente mais sutis que os das folhas. Costuma ser usado em saladas e na finaliza&ccedil;&atilde;o de pratos.</li>
<li><strong>folha</strong> - &eacute; o coentro que realmente conhecemos. Tem cheiro e sabor vigorosos e &eacute; muito usada na cozinha Chinesa, Indiana, <span class="st">&Aacute;</span>rabe e Sul-Americana.</li>
<li><strong>flor</strong> - bonita e delicada, ela tem sabor suave e sutil do coentro. Ela &eacute; usada em pestos e para finaliza&ccedil;&atilde;o de pratos.</li>
</ol>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'nome' => 'Azeda',
                'preco' => NULL,
                'grupo_id' => 1,
                'descricao' => '<p>Principalmente usada em <strong>sopas</strong>, <strong>omeletes</strong>, <strong>molhos para peixes e para aves frias</strong>.</p>
<p>Pode tamb&eacute;m ser <strong>salpicada em batatas cozidas</strong> ou, ainda, ter suas folhas tenras em uma <strong>salada mista</strong>.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'nome' => 'Louro',
                'preco' => NULL,
                'grupo_id' => 1,
                'descricao' => '<p>Suas folhas podem ser usadas secas ou frescas.</p>
<p>O ch&aacute; das suas folhas &eacute; bom para <strong>problemas com a digest&atilde;o</strong>.</p>
<p>Colocando-se algumas folhas num frasco de conserva com arroz, al&eacute;m de darem gosto ao cereal, ainda <strong>evitam a forma&ccedil;&atilde;o de carunchos</strong>.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'nome' => 'Erva-de-Limão',
                'preco' => NULL,
                'grupo_id' => 1,
                'descricao' => '<p>As folhas podem ser usadas de v&aacute;rias formas: para impregnar a &aacute;gua em que o <strong>peixe</strong> ou o <strong>frango</strong> &eacute; fervido ou cozido no vapor; na calda para <strong>compota de frutas</strong>; no <em><strong>creme brull&eacute;</strong></em> ou no <strong>creme caramelo</strong>.</p>
<p>Depois de retirar as camadas externas, que s&atilde;o duras, corte apenas os 10 cm da parte inferior do talo e, antes de picar, esmague a parte tenra de dentro.</p>
<p>Muito comum em pratos da &Aacute;sia.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'nome' => 'Funcho ou Anis-Doce ou Erva-Doce ou Finóquio ou Maratro',
                'preco' => NULL,
                'grupo_id' => 1,
            'descricao' => '<p>Suas folhas picadas podem ser usadas em <strong>saladas</strong> (principalmente na de batatas), com <strong>peixe</strong>, no <strong>molho de macarr&atilde;o</strong> e em <strong>pratos com arroz</strong>. Elas possuem betacaroteno e vitamina C.</p>
<p>Seus ramos podem ser usados, por exemplo, como uma base para se assar um peixe inteiro.</p>
<p>&Eacute; fonte de pot&aacute;ssio, fibras, vitamina C, ferro, c&aacute;lcio e &aacute;cido f&oacute;lico; &Eacute; ideal para quem deseja emagrecer, seu ch&aacute; ajuda em dietas para a <strong>obesidade</strong>.</p>
<p>As sementes do funcho arom&aacute;tico s&atilde;o usadas para o preparo de um ch&aacute; refrescante, que alivia <strong>disten&ccedil;&otilde;es abdominais, gases e problemas intestinais</strong>.</p>
<p>Estimula o leite na <strong>amamenta&ccedil;&atilde;o</strong>; ajuda na <strong>digest&atilde;o</strong> e na preven&ccedil;&atilde;o do <strong>mau h&aacute;lito</strong>; no tratamento de p<strong>edras nos rins</strong>, <strong>gota</strong>, dist&uacute;rbios do <strong>f&iacute;gado</strong> e do <strong>pulm&atilde;o</strong>.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'nome' => 'Estragão Fresco',
                'preco' => NULL,
                'grupo_id' => 1,
                'descricao' => '<p>&Eacute; usado em <strong>combina&ccedil;&atilde;o de ervas finas</strong>, no <strong>molho <em>b&eacute;arnaise</em></strong>, com <strong>peixes</strong>, <strong>aves</strong>, <strong>mi&uacute;dos</strong> e pratros com <strong>ovos</strong>. Tamb&eacute;m <strong>d&aacute; gosto ao vinagre de vinho branco</strong>.</p>
<p>O estrag&atilde;o franc&ecirc;s tem um sabor mais forte do que o russo.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'nome' => 'Milefólio ou Erva-dos-Carpinteiros ou Mil-Folhas',
                'preco' => NULL,
                'grupo_id' => 1,
                'descricao' => '<p>&Eacute; usado em saladas mistas.</p>',
                'picture_file_name' => 'Imagem1.png',
                'picture_content_type' => 'image/png',
                'picture_file_size' => 70275,
                'picture_updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'nome' => 'Angélica ',
                'preco' => NULL,
                'grupo_id' => 1,
                'descricao' => '<p>As folhas picadas podem ser usadas em <strong>saladas</strong> e em <strong>frutas guisadas</strong>.</p>
<p>O talo cristalizado pode ser usado em <strong>sobremesas</strong> ou na decora&ccedil;&atilde;o de bolos.</p>
<p>Tanto a folha, quanto o talo e a flor t&ecirc;m sabor doce.</p>
<p>Suas sementes, talos e ra&iacute;zes s&atilde;o usadas para <strong>dar gosto ao licor</strong> chartreuse, ao B&eacute;n&eacute;dictine e ao vermute.</p>
<p>Ela tem <strong>a&ccedil;&atilde;o digestiva e elimina os gases</strong>. Tem tamb&eacute;m a&ccedil;&atilde;o <strong>sedativa</strong>, al&eacute;m de equilibrar o <strong>sistema nervoso</strong>.</p>
<p>Pode ser usada no combate a <strong>enj&ocirc;os</strong> e, com menor intensidade, tem poder <strong>antiinflamat&oacute;rio, diur&eacute;tico e depurativo</strong>.</p>
<p>&nbsp;</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'nome' => 'Manjerona',
                'preco' => NULL,
                'grupo_id' => 1,
                'descricao' => '<p>Para ser usada com carnes, aves, verduras, pratos &aring; base de ovos, sopas, molhos, massas e arroz.</p>
<p>&Eacute; freq&uuml;entemente usada em combina&ccedil;&otilde;es como a Herbes de Provence e o Z&aacute;tar.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'nome' => 'Alfazema',
                'preco' => NULL,
                'grupo_id' => 1,
                'descricao' => '<p>Antigamente era utilizada, em pequenas quantidades, para temperar carnes e legumes.</p>
<p>O mel de suas flores &eacute; de alta qualidade.</p>
<p>Com parcimonia, suas flores podem ser usadas em bolos, biscoitos, gelatinas e gelados.</p>
<p>Seus talos e flores tamb&eacute;m podem dar sabor ao vinagre.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'nome' => 'Rábano-Picante ou Raiz Forte',
                'preco' => NULL,
                'grupo_id' => 17,
                'descricao' => '<p>Seu sabor s&oacute; aparece depois que a raiz &eacute; ralada e deve ser usada imediatamente ou misturada ao vinagre, pois pode escurecer, perder o sabor e tornar-se amarga.</p>
<p>Pode ser usado cru, em saladas, em sopas, p&atilde;es, sucos. &Eacute; tamb&eacute;m usado para dar sabor picante a <strong>pat&ecirc;s </strong>e<strong> molhos</strong> que acompanham a carne assada, guisada ou cozida, as salsichas, o frango e o peixe ou peixe defumado.</p>
<p>Suas folhas tamb&eacute;m s&atilde;o comest&iacute;veis.</p>
<p>Sua raiz &eacute; rica em <strong>vitamina C, pot&aacute;ssio, c&aacute;lcio, magn&eacute;sio, f&oacute;sforo e &oacute;leos vol&aacute;teis </strong>com propriedades antibi&oacute;ticas.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
            'nome' => 'Caril (planta)',
                'preco' => NULL,
                'grupo_id' => 1,
                'descricao' => '<p>Suas folhas podem ser usadas para cozinhar o arroz, fazer sopas, guisados e vitel.</p>
<p>Podem tamb&eacute;m ser usadas no recheio de carnes de ca&ccedil;a.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'nome' => 'Sanguisorba',
                'preco' => NULL,
                'grupo_id' => 1,
                'descricao' => '<p>Seu sabor lembra um pouco o do pepino.</p>
<p>Suas hastes podem ser usadas em bebidas, dando um sabor refrescante a elas.</p>
<p>Suas folhas podem ser usadas em saladas, sandu&iacute;ches, salpicadas no cream cheese ou no cottage cheese, no cole slaw e no iogurte.</p>
<p>&nbsp;Pode, ainda, dar sabor a vinagres.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'nome' => 'Manjericão ou Basílico ou Alfavaca',
                'preco' => NULL,
                'grupo_id' => 1,
                'descricao' => '<p>&Eacute; uma erva que se liga bem ao tomate.</p>
<p>O ch&aacute; de suas folhas tem propriedades t&ocirc;nicas e digestivas.</p>
<p>Para conservar sua cor, seja roxa ou verde, n&atilde;o pique as folhas com a faca, parta-as com as m&atilde;os.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'nome' => 'Ramo de Cheiros Brasileiro',
                'preco' => NULL,
                'grupo_id' => 1,
                'descricao' => '<p>&Eacute; um amarrado de louro, salsa, tomilho e manjerona, que pode ser usado para se fazer sopas e guisados e &eacute; retirado ao final do preparo.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'nome' => 'Ramo de Cheiros Italiano',
                'preco' => NULL,
                'grupo_id' => 1,
                'descricao' => '<p>&Eacute; um amarrado de louro, salsa, or&eacute;gano e alho e que &eacute; retirado ao final do preparo.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'nome' => 'Ramo de Cheiros Francês ou Bouquet Garni',
                'preco' => NULL,
                'grupo_id' => 1,
                'descricao' => '<p>&Eacute; um amarrado de louro, salsa e tomilho, podendo ter ainda alho e gr&atilde;os de pimenta do reino esmagados na hora. Ele &eacute; retirado ao final do preparo.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            17 => 
            array (
                'id' => 18,
                'nome' => 'Caviar Beluga - Huso Huso',
                'preco' => NULL,
                'grupo_id' => 34,
                'descricao' => '<p>Ovas do esturj&atilde;o mais raro, s&atilde;o grandes e macias e variam do cinza claro ao cinza profundo.</p>
<p>Tem sabor sutil e refinado.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            18 => 
            array (
                'id' => 19,
                'nome' => 'Caviar Ossetra - Gueldenstaedttii',
                'preco' => NULL,
                'grupo_id' => 34,
                'descricao' => '<p>Este caviar &eacute; chamado de "esturj&atilde;o russo".</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            19 => 
            array (
                'id' => 20,
                'nome' => 'Caviar Sevruga - Stellatus',
                'preco' => NULL,
                'grupo_id' => 34,
                'descricao' => '<p>Estas ovas s&atilde;o de tamanho m&eacute;dio e existem em todos os tons de cinza - do mais claro ao mais escuro.</p>
<p>Tem sabor perfeito e equilibrado.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            20 => 
            array (
                'id' => 21,
                'nome' => 'Caviar Transmontanus - O Alverta',
                'preco' => NULL,
                'grupo_id' => 34,
                'descricao' => '<p>Seu nome comum &eacute; esturj&atilde;o branco.</p>
<p>Suas ovas t&ecirc;m sabor e tamanho pr&oacute;ximas das ovas do Ossetra.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            21 => 
            array (
                'id' => 22,
                'nome' => 'Caviar Baeri',
                'preco' => NULL,
                'grupo_id' => 34,
                'descricao' => '<p>O tamanho e o sabor destas ovas aproximam-se das do Sevruga.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            22 => 
            array (
                'id' => 23,
            'nome' => 'Saquês Sofisticados (Josen Pink, Onna Nakasse, Maboroshi No Zeami)',
                'preco' => NULL,
                'grupo_id' => 33,
                'descricao' => '<p>Classifica&ccedil;&atilde;o por Ana Toshimi Kanamura - especialista em saqu&ecirc;s.</p>
<p><strong>Josen Pink</strong> - &eacute; adocicado. Tem um m&ecirc;s a mais de matura&ccedil;&atilde;o. Idealizado para conquistar o paladar feminino.</p>
<p><strong>Onna Nakasse</strong> - superpremium. Suave e muito delicado.</p>
<p><strong>Maboroshi No Zeami</strong> - &eacute; 100% artesanal. &Eacute; uma j&oacute;ia rara (apenas 1.500 garrafas ao ano).</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            23 => 
            array (
                'id' => 24,
            'nome' => 'Saquês Intermediários (Ooyama, Horaisen, Tenzan)',
                'preco' => NULL,
                'grupo_id' => 33,
                'descricao' => '<p>Classifica&ccedil;&atilde;o por Ana Toshimi Kanamura - especialista em saqu&ecirc;s.</p>
<p><strong>Ooyama</strong> - &eacute; 100% arroz. Especial extraseco. Combina com comidas apimentadas e gordurosas.</p>
<p><strong>Horaisen</strong> - tem adi&ccedil;&atilde;o de &aacute;lcool. &Eacute; especial e levemente seco.</p>
<p><strong>Tenzan</strong> - Extraseco. Combina com comidas apimentadas e gordurosas.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            24 => 
            array (
                'id' => 25,
            'nome' => 'Saquês para o dia-a-dia (Tengumai, Kyoumaiko, Tozan Premium)',
                'preco' => NULL,
                'grupo_id' => 33,
                'descricao' => '<p>Classifica&ccedil;&atilde;o por Ana Toshimi Kanamura - especialista em saqu&ecirc;s.</p>
<p><strong>Tengumai</strong> - neutro, nem seco e nem suave.</p>
<p><strong>Kyoumaiko</strong> - seco, pasteurizado apenas uma vez. De sabor suave e aroma discreto.</p>
<p><strong>Tozan Premium</strong> - este saqu&ecirc; &eacute; nacional e tem bom custo-benef&iacute;cio.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            25 => 
            array (
                'id' => 26,
                'nome' => 'Mandioca ou Mandioca-Mansa ou Mandioca-Doce',
                'preco' => NULL,
                'grupo_id' => 17,
                'descricao' => '<p>Pode ser branca ou amarela e deve ter a sua cor uniforme, jamais cinza. A polpa deve ser &uacute;mida e a casca deve soltar facilmente.</p>
<p>Pode ser congelada a - 18 graus, por 3 meses, crua - em peda&ccedil;os, dentro de sacos pl&aacute;sticos; ou em forma de pur&ecirc; - em recipientes bem vedados. deve ser descongelada na geladeira.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            26 => 
            array (
                'id' => 27,
                'nome' => 'Arroz Carnaroli',
                'preco' => NULL,
                'grupo_id' => 24,
                'descricao' => '<p>&Eacute; um arroz Italiano, cujos gr&atilde;os t&ecirc;m maior concentra&ccedil;&atilde;o de amido e uma textura mais firme do que o arroz arborio, o que proporciona a ele manter melhor a sua forma durante o lento processo de coc&ccedil;&atilde;o de um risotto.</p>
<p>&Eacute; considerado um arroz "superfino", o "rei dentre os pr&oacute;prios para risotto".</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            27 => 
            array (
                'id' => 28,
                'nome' => 'Arroz Arbóreo',
                'preco' => NULL,
                'grupo_id' => 24,
                'descricao' => '<p>&Eacute; um arroz Italiano que tem baixo teor de amilose, que &eacute; uma subst&acirc;ncia do amido respons&aacute;vel por  manter os gr&atilde;os soltinhos. Quando cozido, ganha consist&ecirc;ncia pegajosa.</p>
<p>Seu gr&atilde;o &eacute; curto, redondo, firme, cremoso e com sabor pronunciado de amido.</p>
<p>Al&eacute;m de usado em risottos, tamb&eacute;m &eacute; usado para fazer pudim de arroz.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            28 => 
            array (
                'id' => 29,
                'nome' => 'Arroz Aromático',
                'preco' => NULL,
                'grupo_id' => 24,
                'descricao' => '<p>Entre as varia&ccedil;&otilde;es mais conhecidas, est&atilde;o o Basmati e o Jasmine. Ambos t&ecirc;m uma mol&eacute;cula que d&aacute; ao gr&atilde;o um sabor natural amanteigado, parecido com o de pipoca de micro-ondas.</p>
<p>Longos e de sabor pronunciado, os gr&atilde;os costumam ser usados em pratos da cozinha asi&aacute;tica.</p>
<p>O Basmati &eacute; proveniente da &Iacute;ndia e do Paquist&atilde;o e &eacute; not&aacute;vel por sua fragr&atilde;ncia e delicado sabor.</p>
<p>Seus gr&atilde;os s&atilde;o compridos e, depois de cozidos, s&atilde;o bem soltinhos.</p>
<p>Existe em duas variedades: o branco e o marrom.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            29 => 
            array (
                'id' => 30,
                'nome' => 'Repolho Roxo',
                'preco' => NULL,
                'grupo_id' => 16,
                'descricao' => '<p>O repolho roxo p<span style="font-family: Arial;">ode ser comido cru em saladas, refogado, em sopas, conservas, acompanhamentos, massas ou de muitos outros modos.</span></p>
<p>Braseado, ele vai bem com ma&ccedil;&atilde;s, cebola, nozes, vinho tinto e fica muito bom com porco, pato e salmon.</p>
<p>O chucrute &eacute; uma conserva de repolho fermentado.</p>
<p>Ele &eacute; uma fonte riqu&iacute;ssima de <strong>vitamina C</strong>.</p>
<p>Por ser roxo, <span>tem &oacute;timo efeito <strong>contra o envelhecimento</strong>.</span></p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            30 => 
            array (
                'id' => 31,
                'nome' => 'Arroz Branco ou Polido',
                'preco' => NULL,
                'grupo_id' => 24,
                'descricao' => '<p>Transl&uacute;cido, &eacute; o arroz do dia-a-dia e n&atilde;o &eacute; dos mais nutritivos, pois o farelo que recobre o gr&atilde;o &eacute; retirado na hora do polimento.</p>
<p>Ele &eacute; vers&aacute;til, tem parte de suas defici&ecirc;ncias nutritivas supridas quando misturado ao feij&atilde;o, pois o arroz cont&eacute;m a metionina e o feij&atilde;o, a lisina. Estes dois amino&aacute;cidos, quando misturados, formam uma composi&ccedil;&atilde;o proteica rara entre os vegetais.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            31 => 
            array (
                'id' => 32,
                'nome' => 'Arroz Integral',
                'preco' => NULL,
                'grupo_id' => 24,
                'descricao' => '<p>De colora&ccedil;&atilde;o amarelada, este arroz diferentemente do arroz branco, possui o farelo que recobre o gr&atilde;o preservado, o que o torna mais nutritivo.</p>
<p>Ap&oacute;s seu cozimento, ele perde vitaminas, mas mant&eacute;m 90% do orizanol.</p>
<p>Fica muito bom combinado com peixes, assados e legumes, ou ainda, enriquecido com outros gr&atilde;os como gergelim e linha&ccedil;a.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            32 => 
            array (
                'id' => 33,
                'nome' => 'Arroz Selvagem ou Preto',
                'preco' => NULL,
                'grupo_id' => 24,
                'descricao' => '<p>Esta &eacute; uma variedade do arroz integral que cont&eacute;m, no farelo que recobre seus gr&atilde;os, flavon&oacute;ides que lhe d&atilde;o sua colora&ccedil;&atilde;o peculiar e propriedades antioxidantes.</p>
<p>Al&eacute;m de ser nutritivo e manter 90% do orizanol como a variedade integral, este arroz ainda mant&eacute;m quatro vezes mais compostos fen&oacute;licos, que tamb&eacute;m s&atilde;o conhecidos pelo poder antioxidante.</p>
<p>Por seu sabor acentuado, fica melhor se usado como ingrediente e n&atilde;o como acompanhamento.</p>
<p>No entanto, se usado como acompanhamento, combina com aves, galetos, codornas e com saladas ex&oacute;ticas de brotos e gr&atilde;os.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            33 => 
            array (
                'id' => 34,
                'nome' => 'Arroz Vermelho',
                'preco' => NULL,
                'grupo_id' => 24,
                'descricao' => '<p>O arroz vermelho, assim como o preto, &eacute; integral e tem maior abund&acirc;ncia de flavon&oacute;ides do que&nbsp; o arroz n&atilde;o pigmentado.</p>
<p>Ele &eacute; um alimento saboroso, que possui um sabor amendoado e tem cor ex&oacute;tica.</p>
<p>Pode ser preparado sem &oacute;leo ou gordura e mesmo assim fica soltinho.</p>
<p>Pode ser usado em saladas, risotos (&eacute; um bom substituto para o arroz arb&oacute;reo) e at&eacute; misturado a outros tipos de arrozes.</p>
<p>O preparo do arroz vermelho pode ser feito da mesma maneira que o arroz tradicional, com tempero a gosto.</p>
<p>Ele &eacute; um alimento rico em <strong>ferro, </strong><strong>zinco, </strong><strong>fibras, prote&iacute;nas, vitaminas e sais minerais</strong> e pode auxiliar na <strong>circula&ccedil;&atilde;o sangu&iacute;nea, na digest&atilde;o e nas fun&ccedil;&otilde;es intestinais.</strong></p>
<p>&nbsp;</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            34 => 
            array (
                'id' => 35,
                'nome' => 'Beterraba',
                'preco' => NULL,
                'grupo_id' => 17,
                'descricao' => '<p>A beterraba tem um sabor de terra pronunciado e que fica ainda mais evidente quando ela &eacute; assada.</p>
<p>Al&eacute;m de assada, ela pode ser cozida no vapor, no microondas ou em &aacute;gua.</p>
<p>Se for preparada com sua casca e um pouco dos talos, fica mais saborosa e sua cor &eacute; mantida ainda mais. A casca sai facilmente depois.</p>
<p>3 - 5&nbsp; beterrabas m&eacute;dias = 1 lb. = 2 x&iacute;caras de beterrabas em cubos.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            35 => 
            array (
                'id' => 36,
                'nome' => 'Cenoura',
                'preco' => NULL,
                'grupo_id' => 17,
                'descricao' => '<p>A cenoura, crua ou cozida, &eacute; adocica e colore os pratos. Ela deve ser escolhida pela cor viva e brilhante. Evite as moles, rachadas ou murchas.</p>
<p>Na Primavera deve-se escolher as cenouras novas e com folhagem intacta. Elas n&atilde;o precisam ser descascadas ou raspadas.</p>
<p>Ela &eacute; uma grande fonte de <strong>vitamina A</strong>.</p>
<p>O melhor &eacute; compr&aacute;-la ainda com suas ramas, pois ela &eacute; mais fresca desta forma.</p>
<p>1 cenoura grande = 1 x&iacute;cara de cenoura ralada.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            36 => 
            array (
                'id' => 37,
                'nome' => 'Aipo',
                'preco' => NULL,
                'grupo_id' => 17,
                'descricao' => '<p>O aipo pode ser comido cru ou cozido.</p>
<p>&nbsp;</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            37 => 
            array (
                'id' => 38,
                'nome' => 'Cacau',
                'preco' => NULL,
                'grupo_id' => 18,
                'descricao' => '<p>Sua polpa &eacute; parte essencial do processo de fermenta&ccedil;&atilde;o. Pode ser consumida in natura e em sucos.</p>
<p>O mel de cacau &eacute; a seiva retirada da polpa durante a colheita e &eacute; muito perec&iacute;vel, durando apenas 1 ou 2 dias.</p>
<p>As am&ecirc;ndoas s&atilde;o revestidas pela polpa e precisam ser fermentadas, secas e torradas. T&ecirc;m sabor potente de chocolate amargo depois de torradas.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            38 => 
            array (
                'id' => 39,
                'nome' => 'Arroz Parboilizado',
                'preco' => NULL,
                'grupo_id' => 24,
                'descricao' => '<p>No seu processo de beneficiamento, parte das vitaminas e minerais presentes no farelo que recobre o gr&atilde;o, migram para dentro do gr&atilde;o.</p>
<p>Nutricionalmente, este arroz &eacute; um meio-termo entre o arroz polido e o integral.</p>
<p>Por ser neutro, combina com qualquer acompanhamento.</p>
<p>Ele &eacute; mais soltinho e &eacute; f&aacute;cil de preparar.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            39 => 
            array (
                'id' => 40,
                'nome' => 'Arroz Oriental',
                'preco' => NULL,
                'grupo_id' => 24,
                'descricao' => '<p>Tem baixo teor de amilose, que &eacute; a subst&acirc;ncia do amido respons&aacute;vel por manter os gr&atilde;os soltinhos, por isso que depois de cozido, tem consist&ecirc;ncia pegajosa.</p>
<p>Combina com pratos da culin&aacute;ria japonesa, como sushis e temakis.</p>
<p>Quanbdo cozido apenas em &aacute;gua, &eacute; chamado de gohan. E se seus gr&atilde;os forem bem escolhidos, este gohan fica bem saboroso.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            40 => 
            array (
                'id' => 41,
                'nome' => 'Alho Negro',
                'preco' => NULL,
                'grupo_id' => 19,
                'descricao' => '<p>O alho negro &eacute; uma esp&eacute;cie de alho produzida artesanalmente a partir da sele&ccedil;&atilde;o de cabe&ccedil;as grandes de alho, que s&atilde;o mantidas sob temperatura e umidade controladas por um per&iacute;odo de 35 a 40 dias. Nesse intervalo, a&ccedil;&uacute;cares e amino&aacute;cidos produzem a melanoidina, que &eacute; a subst&acirc;ncia respons&aacute;vel pela mudan&ccedil;a de colora&ccedil;&atilde;o do bulbo.</p>
<p>Sua textura &eacute; macia, tem sabor adocicado, toque c&iacute;trico e gosto semelhante ao de um figo seco.</p>
<p>Ele &eacute; usado em pizzas, pat&ecirc;s, gel&eacute;ias, na aromatiza&ccedil;&atilde;o de azeites e vinagres e no acabamento de pratos como peixe e massas.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            41 => 
            array (
                'id' => 42,
                'nome' => 'Alho',
                'preco' => NULL,
                'grupo_id' => 19,
                'descricao' => '<p>O alho &eacute; um bulbo composto por "dentes", comest&iacute;vel e usado tanto como tempero como para fins medicinais.</p>
<p>Ele pode ser utilizado de diversas formas: cru, frito, escaldado, refogado, picado, em rodelas, assado, salteado, cozido com ou sem casca etc..</p>
<p>Ele &eacute; bastante usado em molhos, salsas, manteigas, saladas, marinadas, sopas e guisados.</p>
<p>Os povos mediterr&acirc;neos usam-no misturado a tomates e cebolas.</p>
<p>O Alho tem sabor forte e &aacute;cido. Quando cozido, &eacute; bem mais suave do que cru e picado.</p>
<p>Seu h&aacute;lito caracter&iacute;stico e geralmente considerado desagrad&aacute;vel pode ser minimizado se for consumido com salsa fresca.</p>
<p>A cabe&ccedil;a de alho deve ser escolhida quando estiver firme, redonda, sem manchas e com a casca clara e tipo papel.</p>
<p>Quanto menor o bulbo, mais forte seu sabor.</p>
<p>O alho deve ser conservado em local fresco e seco, n&atilde;o deve ir &aring; geladeira.</p>
<p>Ele tem propriedades terap&ecirc;uticas, como por exemplo, baixar o  colesterol do sangue. Tamb&eacute;m ajuda na preven&ccedil;&atilde;o de c&acirc;ncer e derrames e  ajuda na absor&ccedil;&atilde;o de vitaminas. Deve ser armazenado em lugar fresco e seco.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            42 => 
            array (
                'id' => 43,
            'nome' => 'Pimenta Fresca ou Dedo-de-Moça ou Chifre-de-Veado ou Pimenta Vermelha ou Pimenta Calabresa ou Ají (Peru)',
                'preco' => NULL,
                'grupo_id' => 19,
                'descricao' => '<p>A Pimenta Dedo-de-Mo&ccedil;a tem pung&ecirc;ncia picante baixa e aroma baixo.</p>
<p>Ela pode ser usada em molhos l&iacute;quidos, conservas e calabresa (desidratado na forma de flocos  com sementes)</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            43 => 
            array (
                'id' => 44,
                'nome' => 'Oleo de Gergelim',
                'preco' => NULL,
                'grupo_id' => 13,
                'descricao' => '<p>Ele &eacute; de origem Chinesa e empresta sabor.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            44 => 
            array (
                'id' => 45,
                'nome' => 'Molho de Ostra',
                'preco' => NULL,
                'grupo_id' => 10,
                'descricao' => '<p>Ele &eacute; Orienta e oferece aroma e textura &acirc;s receitas.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            45 => 
            array (
                'id' => 46,
                'nome' => 'Molho de Soja',
                'preco' => NULL,
                'grupo_id' => 10,
                'descricao' => '<p>Ele &eacute; Oriental e &eacute; usado para marinar e temperar.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            46 => 
            array (
                'id' => 47,
                'nome' => 'Limão',
                'preco' => NULL,
                'grupo_id' => 22,
                'descricao' => '<p>Ele &eacute; indispens&aacute;vel &acirc; culin&aacute;ria Peruana.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            47 => 
            array (
                'id' => 49,
                'nome' => 'Água de Flor de Laranjeira',
                'preco' => NULL,
                'grupo_id' => 1,
                'descricao' => '<p>Delicada e arom&aacute;tica, a ess&ecirc;ncia &eacute; muito usada na do&ccedil;aria Libanesa para fazer caldas e enriquecer pudins, cremes e manjares como o Malabie.</p>
<p>Basta usar uma dose misturada a uma x&iacute;cara de &aacute;gua quente para fazer o caf&eacute; branco &aacute;rabe, que &eacute; um &oacute;timo digestivo.</p>
<p>Uma boa marca: Mechaalany</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            48 => 
            array (
                'id' => 50,
                'nome' => 'Sumac ou Sumagre',
                'preco' => NULL,
                'grupo_id' => 1,
                'descricao' => '<p>&Eacute; um condimento Liban&ecirc;s, extra&iacute;do da macera&ccedil;&atilde;o do fruto da Rhus Coriaria.</p>
<p>Ele &eacute; um p&oacute; avermelhado e de sabor &aacute;cido. Tem gosto azedo e parecido com o do lim&atilde;o.</p>
<p>&Eacute; usado para temperar saladas, pastas iogurte, carnes grelhadas e azeites.</p>
<p>&nbsp;</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            49 => 
            array (
                'id' => 51,
                'nome' => 'Xarope de Damasco',
                'preco' => NULL,
                'grupo_id' => 4,
                'descricao' => '',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            50 => 
            array (
                'id' => 52,
                'nome' => 'Miski',
                'preco' => NULL,
                'grupo_id' => 34,
            'descricao' => '<p>O miski &eacute; uma resina vegetal obtida atrav&eacute;s da perfura&ccedil;&atilde;o da casca da Aroeira (&aacute;rvore da mesma fam&iacute;lia do pistache).</p>
<p>De Denomina&ccedil;&atilde;o de Origem Controlada, &eacute; produzido na Gr&eacute;cia, em Chlos.</p>
<p>Ele pode ser encontrado em envelopes de aproximadamente 3 gramas, em cartelas com 10 unidades ou como &oacute;leo essencial (U$ 650 a garrafa de 200 ml).</p>
<p>Seu aroma &eacute; &uacute;nico, delicado, por&eacute;m marcante. Parece-se com &acirc;mbar ou com figo verde.</p>
<p>Para dar aroma a doces, caldas e sorvetes, ela deve ser esmagada ou triturada.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            51 => 
            array (
                'id' => 53,
                'nome' => 'Tahine',
                'preco' => NULL,
                'grupo_id' => 34,
            'descricao' => '<p>O Tahini &eacute; uma pasta feita de sementes de gergelim (s&eacute;samo) muito usada na cozinha do Oriente M&eacute;dio.</p>
<p>Pode ser usado como complemento de muitos pratos &aacute;rabes e tamb&eacute;m em doces.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            52 => 
            array (
                'id' => 54,
                'nome' => 'Pimenta Sete Espécies',
                'preco' => NULL,
                'grupo_id' => 6,
                'descricao' => '<p>Esta pimenta &eacute; composta por uma mistura de especiarias mo&iacute;das, cuja receita pode variar de regi&atilde;o para regi&atilde;o.</p>
<p>A da regi&atilde;o da Gardenia, leva pimenta s&iacute;ria, pimenta-do-reino, canela, cravo, noz moscada, coentro e gengibre.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            53 => 
            array (
                'id' => 55,
                'nome' => 'Cardamomo',
                'preco' => NULL,
                'grupo_id' => 2,
                'descricao' => '<p>Suas sementes secas, caras, superarom&aacute;ticas e levemente picantes s&atilde;o usadas no L&iacute;bano para perfumar o caf&eacute; e "temperar" sopas de iogurte e pratos salgados.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            54 => 
            array (
                'id' => 56,
                'nome' => 'Folhas de Uva',
                'preco' => NULL,
                'grupo_id' => 16,
                'descricao' => '<p>As folhas de uva s&atilde;o conservadas em um pote de vidro, fechado, &aring; v&aacute;cuo.</p>
<p>Elas devem ser hidratadas em &aacute;gua fria e depois banhadas em &aacute;gua morna antes de envolver o recheio do charutinho.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            55 => 
            array (
                'id' => 57,
                'nome' => 'Xarope de Tâmara',
                'preco' => NULL,
                'grupo_id' => 4,
                'descricao' => '<p>Assim como os xaropes de rosas, de amora ou de tamarindo, o xarope de t&acirc;mara &eacute; usado em pratos e em refrescos com &aacute;gua e gelo.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            56 => 
            array (
                'id' => 58,
                'nome' => 'Arak',
                'preco' => NULL,
                'grupo_id' => 33,
                'descricao' => '<p>O Arak &eacute; um destilado de uva aromatizado com anis.</p>
<p>Ele &eacute; servido com &aacute;gua e gelo e ganha uma cor branca leitosa no copo.</p>
<p>Uma boa marca nacional &eacute; a Georges Aubert.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            57 => 
            array (
                'id' => 59,
                'nome' => 'Pinoli ou Snoubar',
                'preco' => NULL,
                'grupo_id' => 24,
                'descricao' => '<p>O pinoli &eacute; uma semente de uma &aacute;rvore nativa do Mediterr&acirc;neo.</p>
<p>Fazem a diferen&ccedil;a no recheio de quibes, charutos de uva e doces.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            58 => 
            array (
                'id' => 60,
                'nome' => 'Pistache',
                'preco' => NULL,
                'grupo_id' => 23,
                'descricao' => '<p>O pistache &eacute; nativo do sudoeste asi&aacute;tico, de onde se estendeu o cultivo &agrave; regi&atilde;o mediterr&acirc;nica e &agrave; Calif&oacute;rnia.</p>
<p>Suas sementes s&atilde;o consumidas secas, inteiras e salgadas ou frescas.</p>
<p>Podem ser usadas para incrementar receitas como o Baklava e o Knefe, usadas frescas em saladas, em pudins,  conservas de frutas e, por vezes, queijo cottage ou marshmallow.</p>
<p>Ele &eacute; mais rico em <strong>betacaroteno e vitamina E</strong> do que outros tipos de  nozes e, se incorporado &agrave; dieta, <strong>pode diminuir o nivel de colesterol ruim</strong>.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            59 => 
            array (
                'id' => 61,
                'nome' => 'Favas',
                'preco' => NULL,
                'grupo_id' => 20,
                'descricao' => '<p>As favas podem ser usadas para se fazer pur&ecirc;s, saladas e podem, ainda, ser servidas como acompanhamento de carnes.</p>
<p>Alguns tipos:</p>
<ol>
<li>Seca - esta &eacute; uma semente grande. Quando cozida, lembra batata doce e castanha portuguesa.</li>
<li>Fresca - s&atilde;o sementes tenras e devem ser lavadas e escaldadas para se retirar a casca. S&atilde;o &oacute;timas em saladas e para acompanhar carnes.</li>
<li>Libanesa - &eacute; uma semente menor e mais dura. Deve ser descascada e bem cozida como o feij&atilde;o, antes de entrar no preparo de sopas e cozidos.</li>
<li>Manteiga - &eacute; um gr&atilde;o usado em favadas, pois ficam cremosas e d&atilde;o um bom caldo.</li>
<li>Rajada - esta fava &eacute; rica em carboidratos e fica muito boa em cozidos, com carnes fortes, com legumes e com embutidos como a lingui&ccedil;a.</li>
</ol>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            60 => 
            array (
                'id' => 62,
                'nome' => 'Coentro',
                'preco' => NULL,
                'grupo_id' => 6,
                'descricao' => '<p>As sementes secas do coentro, quando mo&iacute;das, perdem seu aroma caracter&iacute;stico, permanecendo ainda, notas c&iacute;tricas e suaves.</p>
<p><span class="st">&Eacute; </span>indispens&aacute;vel em curries e em masalas.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            61 => 
            array (
                'id' => 63,
                'nome' => 'Ossobuco',
                'preco' => NULL,
                'grupo_id' => 30,
                'descricao' => '<p>O osso deste peda&ccedil;o &eacute; ladeado por uma carne musculosa que deve ser cozida, por horas, em fogo baixo, para ficar macia, suculenta, sem desfazer o tutano do osso.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            62 => 
            array (
                'id' => 64,
                'nome' => 'Pé de Frango',
                'preco' => NULL,
                'grupo_id' => 31,
                'descricao' => '<p><span class="st">&Eacute; no miolo vermelho do p&eacute; de galinha que fica o tutano.</span></p>
<p><span class="st">Ele deve ser incorporado aos caldos da ave.</span></p>
<p><span class="st">Pode ser marinado, selado e cozido com temperos.<br /></span></p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            63 => 
            array (
                'id' => 65,
                'nome' => 'Tutano',
                'preco' => NULL,
                'grupo_id' => 30,
            'descricao' => '<p><span class="st">O tutano &eacute; retirado da por&ccedil;&atilde;o mediana da panturrilha do boi, pois &eacute; onde existe boa quantidade e tamanho ideal para manejo (vitelas t&ecirc;m menos tutano).</span></p>
<p><span class="st">Ele &eacute; cortado em peda&ccedil;os de 5 cm a 12 cm, limpo e assado sem tempero.</span></p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            64 => 
            array (
                'id' => 66,
                'nome' => 'Joelho de Porco',
                'preco' => NULL,
                'grupo_id' => 29,
                'descricao' => '<p>Na culin&aacute;ria alem&atilde;, o joelho de porco &eacute; o famoso Eisbein.</p>
<p>Tamb&eacute;m &eacute; apreciado pelos orientais.</p>
<p>Depois de lavado, pode ser assado, frito, defumado ou cozido, temperado com p&aacute;prika e pimenta-do-reino.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            65 => 
            array (
                'id' => 67,
                'nome' => 'Ossobuco de Cordeiro',
                'preco' => NULL,
                'grupo_id' => 28,
                'descricao' => '<p>Comparado ao ossobuco bovino, o de cordeiro &eacute; menor e a quantidade de tutano tamb&eacute;m &eacute; menor.</p>
<p>H&aacute; um corte deste ossobuco que pode ser feito cozido e regado com um molho de ervas.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            66 => 
            array (
                'id' => 68,
                'nome' => 'Ossobuco de Cordeiro',
                'preco' => NULL,
                'grupo_id' => 28,
                'descricao' => '<p>Comparado ao ossobuco bovino, o de cordeiro &eacute; menor e a quantidade de tutano tamb&eacute;m &eacute; menor.</p>
<p>H&aacute; um corte deste ossobuco que pode ser feito cozido e regado com um molho de ervas.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            67 => 
            array (
                'id' => 69,
                'nome' => 'Mocotó',
                'preco' => NULL,
                'grupo_id' => 30,
            'descricao' => '<p>Esta parte do boi &eacute; o p&eacute; (ou a m&atilde;o de vaca, como dizem os nordestinos).</p>
<p><span class="st">&Eacute; uma parte cartilaginosa, que quase n&atilde;o tem m&eacute;usculo nem gordura.</span></p>
<p><span class="st">Quando cozido lentamente, libera col&aacute;geno.</span></p>
<p><span class="st">Rende um caldo saboroso e encorpado.</span></p>
<p><span class="st">Pode ser substitu&iacute;do pelo p&eacute; de cordeiro.<br /></span></p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            68 => 
            array (
                'id' => 70,
                'nome' => 'Pé de Cordeiro',
                'preco' => NULL,
                'grupo_id' => 28,
                'descricao' => '<p><span class="st">&Eacute; um bom substituto para o mocot&oacute;, o p&eacute; de boi.</span></p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            69 => 
            array (
                'id' => 71,
                'nome' => 'Rabo de Boi',
                'preco' => NULL,
                'grupo_id' => 30,
                'descricao' => '<p>Os peda&ccedil;os maiores do rabo de boi, que ficam perto da anca, s&atilde;o ideais para se fazer cozidos.</p>
<p>Durante a coc&ccedil;&atilde;o, o col&aacute;geno dos ossos se desprende, dando sabor e textura.</p>
<p>Estes peda&ccedil;os tamb&eacute;m podem ser assados.</p>
<p>A ponta do rabo, que tem ossos menores e menos carne, &eacute; boa para caldos.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            70 => 
            array (
                'id' => 72,
                'nome' => 'Stinco de Cordeiro ou Ponta de Paleta ou Jarret',
                'preco' => NULL,
                'grupo_id' => 28,
            'descricao' => '<p>O stinco de cordeiro compreende toda a panturrilha do animal, a canela inteira, e pode chegar a 12 cm de comprimento. Fica logo acima do p&eacute; (mocot&oacute;).</p>
<p>Tem mais carne que o ossobuco (que compreende o osso com o tutano).</p>
<p>O dianteiro tem carne mais dura e exige maior tempo de coc&ccedil;&atilde;o.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            71 => 
            array (
                'id' => 73,
                'nome' => 'Stinco de Boi ou Paleta',
                'preco' => NULL,
                'grupo_id' => 30,
            'descricao' => '<p>O stinco de boi (assim como o de cordeiro) compreende toda a panturrilha do animal, a canela inteira, e pode chegar a 12 cm de comprimento. Fica logo acima do p&eacute; (mocot&oacute;).</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            72 => 
            array (
                'id' => 74,
                'nome' => 'Sal de Mesa',
                'preco' => NULL,
                'grupo_id' => 6,
                'descricao' => '<p>O sal de mesa &eacute; derivado de precipita&ccedil;&atilde;o qu&iacute;mica pela evapora&ccedil;&atilde;o da &aacute;gua.</p>
<p>Ele &eacute; diferente da Flor de Sal, que &eacute; constitu&iacute;da pelos cristais de sal que se formam &agrave; superf&iacute;cie da &aacute;gua, e do sal marinho, que &eacute; obtido por evapora&ccedil;&atilde;o da &aacute;gua do mar.</p>
<p>Para que o alimento seja salgado, &eacute; necess&aacute;rio cobrir toda a sua superf&iacute;cie com o sal de mesa, o que n&atilde;o ocorre com a flor de sal, pois com pouca quantidade, o seu crocante j&aacute; espalha o sabor salgado.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            73 => 
            array (
                'id' => 75,
                'nome' => 'Flor de Sal ou Coalho',
                'preco' => NULL,
                'grupo_id' => 6,
                'descricao' => '<p>A flor de sal &eacute; constitu&iacute;da pelos cristais de sal que se formam &agrave; superf&iacute;cie da &aacute;gua, durante a produ&ccedil;&atilde;o do sal marinho.</p>
<p>Ela &eacute; colhida  diariamente e cuidadosamente para n&atilde;o  tocar o fundo.</p>
<p>Seu sabor &eacute; especial e &eacute; rico emoligoelementos e micronutrientes.</p>
<p>Existe no Brasil a Flor de Sal de Mossor&oacute;, que tem sabor e delicadeza, mas seus cristais se desmancham muito rapidamente.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            74 => 
            array (
                'id' => 76,
                'nome' => 'Chá Maccha',
                'preco' => NULL,
                'grupo_id' => 33,
                'descricao' => '<p>O Maccha, quando produzido, &eacute; transformado em p&oacute;, o que o deixa mais encorpado. Deve ser conservado cuidadosamente e o seu consumo deve ser r&aacute;pido.</p>
<p>Existem dois tipos de Maccha:</p>
<ul>
<li>o forte, de cor escura e menos amargo</li>
<li>o fraco, que &eacute; amargo e de cor mais clara</li>
</ul>
<p>Deve ser saboreado assim que for preparado, seja quente ou frio. Seu p&oacute; deve ser dilu&iacute;do em &aacute;gua quente e a quantidade do p&oacute; depende do gosto.</p>
<p>Quando tomado logo ap&oacute;s o consumo de um doce, fica mais "f&aacute;cil" de tomar.</p>
<p>Este ch&aacute; tamb&eacute;m serve para o preparo de doces e bolos.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            75 => 
            array (
                'id' => 78,
                'nome' => 'Chá Gyokuro',
                'preco' => NULL,
                'grupo_id' => 33,
                'descricao' => '<p>O ch&aacute; Gyokuro &eacute; um ch&aacute; de cor mais escura e que tem aroma e sabor doces.</p>
<p>No Jap&atilde;o, ele &eacute; considerado o ch&aacute; de melhor qualidade.</p>
<p>Para prepar&aacute;-lo, use 10 gramas com 60 ml de &aacute;gua a uma temperatura de 50<span class="st">&deg;C</span> a 60<span class="st">&deg;C, por 2 minutos</span>.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            76 => 
            array (
                'id' => 79,
                'nome' => 'Chá Bancha',
                'preco' => NULL,
                'grupo_id' => 33,
                'descricao' => '<p>O Bancha, por ser feito com folhas maiores, colhidas no ver&atilde;o e no outono, &eacute; mais amargo e encorpado que as outras variedades de ch&aacute; japoneses.</p>
<p>Ele deixa um sabor refrescante na boca e facilita a digest&atilde;o, principalmente depois do consumo de comidas gordurosas.</p>
<p>No Jap&atilde;o, &eacute; considerado de qualidade inferior.</p>
<p>Para prepar&aacute;-lo, use 15 gramas em 650 ml de &aacute;gua, a uma temperatura de 100<span class="st">&deg;C, por 30 segundos.<br /></span></p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            77 => 
            array (
                'id' => 80,
                'nome' => 'Chá Geinmaicha',
                'preco' => NULL,
                'grupo_id' => 33,
                'descricao' => '<p>O Geinmaicha &eacute; um ch&aacute; feito da mistura de Sencha e/ou Bancha com arroz torrado.</p>
<p>Tem um aroma inconfund&iacute;vel e seu sabor parece com o do ch&aacute; mate.</p>
<p>Bom para acompanhar um lanche r&aacute;pido ou um tira-gosto como o Okaki, japon&ecirc;s, feito de arroz e algas.</p>
<p>Para prepar&aacute;-lo, junte 15 gramas a 650 ml de &aacute;gua a uma temperatura de 100<span class="st">&deg;C, por 30 segundos.<br /></span></p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            78 => 
            array (
                'id' => 81,
                'nome' => 'Chá Sencha',
                'preco' => NULL,
                'grupo_id' => 33,
                'descricao' => '<p>O ch&aacute; Sencha &eacute; o mais consumido no Jap&atilde;o e no Brasil, &eacute; servido nos melhores restaurantes de comida japonesa.</p>
<p>Tem folhas de primeira colheita, novas, de colora&ccedil;&atilde;o verde-clara e viva.</p>
<p>Tem sabor suave e extremamente refrescante. Ele &eacute; um bom acompanhamento para refei&ccedil;&otilde;es, especialmente para alimentos secos e para Senbei (biscoito fino de arroz).</p>
<p>No Brasil, pode ser encontrado com o nome de "ch&aacute; verde extra".</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            79 => 
            array (
                'id' => 82,
                'nome' => 'Asari',
                'preco' => NULL,
                'grupo_id' => 26,
                'descricao' => '<p>Marisco japon&ecirc;s que pode ser substitu&iacute;do no Brasil por v&ocirc;ngole.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            80 => 
            array (
                'id' => 83,
                'nome' => 'Sêmola de Trigo ou Semolina',
                'preco' => NULL,
                'grupo_id' => 7,
                'descricao' => '<p>A s&ecirc;mola de trigo &eacute; o resultado da moagem incompleta do trigo.</p>
<p>Tem elevado conte&uacute;do e qualidade de gl&uacute;ten e por isso &eacute;               ideal para elaborar massas de excelente qualidade.</p>
<p>Tamb&eacute;m &eacute; usada para se fazer cuscuz marroquino.</p>
<p>As pr&eacute;-cozidas s&oacute; precisam ser hidratadas.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            81 => 
            array (
                'id' => 84,
                'nome' => 'Farinha de Mandioca',
                'preco' => NULL,
                'grupo_id' => 7,
            'descricao' => '<p>A farinha de Mandioca &eacute; fobtida da raiz da mandioca. Os principais tipos s&atilde;o:&nbsp;<br /> &ndash; Farinha d\'&aacute;gua (fermentada)<br /> &ndash;&nbsp;Farinha seca (ralada)&nbsp;<br /> &ndash; Farinha mista</p>
<p>Ela faz dueto com a farinha de milho no cuscuz paulista.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            82 => 
            array (
                'id' => 85,
                'nome' => 'Farinha de Milho Flocada Branca',
                'preco' => NULL,
                'grupo_id' => 7,
                'descricao' => '<p>Ela substitui a farinha amarela nas receitas do Nordeste e do Sudeste.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            83 => 
            array (
                'id' => 86,
                'nome' => 'Farinha de Milho em Flocos Amarela',
                'preco' => NULL,
                'grupo_id' => 7,
                'descricao' => '<p>no Nordeste, a farinha de milho em flocos amarela &eacute; cozida com sal ou leite de c&ocirc;co. Em S&atilde;o Paulo, &eacute; base do cuscuz paulista.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            84 => 
            array (
                'id' => 87,
                'nome' => 'Queijo Maasdam',
                'preco' => NULL,
                'grupo_id' => 14,
                'descricao' => '<p>O queijo Maasdam tem origem Holandesa.</p>
<p>Ele &eacute; formado por buracos grandes e &eacute; ideal para sandu&iacute;ches, aperitivos, pode ser usado para fondues e na prepara&ccedil;&atilde;o de pratos gratinados.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            85 => 
            array (
                'id' => 88,
                'nome' => 'Queijo Cablanca',
                'preco' => NULL,
                'grupo_id' => 14,
                'descricao' => '<p>O queijo Cablanca &eacute; produzido na Holanda, com leite de cabra suave e com baixo teor de gordura. Tem um aroma muito gostoso e sabor delicado.</p>
<p>Este queijo &eacute; indicado para saladas e pratos r&aacute;pidos.</p>
<p>Tamb&eacute;m &eacute; uma boa pedida para uma t&aacute;bua de queijos.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            86 => 
            array (
                'id' => 89,
                'nome' => 'Queijo Serra de Balkis',
                'preco' => NULL,
                'grupo_id' => 14,
                'descricao' => '<p>O queijo Serra de Balkis &eacute; um queijo brasileiro com um toque de Portugal.</p>
<p>Ele &eacute; curado e de pasta semimole, amanteigado e saboroso.</p>
<p>Tem aroma intenso e paladar suave.</p>
<p>Fica muito bom como recheio de massas.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            87 => 
            array (
                'id' => 90,
                'nome' => 'Queijo Caciocavallo',
                'preco' => NULL,
                'grupo_id' => 14,
                'descricao' => '<p>O queijo Caciocavallo &eacute; Italiano, possui a mesma massa e sabor sabor semelhante ao do queijo Provolone, a diferen&ccedil;a &eacute; que este queijo &eacute; preparado com leite magro.</p>
<p>Este &eacute; um queijo pouco gorduroso e de consist&ecirc;ncia dura.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            88 => 
            array (
                'id' => 91,
                'nome' => 'Queijo Grana Padano',
                'preco' => NULL,
                'grupo_id' => 14,
                'descricao' => '<p>O queijo Grana Padano &eacute; Italiano, feito com leite de vaca.</p>
<p>Ele tem sabor fresco, frutado e doce. Tamb&eacute;m &eacute; formado por uma casca dura, de cor amarelo forte e textura lisa e grossa.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            89 => 
            array (
                'id' => 92,
                'nome' => 'Queijo Emmental',
                'preco' => NULL,
                'grupo_id' => 14,
                'descricao' => '<p>O queijo Emmental &eacute; Su&iacute;&ccedil;o.</p>
<p>Este queijo tem muitos orif&iacute;cios internos e &eacute; o maior de todos os queijos.</p>
<p>Ele tem aroma delicado e textura suave.</p>
<p>Este &eacute; um bom queijo para integrar o fondue ou outros pratos que envolvam queijo derretido.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            90 => 
            array (
                'id' => 93,
                'nome' => 'Ruibarbo',
                'preco' => NULL,
                'grupo_id' => 17,
                'descricao' => '<p>O Ruibarbo &eacute; origin&aacute;rio do Sudeste Europeu e tem propriedades digestivas, laxantes e ben&eacute;ficas ao f&iacute;gado. No entanto, desta planta utilizam-se apenas as hastes ou talos, <strong>suas folhas t&ecirc;m  &aacute;cido ox&aacute;lico e s&atilde;o muito t&oacute;xicas quando ingeridas</strong>.&nbsp; Por isso, o aproveitamento do ruibarbo deve ser cauteloso.</p>
<p>O  ch&aacute; das esp&eacute;cies medicinais &eacute; um excelente t&ocirc;nico para o organismo e age  como <strong>purgante</strong>. &Eacute; indicado nas <strong>perturba&ccedil;&otilde;es do est&ocirc;mago </strong>(azias, enj&ocirc;os e  digest&atilde;o dif&iacute;cil) <strong>e do intestino, nos quais atua como estimulante</strong>. No  tratamento da pris&atilde;o de ventre, o ch&aacute; das ra&iacute;zes tem apresentado bons  resultados por seu <strong>efeito laxante</strong>.</p>
<p>Ele &eacute; utilizado para fazer doces: faz-se uma gel&eacute;ia, que pode ser usada em recheios de tortas, bolos, ou na prepara&ccedil;&atilde;o de sufl&ecirc;s e outras sobremesas.</p>
<p>Ele &eacute; da mesma fam&iacute;lia das Azedinhas, tem talos avermelhados e apar&ecirc;ncia igual &aring; do sals&atilde;o. O Ruibarbo &eacute; rico em <strong>fibras, pot&aacute;ssio e vitamina C</strong>.</p>
<p>&nbsp;</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            91 => 
            array (
                'id' => 95,
                'nome' => 'Baru',
                'preco' => NULL,
                'grupo_id' => 23,
                'descricao' => '<p>O Bar&uacute; &eacute; uma Castanha do Cerrado, produzida org&acirc;nicamente por pequenos produtores.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            92 => 
            array (
                'id' => 96,
                'nome' => 'Queijo de Leite Cru da Serra do Salitre',
                'preco' => NULL,
                'grupo_id' => 14,
                'descricao' => '<p>O Queijo de Leite Cru da Serra do Salitre &eacute; produzido de maneira org&acirc;nica por pequenos produtoresem de Minas Gerais.</p>
<p>Gostoso quando usado em saladas.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            93 => 
            array (
                'id' => 97,
                'nome' => 'Arroz Vermelho do Vale do Piancó',
                'preco' => NULL,
                'grupo_id' => 24,
                'descricao' => '<p>O Arroz Vermelho do Vale do Pianc&oacute;, na Para&iacute;ba, &eacute; um alimento org&acirc;nico produzido por pequenos produtores.</p>
<p>Gostoso quando usado em saladas.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            94 => 
            array (
                'id' => 98,
                'nome' => 'Óleo de Linhaça',
                'preco' => NULL,
                'grupo_id' => 13,
                'descricao' => '<p><span id="taw" style="margin-right: 0;"><span class="ac">&Eacute; aconselh&aacute;vel a ingest&atilde;o de 1/4 a 1/2 de colher de sopa do &oacute;leo de linha&ccedil;a por dia, sobre saladas ou sobre a refei&ccedil;&atilde;o.</span></span></p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            95 => 
            array (
                'id' => 99,
                'nome' => 'Linhaça em Grãos Marrom',
                'preco' => NULL,
                'grupo_id' => 24,
                'descricao' => '<p>A linha&ccedil;a pode ser misturada a sucos, iogurtes, frutas, sobremesas, shakes, leite, sopas, feij&atilde;o, lentilha etc.</p>
<p>Pode ser utilizada como ingrediente de p&atilde;es, bolos, biscoitos.</p>
<p>O gr&atilde;o da linha&ccedil;a deve ser batido no liquidificador para o organismo assimilar melhor as suas propriedades (<strong>&ocirc;mega 3, fibras</strong>).</p>
<p>Para cada kg de farinha, pode-se colocar at&eacute; 2 colheres de medida de linha&ccedil;a.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            96 => 
            array (
                'id' => 100,
                'nome' => 'Farinha de Linhaça Dourada',
                'preco' => NULL,
                'grupo_id' => 7,
                'descricao' => '',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            97 => 
            array (
                'id' => 101,
                'nome' => 'Farinha de Linhaça',
                'preco' => NULL,
                'grupo_id' => 7,
                'descricao' => '',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            98 => 
            array (
                'id' => 102,
                'nome' => 'Soja',
                'preco' => NULL,
                'grupo_id' => 24,
                'descricao' => '<p>A soja &eacute; usada na preven&ccedil;&atilde;o de c&acirc;ncer, na redu&ccedil;&atilde;o da perda de c&aacute;lcio, na perda de mem&oacute;ria, na regulariza&ccedil;&atilde;o dos n&iacute;veis de glicose no sangue e na preven&ccedil;&atilde;o de doen&ccedil;as cardio-vasculares.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            99 => 
            array (
                'id' => 103,
                'nome' => 'Castanha do Pará',
                'preco' => NULL,
                'grupo_id' => 23,
                'descricao' => '<p>A Castanha do Par&aacute; &eacute; rica em gordura monoinsaturada, reduz o colesterol ruim e aumenta o bom.</p>
<p>Ajuda a prevenir doen&ccedil;as cardio-vasculares e &eacute; um poderoso antioxidante.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            100 => 
            array (
                'id' => 104,
                'nome' => 'Ovo de Ganso',
                'preco' => NULL,
                'grupo_id' => 15,
                'descricao' => '<p>Livro "Cooking Ingredients" de Christine Ingram.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            101 => 
            array (
                'id' => 105,
                'nome' => 'Ovo de Galinha Pequena ou Bantam',
                'preco' => NULL,
                'grupo_id' => 15,
                'descricao' => '<p>Livro "Cooking Ingredients" de Christine Ingram.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            102 => 
            array (
                'id' => 106,
                'nome' => 'Ovo de Codorna ou Quail',
                'preco' => NULL,
                'grupo_id' => 15,
                'descricao' => '<p>Livro "Cooking Ingredients" de Christine Ingram.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            103 => 
            array (
                'id' => 107,
                'nome' => 'Ovo de Pato',
                'preco' => NULL,
                'grupo_id' => 15,
                'descricao' => '<p>Livro "Cooking Ingredients" de Christine Ingram.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            104 => 
            array (
                'id' => 108,
                'nome' => 'Creme Azedo ou Sour Cream ou Crema',
                'preco' => NULL,
                'grupo_id' => 14,
                'descricao' => '<p>O creme azedo &eacute; usado principalmente na cozinha europ&eacute;ia e na Am&eacute;rica do Norte. Ele &eacute; usado como condimento.</p>
<p>O<em> Sour Cream </em>&eacute; muito usado em pratos salgados,&nbsp;como&nbsp;um acompanhamento, para dar cremosidade ao prato ou, ainda, para dar um gosto &aacute;cido &agrave; prepara&ccedil;&atilde;o.</p>
<p>Nos Estados Unidos &eacute; usado como cobertura para batatas de forno com cebolinhas.</p>
<p>Ado&ccedil;ado, pode ser misturado a bolos, bolachas salgadas, rosquinhas e frutas. Pode ainda &nbsp;ser usado como pasta para bolos, tortas, biscoitos etc.</p>
<p>Na Am&eacute;rica Central h&aacute; uma varia&ccedil;&atilde;o chamada de <em>crema</em>, que &eacute; um ingrediente b&aacute;sico em um caf&eacute;-da-manh&atilde; completo.</p>
<p>Na cozinha tex mex, &eacute; usado em nachos, burritos, tacos e guacamole. &Eacute; um dos ingredientes mais comuns no strogonoff de carne da cozinha americana.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            105 => 
            array (
                'id' => 109,
                'nome' => 'Cream Cheese',
                'preco' => NULL,
                'grupo_id' => 14,
                'descricao' => '<p>O cream cheese tem alta quantidade de creme de leite na sua composi&ccedil;&atilde;o e &eacute; ideal para  uso em tortas salgadas, pat&ecirc;s ou para a produ&ccedil;&atilde;o do cheesecake.</p>
<p>&nbsp;</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            106 => 
            array (
                'id' => 110,
                'nome' => 'Creme de Ricota',
                'preco' => NULL,
                'grupo_id' => 14,
                'descricao' => '<p>O creme de ricota &eacute; um creme de queijo mais leve, de paladar suave. Ele &eacute; uma op&ccedil;&atilde;o com baixa caloria, muita prote&iacute;na e baixa quantidade de s&oacute;dio.</p>
<p>Ele pode ser consumido ao  natural, ou pode servir como base para pat&ecirc;s, molhos, sopas, ou como  substituto do creme de leite.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            107 => 
            array (
                'id' => 111,
                'nome' => 'Queijo Processado ou Fundido',
                'preco' => NULL,
                'grupo_id' => 14,
                'descricao' => '<p>O queijo processado ou fundido <strong></strong>&eacute; uma mistura de  diversos tipos de queijo com &aacute;gua, manteiga ou creme, al&eacute;m de  saborizantes.</p>
<p>Ele &eacute; liso e homog&ecirc;neo e &eacute; muito bom para ser usado em sandu&iacute;ches e como aperitivo.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            108 => 
            array (
                'id' => 112,
                'nome' => 'Requeijão',
                'preco' => NULL,
                'grupo_id' => 14,
                'descricao' => '<p>O requeij&atilde;o &eacute; um alimento composto pela massa do queijo misturada com creme de leite e &aacute;gua.</p>
<p>Ele &eacute; mais comum no estado cremoso, mas pode ser encontrado  tamb&eacute;m em corte.</p>
<p>Excelente para lanches e na prepara&ccedil;&atilde;o de recheios e  molhos.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            109 => 
            array (
                'id' => 113,
                'nome' => 'Catupiry',
                'preco' => NULL,
                'grupo_id' => 14,
                'descricao' => '<p>O catupiry &eacute; um alimento muito cremoso.</p>
<p>Ele &eacute; ingrediente essencial em v&aacute;rias receitas t&iacute;picas do Brasil, como pizzas e past&eacute;is.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            110 => 
            array (
                'id' => 114,
                'nome' => 'Gordura de Ganso',
                'preco' => NULL,
                'grupo_id' => 13,
                'descricao' => '<p>Usada para se fazer o confit.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            111 => 
            array (
                'id' => 115,
                'nome' => 'Feijão Branco',
                'preco' => NULL,
                'grupo_id' => 20,
                'descricao' => '<h3><strong>O feij&atilde;o branco &eacute; macio e cremoso.  Para o Edinho Engel, o problema &eacute; a casca. </strong></h3>
<h3><strong>Com atum, ele pode  virar uma&nbsp; salada r&aacute;pida.</strong></h3>
<h3><strong>Se batido com mixer, se transforma em pur&ecirc;.</strong></h3>
<h3><strong>Se amassadinho com garfo, com cebola picada e salsinha, vira pasta para  passar no p&atilde;o.</strong></h3>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            112 => 
            array (
                'id' => 116,
                'nome' => 'Feijão Verde',
                'preco' => NULL,
                'grupo_id' => 20,
                'descricao' => '<h3>O feij&atilde;o verde &eacute; primo do feij&atilde;o fradinho, &eacute; do tipo que n&atilde;o d&aacute; caldo e por isso &eacute; &oacute;timo para fazer saladas.</h3>
<h3>Ele tem um gosto vegetal.</h3>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            113 => 
            array (
                'id' => 117,
                'nome' => 'Feijão Mangalô',
                'preco' => NULL,
                'grupo_id' => 20,
                'descricao' => '',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            114 => 
            array (
                'id' => 119,
                'nome' => 'Feijão Fradinho',
                'preco' => NULL,
                'grupo_id' => 20,
                'descricao' => '',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            115 => 
            array (
                'id' => 120,
                'nome' => 'Feijão de Corda',
                'preco' => NULL,
                'grupo_id' => 20,
                'descricao' => '<p>O feij&atilde;o de corda &eacute; intenso, potente e &eacute; usado para se fazer o bai&atilde;o de dois e o feij&atilde;o tropeiro.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            116 => 
            array (
                'id' => 121,
                'nome' => 'Feijão Carioquinha',
                'preco' => NULL,
                'grupo_id' => 20,
                'descricao' => '<p>O feij&atilde;o carioquinha &eacute; o mais usado em S&atilde;o Paulo no dia-a-dia.</p>
<p>Ele se desmancha, tem a casca fina e faz um caldo cremoso.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            117 => 
            array (
                'id' => 122,
                'nome' => 'Feijão Preto',
                'preco' => NULL,
                'grupo_id' => 20,
                'descricao' => '<p>O feij&atilde;o preto &eacute; usado no dia-a-dia do carioca.</p>
<p>Ele tamb&eacute;m &eacute; o feij&atilde;o da feijoada.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            118 => 
            array (
                'id' => 123,
                'nome' => 'Feijão Mulatinho',
                'preco' => NULL,
                'grupo_id' => 20,
                'descricao' => '<p>O feij&atilde;o mulatinho &eacute; usado no dia-a-dia do Baiano.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            119 => 
            array (
                'id' => 124,
                'nome' => 'Feijão Badajó',
                'preco' => NULL,
                'grupo_id' => 20,
                'descricao' => '<p>O feij&atilde;o Badaj&oacute; tem uma cor verde vibrante e tem sabor que sugere maresia, por isso vai bem com pescados.</p>
<p>Ele d&aacute; um bom caldo.</p>
<p><span class="st">&Eacute;</span> encontrado no mercado de Salvador.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            120 => 
            array (
                'id' => 125,
                'nome' => 'Feijão Enxofre',
                'preco' => NULL,
                'grupo_id' => 20,
                'descricao' => '<p>O feij&atilde;o enxofre &eacute; proveniente da Bahia.</p>
<p>Ele &eacute; um feij&atilde;o que n&atilde;o tem muito caldo, mas &eacute; rico em aromas. Fica muito bom em feijoadas.</p>
<p>Cresce bastante e fica maior que os outros feij&otilde;es.</p>
<p>&nbsp;</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            121 => 
            array (
                'id' => 126,
                'nome' => 'Feijão Manteiguinha',
                'preco' => NULL,
                'grupo_id' => 20,
                'descricao' => '<p>O feij&atilde;o manteiguinha &eacute; proveniente do Par&aacute;.</p>
<p>Ele &eacute; miudinho, branquinho e primo do feij&atilde;o fradinho. Ele &eacute; uma variedade adocicada.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            122 => 
            array (
                'id' => 127,
                'nome' => 'Pirarucu Seco',
                'preco' => NULL,
                'grupo_id' => 26,
                'descricao' => '<p>O pirarucu &eacute; um peixe de &aacute;gua doce da Bacia Amaz&ocirc;nica.</p>
<p>Pode ser um bom substituto do bacalhau.</p>
<p>Depois de dessalgado, ele pode ser assado, frito, cozido ou ensopado.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            123 => 
            array (
                'id' => 128,
                'nome' => 'Farinha de Feijão Fradinho',
                'preco' => NULL,
                'grupo_id' => 7,
                'descricao' => '<p>A farinha de feij&atilde;o fradinho prov&eacute;m da prensagem do feij&atilde;o fradinho e vem da Bahia.</p>
<p>Ela &eacute; usada para se fazer o abar&aacute; e o acaraj&eacute;.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            124 => 
            array (
                'id' => 129,
                'nome' => 'Hortelã-do-Norte',
                'preco' => NULL,
                'grupo_id' => 1,
                'descricao' => '<p>A hortel&atilde;-do-norte &eacute; encontrada em todo o Brasil.</p>
<p>Suas folhas t&ecirc;m sabor acentuado e servem para temperar feij&otilde;es, frango, sopas, carnes e pestos.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            125 => 
            array (
                'id' => 130,
                'nome' => 'Mentruz-Rasteiro',
                'preco' => NULL,
                'grupo_id' => 16,
                'descricao' => '<p>O mentruz-rasteiro &eacute; uma planta rasteira, perfumada e picante, proveniente do Sul e do Sudeste do Brasil.</p>
<p>Suas folhas lembram a mostarda e o agri&atilde;o.</p>
<p>Fica boa misturada a uma salada de folhas ou acompanhada de batatas.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            126 => 
            array (
                'id' => 131,
                'nome' => 'Fubá',
                'preco' => NULL,
                'grupo_id' => 7,
                'descricao' => '<p>O fub&aacute; &eacute; a farinha do milho torrado e mo&iacute;do, mais comumente encontrado no Sert&atilde;o Brasileiro.</p>
<p>Pode ser consumido doce, com a&ccedil;&uacute;car mascavo e banana ou em prepara&ccedil;&otilde;es salgadas, no lugar de outras farinhas.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            127 => 
            array (
                'id' => 132,
                'nome' => 'Serralha',
                'preco' => NULL,
                'grupo_id' => 16,
                'descricao' => '<p>A serralha pode quase que ser considerada uma erva "daninha", mas &eacute; comest&iacute;vel.</p>
<p>Seu sabor &eacute; amargo e ela &eacute; rica em &oacute;leos essenciais, taninos e subst&acirc;ncias amargas.</p>
<p>Ela &eacute; nativa da Europa, mas pode ser encontrada por toda a parte.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            128 => 
            array (
                'id' => 133,
                'nome' => 'Beldroega ou Beldroega-Grande ou Bredo',
                'preco' => NULL,
                'grupo_id' => 16,
                'descricao' => '<p>A beldroega &eacute; uma planta comest&iacute;vel que &eacute; encontrada principalmente na Bahia, mas tamb&eacute;m por todo o pa&iacute;s.</p>
<p>Pode ser usada refogada, em cozidos ou em sopas.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            129 => 
            array (
                'id' => 134,
                'nome' => 'Vieira Nativa',
                'preco' => NULL,
                'grupo_id' => 26,
                'descricao' => '<p>A vieira nativa &eacute; um molusco nativo da Costa Brasileira e quase extinta. Existe produ&ccedil;&atilde;o dela na Ilha Grande, no Rio de Janeiro.</p>
<p>Pode ser usada in natura, tratada como suhi, grelhada ou salteada.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            130 => 
            array (
                'id' => 135,
            'nome' => 'Camarão de Água-Doce (grelhado / cozido)',
                'preco' => NULL,
                'grupo_id' => 26,
                'descricao' => '<p>O camar&atilde;o de &aacute;gua doce &eacute; um crust&aacute;ceo comum em em rios e lagos que se comunicam com &aacute;guas salobras. Vem do Esp&iacute;rito Santo.</p>
<p>Ele pode ser feito grelhado, em caldos e saladas.</p>
<p>Sua casca pode ser mo&iacute;da at&eacute;&nbsp; virar p&oacute; e poder ser usada em outras prepara&ccedil;&otilde;es.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            131 => 
            array (
                'id' => 136,
                'nome' => 'Calêndula',
                'preco' => NULL,
                'grupo_id' => 1,
                'descricao' => '<p>A cal&ecirc;ndula &eacute; uma flor aveludada, com sabor amargo e origin&aacute;ria da Europa, embora tenha variedades que podem ser encontradas em todo o mundo.</p>
<p>Quando frescas, as flores podem ser usadas em saldas e, quando est&atilde;o secas, podem ser usadas em sopas e guisados.</p>
<p>Pode ser usada em molhos ou para aromatizar azeites e manteigas. Tamb&eacute;m colore e d&aacute; sabor a arrozes, peixes, bolos e pudins.</p>
<p>Durante o Imp&eacute;rio Romano, era conhecida como o a&ccedil;afr&atilde;o dos pobres.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            132 => 
            array (
                'id' => 137,
                'nome' => 'Mel do Mangue',
                'preco' => NULL,
                'grupo_id' => 3,
                'descricao' => '<p>O mel do mangue &eacute; aquele feito por abelhas nativas que ficam em manguezais de S&atilde;o Miguel dos Milagres, em Alagoas.</p>
<p>Suas notas podem ser tanto florais quanto frutadas.</p>
<p>Ele &eacute; um mel com boa densidade e do&ccedil;ura equilibrada, o que o faz ser adequado para uso em caldos e molhos.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            133 => 
            array (
                'id' => 138,
                'nome' => 'Maçunim',
                'preco' => NULL,
                'grupo_id' => 26,
                'descricao' => '<p>O ma&ccedil;unim &eacute; um molusco primo do mexilh&atilde;o e que est&aacute; em toda a Costa Brasileira at&eacute; o Mar do Caribe.</p>
<p>Ele vai bem na moqueca e tambeem &eacute; usado em recheios.</p>
<p>Fica muito bom com leite de c&ocirc;co.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            134 => 
            array (
                'id' => 139,
                'nome' => 'Feijão Andu',
                'preco' => NULL,
                'grupo_id' => 20,
                'descricao' => '<p>O feij&atilde;o andu &eacute; um tipo de feij&atilde;o que costuma ser vendido j&aacute; de molho, dentro d\'&aacute;gua, pois devido &aring; acidez dos seus gr&atilde;os, deve ser fervido e trocado de &aacute;gua tr&ecirc;s vezes, como a mandioca.</p>
<p>Fica bom se cozido com aves.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            135 => 
            array (
                'id' => 140,
                'nome' => 'Espino',
                'preco' => NULL,
                'grupo_id' => 2,
                'descricao' => '<p>O espino &eacute; uma semente Chilena normalmente usada na forma de um p&oacute; torrado.</p>
<p>Seus aromas e sabor lembram os do caf&eacute;.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            136 => 
            array (
                'id' => 141,
                'nome' => 'Tomilho Fresco',
                'preco' => NULL,
                'grupo_id' => 1,
                'descricao' => '<p>O tomilho &eacute; uma erva vers&aacute;til, tem um sabor bem agrad&aacute;vel, forte e arom&aacute;tico.</p>
<p>Suas folhas podem ser usadas em sopas, guisados, feij&atilde;o, carnes cozidas, cremes, molhos, pat&ecirc;s, legumes e principalmente batatas assadas.</p>
<p>Seu &oacute;leo essencial tem poder anti-s&eacute;ptico e &eacute; muito utilizado contra as <strong>afec&ccedil;&otilde;es pulmonares</strong> e como <strong>estimulante digestivo.</strong></p>
<p>Uma variedade &eacute; o tomilho-lim&atilde;o.<strong><br /></strong></p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            137 => 
            array (
                'id' => 142,
                'nome' => 'Pimenta de Szechuan',
                'preco' => NULL,
                'grupo_id' => 6,
                'descricao' => '',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            138 => 
            array (
                'id' => 143,
                'nome' => 'Cachaça Envelhecida',
                'preco' => NULL,
                'grupo_id' => 33,
                'descricao' => '<p>A cacha&ccedil;a envelhecida fica 1 ano em ton&eacute;is de at&eacute; 700 litros.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            139 => 
            array (
                'id' => 144,
                'nome' => 'Cachaça Ouro',
                'preco' => NULL,
                'grupo_id' => 33,
                'descricao' => '<p>A cacha&ccedil;a ouro &eacute; a cacha&ccedil;a feita a partir da mistura de 50% de cacha&ccedil;a envelhecida com uma pura.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            140 => 
            array (
                'id' => 145,
                'nome' => 'Cachaça Premium',
                'preco' => NULL,
                'grupo_id' => 33,
                'descricao' => '<p>A cacha&ccedil;a premium passa de 1 a 3 anos em toneeis de at&eacute; 700 litros.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            141 => 
            array (
                'id' => 146,
                'nome' => 'Cachaça Extra Premium',
                'preco' => NULL,
                'grupo_id' => 33,
                'descricao' => '<p>A cacha&ccedil;a extra premium deve ficar por, no m&iacute;nimo, 3 anos em ton&eacute;is de at&eacute; 700 litros.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            142 => 
            array (
                'id' => 147,
                'nome' => 'Cachaça Armazenada',
                'preco' => NULL,
                'grupo_id' => 33,
                'descricao' => '<p>A cacha&ccedil;a armazenada &eacute; conservada em ton&eacute;is de mais de 700 litros, sem tempo determinado.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            143 => 
            array (
                'id' => 148,
                'nome' => 'Queijo do Serro',
                'preco' => NULL,
                'grupo_id' => 14,
                'descricao' => '<p>O queijo do serro &eacute; feito com leite cru e pingo.</p>
<p>O pingo &eacute; o soro drenado da produ&ccedil;&atilde;o do queijo do dia anterior. Ele &eacute; um fermento natural com bact&eacute;rias l&aacute;cticas que d&atilde;o sabor e textura &uacute;nicas ao queijo.</p>
<p>Ele &eacute; produzido em 4 microrregi&otilde;es demarcadas pelo Emater-MG: Canastra, Serro, Arax&aacute; e Alto Para&iacute;ba.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            144 => 
            array (
                'id' => 149,
                'nome' => 'Mograbie',
                'preco' => NULL,
                'grupo_id' => 24,
                'descricao' => '',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            145 => 
            array (
                'id' => 150,
                'nome' => 'Lambari',
                'preco' => NULL,
                'grupo_id' => 26,
                'descricao' => '',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            146 => 
            array (
                'id' => 151,
                'nome' => 'Dashi',
                'preco' => NULL,
                'grupo_id' => 35,
                'descricao' => '<p>O dashi &eacute; um caldo base da culin&aacute;ria japonesa, feito com katsuobushi e alga kombo.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            147 => 
            array (
                'id' => 152,
                'nome' => 'Budião-Azul',
                'preco' => NULL,
                'grupo_id' => 26,
                'descricao' => '',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            148 => 
            array (
                'id' => 153,
                'nome' => 'Pimenta Jiquitaia',
                'preco' => NULL,
                'grupo_id' => 6,
                'descricao' => '<p>A jiquitaia &eacute; uma pimenta em p&oacute; feita pelos &iacute;ndios Baniwa que ficam entre o Brasil e a Col&ocirc;mbia.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            149 => 
            array (
                'id' => 154,
                'nome' => 'Cebola Comum ou Amarela ou Marrom ou Francesa',
                'preco' => NULL,
                'grupo_id' => 19,
                'descricao' => '<p>A cebola comum tem tamanhos e cores variadas. Normalmente ela &eacute; grande, redonda e suave.</p>
<p>Seus sabores v&atilde;o do adocicado ao ardido e ela &eacute; rica em minerais e vitaminas B e C.</p>
<p>Quanto mais nova e verde, mais ardida &eacute; a cebola.</p>
<p>Fica &oacute;tima crua, em saladas, frita, em sandu&iacute;ches, com lingui&ccedil;a, carnes e massas. Tempera arroz, sopas, cremes, molhos e pat&ecirc;s.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            150 => 
            array (
                'id' => 155,
                'nome' => 'Minicebolas',
                'preco' => NULL,
                'grupo_id' => 19,
                'descricao' => '<p>As minicebolas t&ecirc;m sabor doce, s&atilde;o ideais para conservas ou carameladas, com carne de porco e de cordeiro.</p>
<p>&nbsp;</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            151 => 
            array (
                'id' => 156,
                'nome' => 'Échalote',
                'preco' => NULL,
                'grupo_id' => 19,
                'descricao' => '<p>A &eacute;chalote &eacute; um bulbo similar &aring; cebola. Tem sabor suave e &eacute; boa em saladas, cozidos e assados.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            152 => 
            array (
                'id' => 157,
                'nome' => 'Cebola Branca',
                'preco' => NULL,
                'grupo_id' => 19,
                'descricao' => '<p>A cebola branca &eacute; mais suave.</p>
<p>Serve para tudo na cozinha e tamb&eacute;m pode ser usada em saladas.</p>
<p>Ela tem boa durabilidade.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            153 => 
            array (
                'id' => 158,
                'nome' => 'Cebola Roxa',
                'preco' => NULL,
                'grupo_id' => 19,
                'descricao' => '<p>A Cebola Roxa &eacute; mais &aacute;cida que a cebola vermelha e tem maior durabilidade.</p>
<p>Ela fica muito boa consumida crua, em saladas e em pratos frios. Pode ser cozida. N&atilde;o fica t&atilde;o boa assada.</p>
<p>Por sua cor, tamb&eacute;m &eacute; uma boa op&ccedil;&atilde;o para a decora&ccedil;&atilde;o de pratos.</p>
<p>Se misturada a c&iacute;tricos, acaba por colorir tudo com seu vermelho.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            154 => 
            array (
                'id' => 159,
                'nome' => 'Cebola Pequena',
                'preco' => NULL,
                'grupo_id' => 19,
                'descricao' => '<p>A cebola pequena tem sabor mais fraco e adocicado.</p>
<p>Fica boa quando assada com carnes ou cozida com legumes.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            155 => 
            array (
                'id' => 160,
                'nome' => 'Alho Branco',
                'preco' => NULL,
                'grupo_id' => 19,
                'descricao' => '<p>O alho branco &eacute; bastante comum na culin&aacute;ria brasileira. Ele &eacute; fonte de vitaminas A, B e C.</p>
<p>Quando usado para se fazer arroz, em carnes ou em cozidos, deve ser usado moderadamente.</p>
<p>Quando acompanhando frango &aring; passarinho ou outros petiscos, fica bom frito.</p>
<p>Tamb&eacute;m d&aacute; muito sabor &aring;s conservas.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            156 => 
            array (
                'id' => 161,
                'nome' => 'Alho Roxo',
                'preco' => NULL,
                'grupo_id' => 19,
                'descricao' => '<p>O alho roxo tem gosto mais intenso que o branco.</p>
<p>Ele &eacute; indicado para pastas e fica muito bom quando assado.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            157 => 
            array (
                'id' => 162,
                'nome' => 'Nirá ou Alho Japonês',
                'preco' => NULL,
                'grupo_id' => 1,
                'descricao' => '<p>O nir&aacute; &eacute; suave e por isso, muito gostoso<em> in natura</em>.</p>
<p>Suas folhas temperam molhos para saladas e decoram pratos.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            158 => 
            array (
                'id' => 163,
                'nome' => 'Cebolinha Francesa ou Ciboulette',
                'preco' => NULL,
                'grupo_id' => 1,
                'descricao' => '<p>A cebolinha francesa tem talos menores e mais finos do que a cebolinha verde.</p>
<p>Ela &eacute; bem delicada e &eacute; recomendada para molhos, pat&ecirc;s e peixes, al&eacute;m de dar um toque &aring; decora&ccedil;&atilde;o dos pratos.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            159 => 
            array (
                'id' => 164,
                'nome' => 'Cebolinha Verde ou Cebolinho',
                'preco' => NULL,
                'grupo_id' => 1,
                'descricao' => '<p>A cebolinha verde &eacute; uma cebola imatura, n&atilde;o totalmente formada.</p>
<p>Tem sabor suave e cont&eacute;m minerais e vitaminas A, B e C.</p>
<p>Ela &eacute; um dos componentes das ervas arom&aacute;ticas.</p>
<p>Fica bem em acepipes, pratos com queijo, sopas, saladas, fritos, refogados e marinadas.</p>
<p>Ela combina com ovos e serve para aromatizar manteigas e queijos.</p>
<p>Suas flores roxas ou cor-de-rosa s&atilde;o usadas em saladas.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            160 => 
            array (
                'id' => 165,
                'nome' => 'Ricota',
                'preco' => NULL,
                'grupo_id' => 14,
                'descricao' => '<p>A ricota &eacute; um derivado de queijo de massa mole, fresco e com baixo teor de gordura.</p>
<p>Ela n&atilde;o &eacute; produzida a partir do leite, do coalho, mas sim, do soro de queijo, o que lhe confere um alto teor de prote&iacute;na.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            161 => 
            array (
                'id' => 166,
                'nome' => 'Badejo',
                'preco' => NULL,
                'grupo_id' => 26,
                'descricao' => '',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            162 => 
            array (
                'id' => 167,
                'nome' => 'Pescada Branca',
                'preco' => NULL,
                'grupo_id' => 26,
                'descricao' => '',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            163 => 
            array (
                'id' => 168,
                'nome' => 'Pescada Amarela',
                'preco' => NULL,
                'grupo_id' => 26,
                'descricao' => '',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            164 => 
            array (
                'id' => 169,
                'nome' => 'Cavala',
                'preco' => NULL,
                'grupo_id' => 26,
                'descricao' => '',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            165 => 
            array (
                'id' => 170,
                'nome' => 'Enchova',
                'preco' => NULL,
                'grupo_id' => 26,
                'descricao' => '',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            166 => 
            array (
                'id' => 171,
                'nome' => 'Garoupa',
                'preco' => NULL,
                'grupo_id' => 26,
                'descricao' => '',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            167 => 
            array (
                'id' => 172,
                'nome' => 'Robalo',
                'preco' => NULL,
                'grupo_id' => 26,
                'descricao' => '',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            168 => 
            array (
                'id' => 173,
                'nome' => 'Tainha',
                'preco' => NULL,
                'grupo_id' => 26,
                'descricao' => '',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            169 => 
            array (
                'id' => 174,
                'nome' => 'Capivara',
                'preco' => NULL,
                'grupo_id' => 32,
                'descricao' => '<p>A carne da capivara tem colora&ccedil;&atilde;o avermelhada e se parece com a de su&iacute;nos, em textura e sabor.</p>
<p>Saborosa, &eacute; magra e de alto valor nutricional.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            170 => 
            array (
                'id' => 175,
                'nome' => 'Paca',
                'preco' => NULL,
                'grupo_id' => 32,
                'descricao' => '<p>A carne de paca &eacute; uma carne de sabor e textura muito delicados.</p>
<p>Ela &eacute; pouco dispon&iacute;vel e tem pre&ccedil;o alto.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            171 => 
            array (
                'id' => 176,
                'nome' => 'Porco-do-Mato ou Queixada',
                'preco' => NULL,
                'grupo_id' => 32,
                'descricao' => '<p>A carne do porco-do-mato &eacute; vermelha escura, &eacute; muito saborosa, tem pouca gordura e baixo teor de colesterol.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            172 => 
            array (
                'id' => 177,
                'nome' => 'Tatu',
                'preco' => NULL,
                'grupo_id' => 32,
                'descricao' => '',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            173 => 
            array (
                'id' => 178,
                'nome' => 'Veado',
                'preco' => NULL,
                'grupo_id' => 32,
                'descricao' => '',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            174 => 
            array (
                'id' => 179,
                'nome' => 'Ameixa-Nativa',
                'preco' => NULL,
                'grupo_id' => 22,
                'descricao' => '',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            175 => 
            array (
                'id' => 180,
                'nome' => 'Cajá-Manga',
                'preco' => NULL,
                'grupo_id' => 22,
                'descricao' => '',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            176 => 
            array (
                'id' => 181,
                'nome' => 'Cajazinho',
                'preco' => NULL,
                'grupo_id' => 22,
                'descricao' => '',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            177 => 
            array (
                'id' => 182,
                'nome' => 'Cambuci',
                'preco' => NULL,
                'grupo_id' => 22,
                'descricao' => '',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            178 => 
            array (
                'id' => 183,
                'nome' => 'Banana Maçã',
                'preco' => NULL,
                'grupo_id' => 22,
                'descricao' => '',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            179 => 
            array (
                'id' => 184,
                'nome' => 'Banana Nanica',
                'preco' => NULL,
                'grupo_id' => 22,
                'descricao' => '',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            180 => 
            array (
                'id' => 185,
                'nome' => 'Banana Nanicão',
                'preco' => NULL,
                'grupo_id' => 22,
                'descricao' => '',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            181 => 
            array (
                'id' => 186,
                'nome' => 'Banana Naniquinha',
                'preco' => NULL,
                'grupo_id' => 22,
                'descricao' => '',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            182 => 
            array (
                'id' => 187,
                'nome' => 'Banana Prata',
                'preco' => NULL,
                'grupo_id' => 22,
                'descricao' => '',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            183 => 
            array (
                'id' => 188,
                'nome' => 'Banana Veiaca',
                'preco' => NULL,
                'grupo_id' => 22,
                'descricao' => '<p>A banana veiaca est&aacute; em extin&ccedil;&atilde;o por n&atilde;o resistir &aring;s pragas.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            184 => 
            array (
                'id' => 189,
                'nome' => 'Banana da Terra ou Pacova',
                'preco' => NULL,
                'grupo_id' => 22,
                'descricao' => '',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            185 => 
            array (
                'id' => 190,
                'nome' => 'Marolo',
                'preco' => NULL,
                'grupo_id' => 22,
                'descricao' => '<p>O marolo &eacute; uma fruta nativa do Cerrado Brasileiro.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            186 => 
            array (
                'id' => 191,
                'nome' => 'Nata',
                'preco' => NULL,
                'grupo_id' => 14,
                'descricao' => '<p>Nata &eacute; a camada que se forma na superf&iacute;cie do leite e que pode ser usada de mil e uma formas.</p>
<p>Pode ser usada no preparo de molhos para carnes, como por exemplo o strogonoff; para preparar um <em>sour cream</em>; ou pode ainda ser misturada a ervinhas frescas e servir de <em>dip </em>para palitos de cenoura, de pepino e&nbsp;de erva-doce.</p>
<p>A marca Balkis tem embalagem de 360 g.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            187 => 
            array (
                'id' => 192,
                'nome' => 'Fécula de Araruta',
                'preco' => NULL,
                'grupo_id' => 7,
                'descricao' => '<p>A f&eacute;cula de araruta tem um grande poder espessante e ao mesmo tempo, um sabor neutro. Por isso, &eacute; um dos amidos mais vers&aacute;teis.</p>
<p>Como tem um elevado poder de espessar, deve ser usada em quantidades menores do que outros amidos.</p>
<p>Suas caracter&iacute;sticas s&atilde;o muito parecidas com as do polvilho doce.</p>
<p>O amido age &aring; temperatura de 58<span class="st">&ordm;C.</span></p>
<p>Vem do rec&ocirc;ncavo Baiano.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            188 => 
            array (
                'id' => 193,
                'nome' => 'Espessantes',
                'preco' => NULL,
                'grupo_id' => 7,
                'descricao' => '<p>Alguns espessantes s&atilde;o:</p>
<ul>
<li>F&eacute;cula de Batata</li>
<li>Amido de Milho (maisena)</li>
<li>Farinha de Trigo</li>
<li>F&eacute;cula de Araruta</li>
<li>F&eacute;cula de Arroz </li>
<li>F&eacute;cula de Mandioca (Polvilho)</li>
</ul>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            189 => 
            array (
                'id' => 194,
                'nome' => 'Fécula de Arroz',
                'preco' => NULL,
                'grupo_id' => 7,
                'descricao' => '<p>A f&eacute;cula de arroz &eacute; um espessante bastante usado no preparo de mingaus e doces tradicionais japoneses.</p>
<p>Ela &eacute; indicada para quem busca uma textura similar &aring; do <em>petit gateau</em>, ou seja, uma leve crosta por fora e um <em>ganache</em> por dentro.</p>
<p>O amido desta f&eacute;cula age &aring; temperatura de 84<span class="st">&ordm;C.</span></p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            190 => 
            array (
                'id' => 195,
                'nome' => 'Farinha de Trigo Convencional',
                'preco' => NULL,
                'grupo_id' => 7,
                'descricao' => '<p>A farinha de trigo &eacute; o espessante mais popular do mundo.</p>
<p>Ela pode deixar aroma e gosto na comida quando mal aplicada.</p>
<p>O amido age &aring; temperatura de 80<span class="st">&ordm;C.</span></p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            191 => 
            array (
                'id' => 196,
                'nome' => 'Fécula de Batata',
                'preco' => NULL,
                'grupo_id' => 7,
                'descricao' => '<p>A f&eacute;cula de batata &eacute; um espessante que, assim como o amido de milho, tem sabor neutro e confere cremosidade &aring; consist&ecirc;ncia.</p>
<p>Ela &eacute; muito usada na cozinha oriental para engrossar caldos.</p>
<p>O amido age &aring; temperatura de 58<span class="st">&ordm;C.</span></p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            192 => 
            array (
                'id' => 197,
                'nome' => 'Fécula de Mandioca ou Polvilho',
                'preco' => NULL,
                'grupo_id' => 7,
                'descricao' => '<p>Existem dois tipos do espessante f&eacute;cula de mandioca: o doce e o azedo.</p>
<p>A f&eacute;dula doce &eacute; mais densa e "visguenta", por isso &eacute; ideal para engrossar a massa de biscoitos e fazer p&atilde;o de queijo.</p>
<p>A f&eacute;cula azeda &eacute; menos densa e mais macia. Ela &eacute; melhor para os molhos.</p>
<p>O amido age &aring; temperatura de 58<span class="st">&ordm;C.</span></p>
<p>&nbsp;</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            193 => 
            array (
                'id' => 198,
                'nome' => 'Amido de Milho ou Maisena',
                'preco' => NULL,
                'grupo_id' => 7,
                'descricao' => '<p>O amido de milho n&atilde;o tem gl&uacute;ten, n&atilde;o tem sabor nem odor e por isso n&atilde;o altera o gosto dos alimentos.</p>
<p>Ele d&aacute; consist&ecirc;ncia aveludada e dissolve com facilidade.</p>
<p>O amido age &aring; temperatura de 65<span class="st">&ordm;C.</span></p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            194 => 
            array (
                'id' => 199,
                'nome' => 'Amidos',
                'preco' => NULL,
                'grupo_id' => 7,
                'descricao' => '<p>Os amidos interferem na textura ou no corpo de uma prepara&ccedil;&atilde;o culin&aacute;ria, pois t&ecirc;m o poder da gelatiniza&ccedil;&atilde;o.</p>
<p>No entanto, para que comece a agir, o amido precisa ser aquecido.</p>
<p>Os amidos de cereais precisam de temperaturas mais elevadas para se gelificar.</p>
<p>No caso das f&eacute;culas, o processo ocorre &aring; temperatura mais baixa.</p>
<p>As f&eacute;culas de ra&iacute;zes e tub&eacute;rculos se gelificam rapidamente.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            195 => 
            array (
                'id' => 200,
                'nome' => 'Kuzu ou Kudzu ou Araruta Nopônica',
                'preco' => NULL,
                'grupo_id' => 7,
                'descricao' => '<p>O Kuzu &eacute; um amido japon&ecirc;s extra&iacute;do da raiz de uma trepadeira nativa do Jap&atilde;o, a Pueraria Lobata.</p>
<p>Ela &eacute; mais parecida com a farinha de tapioca do que com a araruta brasileira.</p>
<p>Tem uma textura peculiar, elasticidade de maria-mole, balan&ccedil;o da gelatina e a prepara&ccedil;&atilde;o se rompe facilmente se um garfo for passado.</p>
<p>O Kuzu s&oacute; &eacute; encontrado no bairro de Kappabashi em T&oacute;quio.</p>
<p>&nbsp;</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            196 => 
            array (
                'id' => 201,
                'nome' => 'Lírio-do-Brejo ou Gengibre-Branco',
                'preco' => NULL,
                'grupo_id' => 17,
                'descricao' => '<p>O l&iacute;rio-do-brejo lembra o gengibre, tanto na apar&ecirc;ncia quanto no gosto, mas como sua flor &eacute; muito perfumada, tamb&eacute;m tem algumas notas florais.</p>
<p>Ele &eacute; uma planta que nasce espontaneamente em terrenos alagadi&ccedil;os.</p>
<p>O amido desta planta &eacute; muito especial, mas deve ser usado com modera&ccedil;&atilde;o, pois &eacute; muito forte.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            197 => 
            array (
                'id' => 202,
                'nome' => 'Inhame',
                'preco' => NULL,
                'grupo_id' => 17,
                'descricao' => '<p>O inhame tem uma subst&acirc;ncia t&oacute;xica na sua composi&ccedil;&atilde;o e a &uacute;nica maneira de faz&ecirc;-lo perder a efici&ecirc;ncia desta subst&acirc;ncia &eacute; cozinhando o tub&eacute;rculo.</p>
<p>N&atilde;o deve ser guardado na geladeira, mas em lugar arejado, fresco e escuro.</p>
<p>Pode ser usado, assim como a batata, para espessar cremes no lugar da farinha de trigo.</p>
<p>Seu preparo &eacute; como o de uma batata: amassado, cozido, assado ou frito.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            198 => 
            array (
                'id' => 203,
                'nome' => 'Feijão Roxinho',
                'preco' => NULL,
                'grupo_id' => 20,
                'descricao' => '',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            199 => 
            array (
                'id' => 204,
                'nome' => 'Feijão Jalo',
                'preco' => NULL,
                'grupo_id' => 20,
                'descricao' => '',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            200 => 
            array (
                'id' => 205,
                'nome' => 'Feijão Canário',
                'preco' => NULL,
                'grupo_id' => 20,
                'descricao' => '',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            201 => 
            array (
                'id' => 206,
                'nome' => 'Feijão Rosinha',
                'preco' => NULL,
                'grupo_id' => 20,
                'descricao' => '',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            202 => 
            array (
                'id' => 207,
                'nome' => 'Baunilha do Cerrado',
                'preco' => NULL,
                'grupo_id' => 16,
                'descricao' => '<p><span style="font-size: small;"><span lang="PT-BR">Vanilla    &eacute; um g&ecirc;nero de planta nativa do M&eacute;xico pertencente &agrave; fam&iacute;lia das   orquid&aacute;ceas.</span></span></p>
<p><span style="font-size: small;"><span lang="PT-BR">A partir dos frutos de algumas esp&eacute;cies obt&eacute;m-se a   especiaria comercialmente conhecida como baunilha. </span></span><span style="font-size: small;"><span lang="PT-BR">A fava &eacute; uma de suas folhas secas cujas sementes s&atilde;o uma das iguarias mais caras que existem.</span></span></p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            203 => 
            array (
                'id' => 208,
                'nome' => 'Caranguejos',
                'preco' => NULL,
                'grupo_id' => 26,
                'descricao' => '',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            204 => 
            array (
                'id' => 209,
                'nome' => 'Cajuzinho do Mato',
                'preco' => NULL,
                'grupo_id' => 23,
                'descricao' => '',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            205 => 
            array (
                'id' => 210,
                'nome' => 'Mangarito',
                'preco' => NULL,
                'grupo_id' => 17,
                'descricao' => '<p>O mangarito &eacute; um tub&eacute;rculo de cultivo delicado e manhoso, tem aspecto  disforme e pouco atraente</p>
<p>Tem sabor amendoado e &eacute; bem vers&aacute;til. Limpa-se  um a um, depois ele &eacute; cozido e descascado.</p>
<p>Pode ser  comido assim ou passado na manteiga.</p>
<p>Segundo Mara Salles, &eacute; &oacute;tima companhia para  assados, frangos ensopados e carnes de panela. Dele, pode-se fazer nhoque de mangarito ou ceviche de peixe branco com pimentas amaz&ocirc;nicas e  mangaritos em melado de cana!</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            206 => 
            array (
                'id' => 211,
                'nome' => 'Camarão Seco',
                'preco' => NULL,
                'grupo_id' => 26,
                'descricao' => '',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            207 => 
            array (
                'id' => 212,
                'nome' => 'Lambreta',
                'preco' => NULL,
                'grupo_id' => 26,
                'descricao' => '',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            208 => 
            array (
                'id' => 213,
                'nome' => 'Siri',
                'preco' => NULL,
                'grupo_id' => 26,
                'descricao' => '',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            209 => 
            array (
                'id' => 214,
                'nome' => 'Carimã, Puba ou Mandioca Mole',
                'preco' => NULL,
                'grupo_id' => 17,
                'descricao' => '<p>A carim&atilde; vem do aipim, raiz comest&iacute;vel tamb&eacute;m chamada de mandioca ou macaxeira.</p>
<p>Ela &eacute; uma massa fermentada e que depois &eacute; colocada para escorrer.</p>
<p>Transformar a mandioca em carim&atilde; n&atilde;o &eacute; um processo  muito f&aacute;cil, mas depois de pronta transforma-se num alimento rico em  vitaminas e minerais.</p>
<p>Ela &eacute; encontrada com facilidade nas feiras livres  de nossa cidade.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            210 => 
            array (
                'id' => 215,
                'nome' => 'Maturi',
                'preco' => NULL,
                'grupo_id' => 18,
                'descricao' => '<p>O maturi &eacute; a castanha de caju verde.</p>
<p>Ela &eacute; usada em pratos da culin&aacute;ria nordestina.</p>
<p>&nbsp;</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            211 => 
            array (
                'id' => 216,
                'nome' => 'Patauá ou Ungurahui',
                'preco' => NULL,
                'grupo_id' => 18,
                'descricao' => '<p>O patau&aacute;, a exemplo do a&ccedil;a&iacute;, &eacute; mais uma palmeira amaz&ocirc;nica de cujas sementes extrai-se um &oacute;leo que pode ser usado na culin&aacute;ria e que cont&eacute;m os &Oacute;mega 3 e 6 &aacute;cidos aminos.</p>
<p>Puro ou misturado com mel e lim&atilde;o, este &oacute;leo de patau&aacute; &eacute; empregado para o tratamento das infec&ccedil;&otilde;es br&ocirc;nquicas e pulmonares menores.</p>
<p>Seus frutos s&atilde;o comest&iacute;veis e em alguns meses do ano tamb&eacute;m pode-se fazer o vinho do  patau&aacute;, que &eacute; o suco extra&iacute;do das sementes, e vendido no mercado  informal de sucos em Rio Branco (AC).</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            212 => 
            array (
                'id' => 217,
                'nome' => 'Pimenta Baniwa',
                'preco' => NULL,
                'grupo_id' => 6,
                'descricao' => '<p>A pimenta baniwa &eacute; origin&aacute;ria da regi&atilde;o do rio I&ccedil;ana, na Amaz&ocirc;nia.</p>
<p><span class="r_corpo">Esta pimenta em p&oacute; &eacute; um dos mais tradicionais condimentos da culin&aacute;ria da etnia.</span></p>
<p><span class="r_corpo">A culin&aacute;ria tradicional Baniwa utiliza esta pimenta socada principalmente como tempero para peixes.</span></p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            213 => 
            array (
                'id' => 218,
                'nome' => 'Tucupi',
                'preco' => NULL,
                'grupo_id' => 6,
            'descricao' => '<p>O tucupi &eacute; um tempero e molho de cor amarela extra&iacute;do da raiz da mandioca brava, que &eacute; descascada, ralada e espremida (tradicionalmente usando-se um tipiti - esp&eacute;cie de prensa ou espremedor de palha tran&ccedil;ada usado para escorrer e secar a mandioca ralada).</p>
<p>Depois de extra&iacute;do, o molho "descansa" para que o amido  (goma) se separe do l&iacute;quido (tucupi). Este l&iacute;quido &eacute; inicialmente venenoso devido &agrave;  presen&ccedil;a do &aacute;cido cian&iacute;drico, mas depois de cozido por horas (processo que elimina o  veneno), pode, ent&atilde;o, ser usado como molho na culin&aacute;ria.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            214 => 
            array (
                'id' => 219,
                'nome' => 'Mel Manduri',
                'preco' => NULL,
                'grupo_id' => 3,
                'descricao' => '<p>O mel manduri tem uma acidez bem sutil e &eacute; pouco doce.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            215 => 
            array (
                'id' => 220,
                'nome' => 'Mel Apis',
                'preco' => NULL,
                'grupo_id' => 3,
                'descricao' => '<p>O mel apis &eacute; um mel bem doce e espesso.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            216 => 
            array (
                'id' => 221,
                'nome' => 'Mel Mandaçaia',
                'preco' => NULL,
                'grupo_id' => 3,
                'descricao' => '<p>O mel manda&ccedil;aia &eacute; clar&iacute;ssimo e &eacute; o mel mais l&iacute;quido que tem. Sua acidez &eacute; alta.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            217 => 
            array (
                'id' => 222,
                'nome' => 'Mel Tubuna',
                'preco' => NULL,
                'grupo_id' => 3,
                'descricao' => '<p>O mel tubuna tem amargor e n&atilde;o deixa res&iacute;duo doce.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            218 => 
            array (
                'id' => 223,
                'nome' => 'Mel Tubi',
                'preco' => NULL,
                'grupo_id' => 3,
                'descricao' => '<p>O mel tubi &eacute; bem c&iacute;trico e tem leve amargor.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            219 => 
            array (
                'id' => 224,
                'nome' => 'Mel Borá',
                'preco' => NULL,
                'grupo_id' => 3,
                'descricao' => '<p>O mel bor&aacute; remete ao queijo no aroma e no sabor.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            220 => 
            array (
                'id' => 225,
                'nome' => 'Mel Uruçú',
                'preco' => NULL,
                'grupo_id' => 3,
                'descricao' => '<p>O mel uru&ccedil;&uacute; lembra em aroma o do mel apis.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            221 => 
            array (
                'id' => 226,
                'nome' => 'Mel Tujumirim',
                'preco' => NULL,
                'grupo_id' => 3,
                'descricao' => '<p>O mel tujumirim tem sabor bem floral.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            222 => 
            array (
                'id' => 227,
                'nome' => 'Mel Guaraipo',
                'preco' => NULL,
                'grupo_id' => 3,
                'descricao' => '<p>O mel guaraipo tem toque de mato e frutas secas.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            223 => 
            array (
                'id' => 228,
                'nome' => 'Mel Jataí',
                'preco' => NULL,
                'grupo_id' => 3,
                'descricao' => '<p>O mel jata&iacute; &eacute; doce e lembra o mosto de uva.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            224 => 
            array (
                'id' => 229,
                'nome' => 'Caranguejo Aratu',
                'preco' => NULL,
                'grupo_id' => 26,
                'descricao' => '<p>O caranguejo aratu &eacute; t&iacute;pico do Sergipe.</p>
<p>Ele &eacute; pequeno e sua carne &eacute; delicada.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            225 => 
            array (
                'id' => 230,
                'nome' => 'Castanha de Baru',
                'preco' => NULL,
                'grupo_id' => 23,
                'descricao' => '<p>A castanha de baru &eacute; comum no Cerrado, em Goi&aacute;s.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            226 => 
            array (
                'id' => 231,
                'nome' => 'Pinhão',
                'preco' => NULL,
                'grupo_id' => 18,
                'descricao' => '<p>O pinh&atilde;o &eacute; a designa&ccedil;&atilde;o gen&eacute;rica da semente de v&aacute;rias esp&eacute;cies de arauc&aacute;rias.</p>
<p>Ele pode ser consumido assado ou cozido, destacando-se alguns pratos, como a  pa&ccedil;oca de pinh&atilde;o e o entrevero.</p>
<p>No Paran&aacute; s&atilde;o feitos os doces de pinh&atilde;o, o frango ensopado com pinh&atilde;o, a sopa  de pinh&atilde;o, o cordeiro ao molho de pinh&atilde;o e outras iguarias.</p>
<p>Tamb&eacute;m &eacute; apreciado como aperitivo e em v&aacute;rias sobremesas.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            227 => 
            array (
                'id' => 232,
                'nome' => 'Pitu',
                'preco' => NULL,
                'grupo_id' => 26,
                'descricao' => '<p>O pitu &eacute; um camar&atilde;o de rio.</p>
<p>Seu sabor &eacute; mais adocicado e marcante.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            228 => 
            array (
                'id' => 233,
                'nome' => 'Perdiz Brasileira ou Inhambupé',
                'preco' => NULL,
                'grupo_id' => 32,
                'descricao' => '<p>A perdiz brasileira &eacute; muito semelhante &agrave; nossa codorna silvestre e se difere apenas pelo seu grande porte.</p>
<p>Ela &eacute; comumente encontrada no Brasil Central.</p>
<p>&nbsp;</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            229 => 
            array (
                'id' => 234,
                'nome' => 'Marrecão ou Marrecão-da-Patagônia ou Pato-Picazo',
                'preco' => NULL,
                'grupo_id' => 32,
                'descricao' => '<p>O marrec&atilde;o &eacute; uma esp&eacute;cie de marreco selvagem, natural do Rio Grande do Sul.</p>
<p>Ele circula no Brasil entre os meses de Junho e Agosto.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            230 => 
            array (
                'id' => 235,
                'nome' => 'Buriti ou Aguaje',
                'preco' => NULL,
                'grupo_id' => 18,
                'descricao' => '<p>O buriti &eacute; uma planta cujo fruto &eacute; uma fonte de alimento privilegiada, pois &eacute; rico em vitamina A, B e C, fornece c&aacute;lcio, ferro e prote&iacute;nas.</p>
<p>Tradicionalmente seu fruto &eacute; consumido ao natural,mas tamb&eacute;m pode ser transformado em doces, sucos, picol&eacute;s, licores, sobremesas de paladar peculiares.</p>
<p>Fornece ainda um saboroso palmito, e a f&eacute;cula.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            231 => 
            array (
                'id' => 236,
                'nome' => 'Conserva de Alcachofra',
                'preco' => NULL,
                'grupo_id' => 11,
                'descricao' => '<p>O ideal &eacute; que a compota de alcachofra seja feita apenas em azeite, sem nenhuma acidez.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            232 => 
            array (
                'id' => 237,
                'nome' => 'Aceto Balsâmico ou Vinagre Balsâmico',
                'preco' => NULL,
                'grupo_id' => 12,
                'descricao' => '<p>O aceto bals&acirc;mico &eacute; <span class="inbox">escuro e bastante arom&aacute;tico.</span></p>
<p><span class="inbox">Ele &eacute; feito com uvas  selecionadas da regi&atilde;o de Modena, na It&aacute;lia. O aut&ecirc;ntico vinagre  bals&acirc;mico passa por um longo processo de fermenta&ccedil;&atilde;o, feita em barris de  madeira, que deve durar pelo menos 10 anos.</span></p>
<p><span class="inbox">&Eacute; excelente no preparo de  molhos para saladas, para temperar legumes ou para enriquecer molhos a  partir do fundo de cozimento. </span></p>
<p>Puro e concentrado tem sabor que remete a melado. O bals&acirc;mico branco pode ser aromatizado com or&eacute;gano.</p>
<p>Existe o aceto bals&acirc;mico Ginepro Reserve, envelhecido por 16 anos em barris de zimbro, o que lhe confere sabor com toques herb&aacute;ceos e t&acirc;nicos. Vendido na Olive &amp; Co, vem em caixa numerada.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            233 => 
            array (
                'id' => 238,
                'nome' => 'Mostarda de Frutas',
                'preco' => NULL,
                'grupo_id' => 9,
                'descricao' => '<p>&nbsp;</p>
<p>&nbsp;</p>
<p>A mostarda de Frutas de Cremona da Lazzaris &eacute; bem saborosa.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            234 => 
            array (
                'id' => 239,
                'nome' => 'Postas Dessalgadas de Bacalhau Gadus Morhua',
                'preco' => NULL,
                'grupo_id' => 26,
                'descricao' => '',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            235 => 
            array (
                'id' => 240,
                'nome' => 'Mel Branco ou Guaraipo',
                'preco' => NULL,
                'grupo_id' => 3,
                'descricao' => '<p>O mel branco &eacute; uma variedade rara de mel, de cor clara, textura cremosa e do&ccedil;ura equilibrada, ele &eacute; raro porque &eacute; produzido em pequena quantidade, apenas 15 kg por ano, em Cambar&aacute; do Sul.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            236 => 
            array (
                'id' => 241,
                'nome' => 'Javali',
                'preco' => NULL,
                'grupo_id' => 32,
                'descricao' => '<p>A carne do javali &eacute; uma carne nobre, de cor mais escura do que a do porco, &eacute; de excepcional qualidade, &eacute; saborosa e suave.</p>
<p>Ela &eacute; uma carne magra, tenra e com baixo teor de gordura e colesterol.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            237 => 
            array (
                'id' => 242,
                'nome' => 'Cateto',
                'preco' => NULL,
                'grupo_id' => 32,
                'descricao' => '<p>O cateto &eacute; uma esp&eacute;cie de porco-do-mato. Sua carne &eacute; rosada, semelhante &aring; do porco dom&eacute;stico, tem baixos n&iacute;veis de colesterol e gordura e seu sabor &eacute; suave e levemente adocicado.</p>
<p>&nbsp;</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            238 => 
            array (
                'id' => 243,
                'nome' => 'Jacaré',
                'preco' => NULL,
                'grupo_id' => 32,
                'descricao' => '',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            239 => 
            array (
                'id' => 244,
                'nome' => 'Ema',
                'preco' => NULL,
                'grupo_id' => 32,
                'descricao' => '',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            240 => 
            array (
                'id' => 245,
                'nome' => 'Galinha D\'Angola',
                'preco' => NULL,
                'grupo_id' => 31,
                'descricao' => '',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            241 => 
            array (
                'id' => 246,
                'nome' => 'Avestruz',
                'preco' => NULL,
                'grupo_id' => 31,
                'descricao' => '',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            242 => 
            array (
                'id' => 247,
                'nome' => 'Cabrito',
                'preco' => NULL,
                'grupo_id' => 28,
                'descricao' => '',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            243 => 
            array (
                'id' => 248,
                'nome' => 'Marreco',
                'preco' => NULL,
                'grupo_id' => 31,
                'descricao' => '',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            244 => 
            array (
                'id' => 249,
                'nome' => 'Pato',
                'preco' => NULL,
                'grupo_id' => 31,
                'descricao' => '',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            245 => 
            array (
                'id' => 250,
                'nome' => 'Coelho',
                'preco' => NULL,
                'grupo_id' => 32,
                'descricao' => '',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            246 => 
            array (
                'id' => 251,
                'nome' => 'Manjericão Tailandês',
                'preco' => NULL,
                'grupo_id' => 1,
                'descricao' => '',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            247 => 
            array (
                'id' => 252,
                'nome' => 'Galangal ou Gengibre Chinês',
                'preco' => NULL,
                'grupo_id' => 17,
                'descricao' => '<p>Parente do Gengibre.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            248 => 
            array (
                'id' => 253,
                'nome' => 'Erva Cidreira ou Capim Santo ou Capim Limão',
                'preco' => NULL,
                'grupo_id' => 1,
                'descricao' => '<p>A erva cidreira tem folhas serrilhadas e possui caracter&iacute;sticas inconfund&iacute;veis como o cheiro e o sabor c&iacute;tricos.</p>
<p>D&atilde;o sabor de hortel&atilde; &aring; carne, &aring;s aves e ao peixe, a saladas de frutas e verduras, al&eacute;m de sopas e pudins.</p>
<p>A infus&atilde;o se suas folhas faz um ch&aacute; tranquilizante.</p>
<p>&nbsp;</p>
<p>&nbsp;</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            249 => 
            array (
                'id' => 254,
            'nome' => 'Ervas Finas (salsa, cerefólio, cebolinha e estragão picadinhos)',
                'preco' => NULL,
                'grupo_id' => 1,
                'descricao' => '<p>Ervas Finas &eacute; um combinado de salsa, ceref&oacute;lio, cebolinha e estrag&atilde;o, todos picadinhos.</p>
<p>Elas s&atilde;o usadas para dar gosto a pratos delicados como omeletes e saladas de verduras.</p>
<p>Quando misturadas ao sumo de lim&atilde;o ou &aring; manteiga levemente derretida, ficam &oacute;timas para serem usadas com peixes, com carnes grelhadas, com molho b&eacute;rnaise e com molho hollandaise.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            250 => 
            array (
                'id' => 255,
                'nome' => 'Hortelã ou Menta',
                'preco' => NULL,
                'grupo_id' => 1,
                'descricao' => '<p>A hortel&atilde; tem um sabor forte e ardido, j&aacute; a menta tem um sabor mais suave e &eacute; usada como tempero.</p>
<p>A menta &eacute; usada no mundo todo para dar sabor a tudo, desde cordeiro at&eacute; doces.</p>
<p>Seus rebentos podem ser usados em bebidas.</p>
<p>Suas folhas picadas, em cordeiro, legumes, batata, ervilhas, salada-de-frutas, para molho de hortel&atilde; etc.</p>
<p>Algumas variedades:</p>
<p>Hortel&atilde;-Pimenta ou Peppermint - mais usada em doces</p>
<p>Hortel&atilde;-Ma&ccedil;&atilde;</p>
<p>&nbsp;</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            251 => 
            array (
                'id' => 256,
                'nome' => 'Pimpinela ou Sanguissorba',
                'preco' => NULL,
                'grupo_id' => 1,
                'descricao' => '<p>Os pequenos ramos da pimpinela d&atilde;o um refrescante sabor de pepino &aring;s bebidas e suas folhas podem ser usadas em saladas e sandu&iacute;ches.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            252 => 
            array (
                'id' => 257,
                'nome' => 'Alecrim',
                'preco' => NULL,
                'grupo_id' => 1,
                'descricao' => '<p>O alecrim &eacute; um arbusto cujas folhas podem ser usadas secas ou frescas.</p>
<p>Ele tem propriedades excitantes, t&ocirc;nicas e estimulantes.</p>
<p>Ele &eacute; usado principalmente com carnes como vitelo, cordeiro, aves e ca&ccedil;a. Seu sabor &eacute; muito forte para ser usado com peixes.</p>
<p>Tamb&eacute;m &eacute; usado em pizzas, foccacia, massas e risottos.</p>
<p>A sua flor &eacute; muita apreciada pelas abelhas que produzem um mel de  extrema qualidade.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            253 => 
            array (
                'id' => 258,
                'nome' => 'Cerefólio',
                'preco' => NULL,
                'grupo_id' => 1,
                'descricao' => '<p>O ceref&oacute;lio &eacute; uma erva parente da salsa, de aroma delicado. Ele faz parte das ervas que comp&otilde;em as ervas finas arom&aacute;ticas.</p>
<p>Suas folhas secas s&atilde;o usadas como especiaria, lembrando uma mistura de <a title="Anis" href="http://pt.wikipedia.org/wiki/Anis"></a>anis e salsa<a title="Salsa" href="http://pt.wikipedia.org/wiki/Salsa"></a>.</p>
<p>Suas sementes s&atilde;o usadas no Norte de &Aacute;frica como especiaria nos mesmos pratos que o coentro.</p>
<p>Ele &eacute; muito usado na cozinha francesa, pode tamb&eacute;m ser usado como corante amarelo e vai bem em tudo o que leva salsa: omeletes, saladas, vinagretes, molhos com creme, sopas, pratos com ovos, frangos, peixes e carnes assadas. Quando o prato for cozido, coloque-o no &uacute;ltimo instante.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            254 => 
            array (
                'id' => 259,
                'nome' => 'Salsa ou Salsinha',
                'preco' => NULL,
                'grupo_id' => 1,
                'descricao' => '<p>A salsa ou salsinha tem folhas verdes e achatadas, &eacute; resistente e altamente nutritiva.</p>
<p>Ela tem um aroma suave e agrad&aacute;vel. Quando cozida, destaca o sabor do prato principal.</p>
<p>Suas folhas podem ser usadas, seu talo &eacute; usado no Bouquet Garni ou na elabora&ccedil;&atilde;o de caldos.</p>
<p>Na Fran&ccedil;a, &eacute; utilizada para se fazer o <em>persillade</em>, que &eacute; uma mistura de salsa e alho picados, usada para polvilhar todo tipo de prato antes de serem servidos.</p>
<p>A <em>gremolata</em> &eacute; uma mistura de salsa, alho e um pouco de lim&atilde;o, tamb&eacute;m usada para polvilhar pratos antes de serem servidos.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            255 => 
            array (
                'id' => 260,
                'nome' => 'Dill ou Endro ou Aneto',
                'preco' => NULL,
                'grupo_id' => 1,
                'descricao' => '<p>O dill &eacute; uma erva verde claro, de folhas finas e flores pequenas entre o verde e o amarelo.</p>
<p>Suas folhas d&atilde;o sabor suave e agrad&aacute;vel a comidas pouco temperadas como arroz, sopas, saladas e peixes. Tamb&eacute;m fica bom com ovos, pepino e queijo <em>cottage</em>.</p>
<p>Fica excelente quando usado com salmon.</p>
<p>Suas sementes e folhas s&atilde;o essencias no preparo de <em>picles</em> e vinagretes arom&aacute;ticos. Ele tamb&eacute;m faz parte dos ingredientes do molho <em>curry</em>.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            256 => 
            array (
                'id' => 261,
                'nome' => 'Sálvia',
                'preco' => NULL,
                'grupo_id' => 1,
                'descricao' => '<p>A s&aacute;lvia &eacute; uma erva de folhas aveludadas, com sabor forte e que tende a predominar.</p>
<p>Ela &eacute; usada no preparo de feij&atilde;o seco e de carnes gordurosas como as de porco, ganso, pato, peixe gordo, novilho e massas.</p>
<p>Na It&aacute;lia, &eacute; utilizada no saltimboca e no f&iacute;gado.</p>
<p>&nbsp;</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            257 => 
            array (
                'id' => 262,
                'nome' => 'Arruda',
                'preco' => NULL,
                'grupo_id' => 1,
                'descricao' => '<p>A arruda &eacute; uma erva com folhas fortemente arom&aacute;ticas e amargas.</p>
<p>Na Roma antiga era usada como tempero para carnes.</p>
<p>Na It&aacute;lia atual &eacute; usada em saladas mistas.</p>
<p>Ela &eacute; boa para refrescar as vistas que est&atilde;o irritadas: basta socar  um galhinho de arruda no fundo do copo e encher o copo de &aacute;gua gelada e  ir pingando nos olhos aos poucos com ajuda de um algod&atilde;o.</p>
<p>Tamb&eacute;m &eacute; muito usada para tratamento de machucados, entorses e hematomas.</p>
<p>Deve ser usada com cuidado e mulheres gr&aacute;vidas n&atilde;o devem consum&iacute;-la.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            258 => 
            array (
                'id' => 263,
                'nome' => 'Orégano',
                'preco' => NULL,
                'grupo_id' => 1,
                'descricao' => '<p>O or&eacute;gano &eacute; uma erva perene, de sabor forte e arom&aacute;tico, muito utilizado na cozinha do Mediterr&acirc;neo.</p>
<p>Sus folhas s&atilde;o utilizadas frescas ou secas, em carnes, aves, ovos, massas, sopas, molhos, arroz, vegetais refogados, caldeiradas, queijo fresco e requeij&atilde;o.</p>
<p>Combina especialmente com tomates frescos, molho de tomate e pizzas.</p>
<p>Faz parte do <em>Fine Herbes</em> franc&ecirc;s.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            259 => 
            array (
                'id' => 264,
                'nome' => 'Lúcia-Lima ou Verbena',
                'preco' => NULL,
                'grupo_id' => 1,
                'descricao' => '<p>A l&uacute;cia-lima &eacute; uma erva que confere um sabor alimonado aos pratos de peixe ou de aves, &agrave;s marinadas de vegetais, aos molhos para saladas, &aring;s compotas, aos pudins e &aring;s bebidas.</p>
<p>Ela tamb&eacute;m &eacute; usada em infus&otilde;es herbais e para fazer sorvetes.</p>
<p>Suas folhas d&atilde;o sabor aos pudins de arroz, ao <span class="st"><em>cr&egrave;me</em></span><em> brull&eacute;e</em> e ao creme caramelo.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            260 => 
            array (
                'id' => 265,
                'nome' => 'Bergamota ou Tangerina ou Mexerica ou Laranja-Cravo',
                'preco' => NULL,
                'grupo_id' => 22,
                'descricao' => '<p>A bergamota &eacute; uma fruta c&iacute;trica de sabor adocicado.</p>
<p>Suas folhas podem ser usadas em bebidas de ver&atilde;o, no ch&aacute; (calmante e que se conserva na geladeira por at&eacute; 3 semanas), em saladsa, sobremesas e com carnes.</p>
<p>Suas flores podem ser colocadas em saladas.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            261 => 
            array (
                'id' => 266,
                'nome' => 'Hissopo',
                'preco' => NULL,
                'grupo_id' => 1,
                'descricao' => '<p>O hissopo &eacute; um pequeno arbusto arom&aacute;tico. Suas folhas picadas podem ser usadas com carne de porco, no recheio de ganso ou de pato, no molho de carne, em sopas.</p>
<p>Suas flores ficam bem em saladas.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            262 => 
            array (
                'id' => 267,
                'nome' => 'Segurelha',
                'preco' => NULL,
                'grupo_id' => 1,
                'descricao' => '<p>A segurelha &eacute; uma erva de aroma e sabor amargo muito boa para a digest&atilde;o.</p>
<p>Suas folhas picadas d&atilde;o um toque apimentado.</p>
<p>Liga bem com feij&atilde;o e lentilha secos, com feij&atilde;o fresco, d&aacute; sabor a legumes e fica muito boa na prepara&ccedil;&atilde;o de peixe e carne panados, f&iacute;gados e sopas.</p>
<p>Faz parte do <em>Fine Herbes</em> e das <em>Herbes de Provence</em>.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            263 => 
            array (
                'id' => 268,
                'nome' => 'Segurelha',
                'preco' => NULL,
                'grupo_id' => 1,
                'descricao' => '<p>A segurelha &eacute; uma erva de aroma e sabor amargo muito boa para a digest&atilde;o.</p>
<p>Suas folhas picadas d&atilde;o um toque apimentado.</p>
<p>Liga bem com feij&atilde;o e lentilha secos, com feij&atilde;o fresco, d&aacute; sabor a legumes e fica muito boa na prepara&ccedil;&atilde;o de peixe e carne panados, f&iacute;gados e sopas.</p>
<p>Faz parte do <em>Fine Herbes</em> e das <em>Herbes de Provence</em>.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            264 => 
            array (
                'id' => 269,
                'nome' => 'Segurelha',
                'preco' => NULL,
                'grupo_id' => 1,
                'descricao' => '<p>A segurelha &eacute; uma erva de aroma e sabor amargo muito boa para a digest&atilde;o.</p>
<p>Suas folhas picadas d&atilde;o um toque apimentado.</p>
<p>Liga bem com feij&atilde;o e lentilha secos, com feij&atilde;o fresco, d&aacute; sabor a legumes e fica muito boa na prepara&ccedil;&atilde;o de peixe e carne panados, f&iacute;gados e sopas.</p>
<p>Faz parte do <em>Fine Herbes</em> e das <em>Herbes de Provence</em>.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            265 => 
            array (
                'id' => 270,
                'nome' => 'Alcaravia ou Cominho ou Kümel',
                'preco' => NULL,
                'grupo_id' => 1,
                'descricao' => '<p>A alcaravia &eacute; uma erva cujas folhas novas s&atilde;o usadas em sopas e saladas e salpicadas em verduras.</p>
<p>Suas sementes s&atilde;o utilizadas para condimentar bolos, biscoitos, p&atilde;es, queijos, pickels e legumes cozidos (principalmente ra&iacute;zes)</p>
<p>&nbsp;</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            266 => 
            array (
                'id' => 271,
                'nome' => 'Levístico',
                'preco' => NULL,
                'grupo_id' => 1,
                'descricao' => '<p>O lev&iacute;stico &eacute; uma planta cujo sabor lembra a combina&ccedil;&atilde;o do aipo e da salsinha, podendo ser substitu&iacute;do pela mistura destes dois.</p>
<p>Suas folhas, sementes e frutas s&atilde;o utilizadas na culin&aacute;ria.</p>
<p>Suas folhas picadas d&atilde;o um sabor apimentado a saladas, sopas e carnes.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            267 => 
            array (
                'id' => 272,
                'nome' => 'Sabugueiro',
                'preco' => NULL,
                'grupo_id' => 1,
                'descricao' => '<p>Do sabugueiro, apenas as flores e os frutos maduros podem ser usados na culin&aacute;ria, pois suas folhas, galhos, ramos, sementes e ra&iacute;zes s&atilde;o t&oacute;xicos.</p>
<p>As flores frescas podem ser usadas para se fazer vinho, em sobremesas e para dar sabor a gelatinas de frutas.</p>
<p>Seus frutos podem ser usados em tortas e molhos doces, para fazer gel&eacute;ia, gelatina e chutney.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            268 => 
            array (
                'id' => 273,
                'nome' => 'Camomila ou Macela ou Mançanila',
                'preco' => NULL,
                'grupo_id' => 1,
                'descricao' => '<p>A camomila &eacute; uma erva cujos talo e extremidades floridas s&atilde;o usadas secas ou frescas em infus&atilde;o arom&aacute;tica e ligeiramente amarga.</p>
<p>Suas pequenas flores amarelas e brancas, semelhantes a margaridas, podem ser usadas em saladas.</p>
<p>Ela &eacute; digestiva, sedativa e t&ocirc;nica.</p>
<p>&nbsp;</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            269 => 
            array (
                'id' => 275,
            'nome' => 'Tomate Cereja (aperitivo, saladas)',
                'preco' => NULL,
                'grupo_id' => 18,
                'descricao' => '<blockquote>
<p>O tomate cereja&nbsp;&eacute;&nbsp;um "mini-tomate", com tamanho pequeno, redondo ou oblongo, &eacute; delicado e adocicado.</p>
<p>Ele &eacute;&nbsp;utilizado como aperitivo ou em saladas. Pode tamb&eacute;m ser cozido.</p>
<p>&nbsp;</p>
</blockquote>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            270 => 
            array (
                'id' => 276,
                'nome' => 'Pimenta Malagueta',
                'preco' => NULL,
                'grupo_id' => 6,
            'descricao' => '<p>A Pimenta Malagueta pode ser verde (imatura) ou vermelha (madura).</p>
<p>Sua pung&ecirc;ncia &eacute; picante m&eacute;dio a alto e com aroma baixo.</p>
<p>Pode ser usada como condimento no preparo de peixes, acaraj&eacute;s e carnes; molhos de pimentas e  conservas</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            271 => 
            array (
                'id' => 277,
                'nome' => 'Pimenta-de-Cheiro',
                'preco' => NULL,
                'grupo_id' => 6,
            'descricao' => '<p>A Pimenta de Cheiro tem frutos amarelo leitoso, amarelo forte, alaranjado, salmon e  vermelho at&eacute; preto (maduros).</p>
<p>Sua pung&ecirc;ncia &eacute; picante baixo a picante alto e seu aroma &eacute; forte e caracter&iacute;stico</p>
<p>Pode ser usada como condimento para saladas, arroz e preparo de peixes.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            272 => 
            array (
                'id' => 279,
                'nome' => 'Pimenta Cumarí-do-Pará',
                'preco' => NULL,
                'grupo_id' => 6,
                'descricao' => '<p>A Pimenta Cumar&iacute;-do-Par&aacute; tem frutos amarelos. Sua pung&ecirc;ncia &eacute; picante alto e seu aroma m&eacute;dio.</p>
<p>Pode ser usada, principalmente, em conservas.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            273 => 
            array (
                'id' => 280,
                'nome' => 'Pimenta Bode',
                'preco' => NULL,
                'grupo_id' => 6,
                'descricao' => '<p>A Pimenta Bode tem cor amarela ou vermelha e formato arredondado ou achatado.</p>
<p>Sua pung&ecirc;ncia &eacute; picante m&eacute;dio a alto e seu aroma &eacute; forte.</p>
<p>Pode ser usada em temperos para carne, arroz, feij&atilde;o, pamonha salgada e biscoitos de  polvilho. Os frutos maduros s&atilde;o usados em conservas e molhos.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            274 => 
            array (
                'id' => 281,
                'nome' => 'Pimenta Murupi',
                'preco' => NULL,
                'grupo_id' => 6,
            'descricao' => '<p>A Pimenta Murupi &eacute; alongada e pode ser verde (imatura), amarela p&aacute;lida, amarela viva ou vermelha (madura).</p>
<p>Sua pung&ecirc;ncia &eacute; picante m&eacute;dia a alta e seu aroma &eacute; forte e caracter&iacute;stico.</p>
<p>Pode ser usada em condimentos, molhos misturado ao caldo do tucupi e conservas com vinagre,  &oacute;leo ou soro de leite.</p>
<p>&nbsp;</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            275 => 
            array (
                'id' => 282,
                'nome' => 'Pimenta Jalapeño',
                'preco' => NULL,
                'grupo_id' => 6,
            'descricao' => '<p>A Pimenta Jalape&ntilde;o &eacute; c&ocirc;nica triangular e pode ser verde clara ou escura (imatura) e vermelha (madura).</p>
<p>Sua pung&ecirc;ncia &eacute; picante m&eacute;dio e tem aroma alto.</p>
<p>Pode ser usada no consumo fresco, em molhos l&iacute;quidos, nas conservas em vinagre ou azeite e  desidratadas (condimentos).</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            276 => 
            array (
                'id' => 283,
                'nome' => 'Pimenta Cambucí',
                'preco' => NULL,
                'grupo_id' => 6,
            'descricao' => '<p>A Pimenta Cambuc&iacute; &eacute; arredondada a ovalada, verde (imatura), vermelha ou alaranjada (madura).</p>
<p>Tem pung&ecirc;ncia doce e aroma baixo.</p>
<p>Pode ser usada em saladas, cozidos e conservas.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            277 => 
            array (
                'id' => 284,
                'nome' => 'Licuri',
                'preco' => NULL,
                'grupo_id' => 18,
                'descricao' => '<p>O Licuri &eacute; um coquinho de 1,5 cm nativo do semi&aacute;rido baiano.</p>
<p>Ele &eacute; um alimento saud&aacute;vel que pode ser degustado torrado, caramelizado ou em  forma de  pa&ccedil;oca.</p>
<p>Ele &eacute; rico em zinco, pot&aacute;ssio e  f&oacute;sforo.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            278 => 
            array (
                'id' => 285,
                'nome' => 'Umbu',
                'preco' => NULL,
                'grupo_id' => 18,
            'descricao' => '<p>O umbuzeiro &eacute; uma &aacute;rvore de pequeno porte (mede at&eacute; seis metros de altura), de copa larga (at&eacute;  quinze metros de largura) e origin&aacute;ria dos chapad&otilde;es semi-&aacute;ridos do  Nordeste brasileiro.</p>
<p>Suas folhas t&ecirc;m grande valor aliment&iacute;cio e gosto "azedinho". Seu fruto, o umbu &eacute; esverdeado, tendendo, &agrave; medida que amadurece, para a cor amarela.</p>
<p>O umbu &eacute; muito rico em vitamina C e tem um sabor azedinho.</p>
<p>Pode ser consumido ao  natural e tamb&eacute;m pode ser utilizado em preparos culin&aacute;rios, como sorvetes, gel&eacute;ias e  doces como a umbuzada, que &eacute; um doce nordestino preparado com leite e a&ccedil;&uacute;car.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            279 => 
            array (
                'id' => 286,
                'nome' => 'Semente de Manjericão',
                'preco' => NULL,
                'grupo_id' => 24,
                'descricao' => '<p>A semente de manjeric&atilde;o &eacute; quase microsc&oacute;pica. O seu sabor &eacute; mais suave que o das folhas. O importante dela &eacute; a sua capa gelificante e a sua croc&acirc;ncia.</p>
<p>Ela &eacute; esbranqui&ccedil;ada, mas quando amadurece e est&aacute; boa para ser consumida, fica marrom.</p>
<p>Quando colocada em &aacute;gua, &eacute; um gel poderoso.</p>
<p>Quando hidratada em leite e cozida rapidamente (pois o calor em excesso compromete o sabor e a textura) empresta aroma a sorvetes, cremes e chocolates.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            280 => 
            array (
                'id' => 287,
                'nome' => 'Semente de Chia',
                'preco' => NULL,
                'grupo_id' => 24,
                'descricao' => '<p>A Chia &eacute; uma semente muito usada no M&eacute;xico. No Brasil ainda &eacute; encontrada exclusivamente em lojas de produtos naturais e mercados gourmet.</p>
<p>Ela pode ser consumida crua, cozida ou assada. Seu sabor lembra o da noz.</p>
<p>Crua, &eacute; mo&iacute;da e usada na massa de p&atilde;o; misturada com farinha de milho ou de trigo, em sopas e mingaus.</p>
<p>Se mergulhada em &aacute;gua, vira uma bebida refrescante. Se assada, mo&iacute;da e misturada com &aacute;gua, d&aacute; uma massa gelatinosa, saborosa e nutritiva.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            281 => 
            array (
                'id' => 288,
                'nome' => 'Semente de Amaranto',
                'preco' => NULL,
                'grupo_id' => 24,
                'descricao' => '<p>A Semente de Amaranto, se hidratada, conserva a superf&iacute;cie crocante e o interior macio.</p>
<p>Ela pode ser assada, cozida ou mo&iacute;da como farinha.</p>
<p>Ela &eacute; rica em prote&iacute;na e &oacute;leo.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            282 => 
            array (
                'id' => 289,
                'nome' => 'Semente de Aipo ou Semente de Salsão',
                'preco' => NULL,
                'grupo_id' => 24,
                'descricao' => '<p>A Semente de Sals&atilde;o concentra o aroma e o sabor do sals&atilde;o fresco. Ela tem um gosto mais amargo e &eacute; rica em sais minerais.</p>
<p>Na Europa, &eacute; muito usada nas misturas de temperos e embutidos.</p>
<p>Ela pode ser misturada ao sal comum ou, <strong>mo&iacute;da, pode substituir o sal de cozinha</strong>.</p>
<p>Ela d&aacute; sabor a carnes, sopas, molhos e &eacute; ingrediente b&aacute;sico no <em>bloody mary</em>.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            283 => 
            array (
                'id' => 290,
                'nome' => 'Semente de Caruru',
                'preco' => NULL,
                'grupo_id' => 24,
                'descricao' => '<p>A Semente de Caruru que conhecemos no Brasil &eacute; de origem asi&aacute;tica. Ela &eacute; escura e potente: tem a mesma quantidade de prote&iacute;na da semente de quinoa.</p>
<p>Suas folhas s&atilde;o muito usadas em pratos baianos.</p>
<p>Quando ela &eacute; transformada em farinha, pode ser usada em p&atilde;es ou ingerida torrada.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            284 => 
            array (
                'id' => 291,
                'nome' => 'Semente de Milhete',
                'preco' => NULL,
                'grupo_id' => 24,
                'descricao' => '<p>A Semente de Milhete &eacute; rica em prote&iacute;nas. Pode substituir &aring; altura, cereais como o arroz.</p>
<p>Para que amole&ccedil;a, precisa ser cozido em leite ou em &aacute;gua.</p>
<p>Na &Iacute;ndia, &eacute; usada para preparar o chapati.</p>
<p>Quando crua, d&aacute; uma farinha leve e seca. Quando o gr&atilde;o est&aacute; germinado, pode ser usado em saladas e sanduiches.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            285 => 
            array (
                'id' => 292,
                'nome' => 'Semente de Quinoa',
                'preco' => NULL,
                'grupo_id' => 24,
                'descricao' => '',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            286 => 
            array (
                'id' => 293,
                'nome' => 'Obá ou Semente de Shissô',
                'preco' => NULL,
                'grupo_id' => 24,
                'descricao' => '<p>Shiss&ocirc; &eacute; uma erva Chinesa parente da hortel&atilde;.</p>
<p>A conserva de ob&aacute; &eacute; feita com as sementes curtidas em sal por uma semana e pode ser usada como acompanhamento de carnes, arroz e at&eacute; mesmo puras.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            287 => 
            array (
                'id' => 294,
                'nome' => 'Semente de Flor-de-Lótus ou Hasu No Mi',
                'preco' => NULL,
                'grupo_id' => 24,
                'descricao' => '<p>A forma da Semente de L&oacute;tus lembra a macad&acirc;mia.</p>
<p>D&aacute; para ser comida fresca.</p>
<p>Ela &eacute; vendida em pacotes, deve ser hidratada por 3 horas e depois levada &aring; panela com &aacute;gua fervente para ser comida.</p>
<p>&nbsp;</p>
<p>&nbsp;</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            288 => 
            array (
                'id' => 295,
                'nome' => 'Raiz-de-Lótus',
                'preco' => NULL,
                'grupo_id' => 27,
                'descricao' => '<p>A Raiz-de-L&oacute;tus &eacute; uma raiz aqu&aacute;tica cuja polpa branco-amarelada &eacute; crocante e de sabor semelhante ao do c&ocirc;co.</p>
<p>Suas ra&iacute;zes podem ser vendidas frescas, em calda, em conserva e desidratadas.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            289 => 
            array (
                'id' => 296,
                'nome' => 'Semente-de-Ginko ou Ginnam',
                'preco' => NULL,
                'grupo_id' => 24,
                'descricao' => '<p>A Semente-de-Ginko n&atilde;o pode ser comida mais do que 3 unidades por pessoa. Ela &eacute; uma iguaria no Jap&atilde;o.</p>
<p>Pode entrar em flans ou em massa de peixes quando cozida e rapidamente passada no &oacute;leo.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            290 => 
            array (
                'id' => 298,
            'nome' => 'Tomate Santa Cruz (saladas, molhos)',
                'preco' => NULL,
                'grupo_id' => 18,
                'descricao' => '<p>O tomate Santa Cruz tem&nbsp;formato oblongo e&nbsp;&eacute;&nbsp;usado em saladas e molhos.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            291 => 
            array (
                'id' => 299,
            'nome' => 'Tomate Caqui (saladas, lanches)',
                'preco' => NULL,
                'grupo_id' => 18,
                'descricao' => '<p>O tomate Caqui&nbsp;tem formato redondo e&nbsp;&eacute; utilizado em saladas e em lanches.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            292 => 
            array (
                'id' => 300,
            'nome' => 'Tomate Saladete (saladas)',
                'preco' => NULL,
                'grupo_id' => 18,
                'descricao' => '<p>O tomate Saladete tem formato redondo e&nbsp;&eacute;&nbsp;utilizado em saladas.</p>
<p>&nbsp;</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            293 => 
            array (
                'id' => 301,
            'nome' => 'Tomate Italiano (molhos, saladas)',
                'preco' => NULL,
                'grupo_id' => 18,
                'descricao' => '<p>O tomate Italiano tem&nbsp;formato oblongo, tipicamente alongado.</p>
<p>Ele &eacute; utilizado principalmente para molhos, podendo ainda fazer parte de saladas.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            294 => 
            array (
                'id' => 302,
                'nome' => 'Farinha de Aveia',
                'preco' => NULL,
                'grupo_id' => 7,
                'descricao' => '<p>A Aveia &eacute; rica em fibras.</p>
<p>Ela &eacute;&nbsp;muito utilizada em bolos, biscoitos e sucos e&nbsp;vitaminas.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            295 => 
            array (
                'id' => 303,
                'nome' => 'Flocos de Aveia',
                'preco' => NULL,
                'grupo_id' => 24,
                'descricao' => '',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            296 => 
            array (
                'id' => 304,
                'nome' => 'Farelo de Aveia',
                'preco' => NULL,
                'grupo_id' => 24,
                'descricao' => '',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            297 => 
            array (
                'id' => 305,
                'nome' => 'Azeitona Preta',
                'preco' => NULL,
                'grupo_id' => 18,
                'descricao' => '<p>A Azeitona &eacute; muito cal&oacute;rica, mas &eacute; rica em vitaminas e sais minerais.</p>
<p>Ela &eacute; muito usada na culin&aacute;ria Mediterr&acirc;nea.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            298 => 
            array (
                'id' => 306,
                'nome' => 'Azeitona Verde',
                'preco' => NULL,
                'grupo_id' => 18,
                'descricao' => '',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            299 => 
            array (
                'id' => 307,
                'nome' => 'Azeitona Rosada',
                'preco' => NULL,
                'grupo_id' => 18,
                'descricao' => '',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            300 => 
            array (
                'id' => 308,
                'nome' => 'Azeitona Portuguesa',
                'preco' => NULL,
                'grupo_id' => 18,
                'descricao' => '',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            301 => 
            array (
                'id' => 309,
                'nome' => 'Azeitona Chilena',
                'preco' => NULL,
                'grupo_id' => 24,
                'descricao' => '',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            302 => 
            array (
                'id' => 310,
            'nome' => 'Batata Asterix (frita)',
                'preco' => NULL,
                'grupo_id' => 17,
                'descricao' => '<p>A Batata Asterix tem casca vermelha e polpa bastante amarela. Sua forma &eacute; oval-alongada  de tamanho grande.</p>
<p>Ela &eacute;&nbsp;muito utilizada fresca e em batatas fritas.</p>
<p>&nbsp;</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            303 => 
            array (
                'id' => 311,
            'nome' => 'Batata Doce Roxa ou Vermelha (assada, sopa, torta, doce)',
                'preco' => NULL,
                'grupo_id' => 17,
                'descricao' => '<p>A Batata Doce Roxa tem o corpo interno de cor amarela clara.</p>
<p>Ela &eacute; utilizada na culin&aacute;ria para a produ&ccedil;&atilde;o de doces, sopas e tortas, embora seja consumida,     na maioria das vezes, assada.</p>
<p>Deve ser preparada e cozida como uma batata normal.</p>
<p>Ela &eacute; rica em carboidratos, fibras alimentares e possui vitaminas do complexo B e C.</p>
<p>Esta batata deve ser guardada num lugar arejado, fresco e escuro.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            304 => 
            array (
                'id' => 312,
                'nome' => 'Batata Doce Amarela',
                'preco' => NULL,
                'grupo_id' => 17,
                'descricao' => '',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            305 => 
            array (
                'id' => 313,
            'nome' => 'Batata Doce Branca (guarnição, sopa, bolinho, biscoito, bolo e torta)',
                'preco' => NULL,
                'grupo_id' => 17,
                'descricao' => '<p>A Batata Doce Branca tem uma casca cremosa e colorida e uma polpa cremosa e amarela.</p>
<p>Fica boa como guarni&ccedil;&atilde;o, em sopas, bolinhos, biscoitos, bolos e tortas.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            306 => 
            array (
                'id' => 314,
                'nome' => 'Batata Bartina',
                'preco' => NULL,
                'grupo_id' => 17,
                'descricao' => '<p>A Batata Bartina tem casca vermelha e polpa bastante amarela.</p>
<p>Ela &eacute; muito utilizada fresca.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            307 => 
            array (
                'id' => 315,
                'nome' => 'Batata',
                'preco' => NULL,
                'grupo_id' => 17,
            'descricao' => '<p>A batata possui vitaminas do complexo B e vitamina&nbsp;C, f&oacute;sforo (em boa quantidade), ferro, pot&aacute;ssio e c&aacute;lcio.</p>
<p>Ela &eacute; uma fonte importante de amido.</p>
<p>Ela se divide em dois tipos b&aacute;sicos: colheita nova e colheita velha.</p>
<p>A batata deve ser bem escolhida, n&atilde;o deve ser demasiadamente  serosa. Para checar isso, basta cortar um peda&ccedil;o de uma batata e passar  o dedo sobre a superf&iacute;cie descoberta. No contato, voc&ecirc; vai perceber se  ela tem naturalmente um pouquinho de cera. Batatas com cera em excesso  n&atilde;o s&atilde;o boas. As &aacute;speras tamb&eacute;m n&atilde;o. Elas v&atilde;o conferir uma textura um  pouco &ldquo;farinhenta&rdquo; ao pur&eacute;.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            308 => 
            array (
                'id' => 316,
            'nome' => 'Batata Désirée (cozida, assada, puré)',
                'preco' => NULL,
                'grupo_id' => 17,
                'descricao' => '<p>A Batata D&eacute;sir&eacute;e tem a casca rosada, a polpa dourada e sua forma &eacute; oval-alongada de tamanho grande.</p>
<p>Ela pode ser cozida, assada ou usada em pur&eacute;. Fica bem na salada.</p>
<p>Ela n&atilde;o serve para fritar.</p>
<p>&nbsp;</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            309 => 
            array (
                'id' => 317,
                'nome' => 'Batata Kondor',
                'preco' => NULL,
                'grupo_id' => 17,
                'descricao' => '<p>A Batata Kondor tem a casca vermelha, a polpa amarela  clara e a sua forma &eacute; oval-alongada de tamanho muito grande.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            310 => 
            array (
                'id' => 318,
            'nome' => 'Batata Raja (frita)',
                'preco' => NULL,
                'grupo_id' => 17,
                'descricao' => '<p>A Batata Raja tem a casca vermelha, a polpa bastante  amarela e a sua forma &eacute; oval de tamanho grande.</p>
<p>Pode ser consumida fresca, frita e &eacute; utilizada para batatas fritas de pacote.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            311 => 
            array (
                'id' => 319,
            'nome' => 'Batata Romana (assada, frita)',
                'preco' => NULL,
                'grupo_id' => 17,
                'descricao' => '<p>A Batata Romana tem a casca vermelha, a polpa branco  amarelado firme e a sua forma &eacute; redondo-ovalada de tamanho grande. Ela &eacute; uma esp&eacute;cie serosa.</p>
<p>Fica boa assada ou frita.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            312 => 
            array (
                'id' => 320,
                'nome' => 'Batata Alaska',
                'preco' => NULL,
                'grupo_id' => 17,
                'descricao' => '<p>A Batata Alaska tem casca amarela e polpa amarelo-esbranqui&ccedil;ada.</p>
<p>Ela &eacute; de clima Mediterr&acirc;neo.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            313 => 
            array (
                'id' => 321,
            'nome' => 'Batata Aminca (frita)',
                'preco' => NULL,
                'grupo_id' => 17,
                'descricao' => '<p>A Batata Aminca tem casca amarela, polpa amarelo-clara e forma oval-alongada de tamanho grande.</p>
<p>Ela &eacute; melhor consumida como batata frita.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            314 => 
            array (
                'id' => 322,
            'nome' => 'Batata Baraka (frita)',
                'preco' => NULL,
                'grupo_id' => 17,
                'descricao' => '<p>A Batata Baraka tem a casca amarela clara, polpa  amarela clara e forma oval de tamanho muito grande.</p>
<p>Destina-se ao consumo em batatas fritas e batatas fritas de pacote.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            315 => 
            array (
                'id' => 323,
            'nome' => 'Batata Bintje (cozida, frita, puré)',
                'preco' => NULL,
                'grupo_id' => 17,
                'descricao' => '<p>A Batata Bintje tem a casca branca e cremosa, a polpa  amarelo-clara serosa e a sua forma &eacute; oval-alongada de tamanho grande.</p>
<p>Pode ser consumida fresca, cozida, frita, como pur&eacute; e como batata frita de pacote.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            316 => 
            array (
                'id' => 324,
            'nome' => 'Batata Escort (frita)',
                'preco' => NULL,
                'grupo_id' => 17,
                'descricao' => '<p>A Batata Escort tem a casca amarela, a polpa  amarelo-clara e sua forma &eacute; redondo-ovalada de tamanho grande</p>
<p>Ela &eacute; consumida principalmente fresca e como batata  frita de pacote.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            317 => 
            array (
                'id' => 325,
                'nome' => 'Batata Frieslander',
                'preco' => NULL,
                'grupo_id' => 17,
                'descricao' => '<p>A Batata Frieslander tem a casca amarela, polpa bastante  amarela e a sua forma &eacute; oval de tamanho grande.</p>
<p>Destina-se a ser consumida fresca.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            318 => 
            array (
                'id' => 326,
                'nome' => 'Batata Hermes',
                'preco' => NULL,
                'grupo_id' => 17,
                'descricao' => '<p>A Batata Hermes tem a casca amarela, a polpa bastante  amarela e forma redonda-ovalada de tamanho muito grande.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            319 => 
            array (
                'id' => 327,
                'nome' => 'Batata Jaerla',
                'preco' => NULL,
                'grupo_id' => 17,
                'descricao' => '<p>A Batata Jaerla tem a casca amarela, a polpa  amarelo-clara e forma redonda-ovalada de tamanho grande.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            320 => 
            array (
                'id' => 328,
            'nome' => 'Batata Delaware (assada, cozida, frita, gratinada)',
                'preco' => NULL,
                'grupo_id' => 17,
                'descricao' => '<p>A Batata Delaware tem a casca cremosa e a polpa branca.</p>
<p>Ela pode ser assada, cozinhada no microondas ou frita.</p>
<p>Fica muito bem em gratinados, mas n&atilde;o &eacute; boa para fazer pur&eacute;.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            321 => 
            array (
                'id' => 329,
            'nome' => 'Batata Pink Fir Apple (cozida, assada)',
                'preco' => NULL,
                'grupo_id' => 17,
                'descricao' => '<p>A Batata Pink Fir Apple tem casca rosada e cremosa, a sua polpa &eacute; serosa.</p>
<p>Ela pode ser cozida ou assada. Fica excelente na salada de batatas.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            322 => 
            array (
                'id' => 330,
            'nome' => 'Batata Spunta (assada, frita, puré, gratinada)',
                'preco' => NULL,
                'grupo_id' => 17,
                'descricao' => '<p>A Batata Spunta tem casca castanha e polpa dourada.</p>
<p>Ela pode ser assada, frita ou usada em pur&eacute;.</p>
<p>Ela &eacute; boa para gratinados, mas pode desmanchar-se quando cozida.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            323 => 
            array (
                'id' => 331,
            'nome' => 'Batata Chats ou Batata Nova (cozida, assada)',
                'preco' => NULL,
                'grupo_id' => 17,
                'descricao' => '<p>A Batata Chats tem a casca fina e transparente e sua polpa &eacute; doce.</p>
<p>Fica boa cozida ou assada.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            324 => 
            array (
                'id' => 332,
            'nome' => 'Batata Patrone (cozida, salteada, assada)',
                'preco' => NULL,
                'grupo_id' => 17,
                'descricao' => '<p>A Batata Patrone tem a casca cremosa, a polpa amarela e serosa.</p>
<p>Ela pode ser cozida, salteada ou assada. Fica boa em salda, mas n&atilde;o para pur&eacute;.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            325 => 
            array (
                'id' => 333,
            'nome' => 'Batata Nicola (cozida)',
                'preco' => NULL,
                'grupo_id' => 17,
                'descricao' => '<p>A Batata Nicola tem casca cremosa, polpa amarela e serosa.</p>
<p>Ela pode ser cozida ou usada em salada.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            326 => 
            array (
                'id' => 334,
            'nome' => 'Batata Sebago (cozida, assada, frita, puré)',
                'preco' => NULL,
                'grupo_id' => 17,
                'descricao' => '<p>A Batata Sebago tem casca cremosa e polpa branca.</p>
<p>Ela pode ser cozida, assada ou frita e &eacute; excelente para pur&eacute;.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            327 => 
            array (
                'id' => 335,
            'nome' => 'Batata Russet Burbank ou Idaho (frita, assada)',
                'preco' => NULL,
                'grupo_id' => 17,
                'descricao' => '<p>A Batata Idaho tem casca castanha e polpa amarelo-claro.</p>
<p>Ela pode ser frita ou assada.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            328 => 
            array (
                'id' => 336,
            'nome' => 'Batata Pink Eye ou Southern Gold ou Sweet Gold ou Pink Gourmet (cozida, frita)',
                'preco' => NULL,
                'grupo_id' => 17,
                'descricao' => '<p>A Batata Pink Eye tem casca cremosa e polpa amarela e serosa.</p>
<p>Pode ser cozida, frita ou usada em saladas. N&atilde;o serve para pur&eacute;s.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            329 => 
            array (
                'id' => 337,
            'nome' => 'Batata Purple Congo (cozida, frita)',
                'preco' => NULL,
                'grupo_id' => 17,
                'descricao' => '<p>A Batata Purple Congo tem casca roxa escuro, polpa roxa e farinhenta.</p>
<p>Fica boa cozida ou frita.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            330 => 
            array (
                'id' => 338,
            'nome' => 'Batata Pontiac (qualquer preparo, gratinada)',
                'preco' => NULL,
                'grupo_id' => 17,
                'descricao' => '<p>A Batata Pontiac tem casca vermelha e polpa branca e serosa.</p>
<p>Boa para ser preparada de qualquer modo, mas especialmente para gratinados e saladas.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            331 => 
            array (
                'id' => 339,
            'nome' => 'Batata King Edward (frita, assada, cozida, purés)',
                'preco' => NULL,
                'grupo_id' => 17,
                'descricao' => '<p>A Batata King Edward tem casca cremosa com manchas rosadas e polpa branca.</p>
<p>Pode ser frita, assada, cozida ou usada em pur&eacute;s.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            332 => 
            array (
                'id' => 340,
            'nome' => 'Batata Coliban (assada, cozida em vapor, purés)',
                'preco' => NULL,
                'grupo_id' => 17,
                'descricao' => '<p>A Batata Coliban tem casca branca e homog&ecirc;nea e sua polpa &eacute; farinhenta.</p>
<p>Ela pode ser assada, cozida em vapor ou usada em pur&eacute;s, podendo desmanchar-se quando fervida.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            333 => 
            array (
                'id' => 341,
            'nome' => 'Batata Kipfler (cozida, salteada, assada)',
                'preco' => NULL,
                'grupo_id' => 17,
                'descricao' => '<p>A Batata Kipfler tem casca dourada e polpa amarela e serosa.</p>
<p>Pode ser cozida, salteada, assada ou usada em saladas.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            334 => 
            array (
                'id' => 342,
            'nome' => 'Batata Estima (cozida, guisados, assada)',
                'preco' => NULL,
                'grupo_id' => 17,
                'descricao' => '<p>A Batata Estima &eacute; serosa e boa para saladas.</p>
<p>Ela n&atilde;o se desmancha quando cozida, o que a torna ideal para guisados e assados.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            335 => 
            array (
                'id' => 343,
            'nome' => 'Batata Nadine (salada de batatas)',
                'preco' => NULL,
                'grupo_id' => 17,
                'descricao' => '<p>A Batata Nadine &eacute; uma variedade prematura de batata serosa com polpa firme.</p>
<p>Ela &eacute; boa para salada de batatas.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            336 => 
            array (
                'id' => 344,
            'nome' => 'Batata Francine Salad (cozida)',
                'preco' => NULL,
                'grupo_id' => 17,
                'descricao' => '<p>A Batata Francine Salad &eacute; a t&iacute;pica batata inglesa nova.</p>
<p>Ela &eacute; muito boa para ser cozida e servida com manteiga e cebolinha.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            337 => 
            array (
                'id' => 345,
            'nome' => 'Batata Pentland Javelin (salada)',
                'preco' => NULL,
                'grupo_id' => 17,
                'descricao' => '<p>A Batata Pentland Javelin &eacute; uma batata serosa e com polpa firme. Ela &eacute; boa para saladas.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            338 => 
            array (
                'id' => 346,
            'nome' => 'Batata Jersey Royal (cozida)',
                'preco' => NULL,
                'grupo_id' => 17,
                'descricao' => '<p>A Batata Jersey Royal &eacute; considerada a rainha das batatas novas.</p>
<p>Ela tem uma casca fina como papel que pode ser retirada com os dedos.</p>
<p>Sua polpa &eacute; serosa, muito amarela e saborosa. Ela &eacute; boa para cozinhar.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            339 => 
            array (
                'id' => 347,
            'nome' => 'Batata Picasso (assar, cozinhar)',
                'preco' => NULL,
                'grupo_id' => 17,
                'descricao' => '<p>A Batata Picasso pode ser identificada pelos olhos avermelhados na casca.</p>
<p>Sua consist&ecirc;ncia &eacute; m pouco farinhenta e serve para assar e cozinhar.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            340 => 
            array (
                'id' => 348,
            'nome' => 'Batata Marfona (salada)',
                'preco' => NULL,
                'grupo_id' => 17,
                'descricao' => '<p>A Batata Marfona &eacute; uma variedade serosa para ser usada em saladas.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            341 => 
            array (
                'id' => 349,
            'nome' => 'Batata Truffle Potato ou Truffe de Chine ou Chinese Truffle (cozida)',
                'preco' => NULL,
                'grupo_id' => 17,
                'descricao' => '<p>A Batata Truffle Potato tem casca preta e polpa branca e roxa.</p>
<p>Ela tem muito amido e um sabor adocicado.</p>
<p>Ela deve ser cozida com casca para n&atilde;o perder a cor da polpa e ser descascada imediatamente depois, pois a casca pode ficar dura.</p>
<p>Pode ser servida com manteiga ou maionese.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            342 => 
            array (
                'id' => 350,
            'nome' => 'Batata La Ratte (cozida, salada)',
                'preco' => NULL,
                'grupo_id' => 17,
                'descricao' => '<p>A Batata La Ratte &eacute; uma variedade pequena, longa e nodosa da batata nova com polpa firme.</p>
<p>Tem um gosto de nozes apurado.</p>
<p>Ela &eacute; boa para saladas e para cozinhar.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            343 => 
            array (
                'id' => 351,
            'nome' => 'Batata Maris Bard (cozinhar, saltear)',
                'preco' => NULL,
                'grupo_id' => 17,
                'descricao' => '<p>A Batata Maris Bard &eacute; uma batata nova e de bom tamanho.</p>
<p>Ela &eacute; boa para cozinhar e saltear.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            344 => 
            array (
                'id' => 352,
            'nome' => 'Batata Ambo (cozinhar, assar.)',
                'preco' => NULL,
                'grupo_id' => 17,
                'descricao' => '<p>A Batata Ambo &eacute; bastante farinhenta para uma variedade nova.</p>
<p>Ela &eacute; boa para cozinhar e assar.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            345 => 
            array (
                'id' => 353,
            'nome' => 'Batata Roseval (assar)',
                'preco' => NULL,
                'grupo_id' => 17,
                'descricao' => '<p>A Batata Roseval &eacute; uma variedade de casca vermelha, boa para assar.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            346 => 
            array (
                'id' => 354,
            'nome' => 'Batata Salad Blue (salada)',
                'preco' => NULL,
                'grupo_id' => 17,
                'descricao' => '<p>A Batata Salad Blue tem a polpa com tra&ccedil;os de azul, por isso fica interessante em saladas.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            347 => 
            array (
                'id' => 355,
            'nome' => 'Batata Charlotte (salteada)',
                'preco' => NULL,
                'grupo_id' => 17,
                'descricao' => '<p>A Batata Charlotte &eacute; pequenina, t&iacute;pica da Fran&ccedil;a.</p>
<p>Sua casca &eacute; firme e precisa ser retirada com faca.</p>
<p>Ela &eacute; boa para ser salteada, mas &eacute; pequena demais para assar.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            348 => 
            array (
                'id' => 356,
            'nome' => 'Batata Balmoral (qualquer preparo)',
                'preco' => NULL,
                'grupo_id' => 17,
                'descricao' => '<p>A Batata Balmoral &eacute; da variedade velha, com muito amido, que serve para qualquer preparo.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            349 => 
            array (
                'id' => 357,
                'nome' => 'Taro',
                'preco' => NULL,
                'grupo_id' => 17,
                'descricao' => '<p>O Taro &eacute; um tub&eacute;rculo cheio de amido, com polpa ressecada e sabor parecido com o da batata doce.</p>
<p>A cor de sua polpa varia entre creme e rosa.</p>
<p>Se comido cru, &eacute; amargo.</p>
<p>Deve ser descascado antes de comer e para isso, deve-se usar luva.</p>
<p>Deve ser cozido como a batata. Pode ser usado em pratos doces.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            350 => 
            array (
                'id' => 358,
                'nome' => 'Alcachofra de Jerusalém ',
                'preco' => NULL,
                'grupo_id' => 17,
                'descricao' => '<p>A Alcachofra de Jerusal&eacute;m nada tem a ver com alcachofra.</p>
<p>Ao ser escolhida, n&atilde;o deve ser muito nodosa, pois &eacute; dif&iacute;cil de descascar.</p>
<p>Deve ser cozida como a batata.</p>
<p>Pode ser usada em sopas, guisados, gratinados e crua, bem picadinha em saladas.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            351 => 
            array (
                'id' => 359,
                'nome' => 'Nabo',
                'preco' => NULL,
                'grupo_id' => 17,
                'descricao' => '<p>O Nabo &eacute; um legume vers&aacute;til, que pode ser amassado, cozido inteiro ou em bocados, assado ou ainda cru, cortado em fatias finas.</p>
<p>Suas folhas podem ser cozidas como o espinafre.</p>
<p>Tem o Nabo de T&oacute;quio (branco) e o Nabo Roxo.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            352 => 
            array (
                'id' => 360,
                'nome' => 'Nabo Branco',
                'preco' => NULL,
                'grupo_id' => 17,
                'descricao' => '<p>O Nabo Branco &eacute; semelhante a uma cenoura e tem sabor de ervas. Possui muito amido.</p>
<p>Deve ser comprado pequeno ou m&eacute;dio, pois o grande &eacute; duro.</p>
<p>Pode ser usado em sopas, guisados, cru - cortado em fatias bem finas ou ralado - e, como acompanhamento.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            353 => 
            array (
                'id' => 361,
                'nome' => 'Salsifi Branco ou Oyster Plant',
                'preco' => NULL,
                'grupo_id' => 17,
                'descricao' => '<p>O Salsifi Branco fica brilhante depois de cozido e sua casca, ent&atilde;o, sai facilmente.</p>
<p>Pode ser cozido ou salteado.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            354 => 
            array (
                'id' => 362,
                'nome' => 'Salsifi Preto ou Escorcioneira',
                'preco' => NULL,
                'grupo_id' => 17,
                'descricao' => '<p>O Salsifi Preto pode ser cozido ou salteado. Sua casca sai facilmente depois de cozida.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            355 => 
            array (
                'id' => 364,
                'nome' => 'Nabo da Suécia ou Rutabaga',
                'preco' => NULL,
                'grupo_id' => 17,
                'descricao' => '<p>O Nabo da Su&eacute;cia pode ser amassado com batatas.</p>
<p>Usado em sopas quentes, guisados e pur&eacute;s.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            356 => 
            array (
                'id' => 365,
                'nome' => 'Aipo-Rábano ou Raiz-de-Aipo',
                'preco' => NULL,
                'grupo_id' => 17,
                'descricao' => '<p>O Aipo R&aacute;bano tem a casca castanha e nodosa, polpa branca e fibrosa e um leve sabor de aipo.</p>
<p>Ele &eacute; cultivado principalmente por sua raiz.</p>
<p>Ele faz parte do molho frio franc&ecirc;s <em>r&eacute;moulade</em> (maionese + aipo-r&aacute;bano ralado), que fica bom em saladas, guisados e gratinados.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            357 => 
            array (
                'id' => 367,
                'nome' => 'Rabanete',
                'preco' => NULL,
                'grupo_id' => 17,
                'descricao' => '<p>O Rabanete tem a polpa firme, sumarenta e branca.</p>
<p>O formato e a cor da casca (branco e vermelho) variam muito, bem como a variedade de consist&ecirc;ncias.</p>
<p>Deve-se comprar o de cor brilhante e folhas frescas.</p>
<p>Tanto ele como suas folhas podem ser usados em saladas.</p>
<p>Tamb&eacute;m fica muito bom refogado e em sandu&iacute;ches.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            358 => 
            array (
                'id' => 368,
                'nome' => 'Daikon ou Rabanete Japonês ou Mooli',
                'preco' => NULL,
                'grupo_id' => 17,
                'descricao' => '<p>O Daikon tem um sabor adocicado e fresco. Deve-se preferir os de casca branca sem manchas e n&atilde;o muito grandes, pois s&atilde;o fibrosos.</p>
<p>Pode ser usado cru - em saladas, como acompanhamento de sashimi, cozido em sopas e guisados.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            359 => 
            array (
                'id' => 369,
                'nome' => 'Tomate',
                'preco' => NULL,
                'grupo_id' => 18,
                'descricao' => '<p>O Tomate tem alto teor de &aacute;gua e &eacute; rico em vitaminas A, B e C.</p>
<p>Muito usado cozido ou cru.</p>
<p>Os melhores aparecem entre o fim do Ver&atilde;o e o Outono.</p>
<p>Existem in&uacute;meras variedades.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            360 => 
            array (
                'id' => 370,
                'nome' => 'Tomate Redondo',
                'preco' => NULL,
                'grupo_id' => 18,
                'descricao' => '',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            361 => 
            array (
                'id' => 371,
                'nome' => 'Tomate-Chucha',
                'preco' => NULL,
                'grupo_id' => 18,
                'descricao' => '',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            362 => 
            array (
                'id' => 372,
                'nome' => 'Tomate de Vinha',
                'preco' => NULL,
                'grupo_id' => 18,
                'descricao' => '',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            363 => 
            array (
                'id' => 373,
                'nome' => 'Tomate Amarelo',
                'preco' => NULL,
                'grupo_id' => 18,
                'descricao' => '<p>Os tomates amarelos foram os primeiros tomates introduzidos na Europa.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            364 => 
            array (
                'id' => 374,
                'nome' => 'Beringela ou Eggplant',
                'preco' => NULL,
                'grupo_id' => 18,
                'descricao' => '<p>A Beringela &eacute; um fruto brilhante, de casca lisa e se apresenta em diversas cores.</p>
<p>Ela deve ser pesada para o seu tamanho.</p>
<p>Algumas variedades:</p>
<ul>
<li>Black Beauty</li>
<li>Black Enorma</li>
<li>Black Prince</li>
<li>Onita</li>
<li>Short Tom</li>
<li>Small Green</li>
<li>Thai Pera</li>
<li>Thai Apple (verde, pequena e redonda tipo tomate caqui)</li>
<li>Variegated</li>
<li>White</li>
</ul>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            365 => 
            array (
                'id' => 375,
                'nome' => 'Chuchu',
                'preco' => NULL,
                'grupo_id' => 18,
                'descricao' => '<p>O Chuchu &eacute; um fruto em forma de p&ecirc;ra, macio e de f&aacute;cil digest&atilde;o.</p>
<p>Ele deve ser pelado em &aacute;gua fria, para que a subst&acirc;ncia viscosa que gruda nas m&atilde;os&nbsp; seja facilmente remov&iacute;vel.</p>
<p>Ele pode ser usado da mesma forma que uma ab&oacute;bora pequena.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            366 => 
            array (
                'id' => 376,
                'nome' => 'Abacate',
                'preco' => NULL,
                'grupo_id' => 18,
                'descricao' => '<p>O Abacate pode ser em forma de p&ecirc;ra ou redondo, de casca &aring;spera ou lisa e brilhante.</p>
<p>Sua cor pode ser verde-escura ou castanha arroxeada, com polpa de consist&ecirc;ncia de manteiga.</p>
<p>Ele tem gordura do tipo monoinsaturada, mas &eacute; altamente cal&oacute;rico.</p>
<p>Para que amadure&ccedil;a, coloque-o em um saco de papel junto com uma banana e deixe-o em temperatura ambiente at&eacute; que tocando perto da ponta, ceda um pouco.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            367 => 
            array (
                'id' => 377,
                'nome' => 'Abacate Fuerte',
                'preco' => NULL,
                'grupo_id' => 18,
                'descricao' => '<p>O Abacate Fuerte &eacute; uma variedade Mexicana com casca fina e verde, polpa cremosa ou amarela, consist&ecirc;ncia de manteiga e caro&ccedil;o de tamanho m&eacute;dio.</p>
<p>Sua casca &eacute; facilmente remov&iacute;vel quando maduro.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            368 => 
            array (
                'id' => 378,
                'nome' => 'Tomate Beefsteak',
                'preco' => NULL,
                'grupo_id' => 18,
                'descricao' => '<p>O Tomate Beefsteak &eacute; carnudo, tem sabor encorpado e &eacute; excelente para saladas.</p>
<p>Quando maduro, deve ser refrigerado, mas servido &aring; temperatura ambiente.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            369 => 
            array (
                'id' => 379,
                'nome' => 'Tomate Seco',
                'preco' => NULL,
                'grupo_id' => 18,
                'descricao' => '<p>O Tomate Seco n&atilde;o precisa de muita &aacute;gua para ser reconstitu&iacute;do. Ele pode ser fervido apenas em fogo brando, at&eacute; que fique tenro.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            370 => 
            array (
                'id' => 380,
                'nome' => 'Beringela Seca',
                'preco' => NULL,
                'grupo_id' => 18,
                'descricao' => '<p>A Beringela Seca deve ser guardada em lugar seco, fresco e escuro.</p>
<p>Para que seja reconstitu&iacute;da, deve ser mergulhada em &aacute;gua quente por cerca de 2 horas e, ent&atilde;o, fervida at&eacute; ficar macia.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            371 => 
            array (
                'id' => 382,
                'nome' => 'Cebola Espanhola',
                'preco' => NULL,
                'grupo_id' => 19,
                'descricao' => '<p>A Cebola Espanhola &eacute; grande e tem cor cobre, &eacute; suave e adocicada. Ela &eacute; ideal para saladas.</p>
<p>Tamb&eacute;m pode ser frita ou assada.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            372 => 
            array (
                'id' => 383,
                'nome' => 'Cebola',
                'preco' => NULL,
                'grupo_id' => 19,
                'descricao' => '<p>A Cebola existe seca e verde.</p>
<p>As secas s&atilde;o deixadas no solo para amadurecer e t&ecirc;m uma casca externa mais dura, o que aumenta o seu tempo de dura&ccedil;&atilde;o.</p>
<p>As verdes s&atilde;o novas e imaturas.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            373 => 
            array (
                'id' => 384,
                'nome' => 'Cebola Chalota',
                'preco' => NULL,
                'grupo_id' => 19,
                'descricao' => '<p>A Cebola Chalota &eacute; pequena e tem sabor mais leve, delicado e adocicado do que a cebola.</p>
<p>Existem v&aacute;rios tipos, entre eles, a cinza, a rosa e a castanha.</p>
<p>Ela &eacute; mais encontrada na Primavera e no Ver&atilde;o.</p>
<p>Ela &eacute; muito usada em pratos franceses.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            374 => 
            array (
                'id' => 385,
                'nome' => 'Cebola Vermelha',
                'preco' => NULL,
                'grupo_id' => 19,
                'descricao' => '<p>A Cebola Vermelha &eacute; suave e adocicada.</p>
<p>Ela &eacute; &oacute;tima crua em saladas ou como entrada.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            375 => 
            array (
                'id' => 386,
                'nome' => 'Cebolo ou Escalônia',
                'preco' => NULL,
                'grupo_id' => 19,
                'descricao' => '<p>O Cebolo &eacute; ideal para se fazer <em>pickles</em> quando ainda novo.</p>
<p>Ele pode ser comido cru ou tamb&eacute;m pode ser usado como a cebolinha.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            376 => 
            array (
                'id' => 387,
                'nome' => 'Alho Porró ou Alho Francês',
                'preco' => NULL,
                'grupo_id' => 36,
                'descricao' => '<p>O Alho Porr&oacute; fica bom em sopas e guisados, em molhos de massas e em risottos.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            377 => 
            array (
                'id' => 388,
                'nome' => 'Alho',
                'preco' => NULL,
                'grupo_id' => 19,
                'descricao' => '<p>O Alho tem sabor forte e &aacute;cido.</p>
<p>Quanto menor o bulbo, mais forte seu sabor.</p>
<p>Ele tem propriedades terap&ecirc;uticas, como por exemplo, baixar o colesterol do sangue. Tamb&eacute;m ajuda na preven&ccedil;&atilde;o de c&acirc;ncer e derrames e ajuda na absor&ccedil;&atilde;o de vitaminas.</p>
<p>Ele deve ser firme e redondo, com a casca clara e tipo papel. Deve ser armazenado em lugar fresco e seco.</p>
<p>Ele &eacute; bastante usado em molhos, salsas, manteigas, saladas, marinadas, sopas e guisados.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            378 => 
            array (
                'id' => 389,
                'nome' => 'Óleo de Canola',
                'preco' => NULL,
                'grupo_id' => 13,
                'descricao' => '<p>O &Oacute;leo de Canola &eacute; refinado da semente de colza e &eacute; desenvolvido no Canad&aacute;.</p>
<p>Ele &eacute; rico em gorduras monoinsaturadas, muito pobre em saturados e tem boa dose de polinsaturados de &ocirc;mega-6 e &ocirc;mega-3.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            379 => 
            array (
                'id' => 390,
                'nome' => 'Azeite de Oliva',
                'preco' => NULL,
                'grupo_id' => 13,
                'descricao' => '<p>O Azeite de Oliva &eacute; o mais rico dos &oacute;leos em gorduras monoinsaturadas, com uma pequena quantidade de gorduras saturadas e &ocirc;mega-6.</p>
<p>Ele &eacute; bastante usado em tempero para salada.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            380 => 
            array (
                'id' => 391,
                'nome' => 'Louro',
                'preco' => NULL,
                'grupo_id' => 2,
                'descricao' => '<p>O Louro pode ser usado fresco, diretamente da &aacute;rvore, ou seco.</p>
<p>Se algumas folhas secas forem colocadas em um vidro de conserva com arroz, dar&atilde;o gosto ao arroz e evitar&atilde;o os gorgulhos.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            381 => 
            array (
                'id' => 392,
                'nome' => 'Açúcar',
                'preco' => NULL,
                'grupo_id' => 4,
                'descricao' => '',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            382 => 
            array (
                'id' => 393,
                'nome' => 'Leite de Vaca',
                'preco' => NULL,
                'grupo_id' => 14,
                'descricao' => '<p>O Leite de Vaca pasteurizado cont&eacute;m 3,9 a 5% de gordura. Quando ele &eacute; homogeneizado, a nata &eacute; distribu&iacute;da por igual.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            383 => 
            array (
                'id' => 394,
                'nome' => 'Sal',
                'preco' => NULL,
                'grupo_id' => 6,
                'descricao' => '<p>O Sal &eacute; adicionado &aring; maioria dos pratos, mesmo os doces, para real&ccedil;ar o sabor.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            384 => 
            array (
                'id' => 395,
                'nome' => 'Sal Grosso',
                'preco' => NULL,
                'grupo_id' => 6,
                'descricao' => '',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            385 => 
            array (
                'id' => 396,
                'nome' => 'Sal Curado',
                'preco' => NULL,
                'grupo_id' => 6,
                'descricao' => '',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            386 => 
            array (
                'id' => 397,
                'nome' => 'Sal Refinado',
                'preco' => NULL,
                'grupo_id' => 6,
                'descricao' => '',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            387 => 
            array (
                'id' => 398,
                'nome' => 'Sal em Pedra',
                'preco' => NULL,
                'grupo_id' => 6,
                'descricao' => '',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            388 => 
            array (
                'id' => 399,
                'nome' => 'Sal Marinho',
                'preco' => NULL,
                'grupo_id' => 6,
                'descricao' => '',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            389 => 
            array (
                'id' => 400,
                'nome' => 'Sal Aromatizado',
                'preco' => NULL,
                'grupo_id' => 6,
                'descricao' => '',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            390 => 
            array (
                'id' => 401,
                'nome' => 'Sal Temperado',
                'preco' => NULL,
                'grupo_id' => 6,
                'descricao' => '',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            391 => 
            array (
                'id' => 402,
                'nome' => 'Sumac ou Sumak ou Sumagre',
                'preco' => NULL,
                'grupo_id' => 6,
                'descricao' => '<p>O Sumac &eacute; um p&oacute; vermelho e &aacute;cido extra&iacute;do das frutas da planta sumagre, arbusto que cresce nas montanhas do L&iacute;bano.<span style="font-size: 9pt; color: black; font-family: Georgia;"></span></p>
<p>Ele tem um gosto amargo, parecido com o do lim&atilde;o e &aacute;cido, de fruta silvestre.</p>
<p>Ele &eacute; um dos ingredientes do Zahtar.</p>
<p>Alguns pratos preparados com ele s&atilde;o acelga recheada e tabule.</p>
<p>Fica bem se usado em pratos frios como em saladas e pastas. Misturado com iogurte e ervas, confere um sabor leve e refrescante.</p>
<p>Se misturado com azeite, pode ser servido com p&atilde;o como aperitivo.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            392 => 
            array (
                'id' => 403,
                'nome' => 'Ovo de Galinha',
                'preco' => NULL,
                'grupo_id' => 15,
                'descricao' => '',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            393 => 
            array (
                'id' => 405,
                'nome' => 'Abobrinha Amarela ou Courgette Jaune',
                'preco' => NULL,
                'grupo_id' => 18,
                'descricao' => '',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            394 => 
            array (
                'id' => 406,
                'nome' => 'Abobrinha Verde ou Abobrinha Italiana ou Courgette Verte',
                'preco' => NULL,
                'grupo_id' => 18,
                'descricao' => '',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            395 => 
            array (
                'id' => 407,
                'nome' => 'Queijo Parmesão ou Parmigiano-Reggiano',
                'preco' => NULL,
                'grupo_id' => 14,
                'descricao' => '',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            396 => 
            array (
                'id' => 408,
                'nome' => 'Carcaça de Ave',
                'preco' => NULL,
                'grupo_id' => 31,
                'descricao' => '',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            397 => 
            array (
                'id' => 409,
                'nome' => 'Água Potável Fria',
                'preco' => NULL,
                'grupo_id' => 33,
                'descricao' => '',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            398 => 
            array (
                'id' => 410,
                'nome' => 'Salsão ou Aipo',
                'preco' => NULL,
                'grupo_id' => 36,
                'descricao' => '<p>O aipo pode ser comido cru ou cozido.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            399 => 
            array (
                'id' => 411,
                'nome' => 'Cebola Piquet',
                'preco' => NULL,
                'grupo_id' => 19,
                'descricao' => '<p>A Cebola Piquet &eacute; uma cebola espetada de cravos para dar sabor ao preparo de alguns pratos.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            400 => 
            array (
                'id' => 412,
                'nome' => 'Bouquet Garni',
                'preco' => NULL,
                'grupo_id' => 19,
                'descricao' => '<p>O Bouquet Garni &eacute; um amarrado de temperos:</p>
<p>2 folhas de alho-por&oacute; (a parte verde)</p>
<p>1 talo de sals&atilde;o (aipo) pequeno</p>
<p>1 talo de salsinha</p>
<p>1 ramo de tomilho</p>
<p>1 folha de louro</p>
<p>2 gr&atilde;os de pimenta do reino</p>
<p>Amarre com um barbante o aipo, a salsinha, o tomilho e o louro dentro das folhas de alho-por&oacute;.</p>
<p>&lt;!--  /* Font Definitions */ @font-face 	{font-family:"Cambria Math"; 	panose-1:2 4 5 3 5 4 6 3 2 4; 	mso-font-charset:0; 	mso-generic-font-family:auto; 	mso-font-pitch:variable; 	mso-font-signature:-536870145 1107305727 0 0 415 0;}  /* Style Definitions */ p.MsoNormal, li.MsoNormal, div.MsoNormal 	{mso-style-unhide:no; 	mso-style-qformat:yes; 	mso-style-parent:""; 	margin:0cm; 	margin-bottom:.0001pt; 	mso-pagination:widow-orphan; 	font-size:12.0pt; 	font-family:"Times New Roman"; 	mso-fareast-font-family:"Times New Roman"; 	mso-fareast-language:PT-BR;} .MsoChpDefault 	{mso-style-type:export-only; 	mso-default-props:yes; 	font-size:10.0pt; 	mso-ansi-font-size:10.0pt; 	mso-bidi-font-size:10.0pt;} @page WordSection1 	{size:612.0pt 792.0pt; 	margin:72.0pt 90.0pt 72.0pt 90.0pt; 	mso-header-margin:36.0pt; 	mso-footer-margin:36.0pt; 	mso-paper-source:0;} div.WordSection1 	{page:WordSection1;} --&gt;&nbsp;<a name="OLE_LINK1"> &lt;!--  /* Font Definitions */ @font-face 	{font-family:"Cambria Math"; 	panose-1:2 4 5 3 5 4 6 3 2 4; 	mso-font-charset:0; 	mso-generic-font-family:auto; 	mso-font-pitch:variable; 	mso-font-signature:-536870145 1107305727 0 0 415 0;}  /* Style Definitions */ p.MsoNormal, li.MsoNormal, div.MsoNormal 	{mso-style-unhide:no; 	mso-style-qformat:yes; 	mso-style-parent:""; 	margin:0cm; 	margin-bottom:.0001pt; 	mso-pagination:widow-orphan; 	font-size:12.0pt; 	font-family:"Times New Roman"; 	mso-fareast-font-family:"Times New Roman"; 	mso-fareast-language:PT-BR;} .MsoChpDefault 	{mso-style-type:export-only; 	mso-default-props:yes; 	font-size:10.0pt; 	mso-ansi-font-size:10.0pt; 	mso-bidi-font-size:10.0pt;} @page WordSection1 	{size:612.0pt 792.0pt; 	margin:72.0pt 90.0pt 72.0pt 90.0pt; 	mso-header-margin:36.0pt; 	mso-footer-margin:36.0pt; 	mso-paper-source:0;} div.WordSection1 	{page:WordSection1;} --&gt;&nbsp;<span style="font-size: 12.0pt; font-family: &quot;Times New Roman&quot;; mso-fareast-font-family: &quot;Times New Roman&quot;; mso-ansi-language: PT-BR; mso-fareast-language: PT-BR; mso-bidi-language: AR-SA;"></span></a></p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            401 => 
            array (
                'id' => 413,
                'nome' => 'Pimenta do Reino Branca',
                'preco' => NULL,
                'grupo_id' => 6,
                'descricao' => '',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            402 => 
            array (
                'id' => 414,
                'nome' => 'Pimenta do Reino Preta',
                'preco' => NULL,
                'grupo_id' => 6,
                'descricao' => '',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            403 => 
            array (
                'id' => 415,
                'nome' => 'Manteiga',
                'preco' => NULL,
                'grupo_id' => 13,
                'descricao' => '',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            404 => 
            array (
                'id' => 416,
                'nome' => 'Manteiga sem sal',
                'preco' => NULL,
                'grupo_id' => 13,
                'descricao' => '',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            405 => 
            array (
                'id' => 417,
                'nome' => 'Vieira',
                'preco' => NULL,
                'grupo_id' => 26,
                'descricao' => '',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            406 => 
            array (
                'id' => 418,
                'nome' => 'Linguine ou Tagliatelle ou Bavette',
                'preco' => NULL,
                'grupo_id' => 25,
                'descricao' => '',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            407 => 
            array (
                'id' => 419,
                'nome' => 'Frango Inteiro',
                'preco' => NULL,
                'grupo_id' => 31,
                'descricao' => '',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            408 => 
            array (
                'id' => 420,
                'nome' => 'Vinho Branco',
                'preco' => NULL,
                'grupo_id' => 33,
                'descricao' => '',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            409 => 
            array (
                'id' => 421,
                'nome' => 'Ossos de Vitelo',
                'preco' => NULL,
                'grupo_id' => 30,
                'descricao' => '',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            410 => 
            array (
                'id' => 422,
                'nome' => 'Margarina para Culinária',
                'preco' => NULL,
                'grupo_id' => 13,
                'descricao' => '',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            411 => 
            array (
                'id' => 423,
                'nome' => 'Gema de Ovo de Galinha',
                'preco' => NULL,
                'grupo_id' => 15,
                'descricao' => '',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            412 => 
            array (
                'id' => 424,
                'nome' => 'Clara de Ovo de Galinha',
                'preco' => NULL,
                'grupo_id' => 15,
                'descricao' => '',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            413 => 
            array (
                'id' => 425,
                'nome' => 'Vinagre de Sidra ou de Maçã',
                'preco' => NULL,
                'grupo_id' => 12,
                'descricao' => '<p><span class="inbox">O Vinagre de Sidra ou de Ma&ccedil;&atilde; &eacute; obtido a partir do suco fermentado da ma&ccedil;&atilde;.</span></p>
<p><span class="inbox"> Ele &eacute; o menos &aacute;cido.</span></p>
<p><span class="inbox">Fica &oacute;timo em molhos de saladas, conservas,  pratos agridoces e para acentuar o sabor de molhos que acompanham  carnes. </span></p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            414 => 
            array (
                'id' => 426,
                'nome' => 'Vinagre de Malte',
                'preco' => NULL,
                'grupo_id' => 12,
                'descricao' => '<p><span class="inbox">O Vinagre de Malte &eacute; um produto escuro e fermentado, feito a partir do  malte de cevada.</span></p>
<p><span class="inbox">Ele &eacute; usado tradicionalmente na Inglaterra para companhar o  cl&aacute;ssico peixe e batatas fritas (<em>fish and chips</em>).</span></p>
<p><span class="inbox">&Eacute; tamb&eacute;m usado em  molhos para saladas.</span></p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            415 => 
            array (
                'id' => 427,
                'nome' => 'Vinagre de Arroz',
                'preco' => NULL,
                'grupo_id' => 12,
                'descricao' => '<p>O Vinagre de Arroz <span class="inbox">&eacute; o vinagre japon&ecirc;s obtido a partir da fermenta&ccedil;&atilde;o  do arroz.</span></p>
<p><span class="inbox">Ele &eacute; mais suave e ligeiramente adocicado. &Eacute; misturado ao arroz cozido para fazer  sushi e usado em pratos agridoces. O chin&ecirc;s &eacute; mais forte e ligeiramente  &aacute;cido.</span></p>
<p><span class="inbox">Pode ser encontrado em  lojas de produtos orientais. </span></p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            416 => 
            array (
                'id' => 428,
                'nome' => 'Vinagre de Vinho',
                'preco' => NULL,
                'grupo_id' => 12,
                'descricao' => '<p><span class="inbox">O Vinagre de Vinho &eacute; o mais comum e elaborado a partir do vinho tinto  ou branco.</span></p>
<p><span class="inbox">Sua qualidade difere de uma marca para outra e alguns s&atilde;o bem  &aacute;cidos.</span></p>
<p><span class="inbox">Ele &eacute; &oacute;timo para temperar qualquer alimento e para marinadas. </span></p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            417 => 
            array (
                'id' => 429,
                'nome' => 'Vinagre de Álcool',
                'preco' => NULL,
                'grupo_id' => 12,
                'descricao' => '<p>O Vinagre de &Aacute;lcool <span class="inbox">&eacute; o mais forte de todos.</span></p>
<p><span class="inbox">Ele apresenta elevada porcentagem de &aacute;lcool.</span></p>
<p><span class="inbox">Deve ser usado apenas em conservas.</span></p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            418 => 
            array (
                'id' => 430,
                'nome' => 'Vinagre de Champagne ou de Cava ou de Espumante',
                'preco' => NULL,
                'grupo_id' => 12,
                'descricao' => '<p>O Vinagre de Champagne <span class="inbox">&eacute; um produto de cor p&aacute;lida e sabor elegante.</span></p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            419 => 
            array (
                'id' => 431,
                'nome' => 'Vinagre de Xerez',
                'preco' => NULL,
                'grupo_id' => 12,
                'descricao' => '<p>O Viangre de Xerez &eacute; um <span class="inbox">produto t&iacute;pico da Espanha.</span></p>
<p><span class="inbox">Ele possui sabor delicado e exclusivo.</span></p>
<p><span class="inbox">&Eacute;Ideal para saladas e para aromatizar pescados e carnes brancas.</span></p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            420 => 
            array (
                'id' => 432,
                'nome' => 'Vinagre Aromatizado',
                'preco' => NULL,
                'grupo_id' => 12,
                'descricao' => '<p>Os Vinagres Aromatizados <span class="inbox">podem ser aromatizados com ervas,  especiarias, frutas ou alho.</span></p>
<p><span class="inbox">Eles s&atilde;o indicados para molhos de saladas.</span></p>
<p><span class="inbox">Os  aromatizados com frutas podem ser usados em molhos para sobremesas,  mousses, sorvetes ou, ainda, borrifados sobre panquecas e waffles.</span></p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            421 => 
            array (
                'id' => 433,
                'nome' => 'Caldo de Frango Caseiro',
                'preco' => NULL,
                'grupo_id' => 35,
                'descricao' => '',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            422 => 
            array (
                'id' => 434,
                'nome' => 'Caldo de Carne Caseiro',
                'preco' => NULL,
                'grupo_id' => 35,
                'descricao' => '',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            423 => 
            array (
                'id' => 435,
                'nome' => 'Caldo de Legumes Caseiro',
                'preco' => NULL,
                'grupo_id' => 35,
                'descricao' => '',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            424 => 
            array (
                'id' => 436,
                'nome' => 'Caldo de Peixe Caseiro',
                'preco' => NULL,
                'grupo_id' => 35,
                'descricao' => '',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            425 => 
            array (
                'id' => 437,
                'nome' => 'Caldo de Camarão Caseiro',
                'preco' => NULL,
                'grupo_id' => 35,
                'descricao' => '',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            426 => 
            array (
                'id' => 438,
                'nome' => 'Caldo de Frango em Tablete',
                'preco' => NULL,
                'grupo_id' => 35,
                'descricao' => '',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            427 => 
            array (
                'id' => 439,
                'nome' => 'Ervilha em Grãos Fresca',
                'preco' => NULL,
                'grupo_id' => 20,
                'descricao' => '',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            428 => 
            array (
                'id' => 440,
                'nome' => 'Ervilha em Grãos em Lata',
                'preco' => NULL,
                'grupo_id' => 20,
                'descricao' => '',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            429 => 
            array (
                'id' => 441,
                'nome' => 'Ervilha em Grãos Congelada',
                'preco' => NULL,
                'grupo_id' => 20,
                'descricao' => '',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            430 => 
            array (
                'id' => 442,
                'nome' => 'Carne de Boi Moída',
                'preco' => NULL,
                'grupo_id' => 30,
                'descricao' => '',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            431 => 
            array (
                'id' => 443,
                'nome' => 'Carne de Ave Moída',
                'preco' => NULL,
                'grupo_id' => 31,
                'descricao' => '',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            432 => 
            array (
                'id' => 444,
                'nome' => 'Carne de Peixe Moída',
                'preco' => NULL,
                'grupo_id' => 26,
                'descricao' => '',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            433 => 
            array (
                'id' => 445,
                'nome' => 'Sachet d’Épices',
                'preco' => NULL,
                'grupo_id' => 19,
                'descricao' => '<p>O Sachet d&rsquo;&eacute;pices &eacute; um sachet onde se embrulha em gaze os gr&atilde;os de pimenta do reino, cravo, dente de alho, tomilho e folha de louro.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            434 => 
            array (
                'id' => 446,
                'nome' => 'Tomate Concassé',
                'preco' => NULL,
                'grupo_id' => 18,
                'descricao' => '<p>O Tomate <em>Concass&eacute;</em> deve ser feito com tomates maduros, mas firmes.</p>
<p>Fa&ccedil;a um corte em formato de cruz na base do tomate.</p>
<p>Coloque-os na &aacute;gua fervendo  por pouco tempo e em seguida na &aacute;gua com gelo para interromper o cozimento.</p>
<p>Retite a pele e as sementes.</p>
<p>Corte em cubos pequenos e iguais.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            435 => 
            array (
                'id' => 447,
                'nome' => 'Espinafre',
                'preco' => NULL,
                'grupo_id' => 16,
                'descricao' => '',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            436 => 
            array (
                'id' => 448,
                'nome' => 'Pó de Espinafre',
                'preco' => NULL,
                'grupo_id' => 6,
                'descricao' => '',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            437 => 
            array (
                'id' => 449,
                'nome' => 'Sêmola',
                'preco' => NULL,
                'grupo_id' => 7,
                'descricao' => '',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            438 => 
            array (
                'id' => 450,
                'nome' => 'Papoula',
                'preco' => NULL,
                'grupo_id' => 6,
                'descricao' => '',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            439 => 
            array (
                'id' => 451,
                'nome' => 'Cebola Brulé',
                'preco' => NULL,
                'grupo_id' => 19,
                'descricao' => '<p>A Cebola <em>Brul&eacute;</em> &eacute; feita retirando-se a casca da cebola e a cortando ao meio. Em uma frigideira doure e  deixe queimar a parte cortada.Esta cebola &eacute; usada em alguns fundos e <em> consomm&eacute;s</em> para dar a cor marrom.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            440 => 
            array (
                'id' => 452,
                'nome' => 'Fundo Claro',
                'preco' => NULL,
                'grupo_id' => 35,
                'descricao' => '<p>O Fundo Claro pode ser um caldo de frango, ou um de legumes ou um de peixe.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            441 => 
            array (
                'id' => 453,
                'nome' => 'Mirepoix',
                'preco' => NULL,
                'grupo_id' => 1,
                'descricao' => '<p>O <em>Mirepoix </em>&eacute; acrescentado durante o cozimento de caldos,  molhos e assados, agregando-lhes sabor vegetal e corpo<em>.</em></p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            442 => 
            array (
                'id' => 454,
                'nome' => 'Óleo de Milho',
                'preco' => NULL,
                'grupo_id' => 13,
                'descricao' => '',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            443 => 
            array (
                'id' => 455,
                'nome' => 'Carcaça de Peixe',
                'preco' => NULL,
                'grupo_id' => 26,
                'descricao' => '',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            444 => 
            array (
                'id' => 456,
                'nome' => 'Cravo',
                'preco' => NULL,
                'grupo_id' => 2,
                'descricao' => '',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            445 => 
            array (
                'id' => 457,
                'nome' => 'Talos de Cogumelo',
                'preco' => NULL,
                'grupo_id' => 21,
                'descricao' => '',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            446 => 
            array (
                'id' => 458,
                'nome' => 'Cogumelos',
                'preco' => NULL,
                'grupo_id' => 21,
                'descricao' => '',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            447 => 
            array (
                'id' => 459,
                'nome' => 'Vinho Branco Seco',
                'preco' => NULL,
                'grupo_id' => 33,
                'descricao' => '',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            448 => 
            array (
                'id' => 460,
                'nome' => 'Maionese',
                'preco' => NULL,
                'grupo_id' => 9,
                'descricao' => '',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            449 => 
            array (
                'id' => 461,
                'nome' => 'Iogurte Natural',
                'preco' => NULL,
                'grupo_id' => 14,
                'descricao' => '',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            450 => 
            array (
                'id' => 462,
                'nome' => 'Dill Fresco',
                'preco' => NULL,
                'grupo_id' => 1,
                'descricao' => '',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            451 => 
            array (
                'id' => 463,
                'nome' => 'Dill Seco',
                'preco' => NULL,
                'grupo_id' => 2,
                'descricao' => '',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            452 => 
            array (
                'id' => 465,
                'nome' => 'Estragão Seco',
                'preco' => NULL,
                'grupo_id' => 2,
                'descricao' => '',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            453 => 
            array (
                'id' => 466,
                'nome' => 'Pontas de Cebolinha Verde ou Cebolinho',
                'preco' => NULL,
                'grupo_id' => 1,
                'descricao' => '',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            454 => 
            array (
                'id' => 467,
                'nome' => 'Vinagre de Vinho Tinto',
                'preco' => NULL,
                'grupo_id' => 12,
                'descricao' => '',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            455 => 
            array (
                'id' => 468,
                'nome' => 'Curry ou Caril em Pó',
                'preco' => NULL,
                'grupo_id' => 6,
                'descricao' => '',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            456 => 
            array (
                'id' => 469,
            'nome' => 'Camarão Tigre do Pacífico (grelhado)',
                'preco' => NULL,
                'grupo_id' => 26,
                'descricao' => '<p>O Camar&atilde;o Tigre do Pac&iacute;fico chega a atingir 20 cm de comprimento.</p>
<p>&Eacute; delicioso quando grelhado ou usado em saladas.</p>
<p>&nbsp;</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            457 => 
            array (
                'id' => 470,
            'nome' => 'Lagostim ou Lagosta Deep Sea ou Camarão Dublin Bay (frito / grelhado / estufado)',
                'preco' => NULL,
                'grupo_id' => 26,
                'descricao' => '<p>O Lagostim pode ser frito, grelhado ou estufado.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            458 => 
            array (
                'id' => 471,
            'nome' => 'Camarão Tigre (cozido / curry / molho tomate / massa / risotto)',
                'preco' => NULL,
                'grupo_id' => 26,
            'descricao' => '<p>O Camar&atilde;o Tigre fica bom quando cozido e usado em saladas, com molho de <em>curry</em> (caril), molho de tomate e em pratos &aring; base de massa ou arroz.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            459 => 
            array (
                'id' => 472,
            'nome' => 'Camarão de Viveiro (cozido / recheios)',
                'preco' => NULL,
                'grupo_id' => 26,
                'descricao' => '<p>O Camar&atilde;o de Viveiro &eacute; excelente quando usado cozido, para recheio de crepes e past&eacute;is.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            460 => 
            array (
                'id' => 473,
            'nome' => 'Camarão School (cozido / maioneses / cru)',
                'preco' => NULL,
                'grupo_id' => 26,
                'descricao' => '<p>O Camar&atilde;o School &eacute; pequeno e com bastante sumo. Chega a atingir 6 cm.</p>
<p>Fica bom cozido e servido em saladas, com maionese ou simplesmente com suco de lim&atilde;o.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            461 => 
            array (
                'id' => 474,
            'nome' => 'Camarão Royal Red (molhos de massa / curries / risotto)',
                'preco' => NULL,
                'grupo_id' => 26,
                'descricao' => '<p>O Camar&atilde;o Royal Red &eacute; do tamanho de um camar&atilde;o king, chegando a 7 cm e tem cor rosada antes de ser cozido.</p>
<p>Fica muito bom em molhos de massa, <em>curries</em> e arroz.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            462 => 
            array (
                'id' => 475,
            'nome' => 'Camarão Red Spot King (cru / aferventado)',
                'preco' => NULL,
                'grupo_id' => 26,
                'descricao' => '<p>O Camar&atilde;o Red Spot King &eacute; excelente ao natural, com lim&atilde;o.</p>
<p>Tamb&eacute;m pode ser cozido, mas aque&ccedil;a-o levemente para impedir que fique duro.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            463 => 
            array (
                'id' => 476,
            'nome' => 'Camarão King (cru / salteado / grelhado com casca)',
                'preco' => NULL,
                'grupo_id' => 26,
                'descricao' => '<p>O Camar&atilde;o King Cru &eacute; um camar&atilde;o cor de carne, com patas avermelhadas e cauda azulada.</p>
<p>Normalmente tem 8 cm, mas pode chegar a 11 cm.</p>
<p>Pode ser usado cru em salteados ou grelhado em sua casca.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            464 => 
            array (
                'id' => 477,
                'nome' => 'Água Potável Morna',
                'preco' => NULL,
                'grupo_id' => 33,
                'descricao' => '',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            465 => 
            array (
                'id' => 478,
                'nome' => 'Água Potável em Ebulição',
                'preco' => NULL,
                'grupo_id' => 33,
                'descricao' => '',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            466 => 
            array (
                'id' => 479,
                'nome' => 'Fermento Biológico Fresco',
                'preco' => NULL,
                'grupo_id' => 7,
                'descricao' => '',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            467 => 
            array (
                'id' => 480,
                'nome' => 'Farinha de Trigo tipo 0',
                'preco' => NULL,
                'grupo_id' => 7,
                'descricao' => '',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            468 => 
            array (
                'id' => 481,
                'nome' => 'Farinha de Trigo tipo 00',
                'preco' => NULL,
                'grupo_id' => 7,
                'descricao' => '',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            469 => 
            array (
                'id' => 482,
                'nome' => 'Água com Gás',
                'preco' => NULL,
                'grupo_id' => 33,
                'descricao' => '',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            470 => 
            array (
                'id' => 483,
                'nome' => 'Azeite de Oliva Extra Virgem',
                'preco' => NULL,
                'grupo_id' => 13,
                'descricao' => '',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            471 => 
            array (
                'id' => 484,
            'nome' => 'Levedura de Cerveja Desidratada ou Lievito di Birra Italiano (especial para massas)',
                'preco' => NULL,
                'grupo_id' => 7,
                'descricao' => '',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            472 => 
            array (
                'id' => 485,
                'nome' => 'Fermento Biológico Seco',
                'preco' => NULL,
                'grupo_id' => 7,
                'descricao' => '',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            473 => 
            array (
                'id' => 486,
                'nome' => 'Puré de Tomate Caseiro',
                'preco' => NULL,
                'grupo_id' => 10,
                'descricao' => '',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            474 => 
            array (
                'id' => 487,
                'nome' => 'Puré de Tomate Industrial',
                'preco' => NULL,
                'grupo_id' => 10,
                'descricao' => '',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            475 => 
            array (
                'id' => 488,
                'nome' => 'Filé Mignon - Peça',
                'preco' => NULL,
                'grupo_id' => 30,
                'descricao' => '',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            476 => 
            array (
                'id' => 489,
                'nome' => 'Filé Mignon - Medalhão',
                'preco' => NULL,
                'grupo_id' => 30,
                'descricao' => '',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            477 => 
            array (
                'id' => 490,
                'nome' => 'Filé Mignon - Tiras para Strogonoffe',
                'preco' => NULL,
                'grupo_id' => 24,
                'descricao' => '',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            478 => 
            array (
                'id' => 491,
                'nome' => 'Patinho Moído 2 Vezes',
                'preco' => NULL,
                'grupo_id' => 30,
                'descricao' => '',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            479 => 
            array (
                'id' => 492,
                'nome' => 'Peça de Lagarto',
                'preco' => NULL,
                'grupo_id' => 30,
                'descricao' => '',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            480 => 
            array (
                'id' => 493,
                'nome' => 'Picanha',
                'preco' => NULL,
                'grupo_id' => 30,
                'descricao' => '',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            481 => 
            array (
                'id' => 494,
                'nome' => 'Bacalhau Dessalgado',
                'preco' => NULL,
                'grupo_id' => 26,
                'descricao' => '',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            482 => 
            array (
                'id' => 495,
                'nome' => 'Massa Folhada',
                'preco' => NULL,
                'grupo_id' => 25,
                'descricao' => '',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            483 => 
            array (
                'id' => 496,
                'nome' => 'Massa Philo',
                'preco' => NULL,
                'grupo_id' => 25,
                'descricao' => '',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            484 => 
            array (
                'id' => 497,
                'nome' => 'Creme de Leite Fresco',
                'preco' => NULL,
                'grupo_id' => 14,
                'descricao' => '',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            485 => 
            array (
                'id' => 498,
                'nome' => 'Creme de Leite em Tetra Pak',
                'preco' => NULL,
                'grupo_id' => 14,
                'descricao' => '',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            486 => 
            array (
                'id' => 499,
                'nome' => 'Creme de Leite em Lata',
                'preco' => NULL,
                'grupo_id' => 14,
                'descricao' => '',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            487 => 
            array (
                'id' => 500,
                'nome' => 'Suco do Limão',
                'preco' => NULL,
                'grupo_id' => 25,
                'descricao' => '',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            488 => 
            array (
                'id' => 501,
                'nome' => 'Zeste do Limão',
                'preco' => NULL,
                'grupo_id' => 22,
                'descricao' => '',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            489 => 
            array (
                'id' => 502,
                'nome' => 'Zeste da Laranja',
                'preco' => NULL,
                'grupo_id' => 22,
                'descricao' => '',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            490 => 
            array (
                'id' => 503,
                'nome' => 'Grão-de-Bico em Lata',
                'preco' => NULL,
                'grupo_id' => 20,
                'descricao' => '',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            491 => 
            array (
                'id' => 504,
                'nome' => 'Grão-de-Bico Seco',
                'preco' => NULL,
                'grupo_id' => 24,
                'descricao' => '',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            492 => 
            array (
                'id' => 505,
                'nome' => 'Vinho Tinto Seco',
                'preco' => NULL,
                'grupo_id' => 33,
                'descricao' => '',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            493 => 
            array (
                'id' => 506,
                'nome' => 'Vinho do Porto',
                'preco' => NULL,
                'grupo_id' => 33,
                'descricao' => '',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            494 => 
            array (
                'id' => 507,
                'nome' => 'Melaço',
                'preco' => NULL,
                'grupo_id' => 4,
                'descricao' => '',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            495 => 
            array (
                'id' => 508,
                'nome' => 'Tomilho Seco',
                'preco' => NULL,
                'grupo_id' => 2,
                'descricao' => '',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            496 => 
            array (
                'id' => 509,
                'nome' => 'Codorna ou Quail',
                'preco' => NULL,
                'grupo_id' => 31,
                'descricao' => '',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            497 => 
            array (
                'id' => 510,
                'nome' => 'Leite em Pó',
                'preco' => NULL,
                'grupo_id' => 14,
                'descricao' => '',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            498 => 
            array (
                'id' => 511,
                'nome' => 'Chocolate em Pó',
                'preco' => NULL,
                'grupo_id' => 7,
                'descricao' => '',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            499 => 
            array (
                'id' => 512,
            'nome' => 'Caldo de Ossos de Aves (Frango, Codorna etc.)',
                'preco' => NULL,
                'grupo_id' => 35,
                'descricao' => '',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
        ));
        \DB::table('ingredientes')->insert(array (
            0 => 
            array (
                'id' => 513,
                'nome' => 'Magret de Pato',
                'preco' => NULL,
                'grupo_id' => 31,
                'descricao' => '',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 514,
                'nome' => 'Coxa de Pato',
                'preco' => NULL,
                'grupo_id' => 31,
                'descricao' => '',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 515,
                'nome' => 'Confit de Pato',
                'preco' => NULL,
                'grupo_id' => 31,
                'descricao' => '',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 518,
                'nome' => 'Lula',
                'preco' => NULL,
                'grupo_id' => 26,
                'descricao' => '',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 519,
                'nome' => 'Marisco ou Mussel',
                'preco' => NULL,
                'grupo_id' => 26,
                'descricao' => '',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 520,
                'nome' => 'Vôngole ou Clams',
                'preco' => NULL,
                'grupo_id' => 26,
                'descricao' => '',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 521,
                'nome' => 'Açafrão',
                'preco' => NULL,
                'grupo_id' => 6,
                'descricao' => '',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 522,
                'nome' => 'Mandioquinha',
                'preco' => NULL,
                'grupo_id' => 17,
                'descricao' => '',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 523,
                'nome' => 'Cogumelos Selvagens Frescos',
                'preco' => NULL,
                'grupo_id' => 21,
                'descricao' => '',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 524,
                'nome' => 'Cogumelos Selvagens Secos',
                'preco' => NULL,
                'grupo_id' => 21,
                'descricao' => '',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 525,
                'nome' => 'Cogumelo Boleto',
                'preco' => NULL,
                'grupo_id' => 21,
                'descricao' => '',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 526,
                'nome' => 'Cogumelo Míscaro ou Sancha ou Pinheira',
                'preco' => NULL,
                'grupo_id' => 21,
                'descricao' => '',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => 527,
                'nome' => 'Espiga de Milho',
                'preco' => NULL,
                'grupo_id' => 20,
                'descricao' => '',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => 528,
                'nome' => 'Milho Congelado',
                'preco' => NULL,
                'grupo_id' => 20,
                'descricao' => '',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            14 => 
            array (
                'id' => 529,
                'nome' => 'Milho em Lata',
                'preco' => NULL,
                'grupo_id' => 20,
                'descricao' => '',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            15 => 
            array (
                'id' => 530,
                'nome' => 'Milho Seco',
                'preco' => NULL,
                'grupo_id' => 20,
                'descricao' => '',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            16 => 
            array (
                'id' => 531,
                'nome' => 'Noz-Moscada',
                'preco' => NULL,
                'grupo_id' => 6,
                'descricao' => '',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            17 => 
            array (
                'id' => 532,
                'nome' => 'Xerez Seco',
                'preco' => NULL,
                'grupo_id' => 33,
                'descricao' => '',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            18 => 
            array (
                'id' => 533,
                'nome' => 'Katsuobushi ou Flocos de Atum Seco',
                'preco' => NULL,
                'grupo_id' => 6,
                'descricao' => '',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            19 => 
            array (
                'id' => 534,
                'nome' => 'Flocos Desidratados de Bonito ou Katsuobushi',
                'preco' => NULL,
                'grupo_id' => 6,
                'descricao' => '',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            20 => 
            array (
                'id' => 535,
                'nome' => 'Cogumelo-do-Cardo ou Pleurote du Panicaut',
                'preco' => NULL,
                'grupo_id' => 21,
                'descricao' => '',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            21 => 
            array (
                'id' => 536,
                'nome' => 'Semente de Cumaru',
                'preco' => NULL,
                'grupo_id' => 6,
                'descricao' => '<p>A Semente de Cumaru pode substituir&nbsp; a baunilha.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            22 => 
            array (
                'id' => 537,
                'nome' => 'Nabo Japonês ou Daikon',
                'preco' => NULL,
                'grupo_id' => 17,
                'descricao' => '',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            23 => 
            array (
                'id' => 538,
                'nome' => 'Kuzu ou Kudzu',
                'preco' => NULL,
                'grupo_id' => 7,
                'descricao' => '<p>O Kuzu &eacute; um vegetal oriental e de suas ra&iacute;zes faz-se um p&oacute; que &eacute; usado para engrossar l&iacute;quidos e para empanar alimentos.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            24 => 
            array (
                'id' => 539,
                'nome' => 'Cogumelo Shiitake',
                'preco' => NULL,
                'grupo_id' => 21,
                'descricao' => '',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            25 => 
            array (
                'id' => 540,
                'nome' => 'Cogumelo Shimeji',
                'preco' => NULL,
                'grupo_id' => 21,
                'descricao' => '',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            26 => 
            array (
                'id' => 541,
                'nome' => 'Shichimi Togarashi',
                'preco' => NULL,
                'grupo_id' => 2,
                'descricao' => '<p>O Shichimi Togarashi &eacute; uma mistura de 7 especiarias de sabores fortes e que pode ser suave, m&eacute;dia e picante.</p>
<p>As especiarias s&atilde;o: flocos de sansho (pimenta vermelha japonesa) mo&iacute;do grosso, flocos de casca de tangerina muito finos, sementes de c&acirc;nhamo, sementes de papoula, flocos de alga nori verde muito finos e sementes de gergelim branco.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            27 => 
            array (
                'id' => 542,
                'nome' => 'Pimenta Cayena',
                'preco' => NULL,
                'grupo_id' => 6,
                'descricao' => '',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            28 => 
            array (
                'id' => 543,
                'nome' => 'Manjericão Seco',
                'preco' => NULL,
                'grupo_id' => 2,
                'descricao' => '',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            29 => 
            array (
                'id' => 544,
                'nome' => 'Cream Cheese',
                'preco' => NULL,
                'grupo_id' => 14,
                'descricao' => '',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            30 => 
            array (
                'id' => 545,
                'nome' => 'Cream Cheese Light',
                'preco' => NULL,
                'grupo_id' => 14,
                'descricao' => '',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            31 => 
            array (
                'id' => 546,
                'nome' => 'Leite de Vaca Desnatado',
                'preco' => NULL,
                'grupo_id' => 14,
                'descricao' => '',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            32 => 
            array (
                'id' => 547,
                'nome' => 'Queijo Asiago',
                'preco' => NULL,
                'grupo_id' => 14,
                'descricao' => '<p>O Queijo Asiago pode ser usado fresco ou envelhecido.</p>
<p>Quando envelhecido, seu sabor assemelha-se um pouco ao do Parmes&atilde;o.</p>',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            33 => 
            array (
                'id' => 548,
                'nome' => 'Broto de Feijão',
                'preco' => NULL,
                'grupo_id' => 36,
                'descricao' => '',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            34 => 
            array (
                'id' => 549,
                'nome' => 'Broto de Alfafa',
                'preco' => NULL,
                'grupo_id' => 36,
                'descricao' => '',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            35 => 
            array (
                'id' => 550,
                'nome' => 'Nori ou Alga Marinha',
                'preco' => NULL,
                'grupo_id' => 27,
                'descricao' => '',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            36 => 
            array (
                'id' => 551,
                'nome' => 'Ovas de Salmon',
                'preco' => NULL,
                'grupo_id' => 26,
                'descricao' => '',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            37 => 
            array (
                'id' => 552,
                'nome' => 'Vinho Madeira',
                'preco' => NULL,
                'grupo_id' => 33,
                'descricao' => '',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            38 => 
            array (
                'id' => 553,
                'nome' => 'Aparas de Peixe',
                'preco' => NULL,
                'grupo_id' => 26,
                'descricao' => '',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            39 => 
            array (
                'id' => 554,
                'nome' => 'Aparas de Carne',
                'preco' => NULL,
                'grupo_id' => 30,
                'descricao' => '',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            40 => 
            array (
                'id' => 555,
                'nome' => 'Aparas de Frango',
                'preco' => NULL,
                'grupo_id' => 31,
                'descricao' => '',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            41 => 
            array (
                'id' => 556,
                'nome' => 'Semente de Erva Doce',
                'preco' => NULL,
                'grupo_id' => 2,
                'descricao' => '',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            42 => 
            array (
                'id' => 557,
                'nome' => 'Fusilli',
                'preco' => NULL,
                'grupo_id' => 25,
                'descricao' => '',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            43 => 
            array (
                'id' => 558,
                'nome' => 'Penne',
                'preco' => NULL,
                'grupo_id' => 25,
                'descricao' => '',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            44 => 
            array (
                'id' => 559,
                'nome' => 'Talharim',
                'preco' => NULL,
                'grupo_id' => 25,
                'descricao' => '',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            45 => 
            array (
                'id' => 560,
                'nome' => 'Zeste de Limão Siciliano',
                'preco' => NULL,
                'grupo_id' => 22,
                'descricao' => '',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            46 => 
            array (
                'id' => 561,
                'nome' => 'Suco do Limão Siciliano',
                'preco' => NULL,
                'grupo_id' => 22,
                'descricao' => '',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            47 => 
            array (
                'id' => 562,
                'nome' => 'Queijo Taleggio',
                'preco' => NULL,
                'grupo_id' => 14,
                'descricao' => '',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            48 => 
            array (
                'id' => 563,
                'nome' => 'Aspargos Frescos',
                'preco' => NULL,
                'grupo_id' => 18,
                'descricao' => '',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            49 => 
            array (
                'id' => 564,
                'nome' => 'Aspargos Verdes em Conserva',
                'preco' => NULL,
                'grupo_id' => 11,
                'descricao' => '',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            50 => 
            array (
                'id' => 565,
                'nome' => 'Aspargos Brancos em Conserva',
                'preco' => NULL,
                'grupo_id' => 11,
                'descricao' => '',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            51 => 
            array (
                'id' => 566,
                'nome' => 'Mostarda de Dijon',
                'preco' => NULL,
                'grupo_id' => 9,
                'descricao' => '',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            52 => 
            array (
                'id' => 567,
                'nome' => 'Anchova',
                'preco' => NULL,
                'grupo_id' => 26,
                'descricao' => '',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            53 => 
            array (
                'id' => 568,
                'nome' => 'Anchova em Conserva',
                'preco' => NULL,
                'grupo_id' => 11,
                'descricao' => '',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            54 => 
            array (
                'id' => 569,
                'nome' => 'Sal Kosher',
                'preco' => NULL,
                'grupo_id' => 6,
                'descricao' => '',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            55 => 
            array (
                'id' => 570,
                'nome' => 'Alface Lisa',
                'preco' => NULL,
                'grupo_id' => 16,
                'descricao' => '',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            56 => 
            array (
                'id' => 571,
                'nome' => 'Alface Crespa',
                'preco' => NULL,
                'grupo_id' => 16,
                'descricao' => '',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            57 => 
            array (
                'id' => 572,
                'nome' => 'Alface Romana',
                'preco' => NULL,
                'grupo_id' => 16,
                'descricao' => '',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
            58 => 
            array (
                'id' => 573,
                'nome' => 'Crouton',
                'preco' => NULL,
                'grupo_id' => 37,
                'descricao' => '',
                'picture_file_name' => NULL,
                'picture_content_type' => NULL,
                'picture_file_size' => NULL,
                'picture_updated_at' => NULL,
            ),
        ));
        
        
    }
}