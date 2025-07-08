<?php

$host = "127.0.0.1";
$db_user = "root";
$db_pass = "password";
$db_name = "aprendiz";
$db_port = "3307";


$conexao = new mysqli($host, $db_user, $db_pass, $db_name, $db_port);

if($conexao->connect_errno){
    echo "Deu ruim na conexão, motivo".$conexao->connect_errno;
}else{
    echo "Banco conectado com sucesso!!<br><br><br><br>";
}


$sql = "SELECT * FROM user";
$sqlInsert = "INSERT INTO user (nome,idade,email,senha) VALUES ('Teste2',18,'teste2@teste2.com.br','5252')";

$res = $conexao->query($sql);

$req = $conexao->query($sqlInsert);

if($req){
    echo "Usuario inserido";
}

print_r($res);
 
$conexao->close();

?>