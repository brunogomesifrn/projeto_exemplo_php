<!DOCTYPE html>
<html lang="en">

<head>
  <title>Núcleos de Pesquisa</title>

  <?php include 'bases/head.php'; ?>

  <style type="text/css">
    .carousel-item{
        height: 200px;
    } 
  </style>

</head>

<body>
  <?php include 'bases/menu.php'; ?>

  <div class="container">

<div class="row mt-5 mb-5">
 <div class="col-lg-6">
   <h2>Cadastro de Usuário</h2>
   <form action="php/cadastro_bd.php" method="post">
 <p>
     <label for="nome">Nome:</label>
     <input type="text" name="nome" id="nome">
 </p>
 <p>
     <label for="usuario">Usuário:</label>
     <input type="text" name="usuario" id="usuario">
 </p>
 <p>
     <label for="senha">Senha:</label>
     <input type="password" name="senha" id="senha">
 </p>

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
