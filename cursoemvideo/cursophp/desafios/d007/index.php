<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP 007</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>

        <?php

            $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

            $salario = $_POST["salario"] ?? 0;

            $totSalariosMinimos = 0;
            $parteSalario = $salario;

            if($parteSalario > 1380) {
                while($parteSalario > 1380) {
                    $parteSalario -= 1380;
                    $totSalariosMinimos++;
                }
            } else {
                $parteSalario = 0;
            }
        
        ?>

        <h1>Informe seu salário</h1>
        
        <form action="<?= $_SERVER["PHP_SELF"] ?>" method="post">
            <label for="salario">Salário (R$)</label>
            <input type="number" name="salario" id="salario" value="<?= $salario ?>" step="0.01">
            
            <p>Considerando o salário mínimo de <strong>R$1.380,00</strong></p>

            <input type="submit" value="Calcular">
        </form>
    </main>

    <section>
        <h2>Resultado Final</h2>
        <p>Quem recebe um salário de <?= numfmt_format_currency($padrao, $salario, "BRL") ?> ganha <strong><?= $totSalariosMinimos ?> salários mínimos</strong> + <?= numfmt_format_currency($padrao, $parteSalario, "BRL") ?></p>
    </section>
</body>
</html>