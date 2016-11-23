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
		<div class="box-body">
			<table id="datatables" class="table table-bordered table-striped">
				<thead>
					<tr>
						<th>Id</th>
						<th>Razão Social</th>
						<th>Nome Fantasia</th>
						<th>Especialidade</th>
						<th>Url</th>
						<th>Cotação</th>
						<th>Imagem</th>
						<th>Data</th>
						<th>Ações</th>
					</tr>
				</thead>
				<tbody>
					@foreach($fornecedores as $fornecedor)
						<tr>
							<td>{!! $fornecedor->id!!}</td>
							<td>{!! $fornecedor->razao_social!!}</td>
							<td>{!! $fornecedor->nome_fantasia!!}</td>
							<td>{!! $fornecedor->especialidade!!}</td>
							<td>{!! $fornecedor->url!!}</td>
							<td>{!! $fornecedor->cotacao!!}</td>
							<td>
								@if(isset($ingrediente->image))
						            <img width="100" src="{!!asset('upload/fornecedores').'/'.$ingrediente->image !!}">
						        @endif</td>
							<td>{!! date('d/m/Y H:i:s',strtotime($fornecedor->created_at))!!}</td>
							<td>
								<a href="{{ route('admin.fornecedores.edit',$fornecedor->id) }}" class="btn btn-primary">Editar</a>
								<a href="{{ route('admin.fornecedores.destroy',$fornecedor->id) }}" class="btn btn-primary" data-toggle="modal" data-target="#confirm-delete">Excluir</a>
							</td>
						</tr>
					@endforeach
				</tbody>
				<tfoot>
					<tr>
						<th>Id</th>
						<th>Razão Social</th>
						<th>Nome Fantasia</th>
						<th>Especialidade</th>
						<th>Url</th>
						<th>Cotação</th>
						<th>Imagem</th>
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