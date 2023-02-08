<?php

    # Exercício 31
    // Crie um array com strings;
    // Utilize a função implode no array;
    // Primeiro argumento: ","
    // Segundo argumento: O seu array
    // Atribua a invocação da função a uma variável
    // Exiba o resultado

    $arr = [ "Aprender", "Programar", "PHP", "Trabalho", "Oportunidades" ];
    $palavras = implode(", ", $arr);

    echo $palavras;
