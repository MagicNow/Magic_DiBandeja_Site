@extends('admin.app')

@section('contentheader_title')
    Novo Cliente
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
      {!! Form::open(array('route' => array('admin.clientes.store',isset($cliente->id) ? $cliente->id : ''),'method' => 'POST','files'=>true)) !!}


		<div class="form-group">
            <label for="">Tipo</label>
            <div class="row">
                <div class="btn-group col-sm-12" data-toggle="buttons">
                    <label class="btn btn-secondary {{ $tipo['0'] === 'checked' ? 'active' : '' }}">
                        <input type="radio" name="tipo" class="cliente-tipo" value="0" autocomplete="off" {{ $tipo['0'] }}> Pessoa Física
                    </label>
                    <label class="btn btn-secondary {{ $tipo['1'] === 'checked' ? 'active' : '' }}">
                        <input type="radio" name="tipo" class="cliente-tipo" value="1" autocomplete="off" {{ $tipo['1'] }}> Pessoa Jurídica
                    </label>
                </div>
            </div>
		</div>

		<div class="form-group">
			<label for="" class="label-nome">{{$tipo['0'] === 'checked' ? 'Pessoa Física' : 'Pessoa Jurídica' }}</label>
			{!! Form::text('nome',isset($cliente->nome) ? $cliente->nome : '',array('class' => 'form-control','placeholder'=>$tipo['0'] === 'checked' ? 'Pessoa Física' : 'Pessoa Jurídica','id'=>'nome','autocomplete'=>'off') )!!}
		</div>

        <div class="form-group">
            <label for="">Endereço</label>
            {!! Form::text('endereco',isset($cliente->endereco) ? $cliente->endereco : '',array('class' => 'form-control','placeholder'=>'Endereço','id'=>'endereco','autocomplete'=>'off') )!!}
        </div>

        <div class="form-group">
            <div class="row">
                <div class="col-sm-6 col-xs-12">
                    <label for="">Número e complemento</label>
                    {!! Form::text('numero',isset($cliente->numero) ? $cliente->numero : '',array('class' => 'form-control','placeholder'=>'Número e complemento','id'=>'numero','autocomplete'=>'off') )!!}
                </div>
                <div class="col-sm-6 col-xs-12">
                    <label for="">Bairro</label>
                    {!! Form::text('bairro',isset($cliente->bairro) ? $cliente->bairro : '',array('class' => 'form-control','placeholder'=>'Bairro','id'=>'bairro','autocomplete'=>'off') )!!}
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row">
                <div class="col-sm-6 col-xs-12">
                    <label for="">Cidade</label>
                    {!! Form::text('cidade',isset($cliente->cidade) ? $cliente->cidade : '',array('class' => 'form-control','placeholder'=>'Cidade','id'=>'cidade','autocomplete'=>'off') )!!}
                </div>
                <div class="col-sm-6 col-xs-12">
                    <label for="">País</label>
                    {!! Form::text('pais',isset($cliente->pais) ? $cliente->pais : '',array('class' => 'form-control','placeholder'=>'País','id'=>'pais','autocomplete'=>'off') )!!}
                </div>
            </div>
        </div>

        <div class="form-group">
            <label for="">CEP</label>
            {!! Form::text('cep',isset($cliente->cep) ? $cliente->cep : '',array('class' => 'form-control','placeholder'=>'CEP','id'=>'cep','autocomplete'=>'off') )!!}
        </div>

        <div class="form-group">
            <label for="">Telefone</label>
            {!! Form::text('telefone_1',isset($cliente->telefone_1) ? $cliente->telefone_1 : '',array('class' => 'form-control','placeholder'=>'Telefone','id'=>'telefone_1','autocomplete'=>'off') )!!}
        </div>

        <div class="form-group">
            <div class="row">
                <div class="col-sm-6 col-xs-12">
                    <label for="">Email</label>
                    {!! Form::text('email_1',isset($cliente->email_1) ? $cliente->email_1 : '',array('class' => 'form-control','placeholder'=>'Email','id'=>'email_1','autocomplete'=>'off') )!!}
                </div>
                <div class="col-sm-6 col-xs-12">
                    <label for="">Url</label>
                    {!! Form::text('url',isset($cliente->url) ? $cliente->url : '',array('class' => 'form-control','placeholder'=>'Url','id'=>'url','autocomplete'=>'off') )!!}
                </div>
            </div>
        </div>

        <div class="form-group">
            <label for="">Imagem</label>
            @if(isset($cliente->image))
                <img width="100" src="{!!asset('upload/clientes').'/'.$cliente->image !!}">
            @endif
             <div class="fileinput fileinput-new" data-provides="fileinput">
                <span class="btn btn-default btn-file"><span>Imagem</span>{!! Form::file('image')!!}</span>
                <span class="fileinput-filename"></span><span class="fileinput-new">nenhum arquivo</span>
            </div>
        </div>

       <div class="form-group">
            <button type="submit" class="btn btn-primary">Salvar</button>
        </div>
	{!! Form::close() !!}

@endsection
