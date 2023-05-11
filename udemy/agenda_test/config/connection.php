<?php

    $host = "localhost";
    $dbname = "agenda_test";
    $user = "root";
    $pass = "";

    try {

        $conn = new PDO("mysql:localhost=$host;dbname=$dbname", $user, $pass);

    } catch(PDOException $e) {

        echo "Erro: $e";

    }
