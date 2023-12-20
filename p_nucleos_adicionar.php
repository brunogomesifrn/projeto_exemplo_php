<?php include 'sessao/verificar_autenticado.php'; ?>

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
   <form action="php/p_nucleo_adicionar_bd.php" method="post">
 
  <p>
     <label for="nome">Nome:</label>
     <input type="text" name="nome" id="nome">
 </p>

 <p>
     <label for="sigla">Sigla:</label>
     <input type="text" name="sigla" id="sigla">
 </p>

 <p>
     <label for="data_criacao">Data de Criação:</label>
     <input type="date" name="data_criacao" id="data_criacao">
 </p>

 <p>
     <label for="coordenador">Coordenador:</label>
     <input type="text" name="coordenador" id="coordenador">
 </p>

 <p>
     <label for="imagem">Imagem:</label>
     <input type="file" name="imagem" id="imagem">
 </p>

 <p>
    Selecione uma área:<br />
    <?php
        include "banco/conexao.php";
        $conn = conectar();
        $sql = "SELECT * FROM area";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<input type='radio' name='area' value='".$row["id"]."' /> ".$row["nome"]."<br />";
        }
        } else {
        echo "Nenhuma área cadastrada";
        }
    ?>
 </p>

 <p>
    Selecione um ou mais público para o qual o núcleo é destinado:<br />
    <?php
        $sql = "SELECT * FROM publico";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<input type='checkbox' name='publicos[]' value='".$row["id"]."' /> ".$row["nome"]."<br />";
        }
        } else {
        echo "Nenhum público cadastrado";
        }
        desconectar($conn);
    ?>
 </p>
 
 
 <!--codigo int not null auto_increment primary key,
    nome VARCHAR(500) not null,
    sigla VARCHAR(50) not null,
    imagem VARCHAR(500) not null,
    data_criacao DATE not null,
    coordenador VARCHAR(500) not null,
    area_id int,-->


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
