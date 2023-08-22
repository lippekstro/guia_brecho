<!DOCTYPE html>
<html>
<head>
    <title>cadastrados</title>
    <link rel="stylesheet" href="css/ANA.css">
</head>
<header>
    <nav>
        <ul>
        <li><img src="img/logo guia brecho.png" class="logo"></li>
        </ul>
    </nav>
</header>
<body>
<div class="event-card">
    <?php
    define('DB_HOST', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASSWORD', '');
    define('DB_NAME', 'evento');

    $conexao = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

    if ($conexao->connect_error) {
        die('Erro na conexão com o banco de dados: ' . $conexao->connect_error);
    }

    $sql = "SELECT * FROM cadastro_evento";
    $result = $conexao->query($sql);
    if ($result !== false && $result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo '<h2>' . $row["nome_evento"] . '</h2>';
            echo '<p>Data: ' . $row["data_evento"] . ' | Horário: ' . $row["horario"] . '</p>';
            echo '<p>Local: ' . $row["logradouro"] . ', ' . $row["numero"] . ' - ' . $row["bairro"] . ', ' . $row["Uf"] . '</p>';
            echo '<p>' . nl2br($row["descricao_evento"]) . '</p>';
            echo '<form action="remove_event.php" method="post">';
            echo '<input type="hidden" name="event_id" value="' . $row["id_evento"] . '">';
            echo '<button type="submit" class="remove-button">Remove</button>';
            echo '</form>';
        }
    } else {
        echo "Nenhum evento encontrado.";
    }

    $conexao->close();
    ?>
</div>
</body>
</html>
