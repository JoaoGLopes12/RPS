@extends('layouts.app')

@section('content')
    <h1>Entrar</h1>

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div>
            <label for="email">E-mail</label>
            <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus>
        </div>

        <div>
            <label for="password">Senha</label>
            <input id="password" type="password" name="password" required>
        </div>

        <div>
            <label>
                <input type="checkbox" name="remember"> Lembrar-me
            </label>
        </div>

        <button type="submit">Entrar</button>
    </form>
@endsection
