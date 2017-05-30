@extends(app('request')->input('type') === 'modal' ? 'admin.modal' : 'admin.app')

@section('contentheader_title')
    <a href="{{ url()->previous() }}" class="btn btn-primary"><i class="fa fa-chevron-left" aria-hidden="true"></i></a> Novo ingrediente
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
    {!! Form::open(['route' => ['admin.ingredientes.store', isset($ingrediente->id) ? $ingrediente->id : ''], 'method' => 'POST', 'files' => true, 'class' => 'ingredients-form']) !!}

        <div class="form-group">
            <label for="">Ingrediente</label>
            <p>{{ $ingrediente->nome }}</p>
        </div>
        <div class="form-group">
            <label for="">Nome científico</label>
            <p>{{ $ingrediente->nome_cientifico }}</p>
        </div>
        <div class="row">
            <div class="form-group form-group-select col-md-12">
                <label>Caracteristicas</label>
                @if (!empty($ingrediente->caracteristicas))
                    <ul class="ingrediente-caracteristicas list-group">
                        @foreach ($ingrediente->caracteristicas as $caracteristica)
                            <li class="list-group-item">{{ $caracteristica->descricao }}</li>
                        @endforeach
                    </ul>
                @endif
            </div>
        </div>
        <div class="row">
            <div class="form-group form-group-select col-md-12">
                <label>Grupos</label>
                @if (!empty($ingrediente->grupos))
                    <ul class="ingrediente-grupos list-group">
                        @foreach ($ingrediente->grupos as $grupo)
                            <li class="list-group-item">{{ $grupo->nome }}</li>
                        @endforeach
                    </ul>
                @endif
            </div>
        </div>
        <div class="form-group">
            <label for="">Propriedades nutricionais</label>
            <p>{{ $ingrediente->propriedades_nutricionais }}</p>
        </div>
        <div class="form-group">
            <label for="">Qualificações</label>
            <p>{{ $ingrediente->qualificacoes }}</p>
        </div>
        <div class="form-group">
            <label for="">Benefícios</label>
            <p>{{ $ingrediente->beneficios }}</p>
        </div>
        <div class="form-group">
            <label for="">Restrições</label>
            <p>{{ $ingrediente->restricoes }}</p>
        </div>
        <div class="form-group">
            <label>Ingrediente de afinidade</label>
            <p>{{ $ingrediente->afinidade }}</p>
        </div>
        <div class="row">
            <div class="form-group col-md-4">
                <label for="">Sazonalidade inicial</label>
                <p>{{ isset($ingrediente->sazonalidade_inicial) ? date('d/m/Y',strtotime($ingrediente->sazonalidade_inicial)) : '' }}</p>
            </div>

            <div class="form-group col-md-4">
                <label for="">Sazonalidade final</label>
                <p>{{ isset($ingrediente->sazonalidade_final) ? date('d/m/Y',strtotime($ingrediente->sazonalidade_final)) : '' }}</p>
            </div>
        </div>
        <div class="form-group">
            <label for="">Histórico</label>
            <p>{!! $ingrediente->historico !!}</p>
        </div>
        @if (isset($ingrediente->fornecedores) && count($ingrediente->fornecedores) > 0)
            <div class="form-group form-providers">
                <label for="fornecedores">Fornecedores</label>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Nome</th>
                                <th>Custo</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($ingrediente->fornecedores as $key => $fornecedor)
                                <tr>
                                    <td>{{ $fornecedor->nome }}</td>
                                    <td>{{ isset($fornecedor->pivot->custo) ? $fornecedor->pivot->custo : '' }} / {{ $fornecedor->pivot->medida }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        @endif

        @if(isset($ingrediente->image))
            <img width="100" src="{!!asset('upload/ingredientes').'/'.$ingrediente->image !!}">
        @endif

        <div class="row">
            <div class="form-group col-md-12">
                <a href="{{ route('admin.ingredientes') }}" class="btn btn-primary pull-left">Ir para a lista</a>
                <a href="{{ route('admin.ingredientes.edit', ['id' => $ingrediente->id]) }}" class="btn btn-danger pull-right">Voltar à edição</a>
            </div>
        </div>
    {!! Form::close() !!}
@endsection