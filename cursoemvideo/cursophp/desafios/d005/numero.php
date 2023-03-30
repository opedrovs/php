<?php

    if(trim($_POST["real"]) === "") {
        $real = 0;
    } else {
        $real = $_POST["real"];
    }

    $inteiro = (int) $real;
    // $inteiro = round($real);

    $fracionado = $real - $inteiro;

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP 001</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Resultado Final</h1>
        <p>Analisando o número <strong><?= $real ?></strong> informado pelo usuário:</p>

        <ul>
            <li>A parte inteira do número é <strong><?= $inteiro ?></strong></li>
            <li>A parte fracionária do número é <strong><?= $fracionado ?></strong></li>
        </ul>
        
        <a href="javascript:history.go(-1)" class="btn-back">Voltar</a>
    </main>
</body>
</html>