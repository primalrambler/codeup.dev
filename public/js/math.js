"use strict";

// 1. on page load ask the user what they would like to do: 
//    (add, subtract, divide, multiply)
//    based on the user's response, get numbers from the user to pass into your math functions
//    ensure the user's inputs are valid!

// --------------------------------------------------------------------------------
// 2. write a function averageOfThree that takes 3 numbers and returns their average
//    add functionality to allow the user to square a number, or average 3 numbers
//    (note that now you will not always have just 2 inputs!)



function getANumber () {
	do {
		var theNumber = prompt("Enter a number");
	} while (isNaN(theNumber));
	return parseFloat(theNumber);
}


function getMathToDo (){
		var operations = ["add", "sub", "div", "mul", "ave", "squ"];

	do {
		var whatMathToDo = prompt("What do you want to do?\nADD, SUBtract, DIVide, MULtiply?\n Or maybe SQUare a number or AVErage 3 numbers?");
		whatMathToDo = whatMathToDo.toLowerCase();
		whatMathToDo = whatMathToDo.substring(0,3);
	} while (operations.indexOf(whatMathToDo) == -1);
	return whatMathToDo;
}

function promptsForNumbers (operation) {
	switch(operation) {
		case "sub" :
			alert('Enter numbers in order for x - y');
			break;
		case "div" :
			alert('Enter numbers in order for x /y\nRemember NO zeros');
			break;
		case "squ" :
			alert('Enter the number you want to square');
			break;
		default : 
			alert('Enter numbers in any order\nGod bless order of operations!');
			break;
	}
}


function sumTwoNumbers(x,y) {
	return x + y; 
}

function subtractTwoNumbers(x,y) {
	return x - y;
}

function multiplyTwoNumbers(x,y) {
	return x * y;
}

function divideTwoNumbers(x,y){
	return (y == 0) ? "you are dividing by zero\nGOODBYE..." : x / y;
}

function squareANumber(x) {
	return multiplyTwoNumbers(x,x);
}

function averageOfThree(x,y,z) {
	return (x + y + z)/3;
}



function doMath(){
	
	var operationToDo = getMathToDo();

	promptsForNumbers(operationToDo);

	switch (operationToDo) {
		case "add" : 
			var result = sumTwoNumbers(getANumber(), getANumber());
			break;
		case "sub" :
			var result = subtractTwoNumbers(getANumber(), getANumber());
			break;
		case "div" :
			var result = divideTwoNumbers(getANumber(), getANumber());
			break;
		case "mul" :
			var result = multiplyTwoNumbers(getANumber(), getANumber());
			break;
		case "squ" :
			var result = squareANumber(getANumber());
			break;
		case "ave" :
			var result = averageOfThree(getANumber(), getANumber(),getANumber());
			break;
		}

	alert("The result is " + result);

	return result;
}

doMath();


