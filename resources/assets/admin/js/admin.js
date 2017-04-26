var $registerModal,
	$targetModalButton,
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

	$('body')
		.on('click', '.fornecedores-dist-indirect-button', function (e) {
			$('.fornecedores-dist-indirect').removeClass('hidden');
		})
		.on('click', '.fornecedores-dist-direct-button', function (e) {
			var $form = $('.fornecedores-dist-indirect');

			$form.addClass('hidden');
			$form.find('.mt-tag-element').filter("[data-tag-remove-id]").trigger('click');
		})
		.on('click', '.register-inline', function (e) {
			e.preventDefault();
			$.get($(this).attr('href'), function (html) {
				$('.fornecedor-dist-append-form').append(html);
			});
		})
		.on('click', '.fornecedores-dist-form .distribuidores-submit', function (e) {
			e.preventDefault();

			var $form = $('.fornecedores-dist-form');
			var data = $form.find('input').serialize();
			var $alert = $('.fornecedores-dist-form-alert');
			var $targetInput = $form.find('input[name="nome"]');

			$.post($form.data('requestUrl'), data, function (ret) {
				if (ret.success && ret.message.length > 0) {
					$alert
						.addClass('alert-success')
						.removeClass('alert-danger')
						.removeClass('hidden')
						.text(ret.message[0]);


					$('.fornecedor-dist-append-form').html('');
					$targetInput.trigger('keyup');
					clickOnMtSelectOption(ret.id);

				} else if (ret.message.length > 0) {
					$alert
						.addClass('alert-danger')
						.removeClass('alert-success')
						.removeClass('hidden')
						.text(ret.message[0]);
				}
			});
		});

	$('.fornecedores-nota').rateYo({
		// starWidth: "20px",
		halfStar: true
	})
	.on("rateyo.set", function (e, data) {
		alert("The rating is set to " + data.rating + "!");
	});

	$registerModal.on('loaded.bs.modal', function (e) {
		var $targetInput;

		$('.modal form')
			.append('<input type="hidden" name="type" value="modal" />')
			.on('submit', function () {
				var $this = $(this),
					data = new FormData(this),
					inputValue = '';
					
				inputValue = $this.find('input[name="descricao"]').val();
				$.ajax({
					type: 'post',
					url: $this.attr('action'),
					data: data,
					cache: false,
					contentType: false,
					processData: false,
					success: function(data){
						if (data.success) {
							if ($targetModalButton) {
								$targetInput = $($targetModalButton.data('inputTarget'));
								if ($targetInput.length > 0 && inputValue !== undefined) {
									$targetInput.val(inputValue);
									$targetInput.trigger('keyup');
									clickOnMtSelectOption(data.id);
								}
							}

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

		changeSelect();
	}).on('show.bs.modal', function (e) {
		$targetModalButton = $(e.relatedTarget);
	}).on('hidden.bs.modal', function (e) {
		$(e.target)
			.removeData('bs.modal')
			.find(".modal-body").html('');

		$targetModalButton = '';
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

function clickOnMtSelectOption (id) {
	if (!$(".mt_search_list_container").size()) {
		setTimeout(function () {
			clickOnMtSelectOption(id)
		}, 500);
	} else {
		$(".mt_search_list_container").find('.mt_entry_container[data-tag-id="' + id + '"]').trigger('click');
	}
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

function changeDistributorSelect (tagId, tagName) {
	var distributorHTML = $('.distribuidores-nota-container').first().get(0).outerHTML;
		$distributor = $(distributorHTML)
	
	$distributor.removeClass('hidden');
	$distributor.find('.distribuidores-nota').rateYo({ halfStar: true });
	$distributor.find('.distribuidores-nota-nome').text(tagName);
	$('.fornecedores-nota-geral').append($distributor);
}

function removeSelect () {
	$self = $(this);
	$self.parents('.fornecedores-linha').remove();
}