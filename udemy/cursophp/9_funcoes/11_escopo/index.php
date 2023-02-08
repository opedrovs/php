<?php

    $a = 10;

    $b = 15;

    function testeEscopo() {
        
        $a = 5;

        global $b;

        static $c = 0;

        $a++;

        $b++;

        $c++;

        echo "ESCOPO LOCAL DE A: $a <BR>";

        echo "ESCOPO GLOBAL NA FUNÇÃO DE B: $b <BR>";

        echo "ESCOPO STATIC DE C: $c <BR>";
    }

    echo "ESCOPO GLOBAL DE A: $a <BR>";
    echo "ESCOPO GLOBAL DE B: $b <BR>";

    testeEscopo();

    echo "ESCOPO GLOBAL DE B 2: $b <BR>";

    testeEscopo();
