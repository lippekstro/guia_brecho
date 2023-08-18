<?php


require_once $_SERVER["DOCUMENT_ROOT"] . "/guia_brecho/models/usuario.php";
require_once $_SERVER["DOCUMENT_ROOT"] . "/guia_brecho/configs/utils.php";

try {
    //Dados do Pessoa:
    $nome_usuario = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $cpf_cnpj = $_POST['cpf_cnpj'];

    $usuario = new Usuario();
    $usuario->nome_usuario = $nome_usuario;
    $usuario->email = $email;
    $usuario->senha = $senha;
    $usuario->cpf_cnpj = $cpf_cnpj;

    $usuario->criar();

    header("Location: /guia_brecho/views/login.php");
    exit();
} catch (PDOException $e) {
    echo $e->getMessage();
}
