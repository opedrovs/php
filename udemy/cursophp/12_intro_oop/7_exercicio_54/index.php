<?php

    # Exercício 54
    // Crie uma classe Pessoa;
    // Crie uma propriedade nome e idade;
    // E também um método andar;

    class Pessoa {
        public $nome;
        public $idade;

        function andar($m) {
            echo "A pessoa andou $m metros. <br>";
        }
    }

    $pedro = new Pessoa;

    $pedro->nome = "Pedro";
    $pedro->idade = 16;
    
    echo "O nome dele é $pedro->nome e tem $pedro->idade anos. <br>";

    $pedro->andar(20);

    $matheus = new Pessoa;

    $matheus->nome = "Matheus";
    $matheus->idade = 29;

    echo "O nome dele é $matheus->nome e tem $matheus->idade anos. <br>";

    $matheus->andar(30);