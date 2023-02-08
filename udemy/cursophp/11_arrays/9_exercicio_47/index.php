<?php

    $carro = ["Jaguar", "3.0", "Azul", 18, "Teto solar", "Automático"];

    list($marca, $motor, $cor, $aro, $teto, $cambio) = $carro;

    echo "$marca <br>";
    echo "$motor <br>";
    echo "$cor <br>";
    echo "$aro <br>";
    echo "$teto <br>";
    echo "$cambio <br>";

    print_r($carro);