<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/guia_brecho/db/conexao.php";

class Brecho
{
    public $id_brecho;
    public $brecho_nome;
    public $brecho_endereco;
    public $brecho_img;
    public $brecho_rede;
    public $brecho_contato;
    public $brecho_faixa_preco_ini;
    public $brecho_faixa_preco_fim;
    public $brecho_bio;
    public $id_usuario;



    public function __construct($id_brecho = false)
    {
        if ($id_brecho) {
            $this->id_brecho = $id_brecho;
            $this->carregar();
        }
    }

    public function carregar()
    {
        $query = "SELECT * FROM brecho WHERE id_brecho = :id_brecho";
        $conexao = Conexao::conectar();
        $stmt = $conexao->prepare($query);
        $stmt->bindValue(':id_brecho', $this->id_brecho);
        $stmt->execute();

        $brecho = $stmt->fetch();
        $this->brecho_nome = $brecho['brecho_nome'];
        $this->brecho_endereco = $brecho['brecho_endereco'];
        $this->brecho_img = $brecho['brecho_img'];
        $this->brecho_rede = $brecho['brecho_rede'];
        $this->brecho_contato = $brecho['brecho_contato'];
        $this->brecho_faixa_preco_ini = $brecho['brecho_faixa_preco_ini'];
        $this->brecho_faixa_preco_fim = $brecho['brecho_faixa_preco_fim'];
        $this->brecho_bio = $brecho['brecho_bio'];
        $this->id_usuario = $brecho['id_usuario'];

    }

    public function criar()
    {
        $query = "INSERT INTO brecho (brecho_nome, brecho_endereco, brecho_img, brecho_rede, brecho_contato, brecho_faixa_preco_ini, brecho_faixa_preco_fim, brecho_bio, id_usuario) VALUES (:nome, :endereco, :imagem, :rede, :contato, :faixa_ini, :faixa_fim, :bio, :dono)";
        $conexao = Conexao::conectar();
        $stmt = $conexao->prepare($query);
        $stmt->bindValue(':nome', $this->brecho_nome);
        $stmt->bindValue(':endereco', $this->brecho_endereco);
        $stmt->bindValue(':imagem', $this->brecho_img);
        $stmt->bindValue(':rede', $this->brecho_rede);
        $stmt->bindValue(':contato', $this->brecho_contato);
        $stmt->bindValue(':faixa_ini', $this->brecho_faixa_preco_ini);
        $stmt->bindValue(':faixa_fim', $this->brecho_faixa_preco_fim);
        $stmt->bindValue(':bio', $this->brecho_bio);
        $stmt->bindValue(':dono', $this->id_usuario);
        $stmt->execute();
        $this->id_brecho = $conexao->lastInsertId();
        return $this->id_brecho;
    }

    public static function listar()
    {
        $query = "SELECT b.*, u.nome_usuario FROM brecho b JOIN usuario u ON b.id_usuario = u.id_usuario";
        $conexao = Conexao::conectar();
        $stmt = $conexao->prepare($query);
        $stmt->execute();
        $lista = $stmt->fetchAll();
        return $lista;
    }


    public function editar()
    {
        $query = "UPDATE brecho SET brecho_nome = :nome, brecho_endereco = :endereco, brecho_rede = :rede, brecho_contato = :contato, brecho_faixa_preco_ini = :faixa_ini, brecho_faixa_preco_fim = :faixa_fim, brecho_bio = :bio WHERE id_brecho = :id_brecho";
        $conexao = Conexao::conectar();
        $stmt = $conexao->prepare($query);
        $stmt->bindValue(":nome", $this->brecho_nome);
        $stmt->bindValue(":endereco", $this->brecho_endereco);
        $stmt->bindValue(":rede", $this->brecho_rede);
        $stmt->bindValue(":contato", $this->brecho_contato);
        $stmt->bindValue(":faixa_ini", $this->brecho_faixa_preco_ini);
        $stmt->bindValue(":faixa_fim", $this->brecho_faixa_preco_fim);
        $stmt->bindValue(":bio", $this->brecho_bio);
        $stmt->bindValue(":id_brecho", $this->id_brecho);
        $stmt->execute();
    }

    public function deletar()
    {
        $query = "DELETE FROM brecho WHERE id_brecho = :id_brecho";
        $conexao = Conexao::conectar();
        $stmt = $conexao->prepare($query);
        $stmt->bindValue(':id_brecho', $this->id_brecho);
        $stmt->execute();
    }

    public static function buscarMeuBrecho($id){
        $query = "SELECT id_brecho FROM brecho WHERE id_usuario = :id";
        $conexao = Conexao::conectar();
        $stmt = $conexao->prepare($query);
        $stmt->bindValue(':id', $id);
        $stmt->execute();
        return $stmt->fetch();
    }
}