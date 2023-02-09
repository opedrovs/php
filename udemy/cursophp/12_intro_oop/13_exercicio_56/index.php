<?php

    # Exercício 56
    // Crie uma classe Humano com algumas propriedades e o método falar;
    // Crie uma outra classe Professor que herda de humano, crie também as propriedades e métodos particulares desta classe;
    // Exiba os valores das propriedades da classe pai e também utilize os métodos;

    // Minha solução
    
    class Humano {
        public $olhos = 2;
        public $pernas = 2;
        public $maos = 2;

        public function falar() {
            echo "Olá Mundo! <br>";
        }

    }

    class Professor extends Humano {
        public $materia = "Programação";
        public $anosDaAula;

        public function setAnosDaAula($anos) {
            $this->anosDaAula = $anos;
        }

        public function getAnosDaAula() {
            echo "Eu dou aula à $this->anosDaAula anos. <br>";
        }
    }

    $maria = new Humano;
    $maria->falar();
    echo "$maria->maos <br>";

    $matheus = new Professor;

    $matheus->falar();
    echo "$matheus->maos <br>";
    echo "$matheus->materia <br>";
    $matheus->setAnosDaAula(6);
    $matheus->getAnosDaAula();

    // Solução Professor

    // class Humano {
    //     public $maos = 2;
    //     public $pernas = 2;

    //     public function falar() {
    //         echo "Olá eu sou um humano <br>";
    //     }
    // }

    // class Professor extends Humano {

    //     public $disciplina = "Matemática";

    //     public function estaLecionando() {
    //         echo "O professor está dando aula de $this->disciplina <br>";
    //     }
    // }

    // $marcos = new Humano;
    // echo "$marcos->maos <br>";
    // $marcos->falar();

    // $joao = new Professor;
    // echo "$joao->pernas <br>";
    // echo "$joao->disciplina <br>";

    // $joao->falar();

    // $joao->estaLecionando();