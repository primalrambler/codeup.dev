// (function() {
    "use strict";

    var address = "300 W Bitters Rd #120, San Antonio, TX 78216";
    var addressObject = {};
    function toggleBounce() {
        if (marker.getAnimation() !== null) {
          marker.setAnimation(null);
        } else {
          marker.setAnimation(google.maps.Animation.BOUNCE);
        }
    }


    // Init geocoder object
    var geocoder = new google.maps.Geocoder();

    geocoder.geocode({"address": address}, function(results,status){
        if (status == google.maps.GeocoderStatus.OK) {

            //add a marker
            var marker = new google.maps.Marker({
                position: results[0].geometry.location,
                map: map,
                draggable: true,
                animation: google.maps.Animation.DROP
            });

            marker.addListener('click', toggleBounce);




            
            map.setCenter(results[0].geometry.location);

        } else{
            // Show an error message with the status if our request fails
           alert("Geocoding was not successful - STATUS: " + status);
        }
    });
          // info window - doesn't work b/c of geocode use

            // var contentString = '<h2>Taste of Asia</h2>'+
            // '<p><h3>Favorite Dishes</h3></p>'+
            // '<ul>'+
            // '<li>Chicken Lemongrass</li>'+
            // '<li>Spring Rolls</li>'+
            // '</ul>';


            // var infowindow = new google.maps.InfoWindow({
            //  content: contentString
            // });

            // marker.addListener('click', function(){
            //     infowindow.open(map,marker);
            //     setTimeout (function(){
            //         marker.setAnimation(null);
            //     },1500);
            // });

    // Render the map
    var map = new google.maps.Map(document.getElementById("map-canvas"), {
        zoom: 17
    });

    

    // })();