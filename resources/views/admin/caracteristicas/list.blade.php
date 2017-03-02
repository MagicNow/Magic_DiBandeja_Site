@extends('admin.app')

@section('contentheader_title')
    Caracteristicas site
@endsection


@section('main-content')
    <div class="box">

		<div class="box-header"> <a href="{{ route('admin.caracteristicas.create') }}" class="btn btn-primary">Nova Caracteristica</a></div><!-- /.box-header -->
		@if (session('sucess'))
			<div class="alert alert-success">
			  {{ session('sucess') }}
			</div>
      @endif
		<div class="box-body">
			<table id="datatables" class="table table-bordered table-striped" data-nomessage="<a href='{{ route("admin.caracteristicas.create") }}'>Cadastre uma nova característica aqui</a>">
				<thead>
					<tr>
						<th>Id</th>
						<th>Caracteristica</th>
						<th>Data</th>
						<th>Ações</th>
					</tr>
				</thead>
				<tbody>
					@foreach($caracteristicas as $carac)
						<tr>
							<td>{!! $carac->id!!}</td>
							<td>{!! $carac->descricao!!}</td>
							<td>{!! date('d/m/Y H:i:s',strtotime($carac->created_at))!!}</td>
							<td>
								<a href="{{ route('admin.caracteristicas.edit',$carac->id) }}" class="btn btn-primary">Editar</a>
								<a href="{{ route('admin.caracteristicas.destroy',$carac->id) }}" class="btn btn-primary" data-toggle="modal" data-target="#confirm-delete">Excluir</a>
							</td>
						</tr>
					@endforeach
				</tbody>
				<tfoot>
					<tr>
						<th>Id</th>
						<th>Caracteristica</th>
						<th>Data</th>
						<th>Ações</th>
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
                    <h4 class="modal-title" id="myModalLabel">Apagar Caracteristica?</h4>
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