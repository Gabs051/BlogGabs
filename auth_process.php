<?php 
    session_start();
    include 'includes/db.php';

    if (isset($_POST['register'])) {
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);

        $sql = "INSERT INTO user (username, email, password, role) VALUES (?, ?, ?, 'visitor')";
        $stmt = $connect -> prepare($sql);

        if ($stmt -> execute([$nome, $email, $senha])) {
            echo "Registro realizado com sucesso";
        } else {
            echo "Erro ao registrar!";
        }
    } elseif (isset($_POST['login'])) {
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $sql = "SELECT * FROM user WHERE email = ?";
        $stmt = $connect -> prepare($sql);
        $stmt -> execute([$email]);
        $user = $stmt -> fetch();

        if ($user && password_verify($senha, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_tipo'] = $user['tipo'];
            echo "Login realizado com sucesso!";
            header("Location: views/home.php");
            exit();
        } else {
            echo "Email ou senha incorretos!";
        }
    }
?>