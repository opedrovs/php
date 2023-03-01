<?php
    include_once("./config/connect.php");

    $id = $_GET["id"];

    $stmt = $conn->prepare("DELETE FROM contatos WHERE id = :id");

    $stmt->bindParam(":id", $id);

    $stmt->execute();
    
    session_start();
    
    $_SESSION['flash_message'] = "Contato removido com sucesso!";
    
    header("Location: index.php");

    die();