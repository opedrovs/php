<?php

    include_once("connection.php");

    session_start();

    $data = $_POST;

    if(!empty($data)) {

        if($data["type"] === "create") {

            $name = $data["name"];
            $phone = $data["phone"];
            $observations = $data["observations"];

            $query = "INSERT INTO contacts (name, phone, observations) VALUES (:name, :phone, :observations)";

            $stmt = $conn->prepare($query);

            $stmt->bindParam(":name", $name);
            $stmt->bindParam(":phone", $phone);
            $stmt->bindParam(":observations", $observations);

            try {
                $stmt->execute();
                $_SESSION["msg"] = "Contato criado com sucesso!";
            } catch(PDOException $e) {
                echo "Erro: $e";
            }

        } else if($data["type"] === "edit") {
            
            $name = $data["name"];
            $phone = $data["phone"];
            $observations = $data["observations"];
            $id = $data["id"];

            $query = ("UPDATE contacts 
                        SET name  = :name, phone = :phone, observations = :observations 
                        WHERE id = :id");

            $stmt = $conn->prepare($query);

            $stmt->bindParam(":name", $name);
            $stmt->bindParam(":phone", $phone);
            $stmt->bindParam(":observations", $observations);
            $stmt->bindParam(":id", $id);
        
            try {
                $stmt->execute();
                $_SESSION["msg"] = "Contato atualizado com sucesso!";
            } catch(PDOException $e) {
                echo "Erro: $e";
            }

        } else if($data["type"] === "delete") {

            $id = $data["id"];

            $query = "DELETE FROM contacts WHERE id = :id";

            $stmt = $conn->prepare($query);

            $stmt->bindParam(":id", $id);

            try {
                $stmt->execute();
                $_SESSION["msg"] = "Contato deletado com sucesso!";
            } catch(PDOException $e) {
                echo "Erro: $e";
            }

        }

        header("Location: ../index.php");

    } else {

        $id;

        if(isset($_GET["id"])) {
            $id = $_GET["id"];
        }

        if(!empty($id)) {

            // Pegar um contato

            $contact = [];

            $query = "SELECT * FROM contacts WHERE id = :id";

            $stmt = $conn->prepare($query);

            $stmt->bindParam(":id", $id);

            $stmt->execute();

            $contact = $stmt->fetch();

        } else { 

            // Pegar vários contatos
            
            $contacts = [];
    
            $query = "SELECT * FROM contacts";
            
            $stmt = $conn->prepare($query);
    
            $stmt->execute();
        
            $contacts = $stmt->fetchAll();

        }

    
    }

    $conn = null;
