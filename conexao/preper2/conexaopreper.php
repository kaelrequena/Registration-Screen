<?php

$db_host = "127.0.0.1";
$db_user = "root";
$db_pass = "password";
$db_name = "aprendiz";
$db_port = 3307;

$conn = new mysqli($db_host, $db_user, $db_pass, $db_name, $db_port);

if($conn->connect_errno){
    echo "Conexão com o banco falhou";
}else{
    echo "Conexão bem sucedida";
}

$idUser = 1;

//busca geral
$buscandoUser = $conn->query("SELECT * FROM user");
$resultadoBuscadores = $buscandoUser->fetch_all();


//buscando 1 especifico
$buscarUserEspecifico = $conn->prepare("SELECT * FROM user WHERE id = ?");
$buscarUserEspecifico->bind_param('i', $idUser);
$buscarUserEspecifico->execute();
$resultado = $buscarUserEspecifico->get_result();
$ipresultado = $resultado->fetch_assoc();
$buscarUserEspecifico->close();


echo "<pre>";
    print_r($resultadoBuscadores);
echo "</pre>";

echo "<hr/><br />";

echo "<pre>";
    print_r($ipresultado);
echo "</pre>";

print_r($ipresultado['id']);
?>
