<?php

    # Exercício 28
    // Crie um Loop que vai até o número 30;
    // O contador deve iniciar com 4;
    // Faça incrementos de 2 em 2 no contador;
    // Utilize o break para parar o loop quando chegar no número 24;

    $i = 4;
    while($i <= 30) {

        echo $i . "<br>";

        if($i === 24) {
            echo "Parando o loop";
            break;
        }

        $i += 2;

    }
