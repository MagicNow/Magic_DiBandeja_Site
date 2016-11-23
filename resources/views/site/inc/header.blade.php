<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        	
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
                    <img src="assets/images/logo.png" alt="Di Bandeja" title="Di Bandeja">
                </a>
            </h1>

            <nav>
                <ul>
                    <li>
                        <a href="{{ route('dibandeja-pra-voce') }}">Dibandeja pra você</a>
                    </li>
                    <!--<li>
                        <a href="#">DiBanpédia</a>
                    </li>-->
                    <!--<li>
                        <a href="#">Salada DiDéias</a>
                    </li>-->
                    <li>
                        <a href="{{ route('sobre') }}">Sobre o DiBandeja</a>
                    </li>
                    <li>
                        <a href="{{ route('contato') }}">Contato</a>
                    </li>
                    <!--<li>
                        <a href="#">Novo Cadastro</a>
                    </li>-->
                    <!--<li>
                        <a href="#">Login</a>
                    </li>-->
                </ul>
            </nav>
        </div>
    </header>

