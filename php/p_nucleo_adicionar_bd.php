<?php

$nome = $_POST["nome"];
$sigla = $_POST["sigla"];
$data_criacao = $_POST["data_criacao"];
$coordenador = $_POST["coordenador"];
$imagem = $_POST["imagem"];
$area = $_POST["area"];
$publicos = $_POST["publicos"];

include "../banco/conexao.php";

$conn = conectar();

$sql = "INSERT INTO publico (nome, sigla, data_criacao, coordenador, imagem, area_id) 
VALUES ('$nome', '$sigla', '$data_criacao', '$coordenador', '$nome_imagem', '$area');";

$result = $conn->query($sql);
if($result){
    desconectar($conn);
    header("Location: ../p_publicos.php");
    die();
}else{
    desconectar($conn);
    echo "<p>Problema</p>";
}

?>