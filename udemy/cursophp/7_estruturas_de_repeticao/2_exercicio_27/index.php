<?php

    # Exercício 27
    // Crie um array com alguns valores (pelo menos 10) de tipos de dados diferentes;
    // Faça um loop white para exibir apenas os dados que são strings;

    $arr = [ true, "String", 65, [], "Rock", 95.54, NULL, 19, "Leonardo", 5.5, "Estudos" ];

    // $i = 0;
    // while($i < 11) {
    //     if(is_string($arr[$i])) {
    //         echo $arr[$i] . "<br>";
    //     }
    //     $i++;
    // }

    $tam = count($arr);
    $i = 0;
    while($i < $tam) {

        if(is_string($arr[$i])) {

            echo $arr[$i] . "<br>";
        
        }

        $i++;

    }
