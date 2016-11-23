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
    {!! Form::open(array('route' => array('admin.ingredientes.store',isset($ingrediente->id) ? $ingrediente->id : ''),'method' => 'POST','files'=>true)) !!}


        <div class="form-group">
            <label for="">Ingrediente</label>
            {!! Form::text('ingrediente',isset($ingrediente->ingrediente) ? $ingrediente->ingrediente : '',array('class' => 'form-control','placeholder'=>'Ingrediente*','id'=>'ingrediente','autocomplete'=>'off') )!!}
        </div>
        <div class="form-group">
            <label for="">Nome científico</label>
            {!! Form::text('nome_cientifico',isset($ingrediente->nome_cientifico) ? $ingrediente->nome_cientifico : '',array('class' => 'form-control','placeholder'=>'Nome científico*','id'=>'nome_cientifico','autocomplete'=>'off') )!!}
        </div>
        <div class="form-group">
            <label>Caracteristicas</label>
            {!! Form::select('caracteristicas[]', $caracteristicas, isset($ingrediente->caracteristicas) ? $caracteristicas_ingredientes : '',array('class' => 'form-control select2','id'=>'caracteristicas','multiple'=>'multiple')) !!}        
        </div>

        <div class="form-group">
            <label>Grupos</label>
            {!! Form::select('grupos[]', $grupos, isset($ingrediente->grupos) ? $grupos_ingredientes : '',array('class' => 'form-control select2','id'=>'grupos','multiple'=>'multiple')) !!}        
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
            {!! Form::select('ingredientes_relacionados[]', $ingredientes, isset($ingrediente->relacionados) ? $ingredientes_relacionados : '',array('class' => 'form-control select2','id'=>'ingredientes_relacionados','multiple'=>'multiple')) !!}        
        </div>
        <div class="form-group">
            <label for="">Sazonalidade inicial</label>
            {!! Form::text('sazonalidade_inicial',isset($ingrediente->sazonalidade_inicial) ? date('d/m/Y',strtotime($ingrediente->sazonalidade_inicial)) : '',array('class' => 'form-control','placeholder'=>'Sazonalidade inicial*','id'=>'sazonalidade_inicial','autocomplete'=>'off') )!!}
        </div>

        <div class="form-group">
            <label for="">Sazonalidade final</label>
            {!! Form::text('sazonalidade_final',isset($ingrediente->sazonalidade_final) ? date('d/m/Y',strtotime($ingrediente->sazonalidade_final)) : '',array('class' => 'form-control','placeholder'=>'Sazonalidade final*','id'=>'sazonalidade_final','autocomplete'=>'off') )!!}
        </div>
        <div class="form-group">
            <label for="">Histórico</label>
            {!! Form::textarea('historico',isset($ingrediente->historico) ? $ingrediente->historico : '',array('class' => 'form-control','placeholder'=>'Histórico*','id'=>'historico') )!!}
        </div>
        <div class="form-group">
            <label>Fornecedores</label>
            {!! Form::select('fornecedores[]', $fornecedores, isset($ingrediente->fornecedores) ? $fornecedores_ingredientes : '',array('class' => 'form-control select2','id'=>'fornecedores','multiple'=>'multiple')) !!}        
        </div>

        <div class="form-group">
            <label for="">Custo</label>
            {!! Form::text('custo',isset($ingrediente->custo) ? $ingrediente->custo : '',array('class' => 'form-control','placeholder'=>'Custo*','id'=>'Custo','autocomplete'=>'off') )!!}
        </div>

        <div class="form-group">
            <label for="">Medida</label>
            {!! Form::text('medida',isset($ingrediente->medida) ? $ingrediente->medida : '',array('class' => 'form-control','placeholder'=>'Medida*','id'=>'medida','autocomplete'=>'off') )!!}
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