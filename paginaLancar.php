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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js"></script>
    <link href="dycalendar.css" rel="stylesheet" type="text/css">
    <link href="style.css" rel="stylesheet" type="text/css">
    <title>Destack Associados</title>
</head>

<body class="text-center-home">

    <nav class="navbar navbar-expand navbar-dark" style="background: black">
        <div class="container-fluid">
            <a href="homeCliente.php">
                <img src="./imagens_empresa/65ab872f-fa8e-4b2b-bdd4-376c93f02752_uploads_destacklogo.png" width="150px" class="navbar-brand" href="home.php">

            </a> <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav" style="margin-left: 90%;">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <img class="rounded-circle" src="https://www.dominiowebsites.com.br/download/image?token=ef46604c1500ba58410c68ec4eae5527" width="20" height="20">
                            <span class="d-none d-sm-block"> Usuário</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="#">Perfil</a></li>
                            <li><a class="dropdown-item" href="#">Clientes</a></li>
                            <li><a class="dropdown-item" href="#">Fornecedores</a></li>
                            <li><a class="dropdown-item" href="#">Sair</a></li>
                        </ul>
                </ul>

            </div>
        </div>
    </nav>

    <div class="d-flex">
        <nav class="menu-lateral">
            <ul class="list-unstyled">
                <li><a href="paginaDashboard.php">DASHBOARD</a></li>
                <li><a class="pagina-selecionada" href="paginaLancar.php">LANÇAR</a></li>
                <li><a href="paginaFornecedore.php">FORNECEDORES</a></li>
                <li><a href="paginaConsultar.php">CONSULTAR</a></li>
            </ul>
        </nav>




        <div class="formulario-lancar">
            <div class="card text-white bg-primary mb-3">
                <div class="card-header">FORMULÁRIO PARA LANÇAMENTO</div>
                <div class="card-body">


                <div class="calendar">
                    <div class="calendar-header">
                        <span class="month-picker" id="month-picker"></span>
                    </div>
                </div>








<!----

                    <form>
                        <section>
                            <div class="box">
                                <div class="container">
                                    <div id="dycalendar">

                                    </div>

                                </div>
                            </div>
                        </section>
                        <script src="dycalendar.js"></script>
                        <script>
                            dycalendar.draw({
                                target: '#dycalendar',
                                type: 'month',
                                dayformat: 'full',
                                highlighttargetdate: true,
                                prevnextbutton: 'show'
                            })


                        </script>

                        
    acumulador de entrada receita e acumulador de saida despesa-->




                        <button type="submit" class="btn btn-success">Sign in</button>
                    </form>



                </div>
            </div>
        </div>
    </div>





</body>

</html>