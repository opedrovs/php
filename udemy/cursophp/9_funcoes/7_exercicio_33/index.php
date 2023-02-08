<?php

    # Exercício 33
    // Crie uma função;
    // Ela deve receber um parâmetro de nome idade;
    // Imprima "Olá eu sou o NOME e tenho X anos";

    function apresentarPessoa($nome, $idade, $genero) {
        echo "Olá, eu sou $genero $nome e tenho $idade anos. <br>";
    }

    apresentarPessoa("Pedro", 16, "o");
    apresentarPessoa("Maria", 16, "a");
    apresentarPessoa("Leonardo", 16, "o");
