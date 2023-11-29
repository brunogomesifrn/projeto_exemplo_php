<?php

$usuario = $_POST["usuario"];
$senha = $_POST["senha"];

$senha = md5($senha);

include "../banco/conexao.php";

$conn = conectar();

$sql = "SELECT * FROM usuario 
WHERE usuario='$usuario' and senha='$senha';";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        session_start();
        $_SESSION['usuario'] = $row['nome'];
    }
    desconectar($conn);
    header("Location: ../perfil/");
    die();
}else{
    desconectar($conn);
    header("Location: ../login.php");
    die();
}

?>