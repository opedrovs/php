<?php

    # Exercício 30 b
    // Crie um array de 1 a 10;
    // Utilize um loop for para criar este array;
    // Dica: Você pode utilizar o método array_push(arr, elemento) para inserir um elemento em um array;
    // Imprima o array criado com print_r;

    $arr = [];

    for($i = 1; $i <= 10; $i++) {
        array_push($arr, $i);
    }

    print_r($arr);
