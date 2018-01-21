$(document).ready(function() {
    
    
    /* For the sticky navigation */
    $('#products').waypoint(function(direction) {
        
        if (direction === "down") {
            $('nav').addClass('sticky');
        } else {
            $('nav').removeClass('sticky');
        }
    }, {
        offset: '60px;'
    });
    
    
    /* Navigation scroll */
    $(document).on('click', 'a[href^="#"]', function (event) {
    event.preventDefault();

    $('html, body').animate({
      scrollTop: $($.attr(this, 'href')).offset().top
     }, 1000);
    });
    
    
    /* Maps */
    var map = new GMaps({
          el: '#map',
          lat: -36.786,
          lng: 175.2,
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
    
});