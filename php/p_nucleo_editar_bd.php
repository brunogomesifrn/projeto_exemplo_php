<?php

//Receber dados do formulário
$codigo = $_POST["codigo"];
$nome = $_POST["nome"];
$sigla = $_POST["sigla"];
$data_criacao = $_POST["data_criacao"];
$coordenador = $_POST["coordenador"];
$area = $_POST["area"];

include "../banco/conexao.php";

$conn = conectar();

$sql = "UPDATE nucleo SET nome='$nome', sigla='$sigla', 
data_criacao='$data_criacao', coordenador='$coordenador', area_id=$area 
WHERE codigo=$codigo;";

$result = $conn->query($sql);
if($result){
    desconectar($conn);
    header("Location: ../p_nucleos.php");
    die();
}else{
    desconectar($conn);
    echo "<p>Problema</p>";
}

?>