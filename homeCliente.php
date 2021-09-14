<?php
include 'dbconfig.php';
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link rel="icon" href="https://www.dominiowebsites.com.br/download/image?token=ef46604c1500ba58410c68ec4eae5527">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />

  <link href="style.css" rel="stylesheet" type="text/css">
  <title>Destack Associados</title>
</head>

<body class="text-center-home">


  <nav class="navbar navbar-expand navbar-dark" style="background: black">
    <div class="container-fluid">

      <a href="homeCliente.php">
        <img src="./imagens_empresa/65ab872f-fa8e-4b2b-bdd4-376c93f02752_uploads_destacklogo.png" width="150px" href="home.php">

      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="menu_topo_admin">
        <ul class="navbar-nav me-auto  mb-2 mb-lg-0">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <img src="https://www.dominiowebsites.com.br/download/image?token=ef46604c1500ba58410c68ec4eae5527" width="20" height="20">
              Home Cliente
            </a>



            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">Perfil</a></li>
              <li><a class="dropdown-item" href="#">Clientes</a></li>
              <li><a class="dropdown-item" href="#">Fornecedores</a></li>
              <li><a class="dropdown-item" href="#">Sair</a></li>
            </ul>
          </li>
        </ul>

      </div>
    </div>
  </nav>
  <div>
    <div class="check-menu">
      <input type="checkbox"id="chec">
      <label for="chec"><i class="fal fa-bars fa-3x" style="color: blanchedalmond;"></i></label>

      <nav class="menu-lateral">
        <ul class="list-unstyled">
          <li><a href="paginaDashboard.php">DASHBOARD</a></li>
          <li><a href="paginaLancar.php">LANÇAR</a></li>
          <li><a href="paginaFornecedore.php">FORNECEDORES</a></li>
          <li><a href="paginaGrafico.php">GRÁFICOS</a></li>
          <li><a href="paginaConsultar.php">CONSULTAR</a></li>
        </ul>
      </nav>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="dashboard.js"></script>

</body>


</html>