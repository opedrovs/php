<?php 
    include_once("templates/header.php");
?>

    <main>

        <?php include_once("templates/btnback.html"); ?>

        <h1>Editar contato</h1>


        <form action="<?= $BASE_URL ?>/config/process.php" method="POST" class="edit-form">
            <input type="hidden" name="type" value="edit">
            <input type="hidden" name="id" value="<?= $_GET["id"] ?>">

            <div class="campo">
                <label for="name">Nome do contato:</label>
                <input type="text" name="name" id="name" placeholder="Digite o nome" required value="<?= $contact["name"] ?>">
            </div>

            <div class="campo">
                <label for="phone">Telefone do contato:</label>
                <input type="text" name="phone" id="phone" placeholder="Digite o telefone" required value="<?= $contact["phone"] ?>">
            </div>

            <div class="campo">
                <label for="observations">Observações:</label>
                <textarea name="observations" id="observations" cols="30" rows="5" placeholder="Insira as observações"><?= $contact["observations"] ?></textarea>
            </div>
        
            <button type="submit" class="btn-submit">Atualizar</button>
        </form>

    </main>

<?php 
    include_once("templates/footer.php");
?>