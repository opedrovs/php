<?php

    $pedro = [
        'nome' => 'Pedro',
        'idade' => 16,
        'profissao' => 'Programador'
    ];

    $alexia = [
        'nome' => 'Aléxia',
        'idade' => 25,
        'profissao' => 'Eng. Civil'
    ];

    foreach($pedro as $carac => $value) {

        echo "$carac => $value <br>";

    }

    foreach($alexia as $value) {

        echo "$value <br>";

    }