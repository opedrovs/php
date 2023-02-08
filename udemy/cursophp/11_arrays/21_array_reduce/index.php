<?php

    $arr = [1, 2, 3, 4, 19, 254, 544, 43, 5];

    function soma($a, $b) {
        return $a + $b;
    }

    function subtracao($a, $b) {
        return $a - $b;
    }

    $resultado = array_reduce($arr, "soma");

    echo "$resultado <br>";

    $resultado2 = array_reduce($arr, "subtracao");
    

    echo "$resultado2 <br>";
