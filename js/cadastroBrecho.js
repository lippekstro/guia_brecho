

// Adiciona um evento de clique ao documento
document.addEventListener('click', function (event) {
  // Verifica se o elemento clicado é do tipo input

  if (event.target.tagName.toLowerCase() === 'input')
     {
      var inputId = event.target.id;
      //console.log(inputId) precisa de implementação para ser somente no cadastro_brecho
      var Nomeinput = document.getElementById(inputId);
      // Obtém o ID do input clicado
      if((inputId != "nome_produto") && (inputId != "descricao") && (inputId != "descricao") && (inputId != "preco") && (inputId != "estoque")){
        console.log("entrou")
      
      var label = document.querySelector('label[for="' + inputId+ '"]');
      label.classList.add("labelDestacada");
      console.log('O input contém texto.');
    }

  }
}
);



document.addEventListener('click', function (event) {
  // Verifica se o elemento clicado é do tipo input

  if (event.target.tagName.toLowerCase() === 'input')
     {
      var inputId = event.target.id;
      //console.log(inputId) precisa de implementação para ser somente no cadastro_brecho
      var Nomeinput = document.getElementById(inputId);
      console.log(Nomeinput);
      console.log("aquiuii");
      console.log(inputId);
      // Obtém o ID do input clicado
      if((inputId == "files")||(inputId == "imagem_produto")){
        console.log("entrouuuuu");
      
        //Implementação da Foto de LOGO
        var files = Nomeinput;//document.querySelector('input[name="inputId"]');
        console.log('aqui abaixo');
        console.log(files);

        files.addEventListener("change", function (file) {
          var input = file.target;

          var reader = new FileReader();

          reader.onload = function () {
            var dataURL = reader.result;
            if(inputId == "imagem_produto"){
              var outputCadProduto = document.getElementById('outputCadProduto');
              outputCadProduto.src = dataURL;
            }
            var output = document.getElementById('output');
            output.src = dataURL;
          };

          reader.readAsDataURL(input.files[0]);
        }
      );




    }

  }
}
);





//}

/*
//Implementação da Foto de LOGO
var files = document.querySelector('input[name="files"]');
console.log(files);
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
*/