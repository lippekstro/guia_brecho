<?php

<<<<<<< HEAD
<<<<<<< HEAD

require_once $_SERVER["DOCUMENT_ROOT"] . "/guia_brecho/models/usuario.php";
require_once $_SERVER["DOCUMENT_ROOT"] . "/guia_brecho/configs/utils.php";

try {
    //Dados do Pessoa:
    $nome_usuario = $_POST['nome'];
    $email = $_POST['email'];
    $senha = password_hash( $_POST['senha'], PASSWORD_DEFAULT );
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
=======
=======
>>>>>>> 955cc10be8aa2c93a256ca9f03d142c6b68182b1
require_once $_SERVER["DOCUMENT_ROOT"] . '/guia_brecho/models/usuario.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nome = $_POST["nome"];
    $senha = password_hash($_POST["senha"],PASSWORD_DEFAULT); 
    $email = $_POST["email"];
    $cpf = $_POST["cpf"];

    try {
        $usuario = new Usuario();
        $usuario->nome = $nome;
        $usuario->senha = $senha;
        $usuario->email = $email;
        $usuario->cpf_cnpj = $cpf;
     
        

        if (!empty($_FILES["imagem_produto"])) {
            
            $img = file_get_contents($_FILES["imagem_produto"]["tmp_name"]);
            $produto->imagem_produto = $img;
        }

        $usuario->criar();

        header("Location: /guia_brecho/views/admin/cadastrar_usuario.php");        
        exit();

    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}



<<<<<<< HEAD
?>
>>>>>>> 17a24d4 (commit)
=======
?>
>>>>>>> 955cc10be8aa2c93a256ca9f03d142c6b68182b1
