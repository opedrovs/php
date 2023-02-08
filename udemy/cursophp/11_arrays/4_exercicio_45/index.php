<?php

    # Exercício 45
    // Crie um array com a função range de 10 a 45;
    // Imprima todos os números com uma soma de 6;
    // Se passar de 30 a soma, imprima também que o número é muito alto;

    $arr = range(10, 45);

    for($i = 0; $i < count($arr); $i++) {

        $soma = $arr[$i] += 6;

        if($soma > 30) {
        
            echo "$soma - Esse número é muito alto <br>";
        
        } else {
        
            echo "$soma <br>";
        
        }
    }

    // foreach($arr as $num) {
    //     $num += 6;

    //     if($num > 30) {

    //         echo "$num - Esse número é muito alto <br>";

    //     } else {

    //         echo "$num <br>";

    //     }
    // }
