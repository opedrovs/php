<?php

    # Exercício 41
    // Transforme a string "este item está em promoção";
    // Em "Este item está em PROMOÇÃO";
    // Obs: Você pode separar as strings, mas não pode escrever em caixa alta ou baixa manualmente, só com funções;

    $frase = "este item está em ";
    $palavraDaFrase = "promoção";

    echo ucfirst($frase) . strtoupper($palavraDaFrase);
