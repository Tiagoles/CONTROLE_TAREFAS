<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ asset('img/bem-vindo/iconPage.png') }}">
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">
    <script src="{{asset('js/app.js')}}"></script>
    <title>Crie tarefas rápidamente com essa tecnologia - Controle de tarefas</title>
</head>

<body>

    <div class="container">
        @include('layouts.navbar-welcome')
        <div class="container-img-background" style="background-image: url('{{ asset('img/bem-vindo/fundo.jpg') }}');"></div>
        @guest

            <h1 class="main-title">Desfrute do mais novo controlador de tarefas,<br> 
                Domine seus trabalhos e aumente sua
                produtividade,<br> com nosso app revolucionário! </h1>
            <h2 class="sub-title">Basta se cadastrar. é gratis!</h2>
            <a id="RegistrarClientePageGuest" href="{{route('register')}}">Cadastre-se</a>
        @endguest

    </div>
    @include('layouts.footer-welcome')
</body>

</html>
