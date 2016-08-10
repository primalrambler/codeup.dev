"use strict";



var myMap = document.getElementById('my-map');

var mapOptions = {
	zoom: 18,

	//position of codeup
	center: {
		lat: 29.426791,
		lng: -98.489602
	}
};

var map = new google.maps.Map(myMap, mapOptions);