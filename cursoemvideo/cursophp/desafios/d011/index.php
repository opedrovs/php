<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP 011</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Reajustador de Preços</h1>

        <?php
            $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

            $preco = $_POST["preco"] ?? 0;
            $reajuste = $_POST["reajuste"] ?? 0;

            if($reajuste !== 0) {
                $precoReajustado = $preco + (($preco * $reajuste) / 100);
            } else {
                $precoReajustado = 0;
            }
        ?>

        <form action="<?= $_SERVER["PHP_SELF"] ?>" method="post">
            <label for="preco">Preço do Produto (R$)</label>
            <input type="number" name="preco" id="preco" step="0.01" value="<?= $preco ?>">
            <label for="reajuste">Qual será o percentual de reajuste?(<strong><span class="percentual">0</span>%</strong>)</label>
            <input type="range" name="reajuste" id="reajuste" min="0" max="100" value="<?= $reajuste ?>">

            <input type="submit" value="Reajustar">
        </form>
    </main>

    <section>
        <h2>Resultado do Reajuste</h2>
        <p>O produto que custava <?= numfmt_format_currency($padrao, $preco, "BRL") ?>, com <strong><?= $reajuste ?>% de aumento</strong> vai passar a custar <strong><?= numfmt_format_currency($padrao, $precoReajustado, "BRL") ?></strong> a partir de agora.</p>
    </section>

    <script src="script.js"></script>
</body>
</html>