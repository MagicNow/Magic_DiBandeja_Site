@extends(app('request')->input('type') === 'modal' ? 'admin.modal' : 'admin.app')

@section('contentheader_title')
    Novo Parceiro
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
      {!! Form::open(array('route' => array('admin.parceiros.store',isset($parceiro->id) ? $parceiro->id : ''),'method' => 'POST','files'=>true)) !!}

      <div class="form-group">
          <label for="">Nome</label>
          {!! Form::text('nome', isset($parceiro->nome) ? $parceiro->nome : '', array('class' => 'form-control', 'placeholder'=>'Nome*','id'=>'nome','autocomplete'=>'off') )!!}
      </div>

      <div class="form-group">
          <label for="">Apelido</label>
          {!! Form::text('apelido', isset($parceiro->apelido) ? $parceiro->apelido : '', array('class' => 'form-control', 'placeholder'=>'Apelido','id'=>'apelido','autocomplete'=>'off') )!!}
      </div>

      <div class="form-group">
          <label for="">Profissão</label>
          {!! Form::text('profissao', isset($parceiro->profissao) ? $parceiro->profissao : '', array('class' => 'form-control', 'placeholder'=>'Profissão','id'=>'profissao','autocomplete'=>'off') )!!}
      </div>

      <div class="row">
          <div class="col-sm-6 col-cs-12">
              <div class="form-group">
                  <label for="">Email</label>
                  {!! Form::text('email', isset($parceiro->email) ? $parceiro->email : '', array('class' => 'form-control', 'placeholder'=>'Email','id'=>'email','autocomplete'=>'off') )!!}
              </div>
          </div>
          <div class="col-sm-6 col-cs-12">
              <div class="form-group">
                  <label for="">Telefone</label>
                  {!! Form::text('telefone', isset($parceiro->telefone) ? $parceiro->telefone : '', array('class' => 'form-control', 'placeholder'=>'Telefone','id'=>'telefone','autocomplete'=>'off') )!!}
              </div>
          </div>
      </div>

      <div class="form-group">
          <label for="">Url</label>
          {!! Form::text('url', isset($parceiro->url) ? $parceiro->url : '', array('class' => 'form-control', 'placeholder'=>'Url','id'=>'url','autocomplete'=>'off') )!!}
      </div>

      <hr>

      <div class="form-group">
          <label for="">Endereço</label>
          {!! Form::text('endereco', isset($parceiro->endereco) ? $parceiro->endereco : '', array('class' => 'form-control', 'placeholder'=>'Rua, Avenida, Alameda...','id'=>'endereco','autocomplete'=>'off') )!!}
      </div>

      <div class="row">
          <div class="col-sm-6 col-cs-12">
              <div class="form-group">
                  <label for="">Número e complemento</label>
                  {!! Form::text('numero', isset($parceiro->numero) ? $parceiro->numero : '', array('class' => 'form-control', 'placeholder'=>'Número e complemento','id'=>'numero','autocomplete'=>'off') )!!}
              </div>
          </div>
          <div class="col-sm-6 col-cs-12">
              <div class="form-group">
                  <label for="">Bairro</label>
                  {!! Form::text('bairro', isset($parceiro->bairro) ? $parceiro->bairro : '', array('class' => 'form-control', 'placeholder'=>'Bairro','id'=>'bairro','autocomplete'=>'off') )!!}
              </div>
          </div>
      </div>

      <div class="row">
          <div class="col-sm-6 col-cs-12">
              <div class="form-group">
                  <label for="">Cidade</label>
                  {!! Form::text('cidade', isset($parceiro->cidade) ? $parceiro->cidade : '', array('class' => 'form-control', 'placeholder'=>'Cidade','id'=>'cidade','autocomplete'=>'off') )!!}
              </div>
          </div>
          <div class="col-sm-6 col-cs-12">
              <div class="form-group">
                  <label for="">País</label>
                  {!! Form::text('pais', isset($parceiro->pais) ? $parceiro->pais : '', array('class' => 'form-control', 'placeholder'=>'País','id'=>'pais','autocomplete'=>'off') )!!}
              </div>
          </div>
      </div>

      <div class="row">
          <div class="col-sm-6 col-cs-12">
              <div class="form-group">
                  <label for="">CEP</label>
                  {!! Form::text('cep', isset($parceiro->cep) ? $parceiro->cep : '', array('class' => 'form-control', 'placeholder'=>'CEP','id'=>'cep','autocomplete'=>'off') )!!}
              </div>
          </div>
      </div>

      <div class="form-group">
          <label for="">Imagem</label>
          @if(isset($parceiro->image))
              <img width="100" src="{!!asset('upload/receitas').'/'.$parceiro->image !!}">
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
