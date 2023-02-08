<?php

    // Exercício 19
    // Converta os seguintes dados para int com o operador de cast;
    // "testando"
    // 12.9
    // true
    // [1, 2, 3]
    // E veja os resultados

    $a = (int) "testando";
    $b = (int) 12.9;
    $c = (int) true;
    $d = (int) [1, 2, 3];

    echo "O valor de $a é um " . gettype($a) . "<br>";
    echo "O valor de $b é um " . gettype($b) . "<br>";
    echo "O valor de $c é um " . gettype($c) . "<br>";
    echo "O valor de $d é um " . gettype($d) . "<br>";
