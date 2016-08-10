// (function() {
        "use strict";

        // Set our map options
        var mapOptions = {
            // Set the zoom level
            zoom: 13,

            // This sets the center of the map at our location
            center: {
                lat:  29.426791,
                lng: -98.489602
            }
        };


        // Render the map
        var map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);

        //add a marker for a favorite restaurant
        var restaurant = { lat: 29.568503, lng: -98.487987};

        var  favRestaurant = new google.maps.Marker({
        	
        	position: restaurant,
        	
        	map: map
        });
    // })();