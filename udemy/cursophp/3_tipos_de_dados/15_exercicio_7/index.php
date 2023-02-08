<?php 

    // Exercício 7
    // Crie um arquivo PHP;
    // Crie um array associativo com características de uma pessoa;
    // Desafio: Faça um if checando se ela é maior de idade e imprima uma mensagem, caso seja;

    $pessoa = [
        'nome' => 'Pedro',
        'cor_pele' => 'branco',
        'altura' => 1.72,
        'peso' => 63.7,
        'idade' => 19,
        'profissao' => 'Estudante'
    ];

    print_r($pessoa);

    $idade = $pessoa['idade'];
    echo "<br>";

    if($idade >= 18) {
        echo "Você tem $idade anos, então é maior de idade.";
    }
?>