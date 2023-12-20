<?php

$id = $_GET["id"];

include "../banco/conexao.php";

$conn = conectar();

$sql = "DELETE FROM publico WHERE id=$id;";

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