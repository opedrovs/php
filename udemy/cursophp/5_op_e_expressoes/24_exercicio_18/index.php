<?php

    // Exercício 18
    // Verifique as seguintes operações com OR;
    // 12 < 5 OR "João" === "João"
    // 1 > 5 OR 1
    // 20 === "20" AND 51 >= 31

    if(12 < 5 || "João" === "João") { // false e true
        echo "A operação 1 é verdadeira <br>";
    }

    if(1 > 5 || 1) { // false e true
        echo "A operação 2 é verdadeira <br>";
    }

    if(20 === "20" && 51 >= 31) { // false e true
        echo "A operação 3 é verdadeira <br>";
    }

    // comparação teste
    if(20 == "20" && 51 >= 31) { // false e true
        echo "A operação teste é verdadeira <br>";
    }