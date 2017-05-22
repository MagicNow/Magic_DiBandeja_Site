var $registerModal,
	$targetModalButton,
	$loading,
	selectAjax,
	selectUrl = '',
	messageNotFound = '',
	$self;

$(function() {
	$registerModal = $('#register');
	$loading = $('.load');

	$.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		}
	});

	$("textarea").each(function(){
		// $('textarea').wysihtml5();
		$(this).wysihtml5();
	});

	$(".cliente-tipo").on("change", function(){
		var val = $(this).val();
		var tipo = "Pessoa Física";
		if(val == 1){
			var tipo = "Pessoa Jurídica";
		}
		$(".label-nome").html(tipo);
		$("#nome").attr("placeholder",tipo);
	});

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
		})
		.on('click', '.ingredients-save', function (e) {
			e.preventDefault();

			var $form = $(this).parents('.ingredients-form');
			var $indredientsInp = $form.find('.ingredients-name');
			var $indredientsTxt = $indredientsInp.val();
			var $ingredientsArr = $indredientsTxt.split(" ");

			$loading.show();
			findWord(0, $indredientsInp, $indredientsTxt, $ingredientsArr, $form);
		})
		.on('click', '.fornecedores-dist-indirect .mt-tag-element[data-tag-remove-id]', function (e) {
			var $self = $(this),
				tagId = $self.data('tag-remove-id');

			$('.distribuidores-nota-container[data-distributor-id="' + tagId + '"]').remove();
		});

	var fornNota = $('.fornecedores-nota').next('input').val();
	var $rankNota = $('.ranking-nota');

	$rankNota.each(function(){
		var nota = $(this).next('input').val();
		$(this).rateYo({
			halfStar: true,
			rating: nota
		}).on("rateyo.set", function (e, data) {
			var $self = $(this);
			$self.next('input').val(data.rating);
		});
	})

	$('.fornecedores-nota').rateYo({
		halfStar: true,
		rating: fornNota
	}).on("rateyo.set", function (e, data) {
		var $self = $(this);
		$self.next('input').val(data.rating);
	});



	$registerModal.on('loaded.bs.modal', function (e) {
		var $targetInput;

		$('#sazonalidade_inicial, #sazonalidade_final').datepicker({
			autoclose: true,
			language: 'pt-BR',
			format: 'dd/mm/yyyy',
		});

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

	$('.ingredientes-remover').on('click', removeSelectIngredientes);

	$('.ingredientes-acrescentar').on('click', function () {
		var $line,
			$clone,
			$button,
			html;

		$self = $(this);
		$line = $self.parents('.ingredientes-linha');
		$clone = $line.clone();

		$clone.find('input, select').val('');
		// $clone.find('.select2-container').remove();
		$clone.find('select option').removeAttr('selected');
		$clone.find('.mt-tag-element').remove();
		$clone.find('.mt-tag-container').remove();
		$clone.find('.component-mt-select').removeClass('dispatched');
		$clone.find('.component-mt-select').removeAttr('data-mt-default-values');
		$clone.find('input[type="hidden"]').remove();
		$clone.find('.form-control').removeAttr('style');
		$clone.find('input').removeAttr('value');

		$button = $clone.find('.ingredientes-acrescentar');

		$button.removeClass('ingredientes-acrescentar')
				.addClass('ingredientes-remover');

		$button.children()
				.removeClass('glyphicon-plus-sign')
				.addClass('glyphicon-minus-sign');

		html = '<div class="row ingredientes-linha">' + $clone.html() + '</div>';

		$('.form-providers')
			.append(html)
			.find('.ingredientes-remover')
			.one('click', removeSelectIngredientes);

		changeSelect();
	});

	$('.ingredientes-revisoes-aprovar').on('click', function (e) {
		var $self = $(this);
		var $item = $self.parents('.ingredientes-revisoes-item');

		$.ajax({
			method: 'POST',
			url: apiUrl + 'ingredientes/revisao',
			data: {
				'id': $item.find('.ingredientes-revisoes-id').val(),
				'status': 1
			}
		}).done(function( data ) {
			$item.fadeOut();
			$('#historico').data("wysihtml5").editor.setValue($item.find('.ingredientes-revisoes-original-text').html());
		});
	});

	$('.ingredientes-revisoes-reprovar').on('click', function (e) {
		var $self = $(this);
		var $item = $self.parents('.ingredientes-revisoes-item');

		$.ajax({
			method: 'POST',
			url: apiUrl + 'ingredientes/revisao',
			data: {
				'id': $item.find('.ingredientes-revisoes-id').val(),
				'status': 2
			}
		}).done(function( data ) {
			$item.fadeOut();
			$('#historico').data("wysihtml5").editor.setValue($item.find('.ingredientes-revisoes-original-text').html());
		});
	});
});

function findWord (number, $indredientsInp, $indredientsTxt, $ingredientsArr, $form) {
	var $form = $('.ingredients-form');
	$.ajax({
		method: 'POST',
		url: apiUrl + 'dicionario',
		data: {
			'text': $ingredientsArr[number],
		}
	}).done(function( data ) {
		if (data.palavra) {
			word = $indredientsTxt.replace($ingredientsArr[number], '"' + data.palavra + '"');
			$.prompt("Você quis dizer " + word + "?", {
				buttons: { "Sim": true, "Não": false },
				submit: function(e, v, m, f){
					if (v) {
						$indredientsInp.val($indredientsTxt.replace($ingredientsArr[number], data.palavra));
						$form.submit();
					} else {
						$form.submit();
					}
				}
			});

			$loading.hide();
		} else if (number < $ingredientsArr.length - 1) {
			findWord(number+1, $indredientsInp, $indredientsTxt, $ingredientsArr, $form)
		} else {
			$form.submit();
		}
	});
}

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


	$distributor.removeClass('hidden')
				.attr('data-distributor-id', tagId);

	var $distribuidoresNotas = $distributor.find('.distribuidores-nota'),
		nota = 0;

	$distribuidoresNotas.on("rateyo.init", function (e, data) {
		var $self = $(this),
			fornecedorId = $('.fornecedor-id').val();

		$.get(apiUrl + 'distribuidores/nota/' + fornecedorId + '/' + tagId, function (data) {
			// $self.attr('data-nota', data.nota);
			nota = data.nota;
			$self.rateYo("rating", nota);
		});
	});

	$distribuidoresNotas
				.rateYo({
					halfStar: true
				})
				.on("rateyo.set", function (e, data) {
					var $self = $(this);
					$self.next('input').val(data.rating);
				});

	$distributor.find('.distribuidores-nota-nome')
				.text(tagName);

	$distributor.find('.distribuidores-nota-dibandeja-input').attr('name', 'nota-distribuidor[' + tagId + ']');

	$('.fornecedores-nota-geral').append($distributor);
}

function removeSelect () {
	$self = $(this);
	$self.parents('.fornecedores-linha').remove();
}

function removeSelectIngredientes () {
	$self = $(this);
	$self.parents('.ingredientes-linha').remove();
}
