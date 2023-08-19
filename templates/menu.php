<?php
session_start();
?>
<?php if (!isset($_SESSION['usuario']['nivel_acesso'])) : ?>
    <a class="nav-link active text-white" aria-current="page" href="/guia_brecho/index.php">Home</a>
    <a class="nav-link active text-white" aria-current="page" href="/guia_brecho/views/produtos.php">Produtos</a>
    <a class="nav-link active text-white" aria-current="page" href="/guia_brecho/views/loja.php">Lojas</a>
    <a class="nav-link active text-white" aria-current="page" href="/guia_brecho/views/eventos.php">Eventos</a>
    <a class="nav-link active text-white" aria-current="page" href="/guia_brecho/views/faqs.php">FAQs</a>
    <a class="nav-link active text-white" aria-current="page" href="/guia_brecho/views/quemsomos.php">Quem Somos?</a>
    <a class="nav-link active text-white" aria-current="page" href="/guia_brecho/views/login.php">Login</a>
    </div>
    </div>
    </div>
    </nav>
    </header>
    <main>

    <?php else : ?>

        <?php if ($_SESSION['usuario']['nivel_acesso'] == '1') :
            //var_dump( $_SESSION['usuario']['nv_acesso']);
        ?>

            <a class="nav-link active text-white" aria-current="page" href="/guia_brecho/index.php">Home</a>
            <a class="nav-link active text-white" aria-current="page" href="/guia_brecho/views/produtos.php">Meus Produtos</a>
            <a class="nav-link active text-white" aria-current="page" href="/guia_brecho/views/admin/cadastrar_produto.php">Cadastrar Produtos</a>
            <a class="nav-link active text-white" aria-current="page" href="/guia_brecho/views/loja.php">Minha Lojas</a>
            <a class="nav-link active text-white" aria-current="page" href="\guia_brecho\views\admin\cadastro_brecho.php">Cadastrar Loja</a>
            <a class="nav-link active text-white" aria-current="page" href="/guia_brecho/views/eventos.php">Meus Eventos</a>
            <a class="nav-link active text-white" aria-current="page" href="/guia_brecho/views/faqs.php">FAQs</a>
            <a class="nav-link active text-white" aria-current="page" href="/guia_brecho/controllers/logout_controller.php">Sair</a>
            </div>
            <div class="position-absolute end-0 mx-3">
                <p class="active text-white" aria-current="page">Olá, <?= $_SESSION["usuario"]["nome"] ?></p>
            </div>

            </div>
            </div>
            </nav>
            </header>
            <main>
            <?php else : ?>
                <a class="nav-link active text-white" aria-current="page" href="/guia_brecho/index.php">Home</a>
                <a class="nav-link active text-white" aria-current="page" href="/guia_brecho/views/produtos.php">Produtos</a>
                <a class="nav-link active text-white" aria-current="page" href="/guia_brecho/views/loja.php">Lojas</a>
                <a class="nav-link active text-white" aria-current="page" href="/guia_brecho/views/eventos.php">Eventos</a>
                <a class="nav-link active text-white" aria-current="page" href="/guia_brecho/views/faqs.php">FAQs</a>
                <a class="nav-link active text-white" aria-current="page" href="/guia_brecho/views/quemsomos.php">Quem Somos?</a>
                <a class="nav-link active text-white" aria-current="page" href="/guia_brecho/views/login.php">Login</a>
                </div>
                </div>
                </div>
                </nav>
                </header>
                <main>

                <?php endif; ?>
            <?php endif; ?>