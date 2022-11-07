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


        

    }
?>