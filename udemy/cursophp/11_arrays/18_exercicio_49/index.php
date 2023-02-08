<?php

    # Exercício 49
    // Crie variáveis com característica de algum objeto ou animal;
    // Depois crie um array com compact com estas mesmas variáveis;
    // Faça um loop no array e imprima os valores;

    $marca = "Lamborghini";
    $modelo = "Aventador";
    $motor = "3.0";
    $portas = 4;
    $cavalos = "780HP";
    $tetoSolar = true;

    $carro = compact("marca", "modelo", "motor", "portas", "cavalos", "tetoSolar");

    print_r($carro);
    echo "<br>";

    foreach($carro as $caracteristica => $valor) {
        echo "$caracteristica: $valor<br>";
    }
