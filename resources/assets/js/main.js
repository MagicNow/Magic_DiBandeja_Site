var Index = {
	limpaFormulario: function () {
		$("input[name='endereco']").val('');
		$("input[name='bairro']").val('');
		$("input[name='cidade']").val('');
		$("select[name='estado'] option").first().attr("selected", "selected");
	},

	destaqueHome: function (){
		setTimeout(function (){
			$('.tipos_dibandeja li').trigger('click');
		}, 5000);

		$('.tipos_dibandeja li').on('click', function (e){
			e.preventDefault();

			var tipo = $(this).data('tipo');

			$('.destaque div').hide();
			$('.'+tipo).show();
		})
	},

	init: function(){
		var self = this;

		self.destaqueHome();
		$("#phone").mask("(99) 9999-9999?9")
			.focusout(function (event) {
				var target, phone, element;
				target = (event.currentTarget) ? event.currentTarget : event.srcElement;
				phone = target.value.replace(/\D/g, '');
				element = $(target);
				element.unmask();
				if(phone.length > 10) {  
					element.mask("(99) 99999-999?9");
				} else {  
					element.mask("(99) 9999-9999?9");
				}
			});

		$("#phone2").mask("(99) 9999-9999?9")
			.focusout(function (event) {
				var target, phone, element;
				target = (event.currentTarget) ? event.currentTarget : event.srcElement;
				phone = target.value.replace(/\D/g, '');
				element = $(target);
				element.unmask();
				if(phone.length > 10) {  
					element.mask("(99) 99999-999?9");
				} else {  
					element.mask("(99) 9999-9999?9");
				}
			});

		$(".nav-button").on('click', function () {
			$(".nav").toggleClass('show');
		});

	    $("input[name='cep']").mask("99999-999", {
			completed:function () {
				//Preenche os campos com "..." enquanto consulta webservice.
				$("input[name='endereco']").val('..');
				$("input[name='bairro']").val('...');
				$("input[name='cidade']").val('...');

				//Consulta o webservice viacep.com.br/
				$.getJSON("https://viacep.com.br/ws/" + this.val() + "/json", function(dados) {
					if (!("erro" in dados)) {
						//Atualiza os campos com os valores da consulta.
						$("input[name='endereco']").val(dados.logradouro);
						$("input[name='bairro']").val(dados.bairro);
						$("input[name='cidade']").val(dados.localidade);
						$("select[name='estado']").find('option[value="' + dados.uf + '"]').attr("selected", "selected");
					} //end if.
					else {
						self.limpaFormulario();
						alert("CEP não encontrado.");
					}
				});
			}
	    })
	}

}

Index.init();