<?php 

    // Exercício 11
    // Crie um arquivo PHP;
    // Teste a expressão: "5" * 12;
    // Utilize a função gettype() com o resultado como parâmetro para chegar o tipode resultante da operação;

    $expressao = "5" * 12;

    echo $expressao . "<br>";

    echo gettype($expressao);
    
    echo "<br>";
    echo gettype([]);
    echo "<br>";
    echo gettype(12.2);
    echo "<br>";
    echo gettype("teste");
