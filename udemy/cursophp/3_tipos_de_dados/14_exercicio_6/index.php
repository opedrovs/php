<?php

    // Exercício 6
    // Crie um arquivo PHP;
    // Crie um array com características de um carro;
    // Imprima duas características;

    $carro = [
        'marca' => 'Lamborghini',
        'modelo' => 'Aventador',
        'cor' => 'Cinza',
        'rodas' => 4,
        'cavalos' => '780 HP',
        'porta_abertura_vertical' => true
    ];

    // echo $carro['marca'];
    // echo ' ';
    // echo $carro['modelo'];

    // Melhorando a solução:

    print_r($carro);

    $marca = $carro['marca'];
    $cavalos = $carro['cavalos'];

    echo "<br>";
    echo "O carro é da marca $marca que anda $cavalos";
?>