<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/guia_brecho/templates/cabecalho.php";
require_once $_SERVER["DOCUMENT_ROOT"] . "/guia_brecho/models/brecho.php";

?>

<section>
  <div class="alert alert-info text-center m-3" role="alert">
    <a href="/guia_brecho/views/admin/editar_perfil.php">Editar Perfil</a>
  </div>
</section>

<?php if (isset($_SESSION['usuario']) && $_SESSION['usuario']['nivel_acesso'] === 1) : ?>
  <section>
    <?php if (!Brecho::buscarMeuBrecho($_SESSION['usuario']['id_usuario'])) : ?>
      <div class="alert alert-info text-center m-3" role="alert">
        <a href="/guia_brecho/views/admin/cadastro_brecho.php">Cadastrar Brecho</a>
      </div>
    <?php else : ?>
      <div class="alert alert-info text-center m-3" role="alert">
        <a href="/guia_brecho/views/admin/editar_brecho.php">Editar Brecho</a>
      </div>
      <div class="alert alert-info text-center m-3" role="alert">
        <a href="/guia_brecho/views/admin/listar_produtos.php">Gerenciar Produtos</a>
      </div>
    <?php endif; ?>
  </section>
<?php elseif (isset($_SESSION['usuario']) && $_SESSION['usuario']['nivel_acesso'] > 1) : ?>
  <section>
    <div class="alert alert-success text-center m-3" role="alert">
      <a href="/guia_brecho/views/admin/listar_produtos.php">Gerenciar Eventos</a>
    </div>
    <div class="alert alert-success text-center m-3" role="alert">
      <a href="/guia_brecho/views/admin/listar_faqs.php">Gerenciar FAQs</a>
    </div>
  </section>
<?php endif; ?>

<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/guia_brecho/templates/rodape.php";
?>