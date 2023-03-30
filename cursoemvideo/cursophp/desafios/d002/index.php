<?php 

    $num = rand(0, 100);

    if($_POST) {
        $num = rand(0, 100);
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP 002</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>

    <section>
        <h1>Trabalhando com números aleatórios</h1>

        <p>Gerando um número aleatório entre 0 e 100...</p>
        <p>O valor gerado foi <strong><?= $num ?></strong></p>

        <form action="index.php" method="post">
            <button type="submit"><i class="material-icons icon">autorenew</i> Gerar outro</button>
        </form>
    </section>
</body>
</html>