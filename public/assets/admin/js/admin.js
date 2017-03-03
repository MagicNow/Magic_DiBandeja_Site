$(function() {
	var registerModal = $('#register');

	$.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		}
	});

	$('textarea').wysihtml5();

	var datatables = $('#datatables');
	datatables.DataTable({
		"paging": true,
		"language": {
			"sSearch": "Buscar",
			"oPaginate":{
			"sNext": "Próximo",
			"sPrevious": "Anterior",
		},
		"sInfo": "Mostrando _START_ to _END_ de _TOTAL_ registros",
		"sEmptyTable": "Nenhum registro",
		"sInfoEmpty": "Mostrando 0 to 0 de 0 registros",
		"sZeroRecords": "Nenhum registro encontrado. " + datatables.data('nomessage')
		},

		"lengthChange": false,
		"searching": true,
		"ordering": true,
		"info": true,
		"autoWidth": false,
		"order": [[ 0, "desc" ]]
	});

	$('#confirm-delete').on('show.bs.modal', function(e) {
		console.log($(e.relatedTarget).attr('href'))
		var target = $(e.relatedTarget).attr('href');
		$(this).find('.btn-ok').attr('href', $(e.relatedTarget).attr('href'));
	});

	$(".select2").select2({
		"language": "pt-BR",
		"language": {
			"noResults": function(){
				var select = $(document.activeElement).parents('.select2').prev('.select2');
				return "Nenhum resultado encontrado. " + (select.data('notfound') ? select.data('notfound') : '')
			}
		},
		escapeMarkup: function (markup) {
			return markup;
		}
	});

	$('#sazonalidade_inicial,#sazonalidade_final').datepicker({
		autoclose: true,
		language: 'pt-BR',
		format: 'dd/mm/yyyy',
	});

	registerModal.on('loaded.bs.modal', function (e) {
		$('.modal form').on('submit', function () {
			var $this = $(this),
				data = $this.serialize();

			data += '&type=modal';
			$.post($this.attr('action'), data, function (data) {
				if (data.success) {
					registerModal.modal('toggle');
					registerModal.find('input').val('');
					$.toaster({ priority : 'success', title : 'Mensagem', message : data.message.length > 0 ? data.message[0] : '' });
				} else {
					$.toaster({ priority : 'danger', title : 'Mensagem', message : data.message.length > 0 ? data.message[0] : '' });
				}
			});

			return false;
		});
	})
});