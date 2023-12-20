<?php

//Receber dados do formulário
$nome = $_POST["nome"];
$sigla = $_POST["sigla"];
$data_criacao = $_POST["data_criacao"];
$coordenador = $_POST["coordenador"];
$area = $_POST["area"];
$publicos = $_POST["publicos"];

//Fazer o upload da imagem para a pasta media, dentro de src e salvar o nome dela em uma variável
$nome_imagem = $_FILES['imagem']['name'];
//$tmp = explode('.',$nome_arquivo);
//$extensaoResumo = strtolower(end($tmp));
//$extensaoResumo = strtolower(end(explode('.',$nomeResumo)));
//$caminhoresumo = "artigos/submissoes/artigo_$num_artigo"."."."$extensaoResumo";
move_uploaded_file($_FILES['imagem']['tmp_name'], ("../src/media/$nome_imagem"));

include "../banco/conexao.php";

$conn = conectar();

$sql = "INSERT INTO nucleo (nome, sigla, data_criacao, coordenador, imagem, area_id) 
VALUES ('$nome', '$sigla', '$data_criacao', '$coordenador', '$nome_imagem', '$area');";

$result = $conn->query($sql);

if($result){
    // Recuperar o ID do núcleo que foi gerado do núcleo cadastrado
    $id_nucleo = $conn->insert_id;

    // Verificar quais públicos foram selecionados e inserí-los para o núcleo

    foreach($publicos as $pub){
        $sql2 = "INSERT INTO nucleo_publico (nucleo_codigo, publico_id) 
        VALUES ('$id_nucleo', '$pub');";
        $conn->query($sql2);
    }

    desconectar($conn);
    header("Location: ../p_nucleos.php");
    die();
}else{
    desconectar($conn);
    echo "<p>Problema</p>";
}

?>