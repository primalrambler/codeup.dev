// (function() {
    "use strict";

var mapOptions = {
    // Set the zoom level
    zoom: 18,

    // This sets the center of the map at our location
    center: {
        lat:  29.568503,
        lng: -98.487987
    }
};

var restaurant = {lat:  29.568503, lng: -98.487987};

// Render the map
var map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);

    var marker = new google.maps.Marker({
      position: restaurant,
      map: map,
      draggable: true,
      animation: google.maps.Animation.DROP
    });

    marker.addListener('click', toggleBounce);


    function toggleBounce() {
        if (marker.getAnimation() !== null) {
          marker.setAnimation(null);
        } else {
          marker.setAnimation(google.maps.Animation.BOUNCE);
        }
    }


  // info window

    var contentString = '<h2>Taste of Asia</h2>'+
    '<p><h3>Favorite Dishes</h3></p>'+
    '<ul>'+
    '<li>Chicken Lemongrass</li>'+
    '<li>Spring Rolls</li>'+
    '</ul>';


        var infowindow = new google.maps.InfoWindow({
         content: contentString
        });
   
        marker.addListener('click', function(){
            infowindow.open(map,marker);
            setTimeout (function(){
                marker.setAnimation(null);
            },1000);
        });


    // })();