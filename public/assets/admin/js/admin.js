var $registerModal,
	selectAjax,
	selectUrl = '',
	messageNotFound = '',
	$self;

$(function() {
	$registerModal = $('#register'),

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

	$registerModal.on('loaded.bs.modal', function (e) {
		$('#register')

		$('.modal form')
			.append('<input type="hidden" name="type" value="modal" />')
			.on('submit', function () {
				var $this = $(this),
					data = new FormData(this);

				$.ajax({
					type: 'post',
					url: $this.attr('action'),
					data: data,
					cache: false,
					contentType: false,
					processData: false,
					success: function(data){
						if (data.success) {
							$registerModal.modal('toggle');
							$registerModal.find('input').val('');
							$.toaster({ priority : 'success', title : 'Mensagem', message : data.message.length > 0 ? data.message[0] : '' });
						} else {
							$.toaster({ priority : 'danger', title : 'Mensagem', message : data.message.length > 0 ? data.message[0] : '' });
						}
					}
				})

				return false;
			});
	}).on('hidden.bs.modal', function (e) {
		$(e.target)
			.removeData('bs.modal')
			.find(".modal-body").html('');
	});

	$('.fornecedores-acrescentar').on('click', function () {
		var $line,
			$clone,
			$button,
			html;

		$self = $(this);
		$line = $self.parents('.fornecedores-linha');
		$clone = $line.clone();

		$clone.find('input, select').val('');
		$clone.find('.select2-container').remove();
		$clone.find('select option').remove();

		$button = $clone.find('.fornecedores-acrescentar');

		$button.removeClass('fornecedores-acrescentar')
				.addClass('fornecedores-remover');

		$button.children()
				.removeClass('glyphicon-plus-sign')
				.addClass('glyphicon-minus-sign');

		html = '<div class="row fornecedores-linha">' + $clone.html() + '</div>';
		$('.form-providers')
			.append(html)
			.find('.fornecedores-remover')
			.one('click', removeSelect);

		changeSelect();
	});

	changeSelect();
});

function changeSelect () {
	// selectAjax = $('.select2-ajax'),
	// selectAjax.select2({
	// 	// allowClear: true,
	// 	// multiple: true,
	// 	// "language": "pt-BR",
	// 	escapeMarkup: function (markup) {
	// 		return markup;
	// 	},
	// 	ajax: {
	// 		processResults: function (data) {
	// 			return {
	// 				results: data
	// 			};
	// 		}
	// 	},
	// 	language: {
	// 		noResults: function(){
	// 			return "Nenhum resultado encontrado. " + messageNotFound;
	// 		}
	// 	},
	// 	// initSelection: function (element, callback) {
	// 	// 	var $options = element.find('option');
	// 	// 	console.log($options);
	// 	// 	$.each($options, function (i, option) {
	// 	// 		console.log(option.innerHTML);
	// 	// 		callback({ "text": option.innerHTML, "id": option.getAttribute('value') });
	// 	// 	});
	// 	// }
	// }).on('select2:open', function (evt) {
	// 	messageNotFound = evt.currentTarget.getAttribute('data-notfound');
	// });

	// selectAjax.trigger('change.select2');

	selectAjax = $('.select2-ajax');

  //  	selectAjax.searchableOptionList({
  //  		showSelectAll: false,
  //  		maxShow: 5,
  //  		displaySelectionItem: false,
  //  		displayContainerAboveInput: false,
		// texts: {
		// 	itemsSelected : "{$a} itens selecionados",
		// 	loadingData: "Carregando dados...",
		// 	noItemsAvailable : "Nenhum registro encontrado",
		// 	quickDelete: "&times;",
		// 	searchplaceholder: "Clique aqui para buscar",
		// 	selectAll: "Selecionar todos",
		// 	selectNone: "Nenhuma seleção"
		// }
  //  	});
}

function removeSelect () {
	$self = $(this);
	$self.parents('.fornecedores-linha').remove();
}