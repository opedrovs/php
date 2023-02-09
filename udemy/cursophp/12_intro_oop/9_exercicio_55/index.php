<?php

    # Exercício 55
    // Crie uma classe Carro;
    // Crie algumas propriedades e também a propriedade velocidade_maxima;
    // Crie o método setVelocidadeMaxima, onde é possível alterar a velocidade máxima do carro;
    // E também o getVelocidadeMaxima onde é possível imprimir a velocidade do carro;

    class Carro {
        public $rodas;
        public $cor;
        public $modelo;
        public $velocidadeMaxima;
        
        function setVelocidadeMaxima($velocidade) {
            $this->velocidadeMaxima = $velocidade;
        }

        function getVelocidadeMaxima() {
            echo "A velocidade máxima deste carro é de $this->velocidadeMaxima km/h <br>";
        }
    }

    $lamborghini = new Carro;
    $lamborghini->rodas = 4;
    $lamborghini->cor = "Prata";
    $lamborghini->modelo = "Aventador";

    $lamborghini->setVelocidadeMaxima(400);

    $lamborghini->getVelocidadeMaxima();

    //

    $bmw = new Carro;
    $bmw->rodas = 4;
    $bmw->cor = "Branco";
    $bmw->modelo = "320i";

    $bmw->setVelocidadeMaxima(200);
    $bmw->getVelocidadeMaxima();
