<?php

$id = $_GET["id"];

include "../banco/conexao.php";

$conn = conectar();

$sql = "DELETE FROM area WHERE id=$id;";

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