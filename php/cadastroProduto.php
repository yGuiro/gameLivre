<?php
session_start();

include 'C:/xampp/htdocs/TCC/php/conexao.php';


if (isset($_POST['productName']) && 
    isset($_POST['proposalType']) && 
    isset($_POST['productType']) && 
    isset($_POST['date']) && 
    isset($_SESSION['logado']) && 
    isset($_POST['description']))  {

        $userName = $_SESSION['logado'];
        $productName = $_POST['productName'];
        $proposalType = $_POST['proposalType'];
        $productType = $_POST['productType'];
        $date = $_POST['date'];
        $description = $_POST['description'];
        // $itemsIMG = $_POST['itemsIMG'];
                  
        $sql = "INSERT INTO proposal (`userName`, `productName` ,`proposalType`, `productType`, `date`, `description`) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $pdo->prepare($sql);
        $result = $stmt->execute(array($userName, $productName, $proposalType, $productType, $date, $description));
        // echo json_encode(["icon" => "success", "title" => "Ai sim", "text" => "Produto cadastrado com sucesso!", "cadastro" => true]);

        if ($stmt->rowCount() > 0) {
            echo json_encode(["icon" => "success", "title" => "Produto cadastrado com sucesso!", "text" => "Clique em OK para ser redirecionado para a vitrine", "cadastro" => true]);
        } else {
            echo json_encode(["icon" => "error", "title" => "Opsss...", "text" => "Erro ao cadastrar o produto", "cadastro" => false]);
        }

    }
