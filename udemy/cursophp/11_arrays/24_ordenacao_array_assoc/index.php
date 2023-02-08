<?php

    $arr = [
        'Pedro' => 16,
        'Joaquim' => 14,
        'Matheus' => 29,
        'Maria' => 12,
        'Ana' => 15
    ];

    asort($arr);

    print_r($arr);
    echo "<br>";

    $arr2 = [
        'Joaquim' => 14,
        'Pedro' => 16,
        'Matheus' => 29,
        'Maria' => 12,
        'Ana' => 15
    ];

    arsort($arr2);

    print_r($arr2);
    echo "<br>";

    ksort($arr2);

    print_r($arr2);
    echo "<br>";

    krsort($arr2);

    print_r($arr2);
    echo "<br>";