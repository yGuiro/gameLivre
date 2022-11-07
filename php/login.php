<?php
session_start();

include './conexao.php';

$username = $_POST['username'];
$senha = $_POST['senha'];


$result = $pdo->prepare("SELECT * FROM users WHERE userName = '$username' AND Password = '$senha'");
$result->execute();

if ($result->rowCount() > 0) {
    $_SESSION['logado'] = $username;
    echo json_encode(["icon" => "success", "title" => "Login", "text" => "Login realizado com sucesso!", "login" => true]);
} else {
    echo json_encode(["icon" => "error", "title" => "Opsss...", "text" => "Erro ao realizar login", "login" => false]);
}
