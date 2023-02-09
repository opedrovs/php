<?php

    class Humano {

        public $idade = 29;

        public function falar() {
            echo "Olá Mundo! <br>";
        }

        private function gritar() {
            echo "PHP É MUITO BOM! <br>";
        }

        public function acessaGritar() {
            $this->gritar();
        }

        protected function falarBaixinho() {
            echo "lalala <br>";
        }

        public function acessaFalarBaixinho() {
            $this->falarBaixinho();
        }
    }

    class Programador extends Humano {
        public function acessaFalarBaixinhoProgramador() {
            $this->falarBaixinho();
        }
    }

    $ze = new Humano;

    $ze->falar();
    $ze->acessaGritar();
    $ze->acessaFalarBaixinho();

    $pedro = new Programador;

    echo $pedro->idade . "<br>";
    $pedro->falar();
    $pedro->acessaGritar();
    $pedro->acessaFalarBaixinhoProgramador();