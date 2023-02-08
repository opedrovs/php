<?php
    // Exercício 4
    // Crie um arquivo PHP;
    // Imprima três floats;
    // Utilize a função is_float em um deles;

    echo 5.5;
    echo "<br>";
    echo 0.5;
    echo "<br>";
    echo -5.5;
    echo "<br>";

    if(is_float(-5.5)) {
        echo "É float";
    }

    // ----------------------
    // Correção do Professor:
    // ----------------------

    /*
    echo 4.15;
    echo "<br>";
    echo 12.12;
    echo "<br>";

    $c = -78.1;

    echo $c;
    echo "<br>";

    if(is_float($c)) {
        echo "Sim, podemos ter floats negativos!";
    }

    if(is_int($c)) {
        echo "É um inteiro!";
    }
    */
