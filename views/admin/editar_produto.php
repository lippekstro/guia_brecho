<?php
require_once 'produto.php';

$id_produto = $_GET['id'];

try{
    $produto = new Produto ($id_produto);
}catch(PDOException $e){
    echo $e->getMessage();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<input type="hidden" name="id_produto" value="<?= $produto->id_produto ?>">
        
    <form action="atualiza_controller.php" method="post">
        <input type="hidden" name="id_produto" value="<?= $produto->id_produto ?>">
        <label for="nome_produto">Nome do produto</label>
        <input type="text" name="nome_produto" id="nome_produto" value="<?= $produto->nome_produto ?>">
        <br>
        <label for="descricao">Descrição</label>
        <textarea name="descricao" id="descricao"><?= $produto->descricao ?></textarea>
        <br>
        <label for="categoria">Categoria</label>
        <select name="categoria" id="categoria">
            <option value="vestimentas" <?= $produto->categoria == 'vestimentas' ? 'selected' : '' ?>>Vestimentas</option>
            <option value="calcados" <?= $produto->categoria == 'calcados' ? 'selected' : '' ?>>Calçados</option>
            <option value="acessorios" <?= $produto->categoria == 'acessorios' ? 'selected' : '' ?>>Acessórios</option>
        </select>
        <label for="rede_social">Rede Social do seu Brechó</label>
        <input type="text" name="rede_social" id="rede_social" value="<?= $produto->rede_social ?>">
        <br>
        <label for="imagem_produto">Imagem do produto</label>
        <input type="file" name="imagem_produto" id="imagem_produto" value="<?= $produto->imagem_produto ?>">
        <br>
        <label for="preco">Preço</label>
        <input type="text" name="preco" id="preco" value="<?= $produto->preco ?>">
        <br>
        <label for="estoque">Estoque</label>
        <input type="checkbox" name="estoque" id="estoque" <?= $produto->estoque ? 'checked' : '' ?>>
        <br>
        <input type="submit" value="Atualizar">
    </form>
</body>
</html>