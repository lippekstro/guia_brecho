<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Admin Eventoos</title>
</head>
<link rel="stylesheet" href="../projeto/style.css">
<script src="../projeto/Eventoos.js"></script>
<link rel="stylesheet" href="/guia_brecho/css/style.css">
<link rel="shortcut icon" href="../projeto/logo guia brecho.png" type="image/x-icon">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" /> <!--Variable icon font-->
</head>
<body>
  <header>
    <h1>Admin dos Eventos </h1>
  </header>

  <nav>
    <!-- Add navigation links for various admin actions -->
    <ul>
      <li><a href="#pending-Eventos">Pending Eventos</a></li>
      <li><a href="#approved-Eventos">Approved Eventos</a></li>
      <li><a href="#notifications">Notifications</a></li>
      <li><a href="#logout">Logout</a></li>
    </ul>
  </nav>

  <main>
    <!-- Pending Eventos Section -->
    <section>
        <h2>Eventos Pendentos</h2>
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
      
  </main>

  <footer>
    <p>Admin Dashboard - © Your Website 2023</p>
  </footer>
</body>
</html>
