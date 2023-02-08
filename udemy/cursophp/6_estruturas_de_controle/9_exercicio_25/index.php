<?php

    // Exercício 25
    // Crie variáveis com números e outras com string;
    // Faça um if checando se é um número;
    // Caso for, atribua a multiplicação deste número por 2 em outra Valor;
    // E crie um outro if, que checa se o novo número é maior que 100;
    // Se sim, imprima uma mensagem;

    $a = 15;
    $b = "29";
    $c = 56;

    if(is_int($a) || is_float($a)) {

        $multi = $a * 2;

        if($multi > 100) {
            echo "Valor $a multiplicada por 2, é maior que 100. <br>";
        } else {

            echo "Valor $b multiplicada por 2, não é maior que 100. <br>";

        }

    } else {

        echo "Não é um número. <br>";

    }

    if(is_int($b) || is_float($b)) {

        $multi = $b * 2;

        if($multi > 100) {
            echo "Valor $b multiplicada por 2, é maior que 100. <br>";
        } else {

            echo "Valor $b multiplicada por 2, não é maior que 100. <br>";

        }

    } else {

        echo "Não é um número. <br>";

    }

    if(is_int($c) || is_float($c)) {

        $multi = $c * 2;

        if($multi > 100) {
            echo "Valor $c multiplicada por 2, é maior que 100. <br>";
        } else {

            echo "Valor $b multiplicada por 2, não é maior que 100. <br>";

        }

    } else {

        echo "Não é um número. <br>";

    }
