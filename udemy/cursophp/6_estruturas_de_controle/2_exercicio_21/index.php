<?php

    // Exercício 21
    // Faça as seguintes verificações em estruturas if:
    // 5 é maior que 2?
    // Matheus é diferente de Pedro
    // 12 é menor ou igual a 11
    // Você deve inserir os valores em variáveis;

    // comparação 1
    $a = 5;
    $b = 2;
    if($a > $b) { // true

        echo "$a é maior que $b <br>";

    }

    // comparação 2
    $nomeMatheus = "Matheus";
    $nomePedro = "Pedro";
    if($nomeMatheus != $nomePedro) { // true

        echo "O nome Matheus é diferente de Pedro <br>";

    }

    // comparação 3
    $x = 12;
    $y = 11;
    if($x <= $y) { // false

        echo "$x é menor ou igual a $y <br>";

    }
