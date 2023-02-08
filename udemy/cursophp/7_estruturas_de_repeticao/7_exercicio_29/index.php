<?php

    # Exercício 29
    // Crie um array com valores inteiros de 10 a 100, com incremento de 10;
    // Aplique um loop neste array;
    // Quando entrar os valores 30 ou 40, pule para a próxima execução;

    $arr = [ 10, 20, 30, 40, 50, 60, 70, 80, 90, 100 ];

    $i = 0;

    while($i < count($arr)) {

        $numeroAtual = $arr[$i];

        if($numeroAtual === 30 || $numeroAtual === 40) {

            $i++;

            continue;

        }

        echo "Elemento: $numeroAtual <br>";

        $i++;

    }
