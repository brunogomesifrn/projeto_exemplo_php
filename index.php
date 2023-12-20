<!DOCTYPE html>
<html lang="en">

<head>
  <title>Núcleos de Pesquisa</title>

  <!-- INCLUINDO CÓDIGO DE HEAD COMUM A TODAS AS PÁGINAS -->
  <?php include 'bases/head.php'; ?>

  <style type="text/css">
    .carousel-item{
        height: 200px;
    } 
  </style>

</head>

<body>
  <!-- INCLUINDO CÓDIGO DE MENU COMUM A TODAS AS PÁGINAS -->
  <?php include 'bases/menu.php'; ?>



  <!-- Page Content -->
  <div class="container">

  <br />

  <!-- Features Section -->
    <div class="row">
      <div class="col-lg-6">
        <h2>IFRN - Campus Canguaretama</h2>
        <p class="text-justify">O Instituto está localizado na cidade de Canguaretama-RN, na microrregião do Litoral Sul do estado, mesorregião do Leste Potiguar, e tem foco de atuação estabelecido nas áreas de Eletromecânica, Turismo e Informática.</p>
        <p class="text-justify">A Coordenação de <strong>Cursos FIC</strong> do Campus Canguaretama foi criada em 21 de maio de 2015 através da portaria nº 056/2015–DG/CANG, e desde então mais de 30 cursos foram oferecidos ao público interno e externo ao Instituto.</p>
      </div>
      <div class="col-lg-6">
        <img class="img-fluid rounded" src="src/img/campus_.jpg" alt="">
      </div>
    </div>
    <!-- /.row -->


<br /><br />

    <!-- Portfolio Section -->
    <h2>Últimos Cursos</h2>

    <div class="row">

    <?php
        include "banco/conexao.php";
        $conn = conectar();
        $sql = "SELECT * FROM nucleo";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
          while($row = $result->fetch_assoc()) {
            echo "<div class='col-lg-4 col-sm-6 portfolio-item'>";
            echo "<div class='card h-100'>";
            echo "<a href='nucleo_detalhes.php?codigo=".$row["codigo"]."'>";
            echo "<img class='card-img-top' src='src/media/".$row["imagem"]."' alt=''>";
            echo "</a>";
            echo "<div class='card-body'>";
            echo "<h4 class='card-title'>";
            echo "<a href='nucleo_detalhes.php?codigo=".$row["codigo"]."'>".$row["nome"]."</a>";
            echo "</h4>";
            echo "<p class='card-text text-uppercase'>".$row["sigla"]."</p>";
            echo "</h4></div></div></div>";
        
          }
        } else {
          echo "<td>Nenhum núcleo cadastrado</td><td></td><td></td>";
        }

        desconectar($conn);

?>

      <!--<div class="col-lg-4 col-sm-6 portfolio-item">
        <div class="card h-100">
          <a href="curso_detalhes.html"><img class="card-img-top" src="src/img/curso_no_img.jpg" alt=""></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="curso_detalhes.html">Curso 1</a>
            </h4>
            <p class="card-text">Resumo 1</p>
          </div>
        </div>
      </div>


      <div class="col-lg-4 col-sm-6 portfolio-item">
        <div class="card h-100">
          <a href="curso_detalhes.html"><img class="card-img-top" src="src/img/curso_no_img.jpg" alt=""></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="curso_detalhes.html">Curso 2</a>
            </h4>
            <p class="card-text">Resumo 2</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6 portfolio-item">
        <div class="card h-100">
          <a href="curso_detalhes.html"><img class="card-img-top" src="src/img/curso_no_img.jpg" alt=""></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="curso_detalhes.html">Curso 3</a>
            </h4>
            <p class="card-text">Resumo 3</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6 portfolio-item">
        <div class="card h-100">
          <a href="curso_detalhes.html"><img class="card-img-top" src="src/img/curso_no_img.jpg" alt=""></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="curso_detalhes.html">Curso 4</a>
            </h4>
            <p class="card-text">Resumo 4</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6 portfolio-item">
        <div class="card h-100">
          <a href="curso_detalhes.html"><img class="card-img-top" src="src/img/curso_no_img.jpg" alt=""></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="curso_detalhes.html">Curso 5</a>
            </h4>
            <p class="card-text">Resumo 5</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6 portfolio-item">
        <div class="card h-100">
          <a href="curso_detalhes.html"><img class="card-img-top" src="src/img/curso_no_img.jpg" alt=""></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="curso_detalhes.html">Curso 6</a>
            </h4>
            <p class="card-text">Resumo 6</p>
          </div>
        </div>
      </div>-->

    </div>
    <!-- /.row -->

  

   

  </div>
  <!-- /.container -->

   <!-- INCLUINDO CÓDIGO DE RODAPÉ COMUM A TODAS AS PÁGINAS -->
   <?php include 'bases/rodape.php'; ?>

</body>

</html>
