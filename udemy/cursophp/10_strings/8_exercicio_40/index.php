<?php

    # Exercício 40
    // Percorra a string: O rato roeu a roupa do rei de Roma, a partir de um loop;
    // Imprima o número de letras "a" desta string;

    $frase = "O rato roeu a roupa do rei de Roma";

    $totalLetraAs = 0;

    for($i = 0; $i < strlen($frase); $i++) {
        
        if($frase[$i] === "a") {
            $totalLetraAs++;
        }

    }

    echo "O número de letras \"a\" da frase foi de $totalLetraA.";
