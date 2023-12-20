<?php include 'sessao/verificar_autenticado.php'; ?>

<?php

$id = $_GET["id"];

include "banco/conexao.php";

$conn = conectar();

$sql = "SELECT * FROM publico where id=$id";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    $nome_publico = $row["nome"];
  }
} else {
  echo "<td>Nenhuma área cadastrada</td><td></td><td></td>";
}

desconectar($conn);

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
   <h2>Edição de Público</h2>
   <form action="php/p_publico_editar_bd.php" method="post">
 <p>
     <label for="nome">Nome:</label>
     <input type="text" name="nome" id="nome" value="<?php echo $nome_publico; ?>" />
 </p>

<input type="hidden" name="id" value="<?php echo $id; ?>" />

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
