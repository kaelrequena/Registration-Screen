<?php
$host = "127.0.0.1";
$user = "root";
$pass = "password";
$dbname = "aprendiz";
$port = 3307;

$conn = new mysqli($host, $user, $pass, $dbname, $port);

if($conn->connect_errno){
    echo "Erro na conexão: (" . $conn->connect_errno . ") " . $conn->connect_error;
} else {
    echo "Conectado com sucesso!";
}

?>