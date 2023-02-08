<?php

    # Exercício 43
    // Converta a seguinte string para array:
    // carro - navio - helicóptero - barco - jangada

    $str = "carro - navio - helicóptero - barco - jangada";

    $arr = explode(" - ", $str);

    print_r($arr);
    for($i = 0; $i < count($arr); $i++) {
        
        echo "Item: $arr[$i] <br>";

    }
