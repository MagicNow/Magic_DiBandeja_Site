@extends('admin.app')

@section('contentheader_title')
    <a href="{{ url()->previous() }}" class="btn btn-primary"><i class="fa fa-chevron-left" aria-hidden="true"></i></a> Clientes
@endsection


@section('main-content')
    <div class="box">

		<div class="box-header"> <a href="{{ route('admin.clientes.create') }}" class="btn btn-primary">Novo Cliente</a></div><!-- /.box-header -->
		@if (session('sucess'))
			<div class="alert alert-success">
			  {{ session('sucess') }}
			</div>
      @endif
		<div class="box-body table-responsive">
			<table id="datatables" class="table table-bordered table-striped" data-nomessage="<a href='{{ route("admin.clientes.create") }}'>Cadastre uma nova receita aqui</a>">
				<thead>
					<tr>
						<th width="60">Ações</th>
						<th>Id</th>
						<th>Nome</th>
						<th>Data</th>
					</tr>
				</thead>
				<tbody>
					@foreach($clientes as $cliente)
						<tr>
							<td>
								<div class="table-actions">
									<a href="{{ route('admin.clientes.edit',$cliente->id) }}" class="btn btn-primary" title="Editar"><i class="glyphicon glyphicon-edit"></i></a>
									<a href="{{ route('admin.clientes.destroy',$cliente->id) }}" class="btn btn-danger" data-toggle="modal" data-target="#confirm-delete" title="Excluir"><i class="glyphicon glyphicon-remove"></i></a>
								</div>
							</td>
							<td>{!! $cliente->id!!}</td>
							<td>
                                  {{ $cliente->nome }}
                            </td>
							<td>{!! isset($cliente->created_at) && !empty($cliente->created_at) ? date('d/m/Y H:i:s', strtotime($cliente->created_at)) : '' !!}</td>
						</tr>
					@endforeach
				</tbody>
				<tfoot>
					<th>Ações</th>
					<th>Id</th>
					<th>Nome</th>
					<th>Data</th>
				</tfoot>
			</table>
		</div><!-- /.box-body -->
	</div><!-- /.box -->
	<div class="modal fade modal-danger " id="confirm-delete" tabindex="-1" role="dialog" aria-hidden="false">
        <div class="modal-dialog">
            <div class="modals-content">

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Apagar receita?</h4>
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
