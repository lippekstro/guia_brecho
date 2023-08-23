<?php
require_once $_SERVER["DOCUMENT_ROOT"] . '/guia_brecho/models/brecho.php';
require_once $_SERVER["DOCUMENT_ROOT"] . '/guia_brecho/configs/utils.php';

try {
    $id_brecho = $_POST['id_brecho'];
    $brecho_nome = $_POST['brecho_nome'];
    $brecho_endereco = $_POST['brecho_endereco'];
    $brecho_contato = $_POST['brecho_contato'];
    $brecho_rede = $_POST['brecho_rede'];
    $brecho_faixa_preco_ini = $_POST['brecho_faixa_preco_ini'];
    $brecho_faixa_preco_fim = $_POST['brecho_faixa_preco_fim'];
    $brecho_bio = $_POST['brecho_bio'];

    if (!empty($_FILES['brecho_img']['tmp_name'])) {
        $brecho_img = file_get_contents($_POST['brecho_img']);
    }


    $brecho = new brecho($id_brecho);
    $brecho->brecho_nome = $brecho_nome;
    $brecho->brecho_endereco = $brecho_endereco;
    $brecho->brecho_contato = $brecho_contato;
    $brecho->brecho_rede = $brecho_rede;
    $brecho->brecho_img = $brecho_img;
    $brecho->brecho_faixa_preco_ini = $brecho_faixa_preco_ini;
    $brecho->brecho_faixa_preco_fim = $brecho_faixa_preco_fim;
    $brecho->brecho_bio = $brecho_bio;

    if ($brecho_img) {
        $brecho->brecho_img = $brecho_img;
        $brecho->editarBrechoImg();
    } else {
        $brecho->editar();
    }

    setcookie('msg', "O seu brechó foi atualizado com sucesso!", time() + 3600, '/guia_brecho/');
    setcookie('tipo', 'sucesso', time() + 3600, '/guia_brecho/');
    header("Location: /guia_brecho/views/admin/perfil_admin.php");
    exit();
} catch (PDOException $e) {
    echo $e->getMessage();
}
