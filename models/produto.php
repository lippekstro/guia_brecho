<?php 
require_once $_SERVER["DOCUMENT_ROOT"] . '/guia_brecho/db/conexao.php';

class Produto {
    public $id_produto;
    public $nome_produto;
    public $descricao;
    public $categoria;
    public $preco;
    public $estoque;
    public $imagem_produto;
    public $id_brecho;

    public function __construct($id_produto = false)
    {
        if ($id_produto) {
            $this->id_produto = $id_produto;
            $this->carregar();
        }
    }

    public function carregar()
    {
        $query = "SELECT * FROM produto WHERE id_produto = :id";
        $conexao = Conexao::conectar();
        $stmt = $conexao->prepare($query);
        $stmt->bindValue(':id', $this->id_produto);
        $stmt->execute();

        $produto = $stmt->fetch();
        $this->nome_produto = $produto['nome_produto'];
        $this->descricao = $produto['descricao'];
        $this->categoria = $produto['categoria'];
        $this->preco = $produto['preco'];
        $this->estoque = $produto['estoque'];
        $this->imagem_produto = $produto['imagem_produto'];
        $this->id_brecho = $produto['id_brecho'];
    }

    public function criar()
    {
        $query = "INSERT INTO produto (nome_produto, descricao, categoria, preco, imagem_produto, id_brecho) VALUES (:nome, :descricao, :cat, :preco, :img, :loja)";
        $conexao = Conexao::conectar();
        $stmt = $conexao->prepare($query);
        $stmt->bindValue(':nome', $this->nome_produto);
        $stmt->bindValue(':descricao', $this->descricao);
        $stmt->bindValue(':cat', $this->categoria);
        $stmt->bindValue(':preco', $this->preco);
        $stmt->bindValue(':img', $this->imagem_produto);
        $stmt->bindValue(':loja', $this->id_brecho);
        $stmt->execute();
        $this->id_produto = $conexao->lastInsertId();
        return $this->id_produto;
    }

    public static function listar()
    {
        $query = "SELECT * FROM produto";
        $conexao = Conexao::conectar();
        $stmt = $conexao->prepare($query);
        $stmt->execute();
        $lista = $stmt->fetchAll();
        return $lista;
    }

    public function editar()
    {
        $query = "UPDATE produto SET nome_produto = :nome, descricao = :descricao, categoria = :cat, preco = :preco, estoque = :estoque WHERE id_produto = :id";
        $conexao = Conexao::conectar();
        $stmt = $conexao->prepare($query);
        $stmt->bindValue(":nome", $this->nome_produto);
        $stmt->bindValue(":descricao", $this->descricao);
        $stmt->bindValue(":cat", $this->categoria);
        $stmt->bindValue(":preco", $this->preco);
        $stmt->bindValue(":estoque", $this->estoque);
        $stmt->bindValue(":id", $this->id_produto);
        $stmt->execute();
    }

    public function deletar()
    {
        $query = "DELETE FROM produto WHERE id_produto = :id";
        $conexao = Conexao::conectar();
        $stmt = $conexao->prepare($query);
        $stmt->bindValue(':id', $this->id_produto);
        $stmt->execute();
    }

    public static function listarLimiteProdutos($inicio,$limite){

        $conexao = conexao::conectar();
        $sql = "SELECT * FROM produto LIMIT $inicio,$limite";
        $list = $conexao -> query($sql);        
        $array = $list->fetchAll();
        return $array;
    }

    public static function pesquisarProdutos($nome){
        $conexao = Conexao::conectar();        
        $sql = "SELECT * FROM produto WHERE nome_produto LIKE :termo OR descricao LIKE :termo";
        $query = $conexao->prepare($sql);
        $query->bindValue(":termo", '%' . $nome .'%');
        $query->execute();
        $res = $query->fetchAll(PDO::FETCH_ASSOC);

        if (count($res)== 0) {
            $_SESSION["resultado_pesquisa"]["sem_sucesso"] = "Nenhum resultado encontrado...";
        }else {
            $_SESSION["resultado_pesquisa"]["com_sucesso"] = count($res);
            return $res;
        }
    }
    public static function filtroCategoria($categoria){
        $conexao = Conexao::conectar();
        $sql = "SELECT * FROM produto WHERE categoria = :categoria";
        $query = $conexao->prepare($sql);
        $query->bindValue(":categoria",$categoria);
        $query->execute();
        $resultado = $query->fetchAll(PDO::FETCH_ASSOC);
        return $resultado;
    }
}