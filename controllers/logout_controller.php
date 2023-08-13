<?php
session_start();
session_unset();
session_destroy();
if (isset($_COOKIE['erro'])) {
    setcookie('erro', '', time() - 3600, '/');
    
}

header('Location: /guia_brecho/index.php')
    
?>