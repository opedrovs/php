<?php

    # Exercício 57
    // Crie uma classe Cachorro com propriedades;
    // Inicie as propriedades via constructor;
    // Crie um método para exibir cada uma das propriedades que você criou;

    // Minha solução
    
    // class Cachorro {
    //     public $nome;
    //     public $raca;
    //     public $patas;
    //     public $cor;

    //     function __construct($nome, $raca, $patas, $cor) {
    //         $this->nome = $nome;
    //         $this->raca = $raca;
    //         $this->patas = $patas; 
    //         $this->cor = $cor;
    //     }

    //     public function nomeCachorro() {
    //         echo "O cachorro se chama $this->nome. <br>";
    //     }

    //     public function racaCachorro() {
    //         echo "O cachorro é da raça $this->raca. <br>";
    //     }

    //     public function patasCachorro() {
    //         echo "O cachorro tem $this->patas patas. <br>";
    //     }

    //     public function corCachorro() {
    //         echo "O cachorro é da cor $this->cor. <br>";
    //     }
    // }

    // $pingo = new Cachorro("Pingo", "Basset", 4, "Preto");
    // $pingo->nomeCachorro();
    // $pingo->racaCachorro();
    // $pingo->patasCachorro();
    // $pingo->corCachorro();

    // Solução professor

    class Cachorro {
        public $nome;
        public $cor;
        public $patas;
    
        function __construct($nome, $cor, $patas) {
            $this->nome = $nome;
            $this->cor = $cor;
            $this->patas = $patas;
        }

        public function exibirAnimal() {
            echo "O nome do cachorro é $this->nome, ele tem a cor $this->cor, e tem $this->patas patas <br>";
        }
    }

    $turca = new Cachorro("Turca", "Preta", 4);
    $turca->exibirAnimal();

    $nome = "Tubarão";
    $cor = "Branca";
    $patas = 4;

    $tubarao = new Cachorro($nome, $cor, $patas);
    $tubarao->exibirAnimal();