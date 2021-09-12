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
    <link href="style.css" rel="stylesheet" type="text/css">
    <title>Destack Associados</title>
</head>

<body class="text-center-home">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

    <nav class="navbar navbar-expand-lg navbar-dark" style="background: linear-gradient(70deg, #323232, #666666);">
        <div class="container-fluid">
            <a href="homeCliente.php">
                <img src="./imagens_empresa/65ab872f-fa8e-4b2b-bdd4-376c93f02752_uploads_destacklogo.png" width="150px" class="navbar-brand" href="home.php">

            </a> <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav" style="margin-left: 55%;">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <img class="rounded-circle" src="https://www.dominiowebsites.com.br/download/image?token=ef46604c1500ba58410c68ec4eae5527" width="20" height="20">


                            Usuário
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="#">Perfil</a></li>
                            <li><a class="dropdown-item" href="#">Clientes</a></li>
                            <li><a class="dropdown-item" href="#">Fornecedores</a></li>
                            <li><a class="dropdown-item" href="#">Sair</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Lançar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Fornecedores</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Graficos</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Lançamentos</a>
                    </li>


                </ul>

            </div>
        </div>
    </nav>



</body>


</html>