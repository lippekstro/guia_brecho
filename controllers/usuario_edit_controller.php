<?php
require_once $_SERVER["DOCUMENT_ROOT"] . '/guia_brecho/models/usuario.php';
require_once $_SERVER["DOCUMENT_ROOT"] . '/guia_brecho/configs/utils.php';

try {
    $id_usuario = $_POST['id_usuario'];
    $nome_usuario = $_POST['nome_usuario'];
    $email = $_POST['email'];

    $usuario = new usuario ($id_usuario);
    $usuario->nome_usuario = $nome_usuario;
    $usuario->email = $email;
    
    $usuario->editar();

    setcookie('msg', "O seu usuario foi atualizado com sucesso!", time() + 3600, '/guia_brecho/');
    setcookie('tipo', 'sucesso', time() + 3600, '/guia_brecho/');
    header("Location: /guia_brecho/views/admin/perfil_admin.php");
    exit();
} catch (PDOException $e) {
    echo $e->getMessage();
}