<?php

// Exercício 23
// Complemente o exercício 22;
// Insira um else com uma mensagem para as pessoas que são menores de idade;

$idadeJoao = 13;
$idadeMaria = 18;
$idadeFernando = 33;

$msgMaiorIdade = "Você é maior de idade <br>";
$msgMenorIdade = "Você é menor de idade <br>";

if($idadeJoao >= 18) {
    echo "João - " . $msgMaiorIdade;
} else {
    echo "João - " . $msgMenorIdade;
}

if($idadeMaria >= 18) {
    echo "Maria - " . $msgMaiorIdade;
} else {
    echo "Maria - " . $msgMenorIdade;
}

if($idadeFernando >= 18) {
    echo "Fernando - " . $msgMaiorIdade;
} else {
    echo "Fernando - " . $msgMenorIdade;
}