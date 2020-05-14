// Fonction d'initialisation de la carte
function initMap() {
  var myLatLng = {lat: 46.815594, lng: -0.866745};

  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 15,
    center: myLatLng,
	gestureHandling: 'greedy'
	// scrollwheel: false,
	// zoomControl: true
	// disableDefaultUI: true
  });

  var marker = new google.maps.Marker({
    position: myLatLng,
    map: map,
    title: 'Garage Fortin'
  });
  
   textmarker = new google.maps.Marker({
      position: map.getCenter(),
      map: map,
      visible: false
  	});
  
  var infowindow = new google.maps.InfoWindow({
    	content: "Contacts 02 51 91 85 58 remy.fortin@orange.fr Garage Fortin zi de la blauderie 85700 Sèvremont"
		});
    // infowindow.open(map, textmarker);
}
window.onload = function()
{
	// Fonction d'initialisation qui s'exécute lorsque le DOM est chargé
	initMap(); 
};
			
			 