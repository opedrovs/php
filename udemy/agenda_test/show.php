<?php 
    include_once("templates/header.php");
?>

    <main>

        <?php include_once("templates/btnback.html"); ?>

        <h1><?= $contact["name"] ?></h1>

        <p class="text-bold">Telefone:</p>
        <p><?= $contact["phone"] ?></p>

        <p class="text-bold">Observações:</p>
        <p><?= $contact["observations"] ?></p>

    </main>

<?php 
    include_once("templates/footer.php");
?>