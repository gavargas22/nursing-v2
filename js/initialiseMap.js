/*google.maps.visualRefresh = true;

var map;
var sonLocation = new google.maps.LatLng(-25.363882,131.044922);
function initialize() {
  var mapOptions = {
    zoom: 18,
    center: new google.maps.LatLng(31.7667963, -106.5052397),
    mapTypeId: google.maps.MapTypeId.ROADMAP,
    scrollwheel: false
  };
  map = new google.maps.Map(document.getElementById('map-canvas'),
      mapOptions);
      
      var marker = new google.maps.Marker({
      position: sonLocation,
      map: map,
      title: 'Hello World!'
  });
}*/
google.maps.visualRefresh = true;
google.maps.event.addDomListener(window, 'load', initialize);

function initialize() {
  var myLatlng = new google.maps.LatLng(31.766791,-106.505850);
  var mapOptions = {
    zoom: 17,
    center: myLatlng,
    mapTypeId: google.maps.MapTypeId.ROADMAP
  }
  var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

  var marker = new google.maps.Marker({
      position: myLatlng,
      map: map,
      title: 'Hello World!'
  });
}

google.maps.event.addDomListener(window, 'load', initialize);

/*var styles = [
  {
    stylers: [
      { hue: "#00ffe6" },
      { saturation: -20 }
    ]
  },{
    featureType: "road",
    elementType: "geometry",
    stylers: [
      { lightness: 100 },
      { visibility: "simplified" }
    ]
  },{
    featureType: "road",
    elementType: "labels",
    stylers: [
      { visibility: "off" }
    ]
  }, 
  {
    "featureType": "poi.school",
    "elementType": "geometry.fill",
    "stylers": [
      { "weight": 0.1 },
      { "gamma": 0.44 },
      { "color": "#ad9e91" }
    ]
  },{
    "featureType": "landscape.man_made",
    "elementType": "geometry.fill",
    "stylers": [
      { "color": "#da7a22" },
      { "lightness": 40 },
      { "gamma": 1.94 }
    ]
  },{
    "elementType": "labels.text.fill",
    "stylers": [
      { "color": "#828080" },
      { "gamma": 0.32 }
    ]
  },{
    "featureType": "landscape.man_made",
    "elementType": "labels.text.stroke",
    "stylers": [
      { "visibility": "simplified" },
      { "color": "#808080" },
      { "gamma": 0.52 }
    ]
  },{
    "featureType": "poi",
    "elementType": "geometry",
    "stylers": [
      { "color": "#f7a780" },
      { "gamma": 0.92 }
    ]
  },{
    "featureType": "poi.attraction",
    "elementType": "geometry",
    "stylers": [
      { "color": "#559400" },
      { "gamma": 0.82 },
      { "lightness": -14 }
    ]
  },{
    "featureType": "road.highway",
    "elementType": "geometry.fill",
    "stylers": [
      { "color": "#d2ab8f" },
      { "visibility": "on" },
      { "gamma": 0.58 }
    ]
  },{
    "featureType": "road.arterial",
    "elementType": "geometry",
    "stylers": [
      { "color": "#d8af8d" },
      { "gamma": 1.16 }
    ]
  },{
    "featureType": "road.arterial",
    "elementType": "labels.text.fill",
    "stylers": [
      { "color": "#311513" }
    ]
  },{
    "featureType": "road.local",
    "elementType": "geometry",
    "stylers": [
      { "color": "#b1b1b4" },
      { "gamma": 4.41 }
    ]
  },{
    "featureType": "landscape.natural",
    "elementType": "geometry",
    "stylers": [
      { "color": "#808080" }
    ]
  }
];*/