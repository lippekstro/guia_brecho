
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
// Check if the event ID is provided
if (isset($_POST["event_id"]) && !empty($_POST["event_id"])) {
    // Event ID from the form
    $event_id = $_POST["event_id"];

    // Database connection settings
    define('DB_HOST', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASSWORD', '');
    define('DB_NAME', 'evento');

    // Establish a database connection
    $connection = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

    // Check the connection
    if ($connection->connect_error) {
        die('Error connecting to the database: ' . $connection->connect_error);
    }

    // Prepare and execute the SQL query to delete the event
    $sql = "DELETE FROM cadastro_evento WHERE id_evento = ?";
    $stmt = $connection->prepare($sql);
    $stmt->bind_param("i", $event_id);

    if ($stmt->execute()) {
        echo " Evento Removido com Sucesso.";
    } else {
        echo "Erro em remover o Evento: " . $stmt->error;
    }

    // Close the statement and the connection
    $stmt->close();
    $connection->close();
} else {
    echo " ID evento Invalido.";
}
?>

</div>
</body>
</html>
