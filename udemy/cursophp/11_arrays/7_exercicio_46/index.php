<?php

    # Exercício 46
    // Crie um array multidimensional com 3 arrays que tem 4 elementos cada;
    // Imprima todos os elementos de cada um dos arrays;
    // Imprima também quando está mudando de array;

    $arr = [
        [1, 2, 3, 4],
        [3, 6, 9, 12],
        [4, 8, 12, 16]
    ];

    // loop no array externo
    for($i = 0; $i < count($arr); $i++) {
        
        echo "Imprimindo array externo: " . $i + 1 . "<br>";

        // loop no array interno
        // foreach($arr[$i] as $num) {
        //     echo "$num <br>";
        // }

        for($j = 0; $j < count($arr[$i]); $j++) {
            echo $arr[$i][$j] . "<br>";
        }
    }
