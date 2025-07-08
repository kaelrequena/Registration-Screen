<?php
$nomeUser = $_POST['nomeUsuario'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$confirmSenha = $_POST['confirmSenha'];


$db_host = "127.0.0.1";
$db_user = "root";
$db_pass = "password";
$db_name = "aprendiz";
$db_port = 3307;

$conn = new mysqli($db_host,$db_user,$db_pass,$db_name,$db_port);

$salvaDados = $conn->prepare("INSERT INTO user(nome,email,senha,confirmSenha) VALUES (?,?,?,?)");
$salvaDados->bind_param('ssss',$nomeUser, $email, $senha, $confirmSenha);

if($salvaDados->execute()){
    echo "<h1>Usuario cadastrado</h1>";
}else{
    echo "<h1>Erro servidor</h1>";
}

$salvaDados->close();
$conn->close();
?>