"use strict";

$(document).ready(function() {

//openweathermap.org
const myAPIKey = 'b112d425689409f17145cc7ecad0f6bd';

var lat = 29.426791;
var lng = -98.489602;

// Render the map
var mapOptions = {
        // Set the zoom level
        zoom: 15,
        // This sets the center of the map at our location
        center: {
            lat:  lat,
            lng: lng
        }
    };

var map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);


//display the weather information into daily forecast box

function weatherDisplay (data){
	var forecasts = data.list;
	var cityName = '<h2>' + data.city.name + '</h2>'
	$("#insertLocale").append(cityName);

    	forecasts.forEach(function(forecast){
        	// console.log (forecast);
        	var windSpeed = Math.round(forecast.speed * 2.23694); //converts mps to mph
            var contents = '';
            contents += '<div class="weather-box">';
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
function getWeather (){
	$.get("http://api.openweathermap.org/data/2.5/forecast/daily", {
		APPID: 	myAPIKey,
		// q: 		"San Antonio, TX", //search by city
		lat:    lat,	
		lon: 	lng,
		cnt: 	"3", 
		units: 	"imperial"
	}).done(function(data){
		console.log(data);
		weatherDisplay(data);
	}).fail(function(xhr, err, msg){
		alert ('something went wrong');
		// console.log(xhr);
		// console.log(err);
		// console.log(msg);
	});
}


function getLatLong (){
    lat = parseFloat($('#latitude').val());
    lng = parseFloat($('#longitude').val());
    mapOptions = {
        // Set the zoom level
        zoom: 15,
        // This sets the center of the map at our location
        center: {
            lat:  lat,
            lng: lng
        }
    };
}

function clearData (){
	$("#insertForecast").fadeOut();
	$("#insertForecast").html('');
	$("#insertForecast").fadeIn();
	$("#insertLocale").fadeOut();
	$("#insertLocale").html('');
	$("#insertLocale").fadeIn();

}

function redisplayMap (){
	map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);
	console.log(mapOptions);
}

    $('#searchButton').click(function(){
    	getLatLong();
    	clearData();
    	getWeather();
    	redisplayMap();
    });

//load San Antonio weather and map on page load event 
getWeather();


});  //close wrapper