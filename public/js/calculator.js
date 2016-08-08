// (function (){
"use strict";

//global variables

// var firstNum = "";
// var secondNum = "";
var globalOperand = "";
var clearStart = true;
var inputSide = "leftInput";



// Event Listeners -------------------------------------------//

var numberButtons = document.getElementsByClassName("number");
for (var i = 0; i < numberButtons.length; i +=1){
	numberButtons[i].addEventListener("click", numberInput);
}

var operandButtons = document.getElementsByClassName("operand");
for (var i = 0; i < operandButtons.length; i +=1){
	operandButtons[i].addEventListener("click", operandInput);
}

var clearButton = document.getElementById("clear");
clearButton.addEventListener("click",clearAll);


var equalsButton = document.getElementById("equals");
equalsButton.addEventListener("click",doMath);

// function handleClick (e){
// 	var valueClicked = this.value;
// 	return console.log(valueClicked);
// }

//Input Functions ----------------------------------------------//

function numberInput (e){
	var inputToModify = document.getElementById(inputSide);
	var firstNum = inputToModify.innerText;
	firstNum += this.value;
	inputToModify.innerHTML = firstNum;
}


function operandInput (e){
	var inputToModify = document.getElementById('operand');
	inputToModify.innerHTML = this.innerText;
	globalOperand = this.value;
	inputSide = "rightInput";
}

function clearAll (e) {
	document.getElementById("leftInput").innerHTML = "";
	document.getElementById("rightInput").innerHTML = "";
	document.getElementById("operand").innerHTML = "";
	inputSide = "leftInput";
}


// Mathematical Functions -------------------------------------//

function addition(firstNum,secondNum){
	var result = parseFloat(firstNum) + parseFloat(secondNum);
	return result.toString();
}

function subtraction(firstNum,secondNum){
	var result = parseFloat(firstNum) - parseFloat(secondNum);
	return result.toString();
}

function multiplication(firstNum,secondNum){
	var result = parseFloat(firstNum) * parseFloat(secondNum);
	return result.toString();
}

function division(firstNum,secondNum){
	if (secondNum == "0") {
		return "∞";
	}
	var result = parseFloat(firstNum) / parseFloat(secondNum);
	return result.toString();
}


function doMath (){
	var operandValue = document.getElementById('operand').innerText;
	var firstNum = document.getElementById('leftInput').innerText;
	var secondNum = document.getElementById('rightInput').innerText;
	var result;

	switch (globalOperand) {
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
	document.getElementById("leftInput").innerHTML = result;
	document.getElementById("rightInput").innerHTML = "";
	document.getElementById("operand").innerHTML = "";
	inputSide = "rightInput";
}









// })();