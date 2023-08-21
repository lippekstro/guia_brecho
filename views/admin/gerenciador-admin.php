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

  <h1 class="admtitulo" style="font-size: 30px;">Admin Gerenciamento</h1>
  <div class="container adm-container">
 
    <div class="row">
      <div class="col-sm-6 search-bar">
        <form class="form-inline">
          <input class="form-control form-control-sm" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
          <button class="btn btn-outline-success btn-sm ml-2" type="submit">Pesquisar</button>
        </form>
      </div>
      <div class="col-sm-6 delete-all-button text-right">
        <button class="btn btn-danger btn-sm" id="btnDeleteAll">Deletar Todos os Dados</button>
      </div>
    </div>

    <div class="accordion" id="accordionPanelsStayOpenExample">
      <!-- Dados Pessoais - First accordion panel -->
      <div class="accordion-item">
        <h2 class="accordion-header" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne">
          <button class="accordion-button" type="button" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
            <span>Dados Pessoais</span>
          </button>
        </h2>
        <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show">
          <div class="accordion-body">
            <div>
              <label for="nome">Nome</label>
              <input class="box-max-input" type="text" name="nome" id="nome">
            </div>
            <div>
              <label for="sobrenome">Sobrenome</label>
              <input class="box-max-input" type="text" name="sobrenome" id="sobrenome">
            </div>
            <div>
              <label for="email">E-mail de Acesso</label>
              <input class="box-max-input" type="email" name="email" id="email">
            </div>
            <div>
              <label for="senha">Senha de Acesso</label>
              <input class="box-max-input" type="password" name="password" id="password">
            </div>
            <div class="edit-save-buttons">
              <button class="btn btn-success btn-sm" id="btnSavePersonal">Salvar</button>
            </div>
          </div>
        </div>
      </div>

      <!-- Dados do Brechó - Second accordion panel -->
      <div class="accordion-item">
        <h2 class="accordion-header" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo">
          <button class="accordion-button" type="button" aria-expanded="true" aria-controls="panelsStayOpen-collapseTwo">
            <span>Dados do Brechó</span>
          </button>
        </h2>
        <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse">
          <div class="accordion-body">
            <div>
              <label for="nomebrecho">Nome do Brechó</label>
              <input class="box-max-input" type="text" name="nomebrecho" id="nomebrecho">
            </div>
            <div>
              <label for="cnpj-cpf">CNPJ</label>
              <input class="box-max-input" type="text" name="cnpj-cpf" id="cnpj-cpf">
            </div>
            <div>
              <label for="cidade">Cidade</label>
              <input class="box-max-input" type="text" name="cidade" id="cidade">
            </div>
            <div class="edit-save-buttons">
              <button class="btn btn-success btn-sm" id="btnSaveBrecho">Salvar</button>
            </div>
          </div>
        </div>
      </div>

      <!-- Mídias do Brechó - Third accordion panel -->
      <div class="accordion-item">
        <h2 class="accordion-header" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree">
          <button class="accordion-button" type="button" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
            <span>Mídias do Brechó</span>
          </button>
        </h2>
        <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse">
          <div class="accordion-body">
            <fieldset class="box-input">
              <legend>Mídias do Brechó</legend>
              <p>Escolha sua Logo:</p>
              <br>
              <div>
                <input type="file" name="files" />
              </div>
              <p id="view_photo">
                <img id='output'>
              </p>
              <br>
              <div>
                <label for="redeSocial">Rede Social</label>
                <input class="box-max-input" type="text" name="redeSocial" id="redeSocial">
              </div>
              <div>
                <label for="contato">WhatsApp/Telefone</label>
                <input class="box-max-input" type="contato" name="contato" id="contato">
              </div>
            </fieldset>
            <div class="edit-save-buttons">
              <button class="btn btn-success btn-sm" id="btnSaveMidia">Salvar</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
