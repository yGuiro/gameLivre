<?php
include 'C:\xampp\htdocs\TCC\php\conexao.php';
if (isset($_POST['nome']) && 
    isset($_POST['email']) && 
    isset($_POST['senha']) && 
    isset($_POST['phoneNumber']) && 
    isset($_POST['cep']) && 
    isset($_POST['cpf']))  {

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $phoneNumber = $_POST['phoneNumber'];
        $cep = $_POST['cep'];
        $cpf = $_POST['cpf'];
                  
        $sql = "INSERT INTO users (Nome, Email, Senha, phoneNumber, CEP, CPF) VALUES ('$nome', '$email', '$senha','$phoneNumber', '$cep', '$cpf')";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(array($nome, $email, $senha,$phoneNumber, $cep, $cpf));
        // echo $stmt->rowCount() . " registro(s) inserido(s) com sucesso!!!";
        // echo "<script type='text/javascript'> alert('Conta criada com sucesso!!!') </script>";
        echo"<script language='javascript' type='text/javascript'>
        alert('Conta criada com sucesso!!!');window.location
        .href='index.php';</script>";

  }
?>