    <?php
    require_once $_SERVER["DOCUMENT_ROOT"] . "/guia_brecho/templates/cabecalho.php";
    ?>

<!---------------------------------- aqui o menu lateral do filtro --------------------------------------------->

<section>
    <div class="d-flex justify-content-end">
        <button class="btn btn-secondary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight" style="border:none; color:#fe712a; background-color:transparent;font-size: 22px;"><i class="fa-solid fa-sliders" style="color: #fe712a;"></i>Filtrar</button>
    </div>

    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasRightLabel" style="color:#fe712a;"><i class="fa-solid fa-sliders" style="color: #fe712a;"></i> Filtrar</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">       
            <a href="#" class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">Vestuário</a>
            <a href="#">Calçados</a>
            <a href="#">Acessórios</a>    
            <form action="">
                <label for="customRange3" class="form-label">Valor até: R$ <span id="display">0</span> </label>
                <input type="range" class="form-range" min="0" max="500" value="0" step="5" id="customRange3" oninput="precoRange(this.value)">  
            </form>
        </div>
    </div>
</section>

<!------------------------------------ aqui os cards dos produtos --------------------------------------------->
<h3 style="color:#fe712a">Produtos</h3>
<div class="row row-cols-1 row-cols-md-4 g-4" style="padding: 8.5rem;">
    <div class="col">
        <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn-img"> 
            <div class="card">
                <img src="https://source.unsplash.com/random/900x900/?blouse" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Blusa feminina</h5>
                    <p class="card-text">Vestuário <br> <b>R$ 25,00</b> </p>
                </div>
            </div>
        </button>
    </div>
    <div class="col">
        <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal1" class="btn-img"> 
            <div class="card">
                <img src="https://source.unsplash.com/random/900x900/?shirt" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Camisa Masculina</h5>
                    <p class="card-text">Vestuário <br> <b>R$ 35,00</b> </p>
                </div>
            </div>
        </button>
    </div>
    <div class="col">
        <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal2" class="btn-img"> 
            <div class="card">
                <img src="https://source.unsplash.com/random/900x900/?dress" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Vestido feminio</h5>
                    <p class="card-text">Vestuário<br> <b>R$ 50,00</b> </p>
                </div>
            </div>
        </button>
    </div>
    <div class="col">
        <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal3" class="btn-img"> 
            <div class="card">
                <img src="https://source.unsplash.com/random/900x900/?pants" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Calça Mas/Fem</h5>
                    <p class="card-text">Vestuário<br> <b>R$ 60,00</b> </p>
                </div>
            </div>
        </button>
    </div>
    <div class="col">
        <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal4" class="btn-img"> 
            <div class="card">
                <img src="https://source.unsplash.com/random/900x900/?coats" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Casaco Mas/Fem</h5>
                    <p class="card-text">Vestuário<br> <b>R$ 55,00</b> </p>
                </div>
            </div>
        </button>
    </div>
    <div class="col">
        <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal5" class="btn-img"> 
            <div class="card">
                <img src="https://source.unsplash.com/random/900x900/?shoe" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Sapato Mas/Fem</h5>
                    <p class="card-text">Calçados<br> <b>R$ 25,00</b> </p>
                </div>
            </div>
        </button>
    </div>
    <div class="col">
        <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal6" class="btn-img"> 
            <div class="card">
                <img src="https://source.unsplash.com/random/900x900/?skirt" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Saia Feminina</h5>
                    <p class="card-text">Vestuário <br> <b>R$ 25,00</b> </p>
                </div>
            </div>
        </button>
    </div>
    <div class="col">
        <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal6" class="btn-img"> 
            <div class="card">
                <img src="https://source.unsplash.com/random/900x900/?bracelet" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Saia Feminina</h5>
                    <p class="card-text">Vestuário <br> <b>R$ 25,00</b> </p>
                </div>
            </div>
        </button>
    </div>
    <div class="col">
        <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal6" class="btn-img"> 
            <div class="card">
                <img src="https://source.unsplash.com/random/900x900/?hat" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Saia Feminina</h5>
                    <p class="card-text">Vestuário <br> <b>R$ 25,00</b> </p>
                </div>
            </div>
        </button>
    </div>  
</div>
    <!----------------------------------------- aqui o efeito modal ------------------------------------------>
<div>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="card" style="width: 32rem;">
                    <img src="https://source.unsplash.com/random/900x900/?blouse" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Cropped Lastex com alças finas - R$ 15,00</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="card" style="width: 32rem;">
                    <img src="https://source.unsplash.com/random/900x900/?shirt" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Camisa Social Masculina - R$ 25,00</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="card" style="width: 32rem;">
                    <img src="https://source.unsplash.com/random/900x900/?dress" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Vestido feminino - R$ 50,00</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="card" style="width: 32rem;">
                    <img src="https://source.unsplash.com/random/900x900/?pants" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Pulseira - R$ 12,00</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModal4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="card" style="width: 32rem;">
                    <img src="https://source.unsplash.com/random/900x900/?coats" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Pulseira - R$ 12,00</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModal5" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="card" style="width: 32rem;">
                    <img src="https://source.unsplash.com/random/900x900/?shoe" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Pulseira - R$ 12,00</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModal6" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="card" style="width: 32rem;">
                    <img src="https://source.unsplash.com/random/900x900/?skirt" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Pulseira - R$ 12,00</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    <!---------------------========================================================------------------------->

<<<<<<< HEAD
<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/guia_brecho/templates/rodape.php";
?>
=======


    <?php
    require_once $_SERVER["DOCUMENT_ROOT"] . "/guia_brecho/templates/rodape.php";
    ?>






    <!--link de imagens aleatorias: https://source.unsplash.com/random/1920x1080/?(aqui vai a drescricao da img em ingles) -->
>>>>>>> 6f07a23 (alt layout para card e implmentacao menu lateral)
