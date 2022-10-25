<?php
include './conexao.php';

$email = $_POST['email'];
$senha = $_POST['senha'];

$result = $pdo->prepare("SELECT * FROM users WHERE Email = '$email' AND Password = '$senha'");
$result->execute();

if ($result->rowCount() > 0) {
    echo json_encode(["icon" => "success", "title" => "Login", "text" => "Login realizado com sucesso!", "login" => true]);
} else {
    echo json_encode(["icon" => "error", "title" => "Opsss...", "text" => "Erro ao realizar login", "login" => false]);
}
