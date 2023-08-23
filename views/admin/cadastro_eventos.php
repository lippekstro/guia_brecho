<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/guia_brecho/templates/cabecalho.php";
?>

<link rel="stylesheet" href="/guia_brecho/css/style1.css">


<form id="form-evento">
  <label for="nome">Titulo do evento:</label>
  <input type="text" id="nome" required>

  <label for="data">Data do evento:</label>
  <input type="date" id="data" required>
  <label for="hora-cons">Escolha o horário da consulta: </label>
  <input id="hora-cons" type="time" name="hora-cons" value="00:00">

  <label for="local">Local do evento:</label>
  <label for="logradouro">Logradouro</label>
  <input id="logradouro" type="text" required />
  <label for="numero">Número</label>
  <input id="numero" type="text" />
  <label for="complemento"> Complemento</label>
  <input id="complemento" type="text" />
  <label for="bairro">Bairro</label>
  <input id="bairro" type="text" required />
  <label for="uf">Estado</label>


  <label for="img">Arquivar Imagens</label>
  <input type="file" name="files" />

  <label for="descricao">Descrição do evento:</label><br>
  <textarea id="descricao" rows="4" required></textarea>
  <button type="submit">Enviar</button>

</form>

<br>
<div></div>
<p id="demo">Clique para obter sua localização:</p>
<button onclick="getLocation()">Clique aqui</button>
<div id="mapholder"></div>
<script src="http://maps.google.com/maps/api/js?sensor=false"></script>



<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/guia_brecho/templates/rodape.php";
?>