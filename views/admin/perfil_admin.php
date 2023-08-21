<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/guia_brecho/templates/cabecalho.php";
?>

<div class="admin">
    <ul class="nav nav-tabs">
      <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="/guia_brecho/views\admin\perfil_admin.php">Perfil Admin</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/guia_brecho/views\admin\gerenciador-admin.php">Gerenciador Admin</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Eventos</a>
      </li>
    </ul>
  </div>
  

<div class="container">
  <h1 class="text-center" style="font-size: 30px;">Perfil Admin</h1>
  <div id="profile" class="border p-4 mb-4 bg-transparent-orange">
    <div class="form-group">
      <label for="name">Nome:</label>
      <input type="text" id="name" class="form-control" value="Nome de exemplo" disabled>
    </div>

    <div class="form-group">
      <label for="email">E-mail:</label>
      <input type="email" id="email" class="form-control" value="email@example.com" disabled>
    </div>

    <div class="form-group">
      <label for="password">Nova senha:</label>
      <input type="password" id="password" class="form-control" disabled>
    </div>

    <div class="form-group">
      <label for="confirmPassword">Confirmar nova senha:</label>
      <input type="password" id="confirmPassword" class="form-control" disabled>
    </div>
  </div>

  <button id="editButton" class="btn btn-primary">Editar</button>
  <button id="saveButton" class="btn btn-success" style="display: none;">Salvar</button>
</div>

<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/guia_brecho/templates/rodape.php";
?>