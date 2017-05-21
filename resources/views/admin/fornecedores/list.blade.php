@extends('admin.app')

@section('contentheader_title')
    Fornecedores site
@endsection


@section('main-content')
    <div class="box">

		<div class="box-header"> <a href="{{ route('admin.fornecedores.create') }}" class="btn btn-primary">Novo Fornecedor</a></div><!-- /.box-header -->
		@if (session('sucess'))
			<div class="alert alert-success">
			  {{ session('sucess') }}
			</div>
      @endif
		<div class="box-body table-responsive">
			<table id="datatables" class="table table-bordered table-striped" data-nomessage="<a href='{{ route("admin.fornecedores.create") }}'>Cadastre um novo fornecedor aqui</a>">
				<thead>
					<tr>
						<th>Ações</th>
						<th>Id</th>
						<th>Fornecedor</th>
						<th>Distribuição</th>
                        <th>Data do registro</th>
                        <th>Ranking Clientes</th>
					</tr>
				</thead>
				<tbody>
					@foreach($fornecedores as $fornecedor)
						<tr>
							<td>
								<div class="table-actions">
									<a href="{{ route('admin.fornecedores.edit',$fornecedor->id) }}" class="btn btn-primary"><i class="glyphicon glyphicon-edit"></i></a>
									<a href="{{ route('admin.fornecedores.destroy', $fornecedor->id) }}" class="btn btn-danger" data-toggle="modal" data-target="#confirm-delete"><i class="glyphicon glyphicon-remove"></i></a>
								</div>
							</td>
							<td>{!! $fornecedor->id!!}</td>
							<td>{!! $fornecedor->nome!!}</td>
                            <td>{!! $fornecedor->distribuicao_direta == 1 ? 'Direta' : 'Indireta' !!}</td>
							<td>{{ isset($fornecedor->created_at) && !empty($fornecedor->created_at) ? date('d/m/Y H:i:s', strtotime($fornecedor->created_at)) : NULL }}</td>
                            <td>{!! $fornecedor->nota!!}</td>
						</tr>
					@endforeach
				</tbody>
				<tfoot>
					<tr>
						<th>Ações</th>
						<th>Id</th>
						<th>Fornecedor</th>
						<th>Distribuição</th>
                        <th>Data do registro</th>
                        <th>Ranking Clientes</th>
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
                    <h4 class="modal-title" id="myModalLabel">Apagar fornecedor?</h4>
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
