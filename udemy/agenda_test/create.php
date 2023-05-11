<?php 
    include_once("templates/header.php");
?>

    <main>

        <?php include_once("templates/btnback.html"); ?>

        <h1>Criar contato</h1>


        <form action="<?= $BASE_URL ?>/config/process.php" method="POST" class="create-form">
            <input type="hidden" name="type" value="create">

            <div class="campo">
                <label for="name">Nome do contato:</label>
                <input type="text" name="name" id="name" placeholder="Digite o nome" required>
            </div>

            <div class="campo">
                <label for="phone">Telefone do contato:</label>
                <input type="text" name="phone" id="phone" placeholder="Digite o telefone" required>
            </div>

            <div class="campo">
                <label for="observations">Observações:</label>
                <textarea name="observations" id="observations" cols="30" rows="5" placeholder="Insira as observações"></textarea>
            </div>
        
            <button type="submit" class="btn-submit">Cadastrar</button>
        </form>

    </main>

<?php 
    include_once("templates/footer.php");
?>