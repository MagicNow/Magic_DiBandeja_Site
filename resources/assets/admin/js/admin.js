var $registerModal,
	selectAjax,
	selectUrl = '',
	messageNotFound = '',
	$self;

$(function() {
	$registerModal = $('#register');

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
		"searching": false,
		"ordering": false,
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

	$('#sazonalidade_inicial, #sazonalidade_final').datepicker({
		autoclose: true,
		language: 'pt-BR',
		format: 'dd/mm/yyyy',
	});

	$registerModal.on('loaded.bs.modal', function (e) {
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

		$('body').on('click', '.register-inline', function (e) {
			e.preventDefault();
			$.get($(this).attr('href'), function (html) {
				$('.fornecedores-dist-form').append(html);
			});
		});

		changeSelect();
	}).on('hidden.bs.modal', function (e) {
		$(e.target)
			.removeData('bs.modal')
			.find(".modal-body").html('');
	});

	$('.fornecedores-remover').on('click', removeSelect);

	$('.fornecedores-acrescentar').on('click', function () {
		var $line,
			$clone,
			$button,
			html;

		$self = $(this);
		$line = $self.parents('.fornecedores-linha');
		$clone = $line.clone();

		$clone.find('input, select').val('');
		// $clone.find('.select2-container').remove();
		$clone.find('select option').remove();
		$clone.find('.mt-tag-element').remove();
		$clone.find('.mt-tag-container').remove();
		$clone.find('.component-mt-select').removeClass('dispatched');
		$clone.find('.component-mt-select').removeAttr('data-mt-default-values');
		$clone.find('input[type="hidden"]').remove();
		$clone.find('.form-control').removeAttr('style');
		$clone.find('input').removeAttr('value');

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
});

function getInlineContent () {

}

function changeSelect () {
	var mtSelectInstances = {},
		mtSelectInstancesCount = 0;

	$('.component-mt-select').each(function(){
		if($(this).hasClass('dispatched'))
		return;

		$(this).addClass('dispatched');

		mtSelectInstances[mtSelectInstancesCount] = $.extend(1, {}, jQueryMTSelect);

		var attributes = {}, params = {};

		$.each( $(this)[0].attributes, function( index, attr ) {
			attributes[ attr.name ] = attr.value;
		} );

		$.each(attributes, function(key, value){
			if(key.indexOf('data-mt-') == 0) {
				var name = key.replace('data-mt-', '');

				name = name.replace(/-/g, '_');

				params[name] = value;
			}
		});

		params.namespace = "mt_select_" + mtSelectInstancesCount;

		mtSelectInstances[mtSelectInstancesCount].Init($(this), params);

		mtSelectInstancesCount++;
	});
}

function removeSelect () {
	$self = $(this);
	$self.parents('.fornecedores-linha').remove();
}