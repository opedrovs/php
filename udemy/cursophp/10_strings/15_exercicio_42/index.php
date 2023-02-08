<?php

    # Exercício 42
    // Na frase "Cadê o meu quijo? Ele estava aqui em cima";
    // Resgate apenas a palavra "queijo";

    $frase = "Cadê o meu queijo? Ele estava aqui em cima";

    $palavraQueijo = substr($frase, 12, 6);
    echo $palavraQueijo . "<br>";
    
    $palavraEstava = substr($frase, 24, 6);
    echo $palavraEstava . "<br>";

