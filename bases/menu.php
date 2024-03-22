<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="./index.php">Núcleos</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="./index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="cursos.html">Núcleos</a>
          </li>

          <?php 
          // Verificar se sessão já foi iniciada anteriormentre
          if(session_id() == '')
            session_start();
          
          if (!isset($_SESSION['usuario'])) {
          ?>
          <li class="nav-item">
            <a class="nav-link" href="cadastro.php"><i class="fa fa-floppy-o"></i> Cadastro</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login.php"><i class="fa fa-sign-in"></i> Login</a>
          </li>
          <?php 
          }else{
          ?>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="perfil.php" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fa fa-user"></i> Usuário
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
              <a class="dropdown-item" href="perfil.php">Página de Perfil</a>
              <a class="dropdown-item" href="p_meus_dados.php">Meus Dados</a>
              <a class="dropdown-item" href="p_areas.php">Gerenciar Áreas</a>
              <a class="dropdown-item" href="p_publicos.php">Gerenciar Públicos</a>
              <a class="dropdown-item" href="p_usuarios.php">Gerenciar Usuários</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="sessao/remover_sessao.php"><i class="fa fa-sign-out"></i> Logout</a>
          </li>
          <?php 
          }
          ?>

        </ul>
      </div>
    </div>
  </nav>