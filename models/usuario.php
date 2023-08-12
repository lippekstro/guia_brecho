<?php
require_once $_SERVER["DOCUMENT_ROOT"] . '/guia_brecho/db/conexao.php';

class Usuario
{
    public $id_usuario;
    public $nome;
    public $senha;
    public $email;
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
        $query = "SELECT * FROM usuario WHERE id_usuario = :id";
        $conexao = Conexao::conectar();
        $stmt = $conexao->prepare($query);
        $stmt->bindValue(':id', $this->id_usuario);
        $stmt->execute();

        $usuario = $stmt->fetch();
        $this->nome = $usuario['nome'];
        $this->senha = $usuario['senha'];
        $this->email = $usuario['email'];
        $this->cpf_cnpj = $usuario['cpf_cnpj'];
        $this->nivel_acesso = $usuario['nivel_acesso'];
    }

    public function criar()
    {
        $query = "INSERT INTO usuario (nome, senha, email, cpf_cnpj) VALUES (:nome, :senha, :email, :doc)";
        $conexao = Conexao::conectar();
        $stmt = $conexao->prepare($query);
        $stmt->bindValue(':nome', $this->nome);
        $stmt->bindValue(':senha', $this->senha);
        $stmt->bindValue(':email', $this->email);
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
        $query = "UPDATE usuario SET nome = :nome, email = :email, cpf_cnpj = :doc WHERE id_usuario = :id";
        $conexao = Conexao::conectar();
        $stmt = $conexao->prepare($query);
        $stmt->bindValue(":nome", $this->nome);
        $stmt->bindValue(":email", $this->email);
        $stmt->bindValue(":doc", $this->cpf_cnpj);
        $stmt->bindValue(":id", $this->id_usuario);
        $stmt->execute();
    }

    public function deletar()
    {
        $query = "DELETE FROM usuario WHERE id_usuario = :id";
        $conexao = Conexao::conectar();
        $stmt = $conexao->prepare($query);
        $stmt->bindValue(':id', $this->id_usuario);
        $stmt->execute();
    }

    public static function logar($email, $senha)
    {
        $query = "SELECT * FROM usuario WHERE email = :email LIMIT 1";
        $conexao = Conexao::conectar();
        $stmt = $conexao->prepare($query);
        $stmt->bindValue(":email", $email);
        $stmt->execute();
        $registro = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($stmt->rowCount() > 0 && password_verify($senha, $registro['senha'])) {

            session_destroy();
            session_start();
            session_regenerate_id();

            $_SESSION['usuario']['id'] = $registro['id_usuario'];
            $_SESSION['usuario']['nome'] = $registro['nome'];
            $_SESSION['usuario']['email'] = $registro['email'];
            $_SESSION['usuario']['nv_acesso'] = $registro['nv_acesso'];
            $_SESSION['usuario']['inicio'] = time();
            $_SESSION['usuario']['expira'] = 900;

            header("Location: /guia_brecho/index.php");
            exit();
        } else {
            setcookie('msg', 'Email/Senha incorretos', time() + 3600, '/guia_brecho/');
            setcookie('tipo', 'perigo', time() + 3600, '/guia_brecho/');
            header('Location: /guia_brecho/views/login.php');
            exit();
        }
    }

    public static function criouBrecho($id)
    {
        $query = "SELECT * FROM usuario u RIGHT JOIN loja l ON u.id_usuario = l.id_usuario WHERE u.id_usuario = :id";
        $conexao = Conexao::conectar();
        $stmt = $conexao->prepare($query);
        $stmt->bindValue(':id', $id);
        $stmt->execute();
        $lista = $stmt->fetchAll();
        if (count($lista) > 0) {
            return true;
        } else {
            return false;
        }
    }
}
