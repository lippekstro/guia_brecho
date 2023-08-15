<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/guia_brecho/templates/cabecalho.php";
?>

    
    <!-- CARROSSEL  ------------->


    <link href="/guia_brecho/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="/guia_brecho/css/indexhome.css">
    <link rel="stylesheet" href="/guia_brecho/css/vendor.css">
<body>
    
             
         <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/1.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption">
              <h5>Guia Brechó</h5>
                              <p>Bem-vindo ao nosso mundo de produtos de brechó cuidadosamente selecionados! Aqui, você encontrará uma coleção única de peças que vão desde roupas e calçados até acessórios, todos em ótimo estado e prontos para uma nova vida com você.</p>
                              <p><a href="/guia_brecho/views/login.php" class="btn btn-warning mt-3 butao_nav">Cadastre-se</a></p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/carrossel1.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption">
              <h5>Guia Brechó</h5>
                              <p>Explore os Eventos que acontecem na ilha - Moda, Sustentabilidade e Diversão!</p>
                              <p><a href="/guia_brecho/views/eventos.php" class="btn btn-warning mt-3 butao_nav">Eventos</a></p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/carrossel2.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption">
              <h5>Guia Brechó</h5>
                              <p>Nossos produtos abrangem uma ampla variedade de estilos, tamanhos e marcas, para atender às necessidades de todos os nossos clientes.</p>
                              <p><a href="/guia_brecho/views/produtos.php" class="btn btn-warning mt-3 butao_nav">Produtos</a></p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

      <!-- FIM CARROSSEL ------------------------ -->

      <!-- COLEÇÃO ---------------- -->
    <section id="latest-collection">
            <div class="container">
              <div class="product-collection row">
                <div class="col-lg-7 col-md-12 left-content">
                  <div class="collection-item">
                    <div class="products-thumb">
                      <img src="img/5.jpg" alt="collection item" class="large-image image-rounded">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 product-entry">
                      <div class="categories text_banner_color">Faça sua coleção</div>
                      <h3 class="item-title text_banner_color1">Estilo pessoal.</h3>
                      <p class="text_banner_color"> Na busca por um guarda-roupa que reflita sua autenticidade, oferecemos uma ampla gama de opções. </p>
                      <div>
                      <button class="btn-56">
                      <a href="/guia_brecho/views/produtos.php" class="text_banner_link">Veja Mais</a>
                      </button>
                    </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-5 col-md-12 right-content flex-wrap">
                  <div class="collection-item top-item">
                    <div class="products-thumb">
                      <img src="img/collection-item2.jpg" alt="collection item" class="small-image image-rounded">
                    </div>
                    <div class="col-md-6 product-entry">
                      <div class="categories"></div>
                      <h3 class="item-title text_banner_color1">Conforto em cada passo.</h3>
                    </div>
                  </div>
                  <div class="collection-item bottom-item">
                    <div class="products-thumb">
                      <img src="img/4.jpg" alt="collection item" class="small-image image-rounded">
                    </div>
                    <div class="col-md-6 product-entry">
                      <div class="categories text_banner_color">Descubra nossas coleções.</div>
                      <h3 class="item-title text_banner_color1">Arte em Movimento.</h3>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
        <!-- FIM COLEÇÃO ---------------- -->





         <!-- cards-------------------------------- -->
      
         <section class="card1">
            <div id="card-area">
                <div class="wrapper">
                    <div class="box-area"> 
                        <div class="box">
                            <img src="img/acessorios.png" alt="">
                            <div class="overlay">
                                <h3>Acessórios</h3>
                                <p>Acreditamos que os detalhes fazem toda a diferença, e nossos acessórios únicos irão adicionar um toque especial a qualquer look.</p>
                                <a href="#" >VEJA MAIS</a>
                            </div>
                        </div>
                        <div class="box">
                            <img src="img/calça.png" alt="">
                            <div class="overlay">
                                <h3>Calças</h3>
                                <p>Nossas calças são cuidadosamente selecionadas por nossos clientes, garantindo qualidade e conforto para que você se sinta confiante em qualquer ocasião. </p>
                                <a href="#">VEJA MAIS </a>
                            </div>
                        </div>
                        <div class="box">
                            <img src="img/calçados.png" alt="">
                            <div class="overlay">
                                <h3>Calçados</h3>
                                <p>Nossos calçados são selecionados com carinho, garantindo que cada par esteja em ótimo estado e pronto para uma nova jornada com você.</p>
                                <a href="#">VEJA MAIS</a>
                            </div>
                        </div>
                    </div>            
                </div>       
            </div>
        </section>    
        <!-- fim cards ---------------------- -->


              <!-- EVENTOS ---------------------------------- -->
      <section id="latest-blog" class="padding-large">
            <div class="container">
              <div class="section-header d-flex flex-wrap align-items-center justify-content-between">
                <h2 class="section-title">Eventos</h2>
                <div class="btn-wrap align-right">
                  <a href="/guia_brecho/views/eventos.php" class="d-flex align-items-center">Veja Mais<i class="icon icon icon-arrow-io"></i>
                  </a>
                </div>
              </div>
              <div class="row d-flex flex-wrap">
                <article class="col-md-4 post-item">
                  <div class="image-holder zoom-effect">
                    <a href="single-post.html">
                      <img src="img/evento1.jpeg" alt="post" class="post-image">
                    </a>
                  </div>
                  <div class="post-content d-flex">
                    <div class="meta-date">
                      <div class="meta-day text-primary">22</div>
                      <div class="meta-month">Aug-2021</div>
                    </div>
                    <div class="post-header">
                      <h3 class="post-title">
                        <a href="single-post.html">top 10 casual look ideas to dress up your kids</a>
                      </h3>
                      <a href="blog.html" class="blog-categories">Fashion</a>
                    </div>
                  </div>
                </article>
                <article class="col-md-4 post-item">
                  <div class="image-holder zoom-effect">
                    <a href="single-post.html">
                      <img src="img/evento3.jpeg" alt="post" class="post-image">
                    </a>
                  </div>
                  <div class="post-content d-flex">
                    <div class="meta-date">
                      <div class="meta-day text-primary">25</div>
                      <div class="meta-month">Aug-2021</div>
                    </div>
                    <div class="post-header">
                      <h3 class="post-title">
                        <a href="single-post.html">Latest trends of wearing street wears supremely</a>
                      </h3>
                      <a href="blog.html" class="blog-categories">Trending</a>
                    </div>
                  </div>
                </article>
                <article class="col-md-4 post-item">
                  <div class="image-holder zoom-effect">
                    <a href="single-post.html">
                      <img src="img/evneto2.jpeg" alt="post" class="post-image">
                    </a>
                  </div>
                  <div class="post-content d-flex">
                    <div class="meta-date">
                      <div class="meta-day text-primary">28</div>
                      <div class="meta-month">Aug-2021</div>
                    </div>
                    <div class="post-header">
                      <h3 class="post-title">
                        <a href="single-post.html">types of comfortable clothes ideas for women</a>
                      </h3>
                      <a href="blog.html" class="blog-categories">Inspiration</a>
                    </div>
                  </div>
                </article>
              </div>
            </div>
          </section>
        <!-- FIM EVENTOS ---------------------------------- -->




              

      <!-- flex box  -->
     
      <section class="flexbox">

      <div class="wrapper_caixa">
      <div class="caixa-area">
        <div class="icon-area">
          <i class="lni lni-island"></i>
        </div>
        <h6>único</h6>
        <p>Cada visita ao Guia Brechó revela achados únicos, oferecendo a chance de possuir algo verdadeiramente exclusivo e cheio de história.</p>
      </div>
      <div class="caixa-area custom">
        <div class="icon-area">
          <i class="lni lni-mashroom"></i>
        </div>
        <h6>Estilo</h6>
        <p>O Guia Brechó é um tesouro de estilo, onde peças ecléticas se harmonizam, permitindo a todos explorar sua expressão pessoal de maneira única.</p>
      </div>
      <div class="caixa-area">
        <div class="icon-area">
          <i class="lni lni-trees"></i>
        </div>
        <h6>Eclético</h6>
        <p>Ao adentrar no Guia brechó e mergulhar em um universo eclético de moda, onde cores, estilos e épocas se misturam em uma dança harmoniosa de autenticidade e diversidade.</p>
      </div>
    </div>    
 
  </section>
      <!-- fim flex box  -->


      <!--  BANNER ------------------------------ -->
      <section class="shoppify-section-banner">
            <div class="container">
              <div class="product-collection">
                <div class="left-content collection-item">
                  <div class="products-thumb">
                    <img src="img/2.jpg" alt="collection item" class="large-image image-rounded">
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-6 product-entry">
                    <div class="categories text_banner_color">Descubra Tesouros Únicos:</div>
                    <h3 class="item-title text_banner_color1">Um universo da moda.</h3>
                    <p class="text_banner_color">Na busca por um guarda-roupa que reflita sua autenticidade, oferecemos uma ampla gama de opções. Dos clássicos atemporais às peças mais ousadas, você encontrará algo que se encaixe perfeitamente no seu estilo pessoal.</p>
                    <button class="btn-56">
                      <a href="/guia_brecho/views/produtos.php" class="text_banner_link">Veja Mais</a>
                      </button>
                  </div>
                </div>
              </div>        
            </div>
          </section>
        <!-- FIM  BANNER ------------------------------ -->




      <!-- portfolio strats -->
      <section id="portfolio" class="portfolio section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-header text-center pb-5">
                        <h2>Our Projects</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur <br>adipisicing elit. Non, quo.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-12 col-lg-4">
                    <div class="card text-light text-center bg-white pb-2">
                        <div class="card-body text-dark">
                          <div class="img-area mb-4">
                              <img src="img/project-1.jpg" class="img-fluid" alt="">
                          </div>
                            <h3 class="card-title">Building Make</h3>
                            <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci eligendi modi temporibus alias iste. Accusantium?</p>
                            <button class="btn bg-warning text-dark">Learn More</button>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-4">
                    <div class="card text-light text-center bg-white pb-2">
                        <div class="card-body text-dark">
                          <div class="img-area mb-4">
                              <img src="img/project-2.jpg" class="img-fluid" alt="">
                          </div>
                            <h3 class="card-title">Building Make</h3>
                            <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci eligendi modi temporibus alias iste. Accusantium?</p>
                            <button class="btn bg-warning text-dark">learn More</button>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-4">
                    <div class="card text-light text-center bg-white pb-2">
                        <div class="card-body text-dark">
                          <div class="img-area mb-4">
                              <img src="img/project-3.jpg" class="img-fluid" alt="">
                          </div>
                            <h3 class="card-title">Building Make</h3>
                            <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci eligendi modi temporibus alias iste. Accusantium?</p>
                            <button class="btn bg-warning text-dark">Learn More</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </section>

      

          <!-- quem somos -->
         <!--  <section id="about" class="about section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-12 col-12">
                        <div class="about-img">
                            <img src="img/Prancheta 2.png" alt="" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-12 col-12 ps-lg-5 mt-md-5">
                        <div class="about-text">
                              <h2>Quem somos ?</h2>
                              <p>Bem-vindo(a) ao Guia Brechó, o seu guia online para explorar o mundo dos brechós em São Luís do Maranhão! Nós acreditamos na valorização do que é feito com cuidado e no apoio aos brechozeiros e brechozeiras locais que buscam crescer e expandir seus negócios. Como funciona o Guia Brechó? É simples! Nós fornecemos aos brechós locais uma plataforma para expor seus produtos, mostrando suas peças exclusivas e oferecendo informações detalhadas sobre suas lojas. Você poderá encontrar uma variedade de roupas, acessórios e itens de moda em nosso site, tudo em um só lugar!</p>
                              <a href="#" class="btn btn-warning">Saiba mais...</a>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <!-- fim de quem somos -->


        <!-- nossos serviços -->
      <section class="services section-padding serviços_cor" id="services">
          <div class="container">
              <div class="row">
                  <div class="col-md-12">
                      <div class="section-header text-center pb-5 text-orange">
                          <h2 class="h2_sevirço" >Sobre os nossos serviços:</h2>
                         
                      </div>
                  </div>
              </div>
              <div class="row">
                <div class="col-12 col-md-12 col-lg-4">
                    <div class="card text-black text-center bg-white pb-2">
                        <div class="card-body">
                            <i class="bi bi-laptop"></i>
                            <h3 class="card-title">Comunidade Engajada</h3>
                            <p class="lead">O que torna nosso site brechó verdadeiramente especial é a comunidade engajada que construímos ao longo do tempo. Nossos clientes não são apenas compradores, são membros valiosos da nossa família fashion sustentável</p>
                        </div>
                    </div>
                </div>
                  <div class="col-12 col-md-12 col-lg-4">
                  <div class="card text-black text-center bg-white pb-2">
                          <div class="card-body">
                            <i class="bi bi-journal"></i>
                              <h3 class="card-title">Sustentabilidade</h3>
                              <p class="lead">Uma das qualidades mais distintas e valorizadas do nosso site brechó é o compromisso inabalável com a sustentabilidade. Acreditamos que a moda pode ser bonita e responsável ao mesmo tempo, e por isso, priorizamos o conceito de reutilização e reciclagem em tudo o que fazemos.</p>
                          </div>
                      </div>
                  </div>
                  <div class="col-12 col-md-12 col-lg-4">
                  <div class="card text-black text-center bg-white pb-2">
                          <div class="card-body">
                            <i class="bi bi-intersect"></i>
                              <h3 class="card-title">Autenticidade</h3>
                              <p class="lead">No Guia brechó, a autenticidade é uma das características que nos define. Cada peça em nosso acervo tem uma história única e carrega consigo um charme que apenas itens vintage podem proporcionar.</p>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </section>
      <!-- FIM DE SERVIÇOS-->
   
 


    

    
    
    
    <script src="/guia_brecho/js/bootstrap.bundle.js"  ></script>
    <script src="js/script.js"></script>
</body>
</html>


<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/guia_brecho/templates/rodape.php";
?>
