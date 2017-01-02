@extends('site/master')

@section('content')


<div class="header-interna">
	<h2 class="title-fornecedor header-title">Seja um fornecedor</h2>
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
					<a href="#">Fornecedor</a>
				</li>
			</ul>
		</div> 


		<div class="content_form col-sm-12">
			<p>Nós temos o maior prazer em tê-lo como um dos fornecedores do DiBandeja. Cadastre-se conosco.</p>
			@if(count($errors) > 0)
		        <div class="alert alert-danger">
		            @foreach ($errors->all() as $message)
		                {!! $message!!}<br />
		            @endforeach
		        </div>
		        
		    @endif
		    @if (session('sucess'))
		        <div class="alert alert-success">
		            {{ session('sucess') }}
		        </div>
		    @endif
			<form class="form_cliente col-sm-8 col-md-9 col-lg-9" action="{{route('fornecedor.store')}}" method="post">
				<fieldset>
					<label>
						<input type="text" placeholder="RAZÃO SOCIAL" name="razao_social">
					</label>		
					<label>
						<input type="text" placeholder="NOME FANTASIA" name="nome_fantasia">
					</label>	
					<label>
						<input type="text" placeholder="ESPECIALIDADE" name="especialidade">
					</label>		
					<label>
						<input type="uel" placeholder="URL" name="url">
					</label>
					{{-- <label>
						<input type="text" placeholder="Cotação" name="cotacao">
					</label> --}}
					<label>
						<input type="tel" placeholder="TELEFONE" id="phone" name="telefone">
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