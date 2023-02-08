<?php

    $nomes = ["Matheus", "João", "Pedro", "Maria"];

    foreach($nomes as $nome) {
        echo "O nome do índice atual é $nome <br>";
        if($nome === "Pedro") {
            echo "Opa <br>";
        }
    }
