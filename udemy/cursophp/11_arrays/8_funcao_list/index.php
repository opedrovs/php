<?php

    $pessoa = ['Pedro', 16, 'Programador', 'castanho'];

    print_r($pessoa);
    echo "<br>";

    list($nome, $idade, $profissao, $corDosOlhos) = $pessoa;

    echo "$nome <br>";
    echo "$idade <br>";
    echo "$profissao <br>";
    echo "$corDosOlhos <br>";
