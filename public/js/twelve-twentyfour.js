(function (){
"use strict";


//converts a string that represents a 12 hour time to a string that 
//represents a 24 hour time

//variable only needed for debug testing
// var timeString = '9:30pm'

function getPM(timeString){
	timeString.toLowerCase();
	var afternoon = timeString.indexOf('p');
	return afternoon != -1
}
// console.log(getPM(timeString));

function stripXM(timeString){
	return timeString.slice(0,timeString.length-2);
}

// console.log(stripXM(timeString));

function convertToTwentyFourAM (timeString){
	var timeArray = timeString.split(':');
	if (timeArray[0] == "12") {
		timeArray[0] = "00";
	} else if (timeArray[0].length < 2) {
		timeArray[0] = "0" + timeArray[0];
	}
	return timeArray;
}
// console.log(convertToTwentyFourAM(timeString));


function convertToTwentyFourPM (timeString){
	var timeArray = timeString.split(':');
	timeArray[0] = (parseInt(timeArray[0]) + 12).toString();
	return timeArray;
}

// console.log(convertToTwentyFourPM(timeString));

function twelveToTwentyFour (timeString){
	var tempTime = stripXM(timeString);
	
	if (getPM(timeString)){
		tempTime = convertToTwentyFourPM(tempTime).join(":");
	} else {
		tempTime = convertToTwentyFourAM(tempTime).join(":");
	}
	return tempTime;
}

console.log(twelveToTwentyFour('10:40pm'));

})();
