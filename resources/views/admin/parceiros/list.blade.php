@extends('admin.app')

@section('contentheader_title')
    <a href="{{ url()->previous() }}" class="btn btn-primary"><i class="fa fa-chevron-left" aria-hidden="true"></i></a> Parceiros
@endsection


@section('main-content')
    <div class="box">

		<div class="box-header">
            {{-- <a href="{{ route('admin.parceiros.create') }}" class="btn btn-primary">Novo Parceiro</a> --}}
        </div><!-- /.box-header -->
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
						<th>Última Receita</th>
						<th>Total Receitas</th>
					</tr>
				</thead>
				<tbody>
					@foreach($parceiros as $parceiro)
						<tr>
							<td><a href="{{ route('admin.parceiros.show', $parceiro->id) }}">{{ $parceiro->nome }}</a></td>
							<td>{{ isset($parceiro->receitas) && isset($parceiro->receitas->first()->created_at) ? date('d/m/Y', strtotime($parceiro->receitas->first()->created_at)) : '' }}</td>
                            <td>{{ isset($parceiro->receitas) ? $parceiro->receitas->count() : 0 }}</td>
						</tr>
					@endforeach
				</tbody>
				<tfoot>
					<tr>
                        <th>Parceiro</th>
						<th>Última Receita</th>
						<th>Total Receitas</th>
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
