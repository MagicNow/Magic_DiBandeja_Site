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

	}

}

Index.init();