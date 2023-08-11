<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/guia_brecho/models/faq.php";
require_once $_SERVER["DOCUMENT_ROOT"] . "/guia_brecho/configs/utils.php";
/* require_once $_SERVER["DOCUMENT_ROOT"] . "/guia_brecho/configs/sessoes.php"; */


/* if (!isset($_SESSION['usuario']) || $_SESSION['usuario']['nv_acesso'] < 2) {
    setcookie('msg', 'Você não tem permissão para acessar este conteúdo', time() + 3600, '/guia_brecho/');
    setcookie('tipo', 'perigo', time() + 3600, '/guia_brecho/');
    header('Location: /guia_brecho/index.php');
    exit();
} */

try {
    $faq_pergunta = Utilidades::sanitizaString($_POST['faq_pergunta']);
    $faq_resposta = Utilidades::sanitizaString($_POST['faq_resposta']);

    $faq = new Faq();
    $faq->faq_pergunta = $faq_pergunta;
    $faq->faq_resposta = $faq_resposta;
    $faq->criar();

    setcookie('msg', "A FAQ foi adicionada com sucesso!", time() + 3600, '/guia_brecho/');
    setcookie('tipo', 'sucesso', time() + 3600, '/guia_brecho/');
    header("Location: /guia_brecho/views/admin/listar_faqs.php");
    exit();
} catch (PDOException $e) {
    echo $e->getMessage();
}