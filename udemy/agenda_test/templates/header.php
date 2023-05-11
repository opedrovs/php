<?php 
    include_once("config/url.php");
    include_once("config/process.php");

    if(isset($_SESSION)) {
        $printMsg = $_SESSION["msg"];
        $_SESSION["msg"] = "";
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda de Contatos</title>
    <link rel="stylesheet" href="<?= $BASE_URL ?>/assets/css/style.css">
    <link rel="stylesheet" href="<?= $BASE_URL ?>/assets/css/media-query.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
    <header>
        <a href="<?= $BASE_URL ?>/index.php" target="_self" rel="prev"><img src="<?= $BASE_URL ?>/assets/img/logo.svg" alt="Logo" id="logo"></a>

        <i class="material-icons" id="burguer">menu</i>
        
        <nav class="navbar">
            <ul class="nav-list">
                <li><a href="<?= $BASE_URL ?>/index.php" target="_self" rel="prev" class="nav-link">Agenda</a></li>
                <li><a href="<?= $BASE_URL ?>/create.php" target="_self" rel="next" class="nav-link">Adicionar contato</a></li>
            </ul>
        </nav>
    </header>