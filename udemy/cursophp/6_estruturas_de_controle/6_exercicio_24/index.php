<?php

    // Exercício 24
    // Crie algumas variáveis com tipos de dados diferentes: String, int e boolean, por exemplo;
    // Cheque se a variável é um inteiro;
    // Caso sim, apresente uma mensagem confirmando o tipo de dado;
    // Caso não, apresente outra mensagem;

    $a = 5.5;
    $b = [];
    $c = 5;
    $d = "19";
    $e = true;

    $msgIsInt = "A variável é um inteiro. <br>";
    $msgNotIsInt = "A variável não é um inteiro, e sim um ";

    if(is_int($a)) {
        echo $msgIsInt;
    } else {
        echo $msgNotIsInt;
        echo gettype($a) . "<br>";
    }

    if(is_int($b)) {
        echo $msgIsInt;
    } else {
        echo $msgNotIsInt;
        echo gettype($b) . "<br>";
    }

    if(is_int($c)) {
        echo $msgIsInt;
    } else {
        echo $msgNotIsInt;
        echo gettype($c) . "<br>";
    }

    if(is_int($d)) {
        echo $msgIsInt;
    } else {
        echo $msgNotIsInt;
        echo gettype($d) . "<br>";
    }

    if(is_int($e)) {
        echo $msgIsInt;
    } else {
        echo $msgNotIsInt;
        echo gettype($e) . "<br>";
    }
