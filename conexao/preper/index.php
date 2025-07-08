<?php

$host = "127.0.0.1";
$db_user = "root";
$db_pass = "password";
$db_name = "aprendiz";
$db_port = 3307;

$conn = new mysqli($host, $db_user, $db_pass, $db_name, $db_port);
if($conn->connect_errno){
    echo "Deu erro na conexão".$conn->connect_errno;
}else{
    echo "Conexão bem-sucedida !!";
}

$nome = "Mel";
$idade = 18;
$email = "teste@teste.com";
$password = "teste1234";

$stmt = $conn->prepare("INSERT INTO user(nome,idade,email,senha) VALUES (?,?,?,?)");
$stmt->bind_param("siss", $nome, $idade, $email, $password);
$stmt->execute();
$stmt->close();

?>