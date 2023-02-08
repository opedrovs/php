<?php

    # Exercício 37
    // Crie uma função achama defineCorCarro;
    // Onde há um parâmetro chamado cor, com valor default de vermelha;
    // Retorne a cor do carro;
    // Imprima o retorno tanto com parâmetro default, como também definindo a cor;

    function defineCorCarro($cor = "Vermelha") {
        
        return "O carro é da cor: $cor.";
        
    }

    // echo defineCorCarro() . "<br>";
    // echo defineCorCarro("Prata") . "<br>";

    $carroVermelho = defineCorCarro();
    echo $carroVermelho . "<br>";

    $carroAzul = defineCorCarro("Azul");
    echo $carroAzul . "<br>";
