"use strict";

$(document).ready(function() {

//openweathermap.org
const myAPIKey = 'b112d425689409f17145cc7ecad0f6bd';


//display the weather information into daily forecast box

function weatherDisplay (data){
	var forecasts = data.list;
	console.log(forecasts);
    	forecasts.forEach(function(forecast){
        	console.log (forecast);
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
$.get("http://api.openweathermap.org/data/2.5/forecast/daily", {
	APPID: 	myAPIKey,
	q: 		"San Antonio, TX",
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





});  //close wrapper