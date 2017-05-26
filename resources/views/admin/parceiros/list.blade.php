@extends('admin.app')

@section('contentheader_title')
    Parceiros
@endsection


@section('main-content')
    <div class="box">

		<div class="box-header"> <a href="{{ route('admin.parceiros.create') }}" class="btn btn-primary">Novo Parceiro</a></div><!-- /.box-header -->
		@if (session('sucess'))
			<div class="alert alert-success">
			  {{ session('sucess') }}
			</div>
      	@endif
		<div class="box-body">
			<table id="datatables" class="table table-bordered table-striped">
				<thead>
					<tr>
						<th>Parceiro</th>
						<th>Receita</th>
						<th>Data</th>
						<th>Cardápios</th>
					</tr>
				</thead>
				<tbody>
					@foreach($parceiros as $parceiro)
						<tr>
							<td>{{ $parceiro->titulo }}</td>
							<td>{{ isset($parceiro->parceiros->nome) ? $parceiro->parceiros->nome : NULL }}</td>
							<td>{{ isset($parceiro->created_at) && !empty($parceiro->created_at) ? date('d/m/Y', strtotime($parceiro->created_at)) : NULL }}</td>
							<td></td>
						</tr>
					@endforeach
				</tbody>
				<tfoot>
					<tr>
						<th>Parceiro</th>
						<th>Receita</th>
						<th>Data</th>
					</tr>
				</tfoot>
			</table>
		</div><!-- /.box-body -->
	</div><!-- /.box -->
	<div class="modal fade modal-danger" id="confirm-delete" tabindex="-1" role="dialog" aria-hidden="false">
        <div class="modal-dialog">
            <div class="modals-content">

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Apagar grupo?</h4>
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
