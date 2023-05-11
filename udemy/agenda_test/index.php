<?php 
    include_once("templates/header.php");
?>

    <main>

        <h1>Minha agenda</h1>

        <?php if(isset($printMsg) && $printMsg !== ""): ?>
            <div class="alert-success">
                <p><?= $printMsg ?></p>
            </div>
        <?php endif; ?>

        <?php if(count($contacts) === 0): ?>

            <p class="center-p">Você não possui contatos, <a href="<?= $BASE_URL ?>/create.php" target="_self" rel="next">clique aqui para adicionar</a>.</p>

        <?php else: ?>
            <section class="table-container">
                <table>
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Telefone</th>
                            <th scope="colgroup" colspan="3"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($contacts as $contact): ?>
                            <tr>
                                <td><?= $contact["id"] ?></td>
                                <td><?= $contact["name"] ?></td>
                                <td><?= $contact["phone"] ?></td>
                                <td><a href="<?= $BASE_URL ?>/show.php?id=<?= $contact["id"] ?>" target="_self" rel="next" class="btn-show">Visualizar</a></td>
                                <td><a href="<?= $BASE_URL ?>/edit.php?id=<?= $contact["id"] ?>" target="_self" rel="next" class="btn-edit">Editar</a></td>
                                <td>
                                    <form action="<?= $BASE_URL ?>/config/process.php" method="POST">
                                        <input type="hidden" name="type" value="delete">
                                        <input type="hidden" name="id" value="<?= $contact["id"] ?>">

                                        <button type="submit" class="btn-delete">Excluir</button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </section>
        <?php endif; ?>
    </main>

<?php 
    include_once("templates/footer.php");
?>