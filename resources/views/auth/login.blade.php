<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entrar</title>
    <link rel="stylesheet" href="{{ asset('estilo/login.css') }}">
</head>
<body>
    <!-- Formulário de Login -->

    <form class="form">
        <p class="form-title">Faça login na sua conta</p>
        <div class="input-container">
            <input type="email" placeholder="Digite seu e-mail" required>
            <span></span>
        </div>
        <div class="input-container">
            <input type="password" placeholder="Digite sua senha" required>
        </div>
        <button type="submit" class="submit">
            Entrar
        </button>

        <p class="signup-link">
            Não tem conta?
            <a href="{{ route('register') }}">Cadastre-se</a> <!-- Redireciona para a página de cadastro -->
        </p>
    </form>

</body>
</html>
