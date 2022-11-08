<?php
include 'C:\xampp\htdocs\TCC\php\conexao.php';
if (isset($_POST['productName']) && 
    isset($_POST['proposalType']) && 
    isset($_POST['productType']) && 
    isset($_POST['date']) && 
    isset($_POST['description']) && 
    isset($_POST['itemsIMG']))  {

        $productName = $_POST['productName'];
        $proposalType = $_POST['proposalType'];
        $productType = $_POST['productType'];
        $date = $_POST['date'];
        $description = $_POST['description'];
        $itemsIMG = $_POST['itemsIMG'];
                  
        $sql = "INSERT INTO proposal (productName ,proposalType, productType, date, description, itemsIMG) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(array($productName, $proposalType, $productType, $date, $description, $itemsIMG));

        if ($stmt->rowCount() > 0) {
            echo json_encode(["icon" => "success", "title" => "Login", "text" => "Login realizado com sucesso!", "login" => true]);
        } else {
            echo json_encode(["icon" => "error", "title" => "Opsss...", "text" => "Erro ao realizar login", "login" => false]);
        }

    }
?>