@extends('admin.app')

@section('contentheader_title')
    Fontes
@endsection


@section('main-content')
    <div class="box">

		<div class="box-header"> <a href="{{ route('admin.fontes.create') }}" class="btn btn-primary">Novo Grupo</a></div><!-- /.box-header -->
		@if (session('sucess'))
			<div class="alert alert-success">
			  {{ session('sucess') }}
			</div>
      @endif
		<div class="box-body">
			<table id="datatables" class="table table-bordered table-striped" data-nomessage="<a href='{{ route("admin.fontes.create") }}'>Cadastre uma nova fonte aqui</a>">
				<thead>
					<tr>
						<th>Ações</th>
						<th>Id</th>
						<th>Fonte</th>
						<th>Data</th>
					</tr>
				</thead>
				<tbody>
					@foreach($fontes as $fonte)
						<tr>
							<td>
								<div class="table-actions">
									<a href="{{ route('admin.fontes.edit',$fonte->id) }}" class="btn btn-primary"><i class="glyphicon glyphicon-edit"></i></a>
									<a href="{{ route('admin.fontes.destroy', $fonte->id) }}" class="btn btn-danger" data-toggle="modal" data-target="#confirm-delete"><i class="glyphicon glyphicon-remove"></i></a>
								</div>
							</td>
							<td>{{ $fonte->id }}</td>
							<td>{{ $fonte->nome }}</td>
							<td>{{ isset($fonte->created_at) && !empty($fonte->created_at) ? date('d/m/Y H:i:s', strtotime($fonte->created_at)) : NULL }}</td>
						</tr>
					@endforeach
				</tbody>
				<tfoot>
					<tr>
						<th>Id</th>
						<th>Grupo</th>
						<th>Data</th>
						<th>Ações</th>
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