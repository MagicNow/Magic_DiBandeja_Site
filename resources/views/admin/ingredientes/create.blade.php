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
            {!! Form::text('nome',isset($ingrediente->nome) ? $ingrediente->nome : '',array('class' => 'form-control','placeholder'=>'Ingrediente*','id'=>'ingrediente','autocomplete'=>'off') )!!}
        </div>
        <div class="form-group">
            <label for="">Nome científico</label>
            {!! Form::text('nome_cientifico',isset($ingrediente->nome_cientifico) ? $ingrediente->nome_cientifico : '',array('class' => 'form-control','placeholder'=>'Nome científico*','id'=>'nome_cientifico','autocomplete'=>'off') )!!}
        </div>
        <div class="form-group form-group-select">
            <label>Caracteristicas</label>
            <div class="col-md-12 row component-mt-select" data-mt-request-url="/admin/caracteristicas/list" data-mt-max-tags="99" data-mt-tag-input-name="caracteristicas[]" data-mt-default-values="{{ isset($caracteristicas_ingredientes) ? $caracteristicas_ingredientes : '{}' }}">
                <div class="col-md-12 row">
                    <input type="text" class="form-control" data-mt-filter-control/>
                </div>
            </div>
        </div>

        <div class="form-group form-group-select">
            <label>Grupos</label>
            <div class="col-sm-12 row component-mt-select" data-mt-request-url="/admin/grupos/list" data-mt-max-tags="99" data-mt-tag-input-name="grupos[]" data-mt-default-values="{{ isset($grupos_ingredientes) ? $grupos_ingredientes : '{}' }}">
                <div class="col-md-12 row">
                    <input type="text" class="form-control" data-mt-filter-control/>
                </div>
            </div>
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
                {!! Form::text('sazonalidade_final', isset($ingrediente->sazonalidade_final) ? date('d/m/Y', strtotime($ingrediente->sazonalidade_final)) : '', array('class' => 'form-control', 'placeholder'=>'Sazonalidade final*','id'=>'sazonalidade_final', 'autocomplete'=>'off') )!!}
            </div>
        </div>
        <div class="form-group">
            <label for="">Histórico</label>
            {!! Form::textarea('historico',isset($ingrediente->historico) ? $ingrediente->historico : '',array('class' => 'form-control','placeholder'=>'Histórico*','id'=>'historico') )!!}
        </div>
        <div class="form-group form-providers">
            <label for="fornecedores">Fornecedores</label>
            @foreach ($fornecedores_ingredientes as $key => $fornecedor)
                <div class="row fornecedores-linha">
                    
                    <div class="col-md-5 col-sm-12 component-mt-select" data-mt-request-url="/admin/fornecedores/list" data-mt-max-tags="1" data-mt-tag-input-name="fornecedores[]" data-mt-default-values='{"{{ $fornecedor->id }}":"{{ $fornecedor->nome }}"}'>
                        <div class="col-md-12 row">
                            <input type="text" class="form-control" data-mt-filter-control/>
                        </div>
                    </div>
                    <label for="fornecedores-custo" class="col-md-7 col-sm-12 col-xs-12">
                        <span class="col-md-1 col-sm-3 col-xs-3 fornecedores-label">Custo</span>
                        <div class="col-md-2 col-sm-3 col-xs-3">
                            {!! Form::text('fornecedores_custo[]', isset($fornecedor->pivot->custo) ? $fornecedor->pivot->custo : '', array('class' => 'form-control', 'placeholder'=>'R$...','id'=>'fornecedores_custo', 'autocomplete'=>'off') )!!}
                        </div>
                        <div class="col-md-1 col-sm-1 col-xs-1 fornecedores-label">/</div>
                        <div class="col-md-3 col-sm-4 col-xs-4">
                            {!! Form::text('fornecedores_medida[]', isset($fornecedor->pivot->medida) ? $fornecedor->pivot->medida : '', array('class' => 'form-control', 'placeholder'=>'Medida','id'=>'fornecedores_medida', 'autocomplete'=>'off') )!!}
                        </div>
                        @if ($key === 0)
                            <button type="button" class="col-md-1 col-sm-1 col-xs-1 fornecedores-acrescentar">
                                <span class="glyphicon glyphicon-plus-sign"></span>
                            </button>
                        @else
                            <button type="button" class="col-md-1 col-sm-1 col-xs-1 fornecedores-remover">
                                <span class="glyphicon glyphicon-minus-sign"></span>
                            </button>
                        @endif
                    </label>
                </div>
            @endforeach
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