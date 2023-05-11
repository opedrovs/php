<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP 010</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Calculando a sua idade</h1>

        <?php
            $anoAtual = date("Y");
            $anoNascimento = $_POST["anoNascimento"] ?? 2000;
            $ano = $_POST["ano"] ?? $anoAtual;

            $idade = $ano - $anoNascimento;

        ?>
        
        <form action="<?= $_SERVER["PHP_SELF"] ?>" method="post">
            <label for="anoNascimento">Em que ano você nasceu?</label>
            <input type="number" name="anoNascimento" id="anoNascimento" value="<?= $anoNascimento ?>">
            <label for="ano">Quer saber sua idade em que ano? (atualmente estamos em <strong><?= $anoAtual ?></strong>)</label>
            <input type="number" name="ano" id="ano" value="<?= $ano ?>">

            <input type="submit" value="Qual será minha idade?">
        </form>
    </main>

    <section>
        <h2>Resultado</h2>
        <p>Quem nasceu em <?= $anoNascimento ?> vai ter <strong><?= $idade ?> anos</strong> em <?= $ano ?>!</p>
    </section>
</body>
</html>