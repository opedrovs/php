<?php

    # Exercício 34
    // Crie uma função que verifica se um número é par ou ímpar;
    // Se for par imprima uma mensagem;
    // Se for ímpar imprima uma mensagem;
 
    function parOuImpar($num) {
        // if($num % 2 === 0) {
        //     echo "O número $num é par <br>";
        // } else {
        //     echo "O número $num é ímpar <br>";
        // }

        // resumindo
        echo $num % 2 === 0 ? "O número $num é par" : "O número $num é ímpar" . "<br>";
    }

    parOuImpar(5);
    parOuImpar(9);
    parOuImpar(12);