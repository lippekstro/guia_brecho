<?php
if (isset($_COOKIE['msg'])) {
  setcookie('msg', '', time() - 3600, '/guia_brecho/');
  setcookie('tipo', '', time() - 3600, '/guia_brecho/');
}

require_once $_SERVER["DOCUMENT_ROOT"] . "/guia_brecho/templates/cabecalho.php";
require_once $_SERVER["DOCUMENT_ROOT"] . "/guia_brecho/models/brecho.php";

$brecho = Brecho::buscarMeuBrecho($_SESSION['usuario']['id_usuario']);

?>

<section>
    <?php if (isset($_COOKIE['msg'])) : ?>
        <?php if ($_COOKIE['tipo'] === 'sucesso') : ?>
            <div class="alert alert-success text-center m-3" role="alert">
                <?= $_COOKIE['msg'] ?>
            </div>
        <?php elseif ($_COOKIE['tipo'] === 'perigo') : ?>
            <div class="alert alert-danger text-center m-3" role="alert">
                <?= $_COOKIE['msg'] ?>
            </div>
        <?php else : ?>
            <div class="alert alert-info text-center m-3" role="alert">
                <?= $_COOKIE['msg'] ?>
            </div>
        <?php endif; ?>
    <?php endif; ?>
</section>

<div class="admin">
  <section>
    <div class="mt-4 d-flex justify-content-center"> <!-- Center-align buttons -->
      <a href="/guia_brecho/views/admin/perfil_editar.php"><button type="button" class="btn btn-custom btn-lg mr-3">Perfil</button></a>
    </div>
  </section>

  <?php if (isset($_SESSION['usuario']) && $_SESSION['usuario']['nivel_acesso'] === 1) : ?>
    <section>
      <?php if (!$brecho) : ?>
        <div class="alert alert-info text-center m-3" role="alert">
          <a href="/guia_brecho/views/admin/brecho_cadastrar.php"><button type="button" class="btn btn-custom btn-lg mr-3">Criar Brecho</button></a>
        </div>
      <?php else : ?>
        <div class="alert alert-info text-center m-3" role="alert">
          <a href="/guia_brecho/views/admin/perfil_brecho.php?id=<?= $brecho['id_brecho'] ?>"><button type="button" class="btn btn-custom btn-lg mr-3">Editar Brecho</button></a>
          <a href="/guia_brecho/controllers/brecho_delete_controller.php?id=<?= $brecho['id_brecho'] ?>"><button type="button" class="btn btn-custom btn-lg">Excluir Brecho</button></a>
        </div>
        <div class="alert alert-info text-center m-3" role="alert">
          <a href="/guia_brecho/views/admin/produto_listar.php"><button type="button" class="btn btn-custom btn-lg">Gerenciar produtos</button></a>
        </div>
      <?php endif; ?>
    </section>
  <?php elseif (isset($_SESSION['usuario']) && $_SESSION['usuario']['nivel_acesso'] > 1) : ?>
    <section>
      <div class="alert alert-success text-center m-3" role="alert">
        <a href="/guia_brecho/views/admin/evento_listar.php"><button type="button" class="btn btn-custom btn-lg">Gerenciar Eventos</button></a>
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