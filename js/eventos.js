
/*formulario*/
var eventoForm = document.getElementById('evento-form');

eventoForm.addEventListener('submit', function(event) {
    event.preventDefault();

    var nome = document.getElementById('nome').value;
    var data = document.getElementById('data').value;
    var local = document.getElementById('local').value;
    var descricao = document.getElementById('descricao').value;

    console.log('Nome:', nome);
    console.log('Data:', data);
    console.log('Local:', local);
    console.log('Descrição:', descricao);

    eventoForm.reset();
});
/*pesquisa*/
const campoPesquisa = document.querySelector('#pesquisa');
const items = document.querySelectorAll('#lista li');
let regexCheck;

campoPesquisa.addEventListener('keyup', function(e) {
  regexCheck = new RegExp(`^${e.target.value}`, 'i');  
  items.forEach(item => {
    if (!item.innerText.match(regexCheck)) {
      item.style.display = 'none';
    } else {
      item.style.display = 'block';
    }
  });
});
/* time */
var campoHora = document.querySelector('input[type="time"]');
campoHora.value = '00:00';

/* imagem */
var files = document.querySelector('input[name="files"]');

files.addEventListener("change", function(file){
	var input = file.target;
	
	var reader = new FileReader();
    
	reader.onload = function(){
      var dataURL = reader.result;
      var output = document.getElementById('output');
      output.src = dataURL;
    };

    reader.readAsDataURL(input.files[0]);
});
/*localização*/
var x=document.getElementById("demo");
function getLocation()
  {
  if (navigator.geolocation)
    {
    navigator.geolocation.getCurrentPosition(showPosition,showError);
    }
  else{x.innerHTML="Geolocalização não é suportada nesse browser.";}
  }
 
function showPosition(position)
  {
  lat=position.coords.latitude;
  lon=position.coords.longitude;
  latlon=new google.maps.LatLng(lat, lon)
  mapholder=document.getElementById('mapholder')
  mapholder.style.height='150px';
  mapholder.style.width='250px';
 
  var myOptions={
  center:latlon,zoom:14,
  mapTypeId:google.maps.MapTypeId.ROADMAP,
  mapTypeControl:false,
  navigationControlOptions:{style:google.maps.NavigationControlStyle.SMALL}
  };
  var map=new google.maps.Map(document.getElementById("mapholder"),myOptions);
  var marker=new google.maps.Marker({position:latlon,map:map,title:"Você está Aqui!"});
  }
 
function showError(error)
  {
  switch(error.code) 
    {
    case error.PERMISSION_DENIED:
      x.innerHTML="Usuário rejeitou a solicitação de Geolocalização."
      break;
    case error.POSITION_UNAVAILABLE:
      x.innerHTML="Localização indisponível."
      break;
    case error.TIMEOUT:
      x.innerHTML="O tempo da requisição expirou."
      break;
    case error.UNKNOWN_ERROR:
      x.innerHTML="Algum erro desconhecido aconteceu."
      break;
    }
  }
   /* imgs do formulario  */
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
   }
   ////////
   // Function to display events on the page
function displayEvents(events, status) {
  const eventList = document.getElementById('event-list-' + status);
  eventList.innerHTML = ''; // Clear the current list of events

  events.forEach(function (event) {
    // Create list items for each event and append them to the list
    const listItem = document.createElement('li');
    listItem.innerHTML = `<strong>${event.name}</strong> - ${event.date} - ${event.location}`;
    eventList.appendChild(listItem);
  });
}

// Function to display notifications on the page
function displayNotifications() {
  const notificationList = document.getElementById('notification-list');
  notificationList.innerHTML = ''; // Clear the current list of notifications

  notifications.forEach(function (notification) {
    // Create list items for each notification and append them to the list
    const listItem = document.createElement('li');
    listItem.innerText = notification.message;
    notificationList.appendChild(listItem);
  });
}

function initializeAdminPage() {
  // Fetch pending and approved events on page load
  getPendingEvents();
  getApprovedEvents();
  // Display existing notifications on page load
  displayNotifications();
}

  
  



  