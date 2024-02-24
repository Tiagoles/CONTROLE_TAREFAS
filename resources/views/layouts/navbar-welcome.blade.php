<nav>
    <div class="container-icon-page">
        <img src="{{ asset('img/bem-vindo/iconPage.png') }}" alt="icone inicial">
    </div>
    <ul>
        <div class="container-links">
            <li><a class="nav-link" href="/">Início</a></li>
            <li><a class="nav-link" href="{{ route('login') }}">Entrar</a></li>
            <li><a class="nav-link" href="{{ route('register') }}">Registrar</a></li>
        </div>
    </ul>
</nav>
