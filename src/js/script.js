/* Maps */

var map = new GMaps({
      el: '#map',
      lat: -36.786,
      lng: 175.235,
      zoom: 11         
    });

map.addMarker({
  lat: -36.786,
  lng: 175.108,
  title: 'Waiheke Island',
  infoWindow: {
      content: '<p>Waiheke Island</p>'
  }
});