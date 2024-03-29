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

<body class="text-center">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

    <main class="form-signin">
        <form>
            <img class="mb-4" src="./imagens_empresa/65ab872f-fa8e-4b2b-bdd4-376c93f02752_uploads_destacklogo.png" alt="">
            <h1 class="h3 mb-3 fw-normal">Área Restrita</h1>

            <div class="mb-3">
                <label>Usuário</label>
                <input type="text" class="form-control" name="usuario" placeholder="Digite o usuário">
            </div>
            <div class="mb-3">
                <label>Senha</label>
                <input type="password" class="form-control" name="senhausuario" placeholder="Digite a senha">
            </div>

            <button type="submit" class="btn btn-primary">Acessar</button>
            <p>Esqueceu a senha?</p>
            <p class="mt-5 mb-3 text-muted">&copy; 2017–2021</p>
        </form>
    </main>

</body>


</html>