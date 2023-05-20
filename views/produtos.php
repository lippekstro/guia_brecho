<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/guia_brecho/templates/cabecalho.php";
?>
<!------------------------------ aqui a tabela com os produtos ----------------------------------------------->
<table class="table">
    <thead>
        <th>Produto</th>
        <th>Descição do produto</th>
        <th>Categoria</th>
        <th>Estoque</th>
        <th>Preço</th>   
    </thead>
    <tbody>
        <tr>
            <td>
                <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn-img"> 
                    <img src="https://source.unsplash.com/random/900x900/?blouse" class="rounded  borda-laranja img-resize" alt="">
                </button>
            </td>
            <td>Cropped Lastex com alças finas</td>
            <td>Blusas</td>
            <td>5</td>
            <td>R$ 15,00</td>
        </tr>
        <tr>
            <td>
                <button class="btn-img" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                    <img src="https://source.unsplash.com/random/900x900/?shirt" class="rounded  borda-laranja img-resize" alt="">
                </button>

            </td>
            <td>Camisa Social Masculina</td>
            <td>Camisa</td>
            <td>1</td>
            <td>R$ 25,00</td> 
        </tr>
        <tr>
            <td>
                <button class="btn-img" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal3">
                    <img src="https://source.unsplash.com/random/900x900/?dress" class="rounded  borda-laranja img-resize" alt="">
                </button> 
            </td>
            <td>Vestido feminino</td>
            <td>Vestido</td>
            <td>3</td>
            <td>R$ 50,00</td> 
        </tr>
        <tr>
            <td>
                <button class="btn-img" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal4">
                    <img src="https://source.unsplash.com/random/900x900/?bracelet" class="rounded  borda-laranja img-resize" alt="">
                </button> 
            </td>
            <td>Pulseira</td>
            <td>Acessórios</td>
            <td>2</td>
            <td>R$ 12,00</td> 
        </tr>
    </tbody>
</table>
<!--=========================================================================================================-->

<!----------------------------------------- aqui o efeito modal ----------------------------------------------->
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
<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
<div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
<div class="modal fade" id="exampleModal4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="card" style="width: 32rem;">
                <img src="https://source.unsplash.com/random/900x900/?bracelet" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Pulseira - R$ 12,00</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!---------------------------========================================================------------------------->

<nav aria-label="Page navigation example">
  <ul class="pagination justify-content-center">
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
  </ul>
</nav>

<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/guia_brecho/templates/rodape.php";
?>
