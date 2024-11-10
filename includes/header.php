<?php 
    include_once 'db.php';
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog - Navegação</title>
    <link rel="stylesheet" href="../css/style.css?v=1.0">
</head>
<body>
    <header>
        <div class="lightning-container">
            <div class="neon-line"></div>
            <div class="neon-line"></div>
            <div class="neon-line"></div>
            <div class="neon-line"></div>
            <div class="shape x"></div>
            <div class="shape circle"></div>
            <div class="shape x"></div>
            <div class="shape circle"></div>
        </div>
        <nav class="navbar">
            <ul class="navbar-links">
                <li><a href="../views/home.php"><img src="../uploads/homeZoro.png" alt="Home">Home</a></li>
                <li><a href="../views/profile.php"><img src="../uploads/editZoro.png" alt="Perfil">Perfil</a></li>
                <li><a href="../views/about.php"><img src="../uploads/aboutZoro.png" alt="Sobre">Sobre</a></li>
                <li><a href="../logout.php"><img src="../uploads/logoutZoro.png" alt="Sair">Sair</a></li>
            </ul>
        </nav>
    </header>
    <main>