@extends('admin.app')

@section('contentheader_title')
    Ingredientes site
@endsection


@section('main-content')
    <div class="box">

		<div class="box-header"> <a href="{{ route('admin.ingredientes.create') }}" class="btn btn-primary">Novo Ingrediente</a></div><!-- /.box-header -->
		@if (session('sucess'))
			<div class="alert alert-success">
			  {{ session('sucess') }}
			</div>
      @endif
		<div class="box-body table-responsive">
			<table id="datatables" class="table table-bordered table-striped" data-nomessage="<a href='{{ route("admin.ingredientes.create") }}'>Cadastre um novo ingrediente aqui</a>">
				<thead>
					<tr>
						<th>Ações</th>
						<th>Id</th>
						<th>Ingrediente</th>
						<th>Nome científico</th>
						<th>Propriedades nutricionais</th>
						<th>Qualificações</th>
						<th>Benefícios</th>
						<th>Fornecedores</th>
						<th>Sazonalidade</th>
						<th>Imagem</th>
						<th>Data</th>
					</tr>
				</thead>
				<tbody>
					@foreach($ingredientes as $ingrediente)
						<tr>
							<td>
								<div class="table-actions">
									<a href="{{ route('admin.ingredientes.edit',$ingrediente->id) }}" class="btn btn-primary"><i class="glyphicon glyphicon-edit"></i></a>
									<a href="{{ route('admin.ingredientes.destroy', $ingrediente->id) }}" class="btn btn-danger" data-toggle="modal" data-target="#confirm-delete"><i class="glyphicon glyphicon-remove"></i></a>
								</div>
							</td>
							<td>{!! $ingrediente->id!!}</td>
							<td><a href="{!! route('admin.ingredientes.show', [$ingrediente->id]) !!}">
                                  {{ $ingrediente->nome }}
                                </a>
							</td>
							<td>{!! $ingrediente->nome_cientifico!!}</td>
							<td>{!! $ingrediente->propriedades_nutricionais!!}</td>
							<td>{!! $ingrediente->qualificacoes!!}</td>
							<td>{!! $ingrediente->beneficios!!}</td>
							<td>
								@foreach($ingrediente->fornecedores as $key => $forn)
									@if($key == count($ingrediente->fornecedores) - 1 )
										{!! $forn->nome !!}
									@else
										{!! $forn->nome !!},
									@endif
								@endforeach
							</td>
							<td>@if (!empty($ingrediente->sazonalidade_inicial))
									Sazonalidade Inicial: {!! date('d/m/Y',strtotime($ingrediente->sazonalidade_inicial))!!}<br />
								@endif
								@if (!empty($ingrediente->sazonalidade_final))
									Final: {!! date('d/m/Y',strtotime($ingrediente->sazonalidade_final))!!}
								@endif
							</td>
							<td>
								@if(isset($ingrediente->image))
						            <img width="100" src="{!!asset('upload/ingredientes').'/'.$ingrediente->image !!}">
						        @endif
						    </td>
							<td>{{ isset($ingrediente->created_at) && !empty($ingrediente->created_at) ? date('d/m/Y H:i:s', strtotime($ingrediente->created_at)) : NULL }}</td>
						</tr>
					@endforeach
				</tbody>
				<tfoot>
					<tr>
						<th>Ações</th>
						<th>Id</th>
						<th>Ingrediente</th>
						<th>Nome científico</th>
						<th>Propriedades nutricionais</th>
						<th>Qualificações</th>
						<th>Benefícios</th>
						<th>Fornecedores</th>
						<th>Sazonalidade</th>
						<th>Imagem</th>
						<th>Data</th>
					</tr>
				</tfoot>
			</table>
		</div><!-- /.box-body -->
	</div><!-- /.box -->
	<div class="modal fade modal-danger " id="confirm-delete" tabindex="-1" role="dialog" aria-hidden="false">
        <div class="modal-dialog">
            <div class="modals-content">
            
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Apagar ingrediente?</h4>
                </div>
            
                <div class="modal-body">
                    <!-- <p>You are about to delete one track, this procedure is irreversible.</p>
                    <p>Do you want to proceed?</p> -->
                    <p class="debug-url"></p>
                </div>
                
                <div class="modal-footer">
                    <button id="#confirm-delete" type="button" class="btn btn-outline pull-left" data-dismiss="modal">Fechar</button>
                    <a type="button" class="btn btn-outline btn-ok">Apagar</a>
                </div>
            </div>
        </div>
    </div>
@endsection