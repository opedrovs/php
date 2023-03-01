<?php 
    include_once("./templates/header.php");
    
    $stmt = $conn->prepare("SELECT * FROM contatos");

    $stmt->execute();

    $contatos = $stmt->fetchAll();
    
    session_start();
?>

    <main>
        <?php
            if(isset($_SESSION['flash_message'])) {
                $message = $_SESSION['flash_message'];
                unset($_SESSION['flash_message']);
                echo "<div class='alert alert-success'>$message</div>";
            }
        ?>
        
        <h1>Minha agenda</h1>

        <div class="table-content">
            <table>
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nome</th>
                        <th scope="col" colspan="4">Telefone</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($contatos as $contato): ?>
                        <tr>
                            <td><?= $contato["id"] ?></td>
                            <td><?= $contato["nome"] ?></td>
                            <td><?= $contato["telefone"] ?></td>
                            <td><a href="show.php?id=<?= $contato["id"] ?>" target="_self" rel="next" class="visualizar">Visualizar</a></td>
                            <td><a href="edit.php?id=<?= $contato["id"] ?>" target="_self" rel="next" class="editar">Editar</a></td>
                            <td><a href="delete.php?id=<?= $contato["id"] ?>" target="_self" rel="next" class="excluir">Excluir</a></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </main>

<?php 
    include_once("./templates/footer.php");
?>