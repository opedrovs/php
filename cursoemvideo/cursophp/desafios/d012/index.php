<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP 012</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Calculadora de Tempo</h1>

        <?php 
            $totalSegundos = $_POST["segundos"] ?? 0;

            $segundos = $totalSegundos % 60;
            $minutos = $totalSegundos / 60 % 60;
            $horas = $totalSegundos / 60 / 60 % 24;
            $dias = $totalSegundos / 60 / 60 / 24 % 7;
            $semanas = $totalSegundos / 60 / 60 / 24 / 7 % 30;
        ?>

        <form action="<?= $_SERVER["PHP_SELF"] ?>" method="post">
    
            <label for="segundos">Qual é o total de segundos?</label>
            <input type="number" name="segundos" id="segundos" value="<?= $totalSegundos ?>">

            <input type="submit" value="Calcular">
        </form>
    </main>

    <section>
        <h2>Totalizando tudo</h2>
        <p>Analisando o valor que você digitou, <strong><?= number_format($totalSegundos, 0, ".", ".") ?> segundos</strong> equivalem a um total de:</p>
        <ul>
            <li><?= $semanas ?> semanas</li>
            <li><?= $dias ?> dias</li>
            <li><?= $horas ?> horas</li>
            <li><?= $minutos ?> minutos</li>
            <li><?= $segundos ?> segundos</li>
        </ul>
    </section>
</body>
</html>