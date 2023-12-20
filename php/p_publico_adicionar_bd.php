<?php

$nome = $_POST["nome"];

include "../banco/conexao.php";

$conn = conectar();

$sql = "INSERT INTO publico (nome) VALUES ('$nome');";

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