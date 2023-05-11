<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP 013</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Caixa Eletrônico</h1>

        <?php
            $valor = $_POST["valor"] ?? 0;

            if($valor === 0) {
                $cedulas100 = 0;
                $cedulas50 = 0;
                $cedulas10 = 0;
                $cedulas5 = 0;
            } else {
                $sacar = $valor;

                $cedulas100 = intdiv($sacar, 100);
                $sacar %= 100;
                $cedulas50 = intdiv($sacar, 50);
                $sacar %= 50;
                $cedulas10 = intdiv($sacar, 10);
                $sacar %= 10;
                $cedulas5 = intdiv($sacar, 5);
                $sacar %= 5;
            }


            $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
        ?>

        <form action="<?= $_SERVER["PHP_SELF"] ?>" method="post">
            <label for="valor">Qual valor você deseja sacar? (R$)*</label>
            <input type="number" name="valor" id="valor" value="<?= $valor ?>" step="5">
            <p>*Notas disponíveis: R$100, R$50, R$10 e R$5</p>
            <input type="submit" value="Sacar">
        </form>
    </main>

    <section>
        <h2>Saque de <?= numfmt_format_currency($padrao, $valor, "BRL") ?> realizado</h2>
        <p>O caixa eletrônico vai te entregar as seguintes notas:</p>

        <ul>
            <li><img src="img/cedula-100-reais.jpg" alt="Imagem Cédula 100 Reais" class="imagem-cedula"> x<?= $cedulas100 ?></li>
            <li><img src="img/cedula-50-reais.jpg" alt="Imagem Cédula 50 Reais" class="imagem-cedula"> x<?= $cedulas50 ?></li>
            <li><img src="img/cedula-10-reais.jpg" alt="Imagem Cédula 10 Reais" class="imagem-cedula"> x<?= $cedulas10 ?></li>
            <li><img src="img/cedula-5-reais.jpg" alt="Imagem Cédula 5 Reais" class="imagem-cedula"> x<?= $cedulas5 ?></li>
        </ul>
    </section>
</body>
</html>