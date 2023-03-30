<?php


    if(trim($_GET["num"]) !== "") {
    
        $num = $_GET["num"];
        
    } else {
        
        $num = 0;
    
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP 001</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
    <main>
        <h1>Resultado Final</h1>
        <p>O número escolhido foi <strong><?= $num ?></strong></p>
        <p>O seu <em>antecessor</em> é <?= $num - 1 ?></p>
        <p>O seu <em>sucessor</em> é <?= $num + 1 ?></p>
        
        <a href="javascript:history.go(-1)" class="btn-back"><i class="material-icons icon">keyboard_backspace</i> Voltar</a>
    </main>
</body>
</html>