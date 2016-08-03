"use strict";


//converts a string that represents a 12 hour time to a string that 
//represents a 24 hour time

var timeString = '4:30PM'

function getPm(timeString){
	timeString.toLowerCase();
	var afternoon = timeString.indexOf('p');
	return afternoon != -1
}

function stripXM(timeString){
	return timeString.slice(0,timeString.length-1);
}

function convertToTwentyFourAM (timeString){
	var newHour;
	var timeArray = timeString.split(':');


	if timeArray[0] == "12" {
	} else if (timeArray[0].length < 2){
		timeArray[0] = "0" + timeArray[0]
	}
	return timeArray;
}

function convertToTwentyFourPM (timeString){
	var timeArray = timeString.split(':');
	var newHour = parseInt(timeArray[0]) + 12;
	timeArray.shift();
	timeArray.unshift(newHour);
	return timeArray;

}


function twelveToTwentyFour (timeString){
	if (getPm){
		var tempTime = stripXM(timeString);
		tempTime = convertToTwentyFour(tempTime).join(":");
	} else {

	}
	console.log(tempTime);
	return tempTime;

}
