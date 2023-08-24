<?php

require_once $_SERVER["DOCUMENT_ROOT"] . '/guia_brecho/models/usuario.php';

try {
    $nome = $_POST["nome"];
    $senha = password_hash($_POST["senha"], PASSWORD_DEFAULT);
    $email = $_POST["email"];
    $cpf = $_POST["cpf_cnpj"];

    $usuario = new Usuario();
    $usuario->nome_usuario = $nome;
    $usuario->senha = $senha;
    $usuario->email = $email;
    $usuario->cpf_cnpj = $cpf;

    $usuario->criar();

    header("Location: /guia_brecho/views/login.php");
    exit();
} catch (PDOException $e) {
    echo $e->getMessage();
}
