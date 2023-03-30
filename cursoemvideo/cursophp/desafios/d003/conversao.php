<?php

    if(trim($_GET["din"]) !== "") {
        $din = $_GET["din"];
    } else {
        $din = 0;
    }

    $dolar = $din / 5.22;

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP 003</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <section>
        <h1>Conversor de Moedas v1.0</h1>

        <p>Seus R$ <?= number_format($din, 2) ?> equivalem a <strong>US$ <?= number_format($dolar, 2) ?></strong></p>

        <p>* <strong>Cotação fixa de R$ 5,22</strong> informada diretamente no código.</p>

        <a href="javascript:history.go(-1)" class="btn-back">Voltar</a>
    </section>
</body>
</html>