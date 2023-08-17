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
    public $id_loja;

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
        $this->id_loja = $produto['id_loja'];
    }

    public function criar()
    {

        $conexao = Conexao::conectar();
        $query = "INSERT INTO produto (nome_produto, descricao, categoria, preco, imagem_produto, id_loja) VALUES (:nome, :descricao, :cat, :preco, :img, :loja)";
        
        $stmt = $conexao->prepare($query);
        $stmt->bindValue(':nome', $this->nome_produto);
        $stmt->bindValue(':descricao', $this->descricao);
        $stmt->bindValue(':cat', $this->categoria);
        $stmt->bindValue(':preco', $this->preco);
        $stmt->bindValue(':img', $this->imagem_produto);
        $stmt->bindValue(':loja', $this->id_loja);
        $stmt->execute();
        $this->id_produto = $conexao->lastInsertId();
        return $this->id_produto;
    }

    public static function listar()
    {
        $query = "SELECT p.*, l.nome_loja FROM produto p JOIN loja l ON p.id_loja = l.id_loja";
        $conexao = Conexao::conectar();
        $stmt = $conexao->prepare($query);
        $stmt->execute();
        $lista = $stmt->fetchAll();
        return $lista;
    }

    public static function listarId()
    {
        $query = "SELECT p.*, l.nome_loja FROM produto p JOIN loja l ON p.id_loja = l.id_loja";
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
        $sql = "SELECT * FROM produto WHERE nome_produto LIKE '%$nome%' OR descricao LIKE '%$nome%'";
        $query = $conexao->prepare($sql);
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

<<<<<<< HEAD
    public function inserir(){

        $conexao = Conexao::conectar();
        $sql = $sql = "INSERT INTO produto (nome_produto,descricao,categoria,preco,estoque,imagem_produto) VALUES (:nome_produto,:descricao,:categoria,:preco,:estoque,:imagem_produto)";
        $insert = $conexao->prepare($sql);
        $insert->bindParam(':nome_produto',$this->nome_produto);        
        $insert->bindParam(':descricao',$this->descricao);
        $insert->bindParam(':categoria',$this->categoria);
        $insert->bindParam(':preco',$this->preco);
        $insert->bindParam(':estoque',$this->estoque);
        $insert->bindParam(':imagem_produto',$this->imagem_produto);
        $insert->execute();
    }

    public function editar(){

        $conexao = conexao::conectar();
        $sql = "UPDATE produto SET nome_produto=:nome_produto,descricao=:descricao,categoria=:categoria,preco=:preco,estoque=:estoque,imagem_produto=:imagem_produto WHERE id_produto=:id_produto";
        $edit = $conexao->prepare($sql);
        $edit->bindValue(':nome_produto',$this->nome_produto);
        $edit->bindValue(':descricao',$this->descricao);
        $edit->bindValue(':categoria',$this->categoria);
        $edit->bindValue(':id_produto',$this->id_produto);
        $edit->execute();
    }
}
=======


}
    
    

    
>>>>>>> 3048581c060ff4c1cfac3924935c5cd4f53abbe7
