"use strict";

$(document).ready(function() {

//openweathermap.org
const myAPIKey = 'b112d425689409f17145cc7ecad0f6bd';

/*how to make this better...
	• use geolocation to set initial location for map and weather based on user's location
	• weather background changes with time of day, light to dark through the day
	• add an search location input
*/

var myLatLng = {lat: 29.426791, lng:-98.489602};  //initial position centered on codeup
var lat = myLatLng.lat; //
var lng = myLatLng.lng;
var map;

var mapOptions = {
	zoom: 8,
	center: myLatLng
	};

map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

	var marker = new google.maps.Marker({
	position: myLatLng,
	map: map,
	draggable: true
	});

	
	var infowindow = new google.maps.InfoWindow({
	content: '<p>Marker Location:' + marker.getPosition() + '</p>'
	});

	google.maps.event.addListener(marker, 'click', function() {
	infowindow.open(map, marker);
	});

	google.maps.event.addListener(marker, 'dragend', function () {
		myLatLng = marker.getPosition();
		var tempLat = marker.getPosition().lat;
		var tempLng = marker.getPosition().lng;
		console.log(marker.getPosition());
		console.log(tempLat);
		console.log(tempLng);
	});
	// }

	function dateGrabber (data){
		var unixDate = new Date(data.dt * 1000);
		console.log(unixDate);
		var month = unixDate.getMonth();
		var date = unixDate.getDate();
		var weekday = unixDate.getDay();
		var weekdayName;
		switch (weekday) {
			case 0 :
				weekday = 'Sun';
				break;
			case 1 :
				weekday = 'Mon';
				break;
			case 2 :
				weekday = 'Tue';
				break;
			case 3 :
				weekday = 'Wed';
				break;
			case 4 :
				weekday = 'Thu';
				break;
			case 5 :
				weekday = 'Fri';
				break;
			case 6 :
				weekday = 'Sat';
				break;
		};
		return weekday + " " + month + "/" + date;
	}



function weatherDisplay (data){  //display the weather information into daily forecast box

	var forecasts = data.list;
	var cityName = '<h2>' + data.city.name + '</h2>'
	$("#insertLocale").append(cityName);

    	forecasts.forEach(function(forecast){
			var forecastDate = dateGrabber(forecast);
        	console.log (forecast);
        	var windSpeed = Math.round(forecast.speed * 2.23694); //converts mps to mph
            var contents = '';
            contents += '<div class="weather-box">';
            contents += '<p class="date">' + forecastDate + '</p>';
            contents += '<p class="temperature">' + Math.round(forecast.temp.max) + 
            			"&#176 / " + Math.round(forecast.temp.min) + '&#176</p>';
            contents += '<img src="http://openweathermap.org/img/w/' + forecast.weather[0].icon + '.png">'
			contents += '<p class="data"><span class="data-label">' + forecast.weather[0].main 
						+ ': </span><span class="details">' + forecast.weather[0].description + '</span>';
			contents += '<p class="data"><span class="data-label">Humidity: </span><span class="details">' + forecast.humidity + '%</span>';
			contents += '<p class="data"><span class="data-label">Wind: </span><span class="details">' + windSpeed + ' mph</span>';
			contents += '<p class="data"><span class="data-label">Pressure: </span><span class="details">' + forecast.pressure + '</span> hPa';
            contents += '</div>';
            $("#insertForecast").append(contents);
        });
}




//get weather data
function getMultiDayForecasts (){
	$.get("http://api.openweathermap.org/data/2.5/forecast/daily", {
		APPID: 	myAPIKey,
		// q: 		"San Antonio, TX", //search by city
		lat:    lat,	
		lon: 	lng,
		cnt: 	"3", 
		units: "imperial"
	}).done(function(data){
		// console.log(data);
		weatherDisplay(data);
	}).fail(function(xhr, err, msg){
		alert ('something went wrong');
		// console.log(xhr);
		// console.log(err);
		// console.log(msg);
	});
}

function clearData (){
	$("#insertForecast").fadeOut();
	$("#insertForecast").html('');
	$("#insertForecast").fadeIn();
	$("#insertLocale").fadeOut();
	$("#insertLocale").html('');
	$("#insertLocale").fadeIn();
}

//add listener for new map/weather location based on marker drag
google.maps.event.addListener(marker, 'dragend', function (event) {
    lat = event.latLng.lat();
    lng = event.latLng.lng();
	getMultiDayForecasts();
	clearData();
	map.setCenter(marker.position);
	marker.setMap(map);
});  //close listener


//load San Antonio weather
getMultiDayForecasts();


});  //close wrapper