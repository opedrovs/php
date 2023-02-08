<?php

    # Exercício 51
    // Crie um array associativo com chaves com valor de nomes, e valores com uma pontuação;
    // Ordene os dados do maior para o menor;
    // Exiba uma lista, simulando ranking, em HTML;

    $ranking = [
        "Marcos" => 566,
        "Fernando" => 289,
        "Ana" => 468,
        "Leonardo" => 684,
        "Gustavo" => 250,
        "Matheus" => 592
    ];

    arsort($ranking);

?>

<h1>Ranking</h1>

<ol>
    <?php foreach($ranking as $nome => $pontuacao): ?>
        <li><?= $nome ?> -> <?= $pontuacao ?> pontos</li>
    <?php endforeach; ?>
</ol>
