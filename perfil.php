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


  <div class="container mt-5">

  <h2>Página de Perfil</h2>

<div class="row">

<div class="col-lg-4 col-sm-6 portfolio-item">
    <div class="card h-100">
      <a href="p_meus_dados.php">
        <img class="card-img-top" src="src/img/curso_no_img.jpg" alt="">
        <div class="card-body">
          <h4 class="card-title">
            Meus Dados
        </div>
      </a>
    </div>
  </div>

  <div class="col-lg-4 col-sm-6 portfolio-item">
    <div class="card h-100">
      <a href="p_nucleos.php">
        <img class="card-img-top" src="src/img/curso_no_img.jpg" alt="">
        <div class="card-body">
          <h4 class="card-title">
            Gerenciar Núcleos
        </div>
      </a>
    </div>
  </div>

  <div class="col-lg-4 col-sm-6 portfolio-item">
    <div class="card h-100">
      <a href="p_areas.php">
        <img class="card-img-top" src="src/img/curso_no_img.jpg" alt="">
        <div class="card-body">
          <h4 class="card-title">
            Gerenciar Áreas
        </div>
      </a>
    </div>
  </div>

  <div class="col-lg-4 col-sm-6 portfolio-item">
    <div class="card h-100">
      <a href="p_publicos.php">
        <img class="card-img-top" src="src/img/curso_no_img.jpg" alt="">
        <div class="card-body">
          <h4 class="card-title">
            Gerenciar Públicos
        </div>
      </a>
    </div>
  </div>

  <div class="col-lg-4 col-sm-6 portfolio-item">
    <div class="card h-100">
      <a href="curso_detalhes.html">
        <img class="card-img-top" src="src/img/curso_no_img.jpg" alt="">
        <div class="card-body">
          <h4 class="card-title">
            Gerenciar Usuários
        </div>
      </a>
    </div>
  </div>

  </div>
  </div>
  

   <!-- INCLUINDO CÓDIGO DE RODAPÉ COMUM A TODAS AS PÁGINAS -->
   <?php include 'bases/rodape.php'; ?>

</body>

</html>
