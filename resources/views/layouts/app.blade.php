<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema RPG</title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

<header>

    <nav>

        @auth

            @if(auth()->user()->tipo === 'admin')

                <a href="{{ route('dashboard') }}">
                    Dashboard
                </a>

                <a href="{{ route('racas.index') }}">
                    Raças
                </a>

                <a href="{{ route('classes.index') }}">
                    Classes
                </a>

                <a href="{{ route('itens.index') }}">
                    Itens
                </a>

                <a href="{{ route('npcs.index') }}">
                    NPCs
                </a>

                <a href="{{ route('relatorios.index') }}">
                    Relatórios
                </a>

            @endif

            <a href="{{ route('personagens.index') }}">
                Personagens
            </a>

            <a href="{{ route('personagem-itens.index') }}">
                Inventário
            </a>

            <span style="float:right;color:white;">

                {{ auth()->user()->name }}

                ({{ ucfirst(auth()->user()->tipo) }})

            </span>

        @else

            <a href="{{ route('login') }}">
                Entrar
            </a>

            @if(Route::has('register'))

                <a href="{{ route('register') }}">
                    Registrar
                </a>

            @endif

        @endauth

    </nav>

</header>

<div class="container">

    @if(session('success'))

        <div class="alert-success">

            {{ session('success') }}

        </div>

    @endif

    @if($errors->any())

        <div class="alert-danger">

            <ul>

                @foreach($errors->all() as $erro)

                    <li>{{ $erro }}</li>

                @endforeach

            </ul>

        </div>

    @endif

    <main>

        @yield('content')

    </main>

</div>

<footer>

    Sistema de Fichas RPG -
    {{ date('Y') }}

</footer>

@stack('scripts')

</body>

</html>