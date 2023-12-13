<?php include 'sessao/verificar_autenticado.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Núcleos de Pesquisa</title>

    <!-- INCLUINDO CÓDIGO DE HEAD COMUM A TODAS AS PÁGINAS -->
    <?php include 'bases/head.php'; ?>

</head>

<body>
  <!-- INCLUINDO CÓDIGO DE MENU COMUM A TODAS AS PÁGINAS -->
  <?php include 'bases/menu.php'; ?>


  <div class="container">

  <div class="row mt-5 mb-5">
 <div class="col-lg-6">
   <h2>Áreas</h2>
  <p><a href="p_areas_adicionar.php">Adicionar</a></p>

   <table class="table table-striped">
   <thead>
    <tr>
      <th scope="col">Nome</th>
      <th scope="col">Editar</th>
      <th scope="col">Remover</th>
    </tr>
  </thead>
  <tbody>

<?php

include "banco/conexao.php";

$conn = conectar();

$sql = "SELECT * FROM area";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td scope='row'>".$row["nome"]."</td>";
    echo "<td><a href='p_areas_editar.php?id=".$row["id"]."'>EDITAR</td>";
    echo "<td><a href='php/p_area_remover_bd.php?id=".$row["id"]."'>REMOVER</td>";
    echo "</tr>";
  }
} else {
  echo "<td>Nenhuma área cadastrada</td><td></td><td></td>";
}

desconectar($conn);

?>
    
  </tbody>

</table>


 </div>
 <div class="col-lg-6">
   <img class="img-fluid rounded" src="src/img/campus.jpg" alt="">
 </div>
</div>
</div>

  </div>
  

   <!-- INCLUINDO CÓDIGO DE RODAPÉ COMUM A TODAS AS PÁGINAS -->
   <?php include 'bases/rodape.php'; ?>

</body>

</html>
