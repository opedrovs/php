<?php 
    include_once("./config/connect.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda de Contatos</title>
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>
    <header>
        <a href="index.php" target="_self" rel="prev"><img src="./assets/img/logo.png" alt="Logo" id="logo"></a>

        <nav>
            <ul class="navbar">
                <li><a href="index.php" target="_self" rel="prev" class="nav-link">Agenda</a></li>
                <li><a href="create.php" target="_self" rel="prev" class="nav-link">Adicionar contato</a></li>
            </ul>
        </nav>
    </header>