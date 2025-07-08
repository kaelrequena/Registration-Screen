<?php
$host = "127.0.0.1";
$db_user = "root";
$db_pass = "password";
$db_name = "aprendiz";
$db_port = 3307;

$dbcon = new mysqli($host, $db_user, $db_pass, $db_name, $db_port);

if($dbcon->connect_errno){
    echo "conexão com banco falhou";
}else{
    echo "conexão bem-sucedida <br/><br/><br/>";
}

$buscaDados = "SELECT * FROM user";

$searchDados = $dbcon->query($buscaDados);

$dbcon->close();

$usuario = $searchDados->fetch_assoc();
print_r($usuario);  
echo "<hr /><br/><br/>";

$usuarios = $searchDados->fetch_all();
echo "<pre>";
    print_r($usuarios);
echo "</pre>";
$dbcon->close();


?>