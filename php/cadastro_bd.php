<?php

$nome = $_POST["nome"];
$usuario = $_POST["usuario"];
$senha = $_POST["senha"];

$senha = md5($senha);

include "../banco/conexao.php";

$conn = conectar();

$sql = "INSERT INTO usuario 
(nome, usuario, senha)
VALUES ('$nome', '$usuario', '$senha');";

$result = $conn->query($sql);
if($result){
    desconectar($conn);
    header("Location: ../login.php");
    die();
}else{
    desconectar($conn);
    echo "<p>Problema</p>";
}

?>