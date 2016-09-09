// (function (){
"use strict";

//global variables

var numberArray = [];
var activeIndex = 0;

//switch variables to so you can undo action
var flagDecimal = 0;
var flagPercent = 0;
var flagEnter = 0;
var flagOperand = 0;


// Add and Assign Event Listeners -------------------------------------------//

var numberButtons = document.getElementsByClassName("number");
for (var i = 0; i < numberButtons.length; i +=1){
	numberButtons[i].addEventListener("click", numberDisplay);
}

var operandButtons = document.getElementsByClassName("operand");
for (var i = 0; i < operandButtons.length; i +=1){
	operandButtons[i].addEventListener("click", doMath);
}

var clearAllButton = document.getElementById("clearall");
clearAllButton.addEventListener("click",clearAll);

var equalsButton = document.getElementById("enter");
equalsButton.addEventListener("click",afterEnter);

var plusMinusButton = document.getElementById("plusmn");
plusMinusButton.addEventListener("click", plusMinus);

var percentageButton = document.getElementById("percentage");
percentageButton.addEventListener("click", percentage);

var inverseButton = document.getElementById("inverse");
inverseButton.addEventListener("click", inverse);




//Display Functions ----------------------------------------------//


function numberDisplay (e){
		
	if (flagEnter == 1 || flagOperand == 1) { //if enter has been pressed we need to move everything up a line on the first number press
		flagEnter = 0; // clear the switch so it jumps to normal user input
		flagOperand = 0; 
		numberArray.unshift(this.innerHTML);
		console.log ('array after enter/operand '+numberArray);

	//for all situations that enter or an operand has not been pressed
	} else if (flagDecimal == 0 || this.value != ".") { //prevent double decimal entry
		(numberArray.length == 0)? numberArray[0] = this.value : numberArray[0] += this.value;
		console.log(numberArray + " number array at input time")
	}

	if (this.value == ".") {
		flagDecimal = 1; //turn on decimal switch
	}
	displayUpdate();
}


function afterEnter(){
	if (flagEnter == 1){
		numberArray.unshift(numberArray[0]);
		displayUpdate();
	}
	flagEnter = 1;
}

function displayUpdate() {
	for (var i = 3; i >= 0; i -=1) {
		var lineId = "line" + i;
		if (numberArray[i] != undefined) {  // display it only if it's defined
			console.log(numberArray[i]);
			document.getElementById(lineId).innerHTML = numberArray[i];
		} else{
			document.getElementById(lineId).innerHTML = null;
		}
	}
}

function plusMinus (e){
	var inputToModify = parseFloat(numberArray[0]);
	inputToModify *= -1;
	numberArray[0] = inputToModify.toString();
	displayUpdate();
}

function percentage (e) {
	var inputToModify = parseFloat(numberArray[0]);
	console.log(inputToModify);
	console.log(flagPercent);
	var result;

	if (flagPercent == 0){
		inputToModify = parseFloat(inputToModify) / 100;
		numberArray[0]=result;
		console.log(numberArray[0])
		flagPercent = 1;
	} else {
		result = inputToModify * 100;
		flagPercent = 0;
		console.log(result);
		numberArray[0]=result;
	}
	displayUpdate();
}

function clearAll (e) {
	//reset all global variables
	numberArray = [];
	activeIndex = 0;
	flagDecimal = 0;
	flagPercent = 0;
	flagEnter = 0;
	flagOperand = 0;
	displayUpdate();
}

function inverse (e) {
	var inputToModify = parseFloat(numberArray[0]);
	var result = 1 / inputToModify;
	numberArray[0] = result;
	displayUpdate();
}


function factorial(n) {
  if (n === 0) {
    return 1;
  }
  return n * factorial(n - 1);
}
	

// // Mathematical Functions -------------------------------------//

function addition(firstNum,secondNum){
	return parseFloat(firstNum) + parseFloat(secondNum);
}

function subtraction(firstNum,secondNum){
	return parseFloat(firstNum) - parseFloat(secondNum);
}

function multiplication(firstNum,secondNum){
	return parseFloat(firstNum) * parseFloat(secondNum);
}

function division(firstNum,secondNum){
	if (secondNum == "0") {
		return Infinity;
	}
	return parseFloat(firstNum) / parseFloat(secondNum);
}
function power(firstNum,secondNum){
	//raise second number to the first entered number
	return Math.pow(secondNum,firstNum);
}

function root(firstNum,secondNum) {
	return Math.pow(firstNum, 1/secondNum);
}


	
function doMath (){
	if (numberArray.length > 1){
		flagOperand = 1;
		var operandValue = this.value;
		console.log('operand value: ' + operandValue);
		var firstNum = document.getElementById('line1').innerHTML;
		console.log('firstNum : ' + firstNum);
		var secondNum = document.getElementById('line0').innerHTML;
		console.log('secondNum: ' + secondNum);
		var result;

		switch (operandValue) {
			case "plus" :
				result = addition(firstNum,secondNum);
				break;
			case "minus":
				result = subtraction(firstNum,secondNum);
				break;
			case "times":
				result = multiplication(firstNum,secondNum);
				break;
			case "divide":
				result = division(firstNum,secondNum);
				break;
			case "power":
				result = power(firstNum,secondNum);
				break;
			case "root":
				result = root(firstNum,secondNum);
				break;
		}
		numberArray.splice(0,2,result);
		displayUpdate();
	} else{
		alert('NOT ENOUGH ARGUMENTS');
	}
}









// })();