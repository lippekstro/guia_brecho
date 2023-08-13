<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/guia_brecho/templates/cabecalho.php";
require_once $_SERVER["DOCUMENT_ROOT"] . "/guia_brecho/templates/menu.php";
?>

<link rel="stylesheet" href="/guia_brecho/css/style1.css">

<!-- Pending Eventos Section -->
<section>
  <h2>Eventos Pendentes</h2>
  <ul id="Evento-list-pending">

    <li><strong>Evento 1</strong> - Data 1 - Location 1 <button onclick="handleApproveButtonClick(1)">Aprovação</button> <button onclick="handleRejeitarButtonClick(1)">Rejeitar</button></li> <br>
    <li><strong>Evento 2</strong> - Data 2 - Location 2 <button onclick="handleApproveButtonClick(2)">Aprovação</button> <button onclick="handleRejeitarButtonClick(2)">Rejeitar</button></li>
  </ul>
</section>


<!-- Approved Eventos Section -->
<section>
  <h2>Eventos Aprovados</h2>
  <ul id="Evento-list-approved">

    <li><strong>Approved Evento 1</strong> - Data A - Location A</li>
    <li><strong>Approved Evento 2</strong> - Data B - Location B</li>
  </ul>
</section>


<!-- Notifications Section -->
<section>
  <h2>Notifications</h2>
  <ul id="notification-list">

    <li>Evento 1 has been approved!</li>
    <li>Evento 2 has been Rejeitared.</li>
  </ul>
</section>

<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/guia_brecho/templates/rodape.php";
?>