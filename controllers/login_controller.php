<?php

// Controllers Usuário - Login

require_once $_SERVER["DOCUMENT_ROOT"] . "\guia_brecho\models\usuario.php";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    
    try {
        Usuario::logar($email,$senha);

        header("Location: \guia_brecho\index.php");
        exit();

    } catch (\Throwable $th) {
        echo $th->getMessage();
    }
   
    
    
    
}
