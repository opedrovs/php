<?php

    include_once("url.php");
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
                $_SESSION["msg"] = "Contato cadastrado com sucesso!";

            } catch(PDOException $e) {

                echo "Erro: $e";

            }

        } else if($data["type"] === "edit") {

            $id = $data["id"];
            $name = $data["name"];
            $phone = $data["phone"];
            $observations = $data["observations"];

            $query = "UPDATE contacts SET name = :name, phone = :phone, observations = :observations WHERE id = :id";

            $stmt = $conn->prepare($query);

            $stmt->bindParam(":id", $id);
            $stmt->bindParam(":name", $name);
            $stmt->bindParam(":phone", $phone);
            $stmt->bindParam(":observations", $observations);

            try {

                $stmt->execute();
                $_SESSION["msg"] = "Contato editado com sucesso!";

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

            $contact = [];

            $query = "SELECT * FROM contacts WHERE id = :id";

            $stmt = $conn->prepare($query);

            $stmt->bindParam(":id", $id);

            $stmt->execute();

            $contact = $stmt->fetch();

        } else {

            $contacts = [];
    
            $query = "SELECT * FROM contacts";
    
            $stmt = $conn->prepare($query);
    
            $stmt->execute();
    
            $contacts = $stmt->fetchAll();

        }


    }

    $stmt = null;
