<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Conta</title>
    <link rel="stylesheet" href="{{ asset('estilo/registro.css') }}">
</head>
<body>

    <!-- Formulário de Cadastro -->
    <form class="form">
        <p class="form-title">Crie sua conta</p>
        
        <!-- Nome -->
        <div class="input-container">
            <input type="text" placeholder="Digite seu nome" required>
        </div>

        <!-- E-mail -->
        <div class="input-container">
            <input type="email" placeholder="Digite seu e-mail" required>
        </div>

        <!-- Senha -->
        <div class="input-container">
            <input type="password" placeholder="Digite sua senha" required>
        </div>

        <!-- Confirmar senha -->
        <div class="input-container">
            <input type="password" placeholder="Confirme sua senha" required>
        </div>

        <!-- Botão de cadastro -->
        <button type="submit" class="submit">
            Cadastrar
        </button>

        <!-- Link para login caso o usuário já tenha conta -->
        <p class="signup-link">
            Já tem uma conta?
            <a href="{{ route('login') }}">Entrar</a> <!-- Redireciona para a página de login -->
        </p>
    </form>

</body>
</html>
