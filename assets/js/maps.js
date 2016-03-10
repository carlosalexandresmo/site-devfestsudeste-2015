// GOOGLE MAPS
google.maps.event.addDomListener(window, 'load', init);

var map;

var latitude = -19.9295515,
longitude = -43.9371379,

mapDescription = "<strong>Devfest Sudeste 2015</strong><br>CDL/BH <br> Av. João Pinheiro, 495 – Bairro Funcionários <br> Belo Horizonte/MG – 30130-180";


function init() {
  var mapOptions = {
    center: new google.maps.LatLng(latitude,longitude),
    zoom: 16,
    zoomControl: false,
    zoomControlOptions: {
      style: google.maps.ZoomControlStyle.DEFAULT,
    },
    disableDoubleClickZoom: true,
    mapTypeControl: true,
    mapTypeControlOptions: {
      style: google.maps.MapTypeControlStyle.HORIZONTAL_BAR,
    },
    scaleControl: true,
    scrollwheel: false,
    streetViewControl: true,
    draggable : true,
    overviewMapControl: true,
    overviewMapControlOptions: {
      opened: false,
    },


    mapTypeId: google.maps.MapTypeId.ROADMAP
  }


  var mapElement = document.getElementById('google-map');
  var map = new google.maps.Map(mapElement, mapOptions);
  var locations = [
  ['', latitude,longitude]
  ];

  marker = new google.maps.Marker({
    icon: 'assets/img/pin.png',
    title: 'Devfest Sudeste 2015',
    position: new google.maps.LatLng(locations[0][1], locations[0][2]),
    map: map
  });

  var infowindow = new google.maps.InfoWindow(), marker;

  infowindow.setContent(mapDescription);
  infowindow.open(map, marker);

  google.maps.event.addListener(marker, 'click', (function(marker, i) {
    return function() {
      infowindow.setContent(mapDescription);
      infowindow.open(map, marker);
    }
  })(marker))
}
