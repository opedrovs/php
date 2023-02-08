<?php

    # Exercício 36
    // Crie uma função que recebe um array de números;
    // Crie um novo array com apenas os números que são maiores que 7;
    // Retorne este novo array e imprima na tela;

    $arr = [];

    for($i = 0; $i <= 30; $i++) {
        array_push($arr, $i);
    }

    function arrayMaiorQueSete($array) {
        $arrayRetorno = [];

        foreach($array as $num) {
            if($num > 7) {
                array_push($arrayRetorno, $num);
            }
        }

        return $arrayRetorno;
    }

    $newArray = arrayMaiorQueSete($arr);

    echo $newArray . "<br>";

    print_r($newArray);
