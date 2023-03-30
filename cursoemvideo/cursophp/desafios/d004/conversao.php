<?php
    
    $url = "http://www.google.com/finance/quote/USD-BRL?sa=X&ved=2ahUKEwj6m52vqYT-AhWTr5UCHVLIDskQmY0JegQIBhAd";

    $contents = file_get_contents($url);

    $var1 = explode("<div class=\"YMlKec fxKbKc\">", $contents);
    $var2 = explode("</div>", $var1[1]);

    $cotacao = (float) $var2[0];

    if(trim($_GET["din"]) === "") {
        $din = 0;
    } else {
        $din = $_GET["din"];
    }

    $dolar = $din / $cotacao;
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP 004</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <section>
        <h1>Conversor de Moedas v2.0</h1>

        <p>Seus R$ <?= number_format($din, 2) ?> equivalem a <strong>US$ <?= number_format($dolar, 2) ?>*</strong></p>

        <p>* Cotação obtida diretamente do site do <a href="https://www.google.com/finance/quote/USD-BRL?sa=X&ved=2ahUKEwi5t6m9s4T-AhXCqZUCHfVSCNQQmY0JegQIBhAd" target="_blank" rel="external">Google Finanças</a></p>

        <a href="javascript:history.go(-1)" class="btn-back">Voltar</a>
    </section>
</body>
</html>