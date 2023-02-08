<?php

    # Exercício 38  
    // Crie uma função que recebe um array de itens de supermercado;
    // Retorne este array em forma de string, separado em vírgulos;

    $lista = [ "Arroz", "Feijão", "Frango", "Cerveja", "Pudim", "Vodka" ];

    # Solução 001:

    function listaParaString($arr) {

        $str = "Você pegou os seguintes itens do mercado: ";

        for($i = 0; $i < count($arr); $i++) {

            $str .= $i !== count($arr) - 1 ? "$arr[$i], " : "$arr[$i]. ";


            // if($i + 1 === count($arr)) {
            //     $str .= "$arr[$i]. ";
            // } else {
            //     $str .= "$arr[$i], ";
            // }
            
        }

        return $str;

    }

    # Solução 002:

    // function listaParaString($arr) {

    //     $listaString = implode(", ", $arr);

    //     $str = "Você pegou os seguintes itens do mercado: $listaString.";

    //     return $str;

    // }

    echo listaParaString($lista) . "<br>";
