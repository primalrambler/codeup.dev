"use strict";


function sumTheDigits(number) {

	// sum the digits of a number
	//turn number into a string
	var numberString = number.toString();

	//turn that string into an array of digits
	var numberArray = numberString.split("");

	//loop through that array and add together the digits
	
	var sum = 0;

	numberArray.forEach(function(number){
		sum += parseInt(number);
	})

	return sum;
}
