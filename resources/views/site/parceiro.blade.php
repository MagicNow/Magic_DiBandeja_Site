@extends('site/master')

@section('content')


<div class="header-interna">
	<h2 class="header-title title-parceiro">Seja um Parceiro / Colaborador</h2>
</div>	

<section id="interna_dibandeja" class="content">
	<div class="container">

		<div class="breadcrumb">
			<ul>
				<li>Você está em</li>
				<li>
					<i class="fa fa-angle-double-right" aria-hidden="true"></i>
				</li>
				<li>
					<a href="#">Home / </a>
				</li>
				<li>
					<a href="#">Parceiro e colaborador</a>
				</li>
			</ul>
		</div> 


		<div class="content_form col-sm-12">
			<p>Escreva para o DiBandeja! Você é um escritor, um blogger de comida, é da área de nutrição, é fotógrafo, criador de receitas, um amante da gastronomia e quer escrever para o site? Mande um artigo para <a href="mailto:ola@dibandeja.com.br">ola@dibandeja.com.br</a> e, se quiser, anexe fotos de alta resolução e ilustrações exclusivas. Siga as seguintes guidelines:</p>

			<p><strong>Frescor!</strong> Por favor não envie receitas que você já enviou antes.</p>

			<p><strong>Relevância!</strong> Comida, receitas, cozinhar, dicas de cozinha e como fazer. Tudo relacionado à gastronomia são tópicos que valem!</p>

			<p><strong>Seja Conciso!</strong> Valorizamos qualidade e não quantidade (pense em algo com menos de 500 palavras).</p>

			<p><strong>Tenha Progressão!</strong> Temos uma grande audiência de pessoas que cozinham em casa e em restaurantes, de chefs, de bloggers, autores culinários e amantes da gastronomia. Por isso, algo com imenso appeal normalmente é melhor.</p>

			<p><strong>Fotos, Muitas Fotos e Também Ilustrações! </strong>Adoramos receber fotos grandes e bonitas e ilustrações exclusivas, relacionadas à gastronomia. Por favor mande várias junto com seu artigo.

			Tem novas idéias? Mande um email para <a href="mailto:ola@dibandeja.com.br"> ola@dibandeja.com.br</a> e nós adoraremos recebê-las!</p>

			<form class="form_cliente col-sm-8 col-md-9 col-lg-9" action="{{route('parceiro.store')}}" method="post">
				<fieldset><br>
					<label>PARCEIRO
						<input class="radio" type="radio" name="tipo" value="PARCEIRO">
						COLABORADOR
						<input type="radio" class="radio" name="tipo" value="COLABORADOR">
					</label>
					<br>
					<label>
						
					<label>
						<input type="text" placeholder="NOME COMPLETO" name="nome">
					</label>		
					<label>
						<input type="text" placeholder="APELIDO" name="apelido">
					</label>	
					<label>
						<input type="text" placeholder="PROFISSÃO" name="profissao">
					</label>		
					<label>
						<input type="email" placeholder="E-MAIL" name="email">
					</label>
					<label>
						<input type="tel" placeholder="TELEFONE" id="phone"name="telefone">
					</label>
					<label>
						<input type="url" placeholder="URL" name="url">
					</label>
					
					<label>
						<input type="text" placeholder="CEP" name="cep">
					</label>
					<label>
						<input type="text" placeholder="ENDEREÇO" name="endereco">
					</label>
					<label>
						<input type="number" placeholder="NÚMERO" name="numero">
					</label>
					<label>
						<input type="text" placeholder="COMPLEMENTO" name="complemento">
					</label>
					<label>
						<input type="text" placeholder="BAIRRO" name="bairro">
					</label>
					<label>
						<input type="text" placeholder="CIDADE" name="cidade">
					</label>
					<label>
						<select name="estado" class="form-estado">
							<option value="">ESTADO</option>
							<option value="AC">Acre</option>
							<option value="AL">Alagoas</option>
							<option value="AP">Amapá</option>
							<option value="AM">Amazonas</option>
							<option value="BA">Bahia</option>
							<option value="CE">Ceará</option>
							<option value="DF">Distrito Federal</option>
							<option value="ES">Espirito Santo</option>
							<option value="GO">Goiás</option>
							<option value="MA">Maranhão</option>
							<option value="MS">Mato Grosso do Sul</option>
							<option value="MT">Mato Grosso</option>
							<option value="MG">Minas Gerais</option>
							<option value="PA">Pará</option>
							<option value="PB">Paraíba</option>
							<option value="PR">Paraná</option>
							<option value="PE">Pernambuco</option>
							<option value="PI">Piauí</option>
							<option value="RJ">Rio de Janeiro</option>
							<option value="RN">Rio Grande do Norte</option>
							<option value="RS">Rio Grande do Sul</option>
							<option value="RO">Rondônia</option>
							<option value="RR">Roraima</option>
							<option value="SC">Santa Catarina</option>
							<option value="SP">São Paulo</option>
							<option value="SE">Sergipe</option>
							<option value="TO">Tocantins</option>
						</select>
					</label>
					
					<button type="submit" id="enviar">Continuar</button>
				</fieldset>
			</form>
		</div>
		
	</div>
</section>

@endsection