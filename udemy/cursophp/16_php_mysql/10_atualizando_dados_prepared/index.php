<?php

    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "cursophp";

    $conn = new mysqli($host, $user, $pass, $db);

    // ASSUNTO DA AULA
    $id = 10;

    $stmt = $conn->prepare("UPDATE itens SET nome = ?, descricao = ? WHERE id = ?");

    $nome = "Sofá";
    $descricao = "Sofá semi novo, com cadeira de demolição";

    $stmt->bind_param("ssi", $nome, $descricao, $id);

    $stmt->execute();

    if($stmt->error) {
        echo "Erro: " . $stmt->error;
    }