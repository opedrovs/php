<?php

    // Exercício 22
    // Crie variáveis que recebem idades;
    // Cheque se as idades são maiores ou iguais a 18;
    // Se sim, imprima uma mensagem que a pessoa é maior de idade;

    $idadeJoao = 13;
    $idadeMaria = 18;
    $idadeFernando = 33;

    $msg = "Você é maior de idade <br>";

    if($idadeJoao >= 18) {
        echo "João - " . $msg;
    }

    if($idadeMaria >= 18) {
        echo "Maria - " . $msg;
    }

    if($idadeFernando >= 18) {
        echo "Fernando - " . $msg;
    }