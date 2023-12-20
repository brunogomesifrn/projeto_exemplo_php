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

  <?php
        $codigo = $_GET["codigo"];

        include "banco/conexao.php";
        $conn = conectar();
        $sql = "SELECT * FROM nucleo WHERE codigo=$codigo";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
          while($row = $result->fetch_assoc()) {
            echo "<div class='col-lg-6'>";
            echo "<h2>".$row["nome"]."</h2>";
            echo "<p class='text-justify'>Sigla: ".$row["sigla"]."</p>";
            echo "<p class='text-justify'>Coordenador: ".$row["coordenador"]."</p>";
            echo "<p class='text-justify'>Data de Criação: ".date('d/m/Y', strtotime($row["data_criacao"]))."</p>";
            
            echo "<p class='text-justify'>Área: ";
            $sql2 = "SELECT * FROM area WHERE id=".$row["area_id"];
            $result2 = $conn->query($sql2);
            if ($result2->num_rows > 0) {
                while($row2 = $result2->fetch_assoc()) {
                    echo $row2["nome"];
                }
            }
            echo "</p>";

            echo "<p class='text-justify'>Públicos:</p> ";

            // Listar aqui os públicos
        

            echo "</div>";
            
            echo "<div class='col-lg-6'>";
            echo "<img class='img-fluid rounded' src='src/media/".$row["imagem"]."' alt=''>";
            echo "</div>";
          }
        } else {
          echo "<td>Nenhum núcleo cadastrado</td><td></td><td></td>";
        }

        desconectar($conn);

?>


    

 


</div>
  </div>
  

   <!-- INCLUINDO CÓDIGO DE RODAPÉ COMUM A TODAS AS PÁGINAS -->
   <?php include 'bases/rodape.php'; ?>

</body>

</html>
