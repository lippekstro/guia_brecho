<?php

// Controllers Usuário - Login

require_once $_SERVER["DOCUMENT_ROOT"] . "\guia_brecho\models\usuario.php";


if (isset($_POST['email']) && isset($_POST['senha'])) {
    $email = $_POST['email'];
    $senha = $_POST['senha'];
   
   
   $usuario = new Usuario();
   $usuario->logar($email, $senha);
    
   var_dump($_POST);
}
