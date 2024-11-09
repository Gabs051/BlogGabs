<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autenticação</title>
    <link rel="stylesheet" href="../css/authStyle.css">
</head>
<body>
    <div class="background-container">
        <img src="https://media.giphy.com/media/l0HlOGvXERCWqythu/giphy.gif" alt="Fundo">
    </div>

    <div class="form-auth">
        <h2 id="form-title-auth">Login</h2>

        <!-- Formulário de Login -->
        <form action="../auth_process.php" method="post" id="login-form-auth" style="display: block;" autocomplete="off">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required placeholder="email@test.com" maxlength="100" minlength="3">

            <label for="senha">Senha:</label>
            <input type="password" name="senha" id="senha" required minlength="12" maxlength="255" placeholder="Senha">

            <button type="submit" name="login">Entrar</button>
        </form>

        <!-- Formulário de Registro -->
        <form action="../auth_process.php" method="post" id="register-form-auth" style="display: none;">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" required maxlength="100" minlength="4" placeholder="Nome">

            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required placeholder="email@test.com" maxlength="100" minlength="3">

            <label for="senha">Senha:</label>
            <input type="password" name="senha" id="senha" required minlength="12" maxlength="255" placeholder="Senha">

            <button type="submit" name="register">Registrar</button>
        </form>

        <span id="toggle-btn-auth" class="toggle-btn-auth" onclick="toggleForms()">Registrar-se</span>
    </div>

    <script src="../js/main.js"></script>
</body>
</html>