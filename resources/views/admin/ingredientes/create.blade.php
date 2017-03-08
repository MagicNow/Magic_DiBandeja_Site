@extends('admin.app')

@section('contentheader_title')
    Novo ingrediente
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
    {!! Form::open(['route' => ['admin.ingredientes.store', isset($ingrediente->id) ? $ingrediente->id : ''],'method' => 'POST','files'=>true]) !!}

        <div class="form-group">
            <label for="">Ingrediente</label>
            {!! Form::text('ingrediente', isset($ingrediente->ingrediente) ? $ingrediente->ingrediente : '',array('class' => 'form-control','placeholder'=>'Ingrediente*','id'=>'ingrediente','autocomplete'=>'off') )!!}
        </div>
        <div class="form-group">
            <label for="">Nome científico</label>
            {!! Form::text('nome_cientifico',isset($ingrediente->nome_cientifico) ? $ingrediente->nome_cientifico : '',array('class' => 'form-control','placeholder'=>'Nome científico*','id'=>'nome_cientifico','autocomplete'=>'off') )!!}
        </div>
        <div class="form-group ">
            <label>Caracteristicas</label>
            {!! Form::select('caracteristicas[]', [], null, array('class' => 'form-control form-control-select select2-ajax','id'=>'caracteristicas','multiple'=>'multiple', 'data-sol-options' => '{"multiple": true, "data": "/admin/caracteristicas/list"}', 'data-notfound' => "<a href='" . route('admin.caracteristicas.create', ['type' => 'modal']) . "' class='register-modal' data-toggle='modal' data-target='#register'>Cadastre uma nova característica</a>")) !!}
        </div>

        <div class="form-group">
            <label>Grupos</label>
            {!! Form::select('grupos[]', [], null, array('class' => 'form-control form-control-select select2-ajax', 'id' => 'grupos', 'multiple' => 'multiple', 'data-sol-options' => '{"multiple": true, "data": "/admin/grupos/list"}', 'data-notfound' => "<a href='" . route('admin.grupos.create', ['type' => 'modal']) . "' class='register-modal' data-toggle='modal' data-target='#register'>Cadastre um novo grupo</a>")) !!}
        </div>

        <div class="form-group">
            <label for="">Propriedades nutricionais</label>
            {!! Form::text('propriedades_nutricionais',isset($ingrediente->propriedades_nutricionais) ? $ingrediente->propriedades_nutricionais : '',array('class' => 'form-control','placeholder'=>'Propriedades nutricionais*','id'=>'propriedades_nutricionais','autocomplete'=>'off') )!!}
        </div>
        <div class="form-group">
            <label for="">Qualificações</label>
            {!! Form::text('qualificacoes',isset($ingrediente->qualificacoes) ? $ingrediente->qualificacoes : '',array('class' => 'form-control','placeholder'=>'Qualificações*','id'=>'qualificacoes','autocomplete'=>'off') )!!}
        </div>
        <div class="form-group">
            <label for="">Benefícios</label>
            {!! Form::text('beneficios',isset($ingrediente->beneficios) ? $ingrediente->beneficios : '',array('class' => 'form-control','placeholder'=>'Benefícios*','id'=>'beneficios','autocomplete'=>'off') )!!}
        </div>
        <div class="form-group">
            <label for="">Restrições</label>
            {!! Form::text('restricoes',isset($ingrediente->restricoes) ? $ingrediente->restricoes : '',array('class' => 'form-control','placeholder'=>'Possíveis Restrições*','id'=>'restricoes','autocomplete'=>'off') )!!}
        </div>
        <div class="form-group">
            <label>Ingrediente de afinidade</label>
            {!! Form::select('ingredientes_relacionados[]', $ingredientes, isset($ingrediente->relacionados) ? $ingredientes_relacionados : '', array('class' => 'form-control select2', 'id'=>'ingredientes_relacionados','multiple'=>'multiple')) !!}
        </div>
        <div class="row">
            <div class="form-group col-md-4">
                <label for="">Sazonalidade inicial</label>
                {!! Form::text('sazonalidade_inicial',isset($ingrediente->sazonalidade_inicial) ? date('d/m/Y',strtotime($ingrediente->sazonalidade_inicial)) : '',array('class' => 'form-control','placeholder'=>'Sazonalidade inicial*','id'=>'sazonalidade_inicial', 'autocomplete'=>'off') )!!}
            </div>

            <div class="form-group col-md-4">
                <label for="">Sazonalidade final</label>
                {!! Form::text('sazonalidade_final', isset($ingrediente->sazonalidade_final) ? date('d/m/Y',strtotime($ingrediente->sazonalidade_final)) : '', array('class' => 'form-control', 'placeholder'=>'Sazonalidade final*','id'=>'sazonalidade_final', 'autocomplete'=>'off') )!!}
            </div>
        </div>
        <div class="form-group">
            <label for="">Histórico</label>
            {!! Form::textarea('historico',isset($ingrediente->historico) ? $ingrediente->historico : '',array('class' => 'form-control','placeholder'=>'Histórico*','id'=>'historico') )!!}
        </div>
        <div class="form-group form-providers">
            <label for="fornecedores">Fornecedores</label>
            <div class="row fornecedores-linha">
                <div class="col-md-5 col-sm-12">
                    {!! Form::select('fornecedores[]', [], null, array('class' => 'form-control select2-ajax', 'id' => 'fornecedores', 'data-sol-options' => '{"data": "/admin/fornecedores/list"}', 'data-notfound' => "<a href='" . route('admin.fornecedores.create', ['type' => 'modal']) . "' class='register-modal' data-toggle='modal' data-target='#register'>Cadastre um novo fornecedor</a>")) !!}
                </div>
                <label for="fornecedores-custo" class="col-md-7 col-sm-12 col-xs-12">
                    <span class="col-md-1 col-sm-3 col-xs-3 fornecedores-label">Custo</span>
                    <div class="col-md-2 col-sm-3 col-xs-3">
                        {!! Form::text('fornecedores_custo[]', isset($ingrediente->fornecedores_custo) ? $ingrediente->fornecedores_custo : '', array('class' => 'form-control', 'placeholder'=>'R$...','id'=>'fornecedores_custo', 'autocomplete'=>'off') )!!}
                    </div>
                    <div class="col-md-1 col-sm-1 col-xs-1 fornecedores-label">/</div>
                    <div class="col-md-3 col-sm-4 col-xs-4">
                        {!! Form::text('fornecedores_medida[]', isset($ingrediente->fornecedores_medida) ? $ingrediente->fornecedores_medida : '', array('class' => 'form-control', 'placeholder'=>'Medida','id'=>'fornecedores_medida', 'autocomplete'=>'off') )!!}
                    </div>
                    <button type="button" class="col-md-1 col-sm-1 col-xs-1 fornecedores-acrescentar">
                        <span class="glyphicon glyphicon-plus-sign"></span>
                    </button>
                </label>
            </div>
        </div>
        @if(isset($ingrediente->image))
            <img width="100" src="{!!asset('upload/ingredientes').'/'.$ingrediente->image !!}">
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