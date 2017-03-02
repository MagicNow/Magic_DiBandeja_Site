<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, user-scalable=no">
        	
        <meta name="csrf-token" content="{!! csrf_token() !!}">
        
        <link href='https://fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
        {!! Html::style('assets/css/app.css') !!}
        <title>DiBandeja</title>
    </head>
    <body>
    <header>
        <div class="container">
            <h1>
                <a href="{{ route('home') }}">
                    <img src="{{ asset('assets/images/logo.png') }}" alt="Di Bandeja" title="Di Bandeja">
                </a>
            </h1>

            <nav class="nav">
                <button class="nav-button"></button>
                <ul class="nav-list">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('dibandeja-pra-voce') }}">Dibandeja para você</a>
                    </li>
                    {{-- <li class="nav-item">
                        <a class="nav-link" href="#">DiBanpédia</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Salada DiDéias</a>
                    </li> --}}
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('sobre') }}">Sobre o DiBandeja</a>
                    </li>
                    <li class="nav-item has-submenu">
                        <span class="nav-link">Faça um pedido</span>
                        <ul class="nav-submenu">
                            <li class="nav-submenu-item"><a href="{{ route('cliente.pf') }}" class="nav-submenu-link">Para a sua casa</a></li>
                            <li class="nav-submenu-item"><a href="{{ route('cliente.pj') }}" class="nav-submenu-link">Para o seu negócio</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('fornecedor') }}">Seja um Fornecedor</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('parceiro') }}">Seja um Parceiro / Colaborador</a>
                    </li>

                    {{-- <li class="nav-item">
                        <a class="nav-link" href="#">Novo Cadastro</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Login</a>
                    </li> --}}
                </ul>
            </nav>
        </div>
    </header>