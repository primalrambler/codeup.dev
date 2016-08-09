// (function (){
"use strict";

//global variables

var numberArray = [];
var activeIndex = 0;

//switch variables to so you can undo action
var switchDecimal = 0;
var switchPercentage = 0;
var switchEnter = 0;
var switchOperand = 0;


console.log("number Array: " + numberArray);

// Add and Assign Event Listeners -------------------------------------------//

var numberButtons = document.getElementsByClassName("number");
for (var i = 0; i < numberButtons.length; i +=1){
	numberButtons[i].addEventListener("click", numberDisplay);
}

var operandButtons = document.getElementsByClassName("operand");
for (var i = 0; i < operandButtons.length; i +=1){
	operandButtons[i].addEventListener("click", doMath);

}

var multiplyButton = document.getElementById('')

// var clearButton = document.getElementById("clear");
// clearButton.addEventListener("click",clearAll);


var equalsButton = document.getElementById("enter");
equalsButton.addEventListener("click",afterEnter);

// var plusMinusButton = document.getElementById("plusmn");
// plusMinusButton.addEventListener("click", plusMinus);

// var percentageButton = document.getElementById("percentage");
// percentageButton.addEventListener("click", percentage);


//Display Functions ----------------------------------------------//


function numberDisplay (e){
		
		if (switchEnter == 1 || switchOperand == 1) { //if enter has been pressed we need to move everything up a line on the first number press
			console.log('switch enter is on')
			switchEnter = 0; // clear the switch so it jumps to normal user input
			switchOperand = 0; 
			console.log('switch enter is off')
			for (var i = numberArray.length; i > 0; i -=1) { //shift everything up
				var lineId = "line" + i;
				if (numberArray[i] != undefined) {  // display it only if it's defined
					document.getElementById(lineId).innerHTML = numberArray[i];
				}
				document.getElementById('line0').innerHTML = this.value;
				numberArray[0] = this.value;
			}
		//for all situations that enter has not been pressed
		} else if (switchDecimal == 0 || this.value != ".") { //prevent double decimal entry
			(numberArray.length == 0)? numberArray[0] = this.value : numberArray[0] += this.value;
			console.log(numberArray + "number array at input time")
			document.getElementById('line0').innerHTML = numberArray[0];
		}
		if (this.value == ".") {
			switchDecimal = 1; //turn on decimal switch
		}
		// console.log("number Array: " + numberArray);
}

function afterEnter(){
	switchEnter = 1;
	numberArray.unshift(""); // create a spot for the new number at index 0
	console.log (numberArray + " after enter pressed");
	console.log(switchEnter + "switch enter value after enter")

}


function displayAfterMath() {
	for (var i = 3; i >= 0; i -=1) { //shift everything up
		var lineId = "line" + i;
		if (numberArray[i] != undefined) {  // display it only if it's defined
			document.getElementById(lineId).innerHTML = numberArray[i];
		} else{
			document.getElementById(lineId).innerHTML = null;
		}
	}
}

// function updateDisplayAfterOperand(result){
// 	for (var i = 2; i >= 0; i -=1) {
// 		var currentId = "line" + i;
// 		console.log("line number: " + currentId);
// 		var currentLine = document.getElementById(currentId).innerHTML;
// 		console.log("current line: " + currentId);
// 		var nextIdUp = "line" + (i + 1);
// 		console.log("nextline: " + nextIdUp);
// 		document.getElementById(nextIdUp).innerHTML = currentLine;
// 	}
// 	document.getElementById("line0").innerHTML = "";
// }


// function plusMinus (e){
// 	var inputToModify = document.getElementById(inputLocation);
// 	var plusMinusNum = parseFloat(inputToModify.innerHTML);
// 	var result = -1 * plusMinusNum;
// 	inputToModify.innerHTML = result.toString();
// }

// function percentage (e) {
// 	var inputToModify = document.getElementById(inputLocation);
// 	console.log("input location: " + inputLocation);
// 	var percentageNum = parseFloat(inputToModify.innerHTML);
// 	console.log('percentageNum: ' + percentageNum);
// 	console.log('percentChanged: ' + percentChanged);
// 	if (percentChanged == inputLocation){
// 		var result = percentageNum * 100;
// 		console.log(result)
// 		inputToModify.innerHTML = result.toString();
// 		percentChanged = "";
// 	} else {
// 		var result = percentageNum / 100;
// 		inputToModify.innerHTML = result.toString();
// 		percentChanged = inputLocation;
// 	}
// }

// function operandInput (e){
// 	var inputToModify = document.getElementById('operand');
// 	inputToModify.innerHTML = this.innerText;
// 	globalOperand = this.value;
// 	inputLocation = "displayRight";
// }

// function clearAll (e) {
// 	document.getElementById("displayLeft").innerHTML = "";
// 	document.getElementById("displayRight").innerHTML = "";
// 	document.getElementById("operand").innerHTML = "";
// 	inputLocation = "displayLeft";
// 	percentChanged = "";
// }


	

// // Mathematical Functions -------------------------------------//

function addition(firstNum,secondNum){
	return parseFloat(firstNum) + parseFloat(secondNum);
	
	
}

function subtraction(firstNum,secondNum){
	return parseFloat(firstNum) - parseFloat(secondNum);
	
	// return numberArray[0];
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


function doMath (){
	switchOperand = 1;
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
	}

	if (switchEnter == 1){
			numberArray.splice(0,3,result);
		} else {
			numberArray.splice(0,2,result);
			}


	displayAfterMath();
}









// })();