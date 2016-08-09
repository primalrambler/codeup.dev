// (function (){
"use strict";

//global variables

var globalOperand = "";
var clearStart = true;



// Add and Assign Event Listeners -------------------------------------------//

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


//Input Functions ----------------------------------------------//

var inputLocation = 'displayLeft';

function numberInput (e){
	var inputToModify = document.getElementById(inputLocation);
	if (inputLocation == 'operand') {
		// alert('enter an operand')
	} else {
		var firstNum = inputToModify.innerText;
		firstNum += this.value;
		inputToModify.innerHTML = firstNum;		
	}
}


function operandInput (e){
	var inputToModify = document.getElementById('operand');
	inputToModify.innerHTML = this.innerText;
	globalOperand = this.value;
	inputLocation = "displayRight";
}

function clearAll (e) {
	document.getElementById("displayLeft").innerHTML = "";
	document.getElementById("displayRight").innerHTML = "";
	document.getElementById("operand").innerHTML = "";
	inputLocation = "displayLeft";
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
	var firstNum = document.getElementById('displayLeft').innerText;
	var secondNum = document.getElementById('displayRight').innerText;
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
	document.getElementById("displayLeft").innerHTML = result;
	document.getElementById("operand").innerHTML = "";
	document.getElementById("displayRight").innerHTML = "";
	inputLocation = "operand";
}









// })();