<?php

    # Exercício 50
    // Crie um array associativo com nomes e idades;
    // Imprima estes dados em uma tabela de HTML;
    // Dica: Utilize as tags do elemento table;

    $pessoas = [
        'Pedro' => 16,
        'Maria' => 27,
        'João' => 15,
        'Leandro' => 33,
        'Leonardo' => 43
    ];

?>

<table>
    <tr>
        <th>Nome</th>
        <th>Idade</th>
    </tr>
    
    <!-- Minha solução -->
    <!-- <?php foreach($pessoas as $nome => $idade) { ?>
    <tr>
        <td><?= $nome; ?></td>
        <td><?= $idade; ?></td>
    </tr>
    <?php } ?> -->

    <!-- Solução professor -->
    <?php foreach($pessoas as $nome => $idade): ?>
    <tr>
        <td><?= $nome; ?></td>
        <td><?= $idade; ?></td>
    </tr>
    <?php endforeach; ?>

</table>
