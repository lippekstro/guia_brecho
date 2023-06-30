<?php
require_once 'loja.php';

$id_loja = $_POST['id_loja'];
$nome_loja = $_POST['nome_loja'];
$endereco = $_POST['endereco'];
$telefone = $_POST['telefone'];
$rede_social = $_POST['rede_social'];
if (!empty($_FILES['logo_loja']['tmp_name'])) {
    $logo_loja = $_POST['logo_loja'];
}

try {
    $loja = new Loja($id_loja);
    $loja->nome = $nome;
    $loja->endereco = $endereco;
    $loja->telefone = $telefone;
    $loja->rede_social = $rede_social;
    $loja->logo_loja = $logo_loja;
    
    if (logo_loja) {
        $loja->logo_loja = $logo_loja;
        $loja->editarImagem();
    }

    $loja->editar();

    header('Location: /guia_brecho/views/admin/perfil_loja.php');
} catch (PDOException $e) {
    echo $e->getMessage();
}
