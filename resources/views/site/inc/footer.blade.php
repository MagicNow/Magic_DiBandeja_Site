		<footer>
			
			<div class="container">
				<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
					<h3>DiBandeja Pela Internet</h3>
					<ul class="list_social">
						<li class="bt_facebook">
							<a href="https://www.facebook.com/dibandeja/?fref=ts" target="_blank">
								<i class="fa fa-facebook" aria-hidden="true"></i>
							</a>
						</li>
						<li class="bt_pinit">
							<a href="#">
								<i class="fa fa-pinterest-p" aria-hidden="true"></i>
							</a>
						</li>
						<li class="bt_instagram">
							<a href="https://www.instagram.com/dibandeja/" target="_blank">
								<i class="fa fa-instagram" aria-hidden="true"></i>
							</a>
						</li>
					</ul>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
					
					<div class="menu_rodape">			
						<ul class="list_1">
							<li>
								<a href="{{ route('dibandeja-pra-voce') }}">DiBandeja Pra Você:</a>
							</li>
							<li class="second">
								<a href="#">Di Casa</a>
							</li>
							<li>
								<a href="#">Cardápios</a>
							</li>
							<li class="second">
								<a href="#">Di Negocio</a>
							</li>
							<li>
								<a href="#">Receitas</a>
							</li>
							<li>
								<a href="#">Menus</a>
							</li>
							<li>
								<a href="#">Tailor Made</a>
							</li>
						</ul>

						<ul class="list_2">
							<li>
								<a href="#">DiBanpédia</a>
							</li>
							<li>
								<a href="#">Salada Didéias</a>
							</li>
							<li>
								<a href="{{ route('sobre') }}">Sobre o DiBandeja</a>
							</li>
							<li>
								<a href="{{ route('contato') }}">Contato</a>
							</li>
						</ul>

						<ul class="list_3">
							<li>
								<a href="#">Novo Cadastro</a>
							</li>
							<li>
								<a href="#">Login</a>
							</li>
						</ul>

					</div>
				</div>
			</div>

		</footer>
		
        <script   src="https://code.jquery.com/jquery-2.2.4.min.js"   integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="   crossorigin="anonymous"></script>
        {{ HTML::script('assets/js/main.js') }}
    </body>
</html>
