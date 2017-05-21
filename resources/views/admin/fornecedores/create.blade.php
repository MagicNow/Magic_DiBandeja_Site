@extends(app('request')->input('type') === 'modal' ? 'admin.modal' : 'admin.app')

@section('contentheader_title')
	Novo fornecedor
@endsection

@section('main-content')
	@if(count($errors) > 0)
	  <div class="alert alert-danger">
		   @foreach ($errors->all() as $error)
				<p>{{ $error }}</p>
			@endforeach
	  </div>    
	  @endif
	  @if (session('sucess'))
		  <div class="alert alert-success">
			  {{ session('sucess') }}
		  </div>
	  @endif
	  {!! Form::open(array('route' => array('admin.fornecedores.store', isset($fornecedor->id) ? $fornecedor->id : ''),'method' => 'POST', 'files' => true, 'class' => 'fornecedores-form')) !!}
	
		
		<div class="form-group">
			<label for="">Razão social</label>
			{!! Form::text('razao_social',isset($fornecedor->razao_social) ? $fornecedor->razao_social : '',array('class' => 'form-control','placeholder'=>'Razão social*','id'=>'razao_social','autocomplete'=>'off') )!!}
		</div>

		<div class="form-group">
			<label for="">Nome Fantasia</label>
			{!! Form::text('nome', isset($fornecedor->nome) ? $fornecedor->nome : '',array('class' => 'form-control','placeholder'=>'Nome Fantasia*','id'=>'nome_fantasia','autocomplete'=>'off') )!!}
		</div>

		<div class="form-group">
			<label for="">Especialidade</label>
			{!! Form::text('especialidade',isset($fornecedor->especialidade) ? $fornecedor->especialidade : '',array('class' => 'form-control','placeholder'=>'Especialidade*','id'=>'especialidade','autocomplete'=>'off') )!!}
		</div>

		<div class="form-group">
			<label for="">URL</label>
			{!! Form::text('url',isset($fornecedor->url) ? $fornecedor->url : '',array('class' => 'form-control','placeholder'=>'URL*','id'=>'url','autocomplete'=>'off') )!!}
		</div>

		<div class="form-group">
			<label for="">Telefone</label>
			{!! Form::text('telefone',isset($fornecedor->telefone) ? $fornecedor->telefone : '',array('class' => 'form-control','placeholder'=>'Telefone*','id'=>'telefone','autocomplete'=>'off') )!!}
		</div>

		<div class="form-group">
			<label for="">Cotação</label>
			{!! Form::text('cotacao',isset($fornecedor->cotacao) ? $fornecedor->cotacao : '',array('class' => 'form-control','placeholder'=>'Cotação*','id'=>'cotacao','autocomplete'=>'off') )!!}
		</div>

		<div class="form-group">
			<label for="">Cep</label>
			{!! Form::text('cep',isset($fornecedor->cep) ? $fornecedor->cep : '',array('class' => 'form-control','placeholder'=>'Cep*','id'=>'cep','autocomplete'=>'off') )!!}
		</div>

		<div class="row">
			<div class="form-group col-md-6">
				<label for="">Endereço</label>
				{!! Form::text('endereco',isset($fornecedor->endereco) ? $fornecedor->endereco : '',array('class' => 'form-control','placeholder'=>'Rua, Avenida*','id'=>'endereco','autocomplete'=>'off') )!!}
			</div>

			<div class="form-group col-md-6">
				<label for="">Complemento</label>
				{!! Form::text('complemento',isset($fornecedor->complemento) ? $fornecedor->complemento : '',array('class' => 'form-control','placeholder'=>'Complemento*','id'=>'complemento','autocomplete'=>'off') )!!}
			</div>
		</div>

		<div class="row">
			<div class="form-group col-md-6">
				<label for="">Bairro</label>
				{!! Form::text('bairro',isset($fornecedor->bairro) ? $fornecedor->bairro : '',array('class' => 'form-control','placeholder'=>'Bairro*','id'=>'razao_social','autocomplete'=>'off') )!!}
			</div>

			<div class="form-group col-md-6">
				<label for="">Cidade</label>
				{!! Form::text('cidade',isset($fornecedor->cidade) ? $fornecedor->cidade : '',array('class' => 'form-control','placeholder'=>'Cidade*','id'=>'cidade','autocomplete'=>'off') )!!}
			</div>
		</div>

		<div class="row">
			<div class="form-group col-md-6">
				<label for="">Estado</label>
				{!! Form::text('estado', isset($fornecedor->estado) ? $fornecedor->estado : '', array('class' => 'form-control', 'placeholder'=>'Estado*', 'id'=>'estado', 'autocomplete'=>'off') )!!}
			</div>

			<div class="form-group col-md-6">
				<label for="">Pais</label>
				{!! Form::text('pais', isset($fornecedor->pais) ? $fornecedor->pais : '', array('class' => 'form-control', 'placeholder'=>'Pais*', 'id'=>'pais', 'autocomplete'=>'off') )!!}
			</div>
		</div>

		@if(isset($fornecedor->imagem))
			<img width="100" src="{!!asset('upload/fornecedores').'/'.$fornecedor->imagem !!}">
		@endif
		<div class="form-group">
			 <div class="fileinput fileinput-new" data-provides="fileinput">
				<span class="btn btn-default btn-file"><span>Image</span>{!! Form::file('image')!!}</span>
				<span class="fileinput-filename"></span><span class="fileinput-new">nenhum arquivo</span>
			</div>
		</div>

		<div class="form-group text-center">
			<label for="">Tipo de distribuição</label>
			<div class="row form-group">
				<div class="col-md-4">&nbsp;</div>
				<div class="btn-group col-md-4" data-toggle="buttons">
					<label class="btn btn-primary col-md-6 active fornecedores-dist-direct-button">
						<input type="radio" autocomplete="off" name="tipo_distribuicao" checked> Direto
					</label>
					<label class="btn btn-primary col-md-6 fornecedores-dist-indirect-button">
						<input type="radio" autocomplete="off" name="tipo_distribuicao"> Indireto
					</label>
				</div>
				<div class="col-md-4">&nbsp;</div>
			</div>
		</div>

		<div class="row">
			<div class="form-group-select col-md-12 fornecedores-dist-indirect hidden">
				<div class="alert fornecedores-dist-form-alert hidden"></div>
				<div class="fornecedores-dist-form" data-request-url="{{ route('admin.distribuidores.store') }}">
					{{-- <input type="hidden" name="type" value="modal"> --}}
					<div class="row form-group">
						<div class="col-md-12">
							<label>Distribuição</label>
							<div class="col-md-12 row form-group component-mt-select" data-mt-request-url="/admin/distribuidores/list" data-mt-max-tags="20" data-mt-tag-input-name="distribuidores" data-mt-default-values="{{ isset($distribuidores) ? $distribuidores : '{}' }}" data-mt-trigger-on-add="changeDistributorSelect">
								<div class="col-md-12 row">
									<input type="text" class="form-control" data-mt-filter-control name="nome-distribuidor" />
								</div>
							</div>
							<div class="fornecedor-dist-append-form"></div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="row fornecedores-nota-geral">
			<div class="fornecedores-nota-container col-md-4 mb-2">
				Ranking DiBandeja: fornecedor
				<div class="fornecedores-nota"></div>
				<input type="hidden" name="nota">
			</div>

			<div class="distribuidores-nota-container col-md-4 hidden mb-2">
				Ranking DiBandeja: <span class="distribuidores-nota-nome"></span>
				<div class="distribuidores-nota"></div>
				<input type="hidden" name="nota-distribuidor[]" class="distribuidores-nota-dibandeja-input">
			</div>
		</div>

		<div class="form-group pull-right">
			<button type="submit" class="btn btn-primary">Salvar fornecedor</button>
		</div>
	{!! Form::close() !!}
@endsection