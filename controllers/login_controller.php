<?php

// Controllers Usuário - Login

require_once $_SERVER["DOCUMENT_ROOT"] . "\guia_brecho\models\usuario.php";


<<<<<<< HEAD
if (isset($_POST['email']) && isset($_POST['senha'])) {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $usuario = new Usuario();
    $usuario->$email = $email;
    $usuario->$senha = $senha;
    $usuario->logar();
   


    
}
=======
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
>>>>>>> 5c79635 (commit do dia 17/08)
