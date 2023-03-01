<?php 
    include_once("./config/connect.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda de Contatos</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/style.css" media="all">
    <link rel="stylesheet" href="./assets/css/media-query.css">
</head>
<body class="body">
    <header>
        <a href="index.php" target="_self" rel="prev"><img src="./assets/img/logo.png" alt="Logo" id="logo"></a>

        <i class="material-icons burguer">menu</i>
        <nav class="navbar">
            <ul class="nav-list">
                <li><a href="index.php" target="_self" rel="prev" class="nav-link">Agenda</a></li>
                <li><a href="create.php" target="_self" rel="prev" class="nav-link">Adicionar contato</a></li>
            </ul>
        </nav>
    </header>