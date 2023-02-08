<?php

    // Exercício 26
    // Crie uma variável que recebe uma velocidade de um carro;
    // Depois crie uma estrutura if que verifica essa velocidade;
    // Se a velocidade for menor que 40, imprima que o motorista está na velocidade correta;
    // Se igual a 40, imprima uma mensagem para o motorista tomar cuidado;
    // Se for maior de 40, imprima uma mensagem de multa;

    $velocidade = 56;
    
    echo "Sua velocidade está em $velocidade Km/h. <br>";

    if($velocidade < 40) {
        
        echo "Você está na velocidade correta.";

    } else if($velocidade === 40) {

        echo "Você precisa tomar cuidado! Está no limite de velocidade.";

    } else {

        echo "Você está multado por excesso de velocidade, acima de 40 Km/h.";

    }
