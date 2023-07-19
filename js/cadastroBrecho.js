

// Adiciona um evento de clique ao documento
document.addEventListener('click', function (event) {
  // Verifica se o elemento clicado é do tipo input
  if (event.target.tagName.toLowerCase() === 'input') {
    var inputId = event.target.id;
    var Nomeinput = document.getElementById(inputId);
    // Obtém o ID do input clicado

    var label = document.querySelector('label[for="' + inputId + '"]');
    label.classList.add("labelDestacada");
    console.log('O input contém texto.');

  }
}
);


//Implementação da Foto de LOGO
var files = document.querySelector('input[name="files"]');

files.addEventListener("change", function (file) {
  var input = file.target;

  var reader = new FileReader();

  reader.onload = function () {
    var dataURL = reader.result;
    var output = document.getElementById('output');
    output.src = dataURL;
  };

  reader.readAsDataURL(input.files[0]);
});