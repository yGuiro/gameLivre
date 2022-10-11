<?php
    $servidor = "localhost";//127.0.0.1
    $porta = "3306";
    $usuario = "root";
    $senha = "";
    $database = "gl_gamelivre";

    try {
        $conn = new PDO("mysql:host=$servidor;dbname=$database", 
        $usuario, $senha);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //echo "Conectou com sucesso!!!";
    } catch (PDOException $e) {
        echo "Conexão falhou: " . $e->getMessage();
    }


?>