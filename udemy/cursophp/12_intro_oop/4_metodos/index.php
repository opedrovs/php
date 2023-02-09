<?php

    class Pessoa {
        
        function falar() {
            echo "Olá, eu sou um objeto! <br>";
        }
        
        function somar($x, $y) {
            echo $x + $y . "<br>";
        }

    }

    $pedro = new Pessoa;

    $pedro->falar();
    $pedro->falar();

    $joao = new Pessoa;

    $joao->falar();

    $pedro->somar(2, 2);

    $joao->somar(10, 12);