<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/guia_brecho/templates/cabecalho.php";
require_once $_SERVER["DOCUMENT_ROOT"] . "/guia_brecho/models/brecho.php";

?>

<div class="admin">
  <section>
    <div class="mt-4 d-flex justify-content-center"> <!-- Center-align buttons -->
      <a href="/guia_brecho/views/admin/editar_perfil.php"><button type="button" class="btn btn-custom btn-lg mr-3">Perfil</button></a>
    </div>
  </section>

  <?php if (isset($_SESSION['usuario']) && $_SESSION['usuario']['nivel_acesso'] === 1) : ?>
    <section>
      <?php if (!Brecho::buscarMeuBrecho($_SESSION['usuario']['id_usuario'])) : ?>
        <div class="alert alert-info text-center m-3" role="alert">
          <a href="/guia_brecho/views/admin/cadastro_brecho.php"><button type="button" class="btn btn-custom btn-lg mr-3">Criar Brecho</button></a>
        </div>
      <?php else : ?>
        <div class="alert alert-info text-center m-3" role="alert">
          <a href="/guia_brecho/views/admin/perfil_loja.php"><button type="button" class="btn btn-custom btn-lg mr-3">Editar Brecho</button></a>
          <a href="/guia_brecho/controllers/delete_brecho_controller.php"><button type="button" class="btn btn-custom btn-lg">Excluir Brecho</button></a>
        </div>
        <div class="alert alert-info text-center m-3" role="alert">
          <a href="/guia_brecho/views/admin/listar_produtos.php"><button type="button" class="btn btn-custom btn-lg">Gerenciar produtos</button></a>
        </div>
      <?php endif; ?>
    </section>
  <?php elseif (isset($_SESSION['usuario']) && $_SESSION['usuario']['nivel_acesso'] > 1) : ?>
    <section>
      <div class="alert alert-success text-center m-3" role="alert">
        <a href="/guia_brecho/views/admin/listar_eventos.php"><button type="button" class="btn btn-custom btn-lg">Gerenciar Eventos</button></a>
      </div>
      <div class="alert alert-success text-center m-3" role="alert">
        <a href="/guia_brecho/views/admin/faq_listar.php"><button type="button" class="btn btn-custom btn-lg">Gerenciar FAQs</button></a>
      </div>
    </section>
  <?php endif; ?>
</div>



<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/guia_brecho/templates/rodape.php";
?>