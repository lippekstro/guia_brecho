<?php
require_once $_SERVER["DOCUMENT_ROOT"] . '/guia_brecho/db/conexao.php';

class Usuario
{
    public $id_usuario;
    public $nome_usuario;
    public $email;
    public $senha;
    public $cpf_cnpj;
    public $nivel_acesso;

    public function __construct($id_usuario = false)
    {
        if ($id_usuario) {
            $this->id_usuario = $id_usuario;
            $this->carregar();
        }
    }

    public function carregar()
    {
        $query = "SELECT * FROM usuario WHERE id_usuario = :id_usuario";
        $conexao = Conexao::conectar();
        $stmt = $conexao->prepare($query);
        $stmt->bindValue(':id_usuario', $this->id_usuario);
        $stmt->execute();

        $usuario = $stmt->fetch();
        $this->nome_usuario = $usuario['nome_usuario'];
        $this->email = $usuario['email'];
        $this->senha = $usuario['senha'];
        $this->cpf_cnpj = $usuario['cpf_cnpj'];
        $this->nivel_acesso = $usuario['nivel_acesso'];
    }

    public function criar()
    {
        $query = "INSERT INTO usuario (nome_usuario, email, senha, cpf_cnpj) VALUES (:nome, :email, :senha, :doc)";
        $conexao = Conexao::conectar();
        $stmt = $conexao->prepare($query);
        $stmt->bindValue(':nome', $this->nome_usuario);
        $stmt->bindValue(':email', $this->email);
        $stmt->bindValue(':senha', $this->senha);
        $stmt->bindValue(':doc', $this->cpf_cnpj);
        $stmt->execute();
        $this->id_usuario = $conexao->lastInsertId();
        return $this->id_usuario;
    }

    public static function listar()
    {
        $query = "SELECT * FROM usuario";
        $conexao = Conexao::conectar();
        $stmt = $conexao->prepare($query);
        $stmt->execute();
        $lista = $stmt->fetchAll();
        return $lista;
    }

    public function editar()
    {
        $query = "UPDATE usuario SET nome_usuario = :nome, email = :email, cpf_cnpj = :doc WHERE id_usuario = :id_usuario";
        $conexao = Conexao::conectar();
        $stmt = $conexao->prepare($query);
        $stmt->bindValue(':nome', $this->nome_usuario);
        $stmt->bindValue(':email', $this->email);
        $stmt->bindValue(':doc', $this->cpf_cnpj);
        $stmt->bindValue(":id_usuario", $this->id_usuario);
        $stmt->execute();
    }

    public function deletar()
    {
        $query = "DELETE FROM usuario WHERE id_usuario = :id_usuario";
        $conexao = Conexao::conectar();
        $stmt = $conexao->prepare($query);
        $stmt->bindValue(':id_usuario', $this->id_usuario);
        $stmt->execute();
    }

    public static function logar($email, $senha)
    {
        $query = "SELECT * FROM usuario WHERE email = :email";
        $conexao = Conexao::conectar();
        $stmt = $conexao->prepare($query);
        $stmt->bindValue(":email", $email);
        $stmt->execute();
        $registro = $stmt->fetch(PDO::FETCH_ASSOC);

        if (count($registro) > 0 && password_verify($senha, $registro['senha'])) {
            session_start();
            $_SESSION['usuario']['id_usuario'] = $registro['id_usuario'];
            $_SESSION['usuario']['nome'] = $registro['nome_usuario'];
            $_SESSION['usuario']['email'] = $registro['email'];
            $_SESSION['usuario']['nivel_acesso'] = $registro['nivel_acesso'];

            header("Location: /guia_brecho/views/admin/perfil_admin.php");
            exit();
        } else {
            setcookie('erro', 'Email ou Senha Incorreto!', time() + 3600, '/guia_brecho/');
            header("Location: /guia_brecho/views/login.php");
            exit();
        }
    }
}
