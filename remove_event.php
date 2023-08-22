
<!DOCTYPE html>
<html>
<head>
    <title>remove eventos</title>
    <link rel="stylesheet" href="css/ANA.css">
</head>
<header>
    <nav>
        <ul>
        <li> <img src="img/logo guia brecho.png"  class="logo"> </li>  
        </ul>
    </nav>        
</header>
<body> 
<div class="event-card">
<?php

if (isset($_POST["event_id"]) && !empty($_POST["event_id"])) {
 
    $event_id = $_POST["event_id"];

   
    define('DB_HOST', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASSWORD', '');
    define('DB_NAME', 'evento');

  
    $connection = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

   
    if ($connection->connect_error) {
        die('Error connecting to the database: ' . $connection->connect_error);
    }

    
    $sql = "DELETE FROM cadastro_evento WHERE id_evento = ?";
    $stmt = $connection->prepare($sql);
    $stmt->bind_param("i", $event_id);

    if ($stmt->execute()) {
        echo " Evento Removido com Sucesso.";
    } else {
        echo "Erro em remover o Evento: " . $stmt->error;
    }

  
    $stmt->close();
    $connection->close();
} else {
    echo " ID evento Invalido.";
}
?>
<br><br>
<form action="evento_cadastrados.php" method="get">
    <button type="submit">Ver Eventos Cadastrados</button>
</form>

</div>
</body>
</html>
