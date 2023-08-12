<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/guia_brecho/models/usuario.php";
require_once $_SERVER["DOCUMENT_ROOT"] . "/guia_brecho/configs/utils.php";
/* require_once $_SERVER["DOCUMENT_ROOT"] . "/guia_brecho/configs/sessoes.php"; */


/* if (!isset($_SESSION['usuario']) || $_SESSION['usuario']['nv_acesso'] < 2) {
    setcookie('msg', 'Você não tem permissão para acessar este conteúdo', time() + 3600, '/guia_brecho/');
    setcookie('tipo', 'perigo', time() + 3600, '/guia_brecho/');
    header('Location: /guia_brecho/index.php');
    exit();
} */

try {
    $nome = Utilidades::sanitizaString($_POST['nome']);

    if (Utilidades::validaEmail($_POST['email'])) {
        $email = Utilidades::sanitizaEmail($_POST['email']);
    } else {
        setcookie('msg', "Email Invalido!", time() + 3600, '/guia_brecho/');
        setcookie('tipo', 'perigo', time() + 3600, '/guia_brecho/');
        header("Location: /guia_brecho/views/cadastro.php");
        exit();
    }

    $documento = Utilidades::sanitizaString($_POST['doc']);

    $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);


    $user = new Usuario();
    $user->nome = $nome;
    $user->email = $email;
    $user->cpf_cnpj = $documento;
    $user->senha = $senha;
    $user->criar();

    header("Location: /guia_brecho/views/login.php");
    exit();
} catch (PDOException $e) {
    echo $e->getMessage();
}
