<?php

    echo 5 / 2;
    echo "<br>";

    if(is_float(5 / 2)) {
        echo "É float <br>";
    }

    echo 2 . 3;
    echo "<br>";

    if(is_string(5 . 5)) {
        echo "É string <br>";
    }

    $nome = "Pedro";
    $sobrenome = "Sanches";

    $nomeCompleto = $nome . " " . $sobrenome;

    echo $nomeCompleto;
    echo "<br>";