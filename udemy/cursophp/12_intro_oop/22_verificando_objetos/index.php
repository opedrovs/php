<?php

    class Humano {
        public function falar() {
            echo "Olá";
        }
    }


    $pedro = new Humano;

    $teste = 10;

    if(is_object($pedro)) {
        echo "É um objeto <br>";
    } else {
        echo "Não é um objeto <br>";
    }

    if(is_object($teste)) {
        echo "É um objeto <br>";
    } else {
        echo "Não é um objeto <br>";
    }

    echo get_class($pedro) . "<br>";

    if(method_exists($pedro, "falar")) {
        echo "Método existe <br>";
    } else {
        echo "Método não existe <br>";
    }

    if(method_exists($pedro, "asd")) {
        echo "Método existe <br>";
    } else {
        echo "Método não existe <br>";
    }