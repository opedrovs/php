<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP 006</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Anatomia de uma Divisão</h1>

        <?php 
        
            $dividendo = $_POST["dividendo"] ?? 0;
            $divisor = $_POST["divisor"] ?? 1;
            $resto = $dividendo % $divisor;
            $quociente = (int) ($dividendo / $divisor);

        ?>

        <form action="<?= $_SERVER["PHP_SELF"] ?>" method="POST">
            <label for="dividendo">Dividendo</label>
            <input type="number" name="dividendo" id="dividendo" value="<?= $dividendo ?>">
            <label for="divisor">Divisor</label>
            <input type="number" name="divisor" id="divisor" value="<?= $divisor ?>">
            <input type="submit" value="Analisar">
        </form>
    </main>

    <section>
        <h2>Estrutura da Divisão</h2>

        <!-- <p>Dividendo: <strong><?= $dividendo ?></strong></p>
        <p>Divisor: <strong><?= $divisor ?></strong></p>
        <p>Resto: <strong><?= $resto ?></strong></p>
        <p>Quociente: <strong><?= $quociente ?></strong></p> -->

        <table class="estrutura">
            <tr>
                <td class="dividendo"><?= $dividendo ?></td>
                <td class="divisor"><?= $divisor ?></td>
            </tr>
            <tr>
                <td class="resto"><?= $resto ?></td>
                <td class="quociente"><?= $quociente ?></td>
            </tr>
        </table>
    </section>
</body>
</html>