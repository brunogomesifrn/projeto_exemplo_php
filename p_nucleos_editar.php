<?php include 'sessao/verificar_autenticado.php'; ?>

<?php

$codigo = $_GET["codigo"];

include "banco/conexao.php";

$conn = conectar();

$sql = "SELECT * FROM nucleo where codigo=$codigo";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    $nome = $row["nome"];
    $sigla = $row["sigla"];
    $imagem = $row["imagem"];
    $data_criacao = $row["data_criacao"];
    $coordenador = $row["coordenador"];
    $area_id = $row["area_id"];
  }
} else {
  echo "<td>Nenhuma área cadastrada</td><td></td><td></td>";
}



?>


<!DOCTYPE html>
<html lang="en">

<head>
  <title>Núcleos de Pesquisa</title>

  <?php include 'bases/head.php'; ?>

</head>

<body>
  <?php include 'bases/menu.php'; ?>

  <div class="container">

<div class="row mt-5 mb-5">
 <div class="col-lg-6">
   <h2>Cadastro de Núcleo</h2>
   <form action="php/p_nucleo_editar_bd.php" method="post" enctype="multipart/form-data">
 
  <p>
     <label for="nome">Nome:</label>
     <input type="text" name="nome" id="nome" value="<?php echo $nome; ?>">
 </p>

 <p>
     <label for="sigla">Sigla:</label>
     <input type="text" name="sigla" id="sigla" value="<?php echo $sigla; ?>">
 </p>

 <p>
     <label for="data_criacao">Data de Criação:</label>
     <input type="date" name="data_criacao" id="data_criacao" value="<?php echo $data_criacao; ?>">
 </p>

 <p>
     <label for="coordenador">Coordenador:</label>
     <input type="text" name="coordenador" id="coordenador" value="<?php echo $coordenador; ?>">
 </p>

 <p>
    Selecione uma área:<br />
    <?php
        
        $sql = "SELECT * FROM area";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<input type='radio' name='area' value='".$row["id"]."'";
            //Verificar se foi a área selecionada
            if($row["id"] == $area_id){
                echo " checked ";
            }
            
            echo "/> ".$row["nome"]."<br />";
        }
        } else {
        echo "Nenhuma área cadastrada";
        }
    ?>
 </p>

 
<input type="hidden" name="codigo" value="<?php echo $codigo; ?>">


 <p><input type="submit" value="Cadastrar"></p>
</form>
 </div>
 <div class="col-lg-6">
   <img class="img-fluid rounded" src="src/img/campus.jpg" alt="">
 </div>
</div>
</div>

   <?php include 'bases/rodape.php'; ?>

</body>

</html>
