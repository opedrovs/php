<?php 
    include_once("data/posts.php");
    include_once("data/categories.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Codar</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/media-query.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
    <header>
        <a href="index.php" target="_self" rel="prev"><img src="./img/logo.svg" alt="Logo" id="logo"></a>

        <i class="material-icons burguer">menu</i>
        <nav class="navbar">
            <ul class="nav-list">
                <li><a href="index.php" target="_self" rel="prev" class="nav-link">Home</a></li>
                <li><a href="#" class="nav-link">Categorias</a></li>
                <li><a href="#" class="nav-link">Sobre</a></li>
                <li><a href="contato.php" target="_self" rel="next" class="nav-link">Contato</a></li>
            </ul>
        </nav>
    </header>