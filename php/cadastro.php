<?php
include 'C:\xampp\htdocs\TCC\php\conexao.php';
if (isset($_POST['nome']) && 
    isset($_POST['username']) && 
    isset($_POST['email']) && 
    isset($_POST['senha']) && 
    isset($_POST['phoneNumber']) && 
    isset($_POST['cep']) && 
    isset($_POST['cpf']))  {

        $nome = $_POST['nome'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $phoneNumber = $_POST['phoneNumber'];
        $cep = $_POST['cep'];
        $cpf = $_POST['cpf'];
                  
        $sql = "INSERT INTO users (userName ,Name, Email, Password, phoneNumber, Address, CPF) VALUES (?, ?, ?, ?, ?, ?, ?)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(array($username, $nome, $email, $senha,$phoneNumber, $cep, $cpf));

        if ($stmt->rowCount() > 0) {
          echo json_encode(["icon" => "success", "title" => "Cadastro realizado com sucesso!", "text" => "Clique em OK para efetuar o login", "cadastro" => true]);
      } else {
          echo json_encode(["icon" => "error", "title" => "Opsss...", "text" => "Erro ao cadastrar", "cadastro" => false]);
      }

  }
?>