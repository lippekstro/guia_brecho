<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<!-- <html lang="pt-BR" data-bs-theme="dark"> -->

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
    <!-- bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans:400,300'>
    <link rel="stylesheet" href="/guia_brecho/css/style.css">
    <link rel="stylesheet" href="/guia_brecho/css/style.scss">
    <link rel="stylesheet" href="/guia_brecho/css/cadastro_usuario.css">
    <link rel="stylesheet" href="/guia_brecho/css/cadastro_brecho.css">

</head>

<body>

    <header>
        <nav class="navbar navbar-expand-lg" style="background-color: #fb732c;">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><img src="/guia_brecho/img/logo_guia_brecho-rem3.png" alt="" id="logo-icone"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link active text-white" aria-current="page" href="/guia_brecho/index.php">Home</a>
                        <a class="nav-link active text-white" aria-current="page" href="/guia_brecho/views/produtos.php?pagina=1">Produtos</a>
                        <a class="nav-link active text-white" aria-current="page" href="/guia_brecho/views/loja.php">Lojas</a>
                        <a class="nav-link active text-white" aria-current="page" href="/guia_brecho/views/eventos.php">Eventos</a>
                        <a class="nav-link active text-white" aria-current="page" href="/guia_brecho/views/faqs.php">FAQs</a>
                        <a class="nav-link active text-white" aria-current="page" href="/guia_brecho/views/quemsomos.php">Quem Somos?</a>
                        <?php if (isset($_SESSION['usuario']) && $_SESSION['usuario']['nivel_acesso'] > 1) : ?>
                            <a class="nav-link active text-white" aria-current="page" href="/guia_brecho/views/admin/perfil_admin.php">Painel</a>
                        <?php endif; ?>
                        <?php if (!isset($_SESSION['usuario'])) : ?>
                            <a class="nav-link active text-white" aria-current="page" href="/guia_brecho/views/login.php">Login</a>
                        <?php else : ?>
                            <a class="nav-link active text-white" aria-current="page" href="/guia_brecho/controllers/logout_controller.php">Sair</a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <main>
