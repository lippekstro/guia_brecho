<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/guia_brecho/configs/config.php";

class Conexao
{
    public static function conectar()
    {
        $conn = new PDO(SGBD . ':host=' . DBLOCAL . ';dbname=' . DBNOME, USUARIO, SENHA);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    }
}
