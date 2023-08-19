<?php

// Controllers Usuário - Login

require_once $_SERVER["DOCUMENT_ROOT"] . "\guia_brecho\models\usuario.php";


<<<<<<< HEAD
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
=======
>>>>>>> 955cc10be8aa2c93a256ca9f03d142c6b68182b1
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
   
    
    
    
<<<<<<< HEAD
}
>>>>>>> 5c79635 (commit do dia 17/08)
=======
}
>>>>>>> 955cc10be8aa2c93a256ca9f03d142c6b68182b1
