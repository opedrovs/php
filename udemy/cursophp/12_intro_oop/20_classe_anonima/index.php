<?php

    $pessoa = new class() {

        public $nome = "Pedro";

        public function dizerNome() {
            echo "Olá meu nome é $this->nome <br>";
        }

    };

    echo $pessoa->nome . "<br>";

    $pessoa->dizerNome();