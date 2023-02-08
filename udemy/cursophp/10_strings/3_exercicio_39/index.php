<?php

    # Exercício 39
    // Crie uma função que recebe características de algum objeto como argumento (carro, sofá, cafeteira), em array associativo;
    // O array deve conter nome => preco;
    // Retorne apenas os itens que custam mais que R$10;
    // Imprima o retorno;

    $arr = [
        'carro' => 25500,
        'sofa' => 500,
        'cafeteira' => 9.85,
        'canetas' => 2.50,
        'celular' => 750
    ];

    function itensCaros($arr) {
        $arrItensCaros = [];

        foreach($arr as $item => $preco) {

            if($preco > 10) {
                array_push($arrItensCaros, $item);
            }

        }

        return $arrItensCaros;
    }

    $novoArrItensCaros = itensCaros($arr);
    print_r($novoArrItensCaros);