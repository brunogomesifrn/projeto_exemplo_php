<?php

$id = $_POST["id"];
$nome = $_POST["nome"];

include "../banco/conexao.php";

$conn = conectar();

$sql = "UPDATE publico SET nome='$nome' WHERE id=$id;";

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