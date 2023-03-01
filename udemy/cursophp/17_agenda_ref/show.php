<?php 
    include_once("./templates/header.php");

    $stmt = $conn->prepare("SELECT * FROM contatos WHERE id = :id");

    $id = $_GET["id"];

    $stmt->bindParam(":id", $id);

    $stmt->execute();

    $contato = $stmt->fetch();

    $nome = $contato["nome"];
    $telefone = $contato["telefone"];
    $observacoes = $contato["observacoes"];
?>

    <main class="create-content">

        <a href="index.php" target="_self" rel="prev" class="voltar">Voltar</a>

        <h1><?= $nome ?></h1>

        <p><strong>Telefone:</strong></p>
        <p><?= $telefone ?></p>

        <p><strong>Observações:</strong></p>
        <p><?= $observacoes ?></p>
    </main>

<?php 
    include_once("./templates/footer.php");
?>