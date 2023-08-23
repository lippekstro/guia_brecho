<?php
session_start();
date_default_timezone_set('America/Fortaleza');
?>
<!DOCTYPE html>
<html lang="pt-BR" >

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guia Brechó</title>
    <link rel="shortcut icon" href="/guia_brecho/img/favico.ico" type="image/x-icon">

    <!-- css bootstrap -->
    <link rel="stylesheet" href="/guia_brecho/css/bootstrap.css">
    <!-- js boostrap adicionei a propriedade defer para garantir o carregamento so no final -->
    <script src="/guia_brecho/js/bootstrap.bundle.js" defer></script>
    <!-- css personalizado geral -->
    <link rel="stylesheet" href="/guia_brecho/css/style.css">

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="/guia_brecho/css/swiper-bundle.min.css">
    <!-- Swiper JS -->
    <script src="/guia_brecho/js/swiper-bundle.min.js" defer></script>

    <!-- JavaScript -->
    <script src="/guia_brecho/js/script.js" defer></script>
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
                        <a class="nav-link active text-white" aria-current="page" href="/guia_brecho/views/produtos.php">Produtos</a>
                        <a class="nav-link active text-white" aria-current="page" href="/guia_brecho/views/loja.php">Lojas</a>
                        <a class="nav-link active text-white" aria-current="page" href="/guia_brecho/views/eventos.php">Eventos</a>
                        <a class="nav-link active text-white" aria-current="page" href="/guia_brecho/views/faqs.php">FAQs</a>
                        <a class="nav-link active text-white" aria-current="page" href="/guia_brecho/views/quemsomos.php">Quem Somos?</a>

                        <?php if (!isset($_SESSION['usuario'])) : ?>
                            <a class="nav-link active text-white" aria-current="page" href="/guia_brecho/views/login.php">Login</a>
                        <?php else : ?>
                            <a class="nav-link active text-white" aria-current="page" href="/guia_brecho/views/admin/perfil_admin.php">Perfil</a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <main>