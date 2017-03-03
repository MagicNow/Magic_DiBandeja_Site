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
      {!! Form::open(array('route' => array('admin.fornecedores.store',isset($fornecedor->id) ? $fornecedor->id : ''),'method' => 'POST','files'=>true)) !!}
	
		
		<div class="form-group">
			<label for="">Razão social</label>
			{!! Form::text('razao_social',isset($fornecedor->razao_social) ? $fornecedor->razao_social : '',array('class' => 'form-control','placeholder'=>'Razão social*','id'=>'razao_social','autocomplete'=>'off') )!!}
		</div>

        <div class="form-group">
            <label for="">Nome Fantasia</label>
            {!! Form::text('nome_fantasia',isset($fornecedor->nome_fantasia) ? $fornecedor->nome_fantasia : '',array('class' => 'form-control','placeholder'=>'Nome Fantasia*','id'=>'razao_social','autocomplete'=>'off') )!!}
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
            <label for="">Cotação</label>
            {!! Form::text('cotacao',isset($fornecedor->cotacao) ? $fornecedor->cotacao : '',array('class' => 'form-control','placeholder'=>'Cotação*','id'=>'cotacao','autocomplete'=>'off') )!!}
        </div>


        <div class="form-group">
            <label for="">Endereço</label>
            {!! Form::text('endereco',isset($fornecedor->endereco) ? $fornecedor->endereco : '',array('class' => 'form-control','placeholder'=>'Rua, Avenida*','id'=>'endereco','autocomplete'=>'off') )!!}
        </div>


        <div class="form-group">
            <label for="">Complemento</label>
            {!! Form::text('complemento',isset($fornecedor->complemento) ? $fornecedor->complemento : '',array('class' => 'form-control','placeholder'=>'Complemento*','id'=>'complemento','autocomplete'=>'off') )!!}
        </div>


        <div class="form-group">
            <label for="">Bairro</label>
            {!! Form::text('bairro',isset($fornecedor->bairro) ? $fornecedor->bairro : '',array('class' => 'form-control','placeholder'=>'Bairro*','id'=>'razao_social','autocomplete'=>'off') )!!}
        </div>

        <div class="form-group">
            <label for="">Cidade</label>
            {!! Form::text('cidade',isset($fornecedor->cidade) ? $fornecedor->cidade : '',array('class' => 'form-control','placeholder'=>'Cidade*','id'=>'cidade','autocomplete'=>'off') )!!}
        </div>

        <div class="form-group">
            <label for="">Estado</label>
            {!! Form::text('estado',isset($fornecedor->estado) ? $fornecedor->estado : '',array('class' => 'form-control','placeholder'=>'Estado*','id'=>'estado','autocomplete'=>'off') )!!}
        </div>

        <div class="form-group">
            <label for="">Pais</label>
            {!! Form::text('pais',isset($fornecedor->pais) ? $fornecedor->pais : '',array('class' => 'form-control','placeholder'=>'Pais*','id'=>'pais','autocomplete'=>'off') )!!}
        </div>

        <div class="form-group">
            <label for="">Cep</label>
            {!! Form::text('cep',isset($fornecedor->cep) ? $fornecedor->cep : '',array('class' => 'form-control','placeholder'=>'Cep*','id'=>'cep','autocomplete'=>'off') )!!}
        </div>

        <div class="form-group">
            <label for="">Telefone</label>
            {!! Form::text('telefone',isset($fornecedor->telefone) ? $fornecedor->telefone : '',array('class' => 'form-control','placeholder'=>'Telefone*','id'=>'telefone','autocomplete'=>'off') )!!}
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
       <div class="form-group">
            <button type="submit" class="btn btn-primary">Salvar</button>
        </div>
	{!! Form::close() !!}
@endsection