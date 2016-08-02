"use strict";

// 1. on page load ask the user what they would like to do: 
//    (add, subtract, divide, multiply)
//    based on the user's response, get numbers from the user to pass into your math functions
//    ensure the user's inputs are valid!

// --------------------------------------------------------------------------------
// 2. write a function averageOfThree that takes 3 numbers and returns their average
//    add functionality to allow the user to square a number, or average 3 numbers
//    (note that now you will not always have just 2 inputs!)



function getFirstNum (){
	var firstNumber = prompt("Enter the first number:");
}

function getSecondNum (){
	var secondNumber = prompt("Enter the second number");
}


function getMathToDo (){
	var whatMathToDo = prompt("What do you want to do? Add, subtract, divide or multiply?");
	
	whatMathToDo;
	whatMathToDo = whatMathToDo.toLowerCase();
	return whatMathToDo.substring(0,3);
	}

}

function isNumeric(x) {
	return (isNaN(x)) ? false : true;
}

function sumTwoNumbers(x,y) {
	return (isNumeric(x) && isNumeric(y))? parseFloat(x) + parseFloat(y) : "inputs must be numeric"; 
}

function subtractTwoNumbers(x,y) {
	return (isNumeric(x) && isNumeric(y))? parseFloat(x) - parseFloat(y) : "inputs must be numeric";
}

function multiplyTwoNumbers(x,y) {
	return (isNumeric(x) && isNumeric(y))? parseFloat(x) * parseFloat(y) : "inputs must be numeric";
}

function divideTwoNumbers(x,y){
	return (y == 0) ? "you are dividing by zero" : parseFloat(x) / parseFloat(y);
}

function squareANumber(x) {
	return (isNumeric(x))? multiplyTwoNumbers(x,x) : "inputs must be numeric";
}

function sumTwoSquares(x,y) {
	return (isNumeric(x) && isNumeric(y))? sumTwoNumbers(squareANumber(x),squareANumber(y)) : "inputs must be numeric";
}