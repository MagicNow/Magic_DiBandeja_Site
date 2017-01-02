var Index = {

	destaqueHome: function (){
		setTimeout(function (){
			$('.tipos_dibandeja li').trigger('click');
		}, 5000);

		$('.tipos_dibandeja li').on('click', function (e){
			e.preventDefault();

			var tipo = $(this).data('tipo');

			$('.destaque div').hide();
			$('.'+tipo).show();

			console.log(tipo);
		})


	},

	init: function(){

		this.destaqueHome();
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
	}

}

Index.init();