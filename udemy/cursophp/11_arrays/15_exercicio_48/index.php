<?php

    # Exercício 48
    // Crie um array com os valores: Batata, maça, pera, feijão, arroz;
    // Remova pera e feijão;

    $arr = ["Batata", "Maça", "Pera", "Feijão", "Arroz"];

    $removidos = array_splice($arr, 2, 2);

    print_r($arr);
