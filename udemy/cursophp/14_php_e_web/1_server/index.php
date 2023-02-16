<?php

    print_r($_SERVER);

    echo "<br>";

    echo $_SERVER['HTTP_HOST'] . "<br>";

    if($_SERVER['SERVER_NAME'] == 'localhost') {
        echo "Está acessando o localhost";
    }