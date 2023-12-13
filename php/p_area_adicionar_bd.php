<?php

$nome = $_POST["nome"];

include "../banco/conexao.php";

$conn = conectar();

$sql = "INSERT INTO area (nome) VALUES ('$nome');";

$result = $conn->query($sql);
if($result){
    desconectar($conn);
    header("Location: ../p_areas.php");
    die();
}else{
    desconectar($conn);
    echo "<p>Problema</p>";
}

?>