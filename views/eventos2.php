<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>index</title>
</head>
<link rel="stylesheet" href="../projeto/style.css">
<script src="../projeto/eventos.js"></script>
<link rel="stylesheet" href="/guia_brecho/css/style.css">
<link rel="shortcut icon" href="../projeto/logo guia brecho.png" type="image/x-icon">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" /> <!--Variable icon font-->
</head>
<header>
    <nav>
        <ul>
            <li> <img src="../projeto/logo guia brecho.png" class="logowidth"> </li>
            <li><a href="/guia_brecho/index.php">Home</a></li>
            <li><a href="/guia_brecho/views/produtos.php">Produtos</a></li>
            <li><a href="/guia_brecho/views/loja.php">Lojas</a></li>
            <li><a href="/guia_brecho/views/quemsomos.php">Quem Somos?</a></li>
            <li>
                <a href="/guia_brecho/views/login.php"><span class="material-symbols-outlined">
                    person
                    </span>Login</a><li> <input id="pesquisar" type="text" placeholder="Pesquise aqui">
        </ul>
    </nav>        
</header>
<body>
  <!DOCTYPE html>
  <html>
  
  <head>
  <title>W3.CSS</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <style>
  .mySlides {display:none;}
  </style>
  </head>
  
  <body>
  
  
  <div class="w3-content w3-section" style="max-width:500px">
    <img class="mySlides" src="../projeto/os-melhores-brechos-de-buenos-aires-dani-noce-imagem-destaque-960x625.jpg" style="width:100%">
    <img class="mySlides" src="../projeto/22196353_749325415274084_2586564532047180092_n.jpg" style="width:100%">
    <img class="mySlides" src="../projeto/102215216-zn-rio-de-janeiro-rj-27-02-2023-boom-de-brechos-na-tijuca-no-pos-pandemia-carolina-brech.webp" style="width:100%">
  </div>
  <script> /* imgs do formulario  */
    var myIndex = 0;
    carousel();
    
    function carousel() {
      var i;
      var x = document.getElementsByClassName("mySlides");
      for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";  
      }
      myIndex++;
      if (myIndex > x.length) {myIndex = 1}    
      x[myIndex-1].style.display = "block";  
      setTimeout(carousel, 2000); // Change image every 2 seconds
    }</script>
 
  
  </body>

  <div class="diveventos" >
      
    <div id="div1" >
      
     
      <form id="evento-form">
        
        <h2 class="w3-center"></h2>
  
        <div class="w3-content w3-section" style="max-width:250px">
          <img  src="../projeto/102215216-zn-rio-de-janeiro-rj-27-02-2023-boom-de-brechos-na-tijuca-no-pos-pandemia-carolina-brech.webp" style="width:100%">
        </div>
              
              
             
        <h2>Evento 2</h2>
              
             
        <p>Data: 15 de agosto de 2023</p>
              
             
        <p>Local: Local do evento 2</p>
              
             
        <p>Descrição: Descrição do evento 2</p>
        
  
        
      </form>
            </div>
    <div id="div2" >
    
    <form id="evento-form">
      <h2 class="w3-center"></h2>
  
      <div class="w3-content w3-section" style="max-width:250px">
        <img  src="../projeto/102215216-zn-rio-de-janeiro-rj-27-02-2023-boom-de-brechos-na-tijuca-no-pos-pandemia-carolina-brech.webp" style="width:100%">
       </div>
            
            
           
      <h2>Evento 2</h2>
            
           
      <p>Data: 15 de agosto de 2023</p>
            
           
      <p>Local: Local do evento 2</p>
            
           
      <p>Descrição: Descrição do evento 2</p>
      
  
      
    </form>
          </div>
          <div id="div3" >
    
            <form id="evento-form">
              
         
              <h2 class="w3-center"></h2>
  
              <div class="w3-content w3-section" style="max-width:250px">
                <img  src="../projeto/102215216-zn-rio-de-janeiro-rj-27-02-2023-boom-de-brechos-na-tijuca-no-pos-pandemia-carolina-brech.webp" style="width:100%">
             </div>
                    
                   
              <h2>Evento 2</h2>
                    
                   
              <p>Data: 15 de agosto de 2023</p>
                    
                   
              <p>Local: Local do evento 2</p>
                    
                   
              <p>Descrição: Descrição do evento 2</p>
              
  
  
            </form>
                  </div>
                  <div id="div3" >
    
                    <form id="evento-form">
                      
                               
         <h2 class="w3-center"></h2>
  
        <div class="w3-content w3-section" style="max-width:250px">
          <img  src="../projeto/102215216-zn-rio-de-janeiro-rj-27-02-2023-boom-de-brechos-na-tijuca-no-pos-pandemia-carolina-brech.webp" style="width:100%">
      </div>
                            
                            
                           
                      <h2>Evento 2</h2>
                            
                           
                      <p>Data: 15 de agosto de 2023</p>
                            
                           
                      <p>Local: Local do evento 2</p>
                            
                           
                      <p>Descrição: Descrição do evento 2</p>
                      
  
                      
                    </form>
                          </div>
                          <div id="div3" >
    
                            <form id="evento-form">
                              
                              <h2 class="w3-center"></h2>
  
                              <div class="w3-content w3-section" style="max-width:250px">
                                <img  src="../projeto/102215216-zn-rio-de-janeiro-rj-27-02-2023-boom-de-brechos-na-tijuca-no-pos-pandemia-carolina-brech.webp" style="width:100%">
                           </div>
                                    
                                    
                                   
                              <h2>Evento 2</h2>
                                    
                                   
                              <p>Data: 15 de agosto de 2023</p>
                                    
                                   
                              <p>Local: Local do evento 2</p>
                                    
                                   
                              <p>Descrição: Descrição do evento 2</p>
                              
  
  
                            </form>
                                  </div>
                 
            </div>
          </div>
          </div>
          <br>
        <div></div>
    
      <br>
        <nav>
     
          <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg{fill:#0a0a0a}</style><path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/> </svg><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z"/></svg><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z"/></svg>
          
        </nav>
  </body>
  </html>
  