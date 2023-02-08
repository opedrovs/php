<?php

    # Exercício 44
    // Converta a seguinte array para uma string:
    // ["O", "PHP", "é", "muito", "legal"]

    $arr = ["O", "PHP", "é", "muito", "legal"];

    $str = implode(" ", $arr);

    echo "$str <br>";
