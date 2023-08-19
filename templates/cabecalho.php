<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guia Brechó</title>
    <link rel="shortcut icon" href="/guia_brecho/img/img.png" type="image/x-icon">


    <!-- css bootstrap -->
    <link rel="stylesheet" href="/guia_brecho/css/bootstrap.css">
    <!-- js boostrap adicionei a propriedade defer para garantir o carregamento so no final -->
    <script src="/guia_brecho/js/bootstrap.bundle.js" defer></script>
    <!-- css personalizado geral -->
    <link rel="stylesheet" href="/guia_brecho/css/style.css">
    <!-- css swiper -->
    <link rel="stylesheet" href="/guia_brecho/css/swiper-bundle.min.css">
    <!-- Swiper JS -->
    <script src="/guia_brecho/js/swiper-bundle.min.js" defer></script>
    <!-- js personalizado -->
    <script src="/guia_brecho/js/cadastroBrecho.js" defer></script>
<<<<<<< HEAD
    <!-- JavaScript -->
    <script src="/guia_brecho/js/script.js" defer></script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <script src="/guia_brecho/js/script-produtos.js" defer></script>
=======
    <!-- bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
>>>>>>> 6774dab (buscar e modal atualizado)


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans:400,300'>
    <link rel="stylesheet" href="/guia_brecho/css/style.css">
    <link rel="stylesheet" href="/guia_brecho/css/style.scss">
    <link rel="stylesheet" href="/guia_brecho/css/cadastro_usuario.css">
    <link rel="stylesheet" href="/guia_brecho/css/cadastro_brecho.css">

</head>

<body>

    <head>
        <nav class="navbar navbar-expand-lg" style="background-color: #fb732c;">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><img src="/guia_brecho/img/logo_guia_brecho-rem3.png" alt="" id="logo-icone"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">

                        <?php
                        require_once $_SERVER["DOCUMENT_ROOT"] . "/guia_brecho/templates/menu.php";
                        ?>