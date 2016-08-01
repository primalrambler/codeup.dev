"use strict";


function doSomething() {
	1 + 1;
	console.log('happy monday guys!');
}
doSomething();

function returnThree() {
	return 3;
}

function addTwo(number) {
	var result = number + 2;
	return result;
}

console.log(addTwo(2));

function addTwoAgain(number) {
	return number + 2;
}

console.log(addTwoAgain(2));


function multiply(x,y) {
	return x * y;
}

console.log(multiply(4,6));

function yell(phrase) {
	return phrase.toUpperCase() + "!";
}


var examplePhrase = "happy monday";

console.log (yell(examplePhrase));