<?php

$id = $_GET["id"];

include "../banco/conexao.php";

$conn = conectar();

$sql = "DELETE FROM nucleo WHERE id=$id;";

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