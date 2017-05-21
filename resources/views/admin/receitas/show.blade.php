@extends('admin.app')

@section('contentheader_title')
    Receita
@endsection

@section('main-content')

		<div class="row">
            <div class="col-sm-12">
                <label for="">Nome</label>
                <p>{{isset($receita->titulo) ? $receita->titulo : ''}}</p>
            </div>
		</div>

        <div class="row">
            <div class="col-sm-12">
                <label for="">Ingredientes</label>
                <table id="datatables" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <td>Med</td>
                            <td>Qtd</td>
                            <td>Ingrediente</td>
                            <td>
                                <div class="col-sm-12">
                                    <div class="col-sm-8">
                                        Alternativa
                                    </div>
                                    <div class="col-sm-2 text-center">
                                        Qtd
                                    </div>
                                    <div class="col-sm-2 text-center">
                                        Med
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($receita->ingredientes as $key => $ing)
                            <tr>
                                <td>
                                    {{-- Med --}}
                                </td>
                                <td>
                                    {{-- Qtd --}}
                                </td>
                                <td>
                                    @if($key >= count($receita->ingredientes) -1)
                                        {!! $ing->nome!!}
                                    @else
                                        {!! $ing->nome!!},
                                    @endif
                                </td>
                                <td>
                                    {{-- <div class="row">
                                        <div class="col-sm-12">
                                            <div class="col-sm-8">
                                                ingrediente
                                            </div>
                                            <div class="col-sm-2 text-center">
                                                1
                                            </div>
                                            <div class="col-sm-2 text-center">
                                                2
                                            </div>
                                        </div>
                                    </div> --}}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <label for="">Preparo</label>
                <p>{!! isset($receita->preparo) ? $receita->preparo : ''!!}</p>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <label for="">Comentários</label>
                <p></p>
            </div>
        </div>

        <div class="form-group">
            <a href="{{ route('admin.receitas.edit',$receita->id) }}" class="btn btn-primary">Editar</a>
         </div>

@endsection
