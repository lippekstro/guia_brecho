<?php
require_once $_SERVER["DOCUMENT_ROOT"] . '/guia_brecho/db/conexao.php';

class Usuario
{
    public $email;
    public $senha;

    public static function logar($email, $senha)
    {
        $query = "SELECT * FROM usuario WHERE email = :email and senha = :senha";
        $conexao = Conexao::conectar();
        $stmt = $conexao->prepare($query);
        $stmt ->bindValue(":email", $email);
        
        $stmt ->bindValue(":senha", $senha);
        $stmt -> execute();
        $registro = $stmt->fetch(PDO::FETCH_ASSOC);
            
        if($stmt->rowCount() > 0 && password_verify($senha, $registro['senha']))
        {
        
            header("Location: /guia_brecho/index.php"); //redirecionando para a pagina principal
            if (isset($_COOKIE['erro'])) {
                setcookie('erro', '', time() - 3600, '/');
                
            }

        } 
        else
        {
            setcookie('erro', 'Email ou Senha Incorreto!!', time() + 3600, '/');
            
        
            //var_dump($_POST);
            header("Location: /guia_brecho/views/login.php"); //redirecionando para a pagina novamente
        }
    }

}