<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entrar</title>
    <link rel="stylesheet" href="{{ asset('estilo/login.css') }}">
</head>
<body>

    <!-- Exibe a mensagem de erro ou sucesso -->
    @if(session()->has('message'))
        <div class="alert-message">{{ session('message') }}</div>
    @endif

    <!-- Formulário de Login -->
    <form class="form" method="POST" action="{{ route('login.submit') }}">
        @csrf
        <p class="form-title">Faça login na sua conta</p>
        <div class="input-container">
            <input type="email" name="email" placeholder="Digite seu e-mail" required>
        </div>
        <div class="input-container">
            <input type="password" name="password" placeholder="Digite sua senha" required>
        </div>
        <button type="submit" class="submit">
            Entrar
        </button>

        <p class="signup-link">
            Não tem conta?
            <a href="{{ route('register.index') }}">Cadastre-se</a>
        </p>
    </form>

</body>
</html>
