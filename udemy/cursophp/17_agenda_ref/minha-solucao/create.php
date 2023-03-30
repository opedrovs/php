<?php 
    include_once("./templates/header.php");

    if($_POST) {

        session_start();

        $error = false;

        if(trim($_POST["nome"]) === "") {
            $error = true;
            $_SESSION['flash_message'] = "Contato deve conter um nome.";
        }

        if(trim($_POST["telefone"]) === "" || !is_numeric($_POST["telefone"])) {
            $error = true;
            $_SESSION['flash_message'] = "Contato deve conter um telefone válido.";
        }

        if(trim($_POST["observacoes"]) === "") {
            $error = true;
            $_SESSION['flash_message'] = "Contato deve conter observações.";
        }

        if(!$error) {
            $stmt = $conn->prepare("INSERT INTO contatos (nome, telefone, observacoes) VALUES (:nome, :telefone, :observacoes)");
    
            $nome = $_POST["nome"];
            $telefone = $_POST["telefone"];
            $observacoes = $_POST["observacoes"];
    
            $stmt->bindParam(":nome", $nome);
            $stmt->bindParam(":telefone", $telefone);
            $stmt->bindParam(":observacoes", $observacoes);
    
            $stmt->execute();
    
            $_SESSION['flash_message'] = "Contato criado com sucesso!";
    
            header("Location: index.php");
    
            die();
        }
        
    }
?>

    <main class="create-content">

        <?php
            if(isset($_SESSION['flash_message'])) {
                $message = $_SESSION['flash_message'];
                unset($_SESSION['flash_message']);
                echo "<div class='alert alert-danger'>$message</div>";
            }
        ?>

        <a href="index.php" target="_self" rel="prev" class="voltar">Voltar</a>

        <h1>Criar contato</h1>

        <form action="create.php" method="POST">
            
            <div class="campo">
                <label for="nome">Nome do contato:</label>
                <input type="text" name="nome" id="nome" placeholder="Digite o nome">
            </div>

            <div class="campo">
                <label for="telefone">Telefone do contato:</label>
                <input type="text" name="telefone" id="telefone" placeholder="Digite o telefone">
            </div>

            <div class="campo">
                <label for="observacoes">Observações</label>
                <textarea name="observacoes" id="observacoes" cols="30" rows="5" placeholder="Insira as observações"></textarea>
            </div>
        
            <div class="campo">
                <button type="submit">Cadastrar</button>
            </div>

        </form>
    </main>

<?php 
    include_once("./templates/footer.php");
?>