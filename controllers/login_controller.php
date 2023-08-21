<?php

// Controllers Usuário - Login

require_once $_SERVER["DOCUMENT_ROOT"] . "\guia_brecho\models\usuario.php";


try {
    $email = $_POST['email'];
    $senha = $_POST['senha'];


    $usuario = new Usuario();
    $usuario->logar($email, $senha);
} catch (PDOException $e) {
    echo $e->getMessage();
}
