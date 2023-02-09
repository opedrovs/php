<?php

    # Exercício 53
    // Crie uma classe Cachorro;
    // Crie o método latir e andar;
    // Execute o método em novas instâncias da classe;

    class Cachorro {
        function latir() {
            echo "Auh auh <br>";
        }

        function andar($m) {
            echo "O cachorro andou $m metros <br>";
        }
    }

    $viraLata = new Cachorro;
    $basset = new Cachorro;

    $viraLata->latir();
    $basset->latir();
    $viraLata->andar(1000);
    $basset->andar(50);
