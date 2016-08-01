"use strict";

//problem 1

//all returns in problem 1 can be reduced to ternary statements

function testAverage(grade1,grade2,grade3) {
	var average = (grade1 + grade2 + grade3)/3;
	return average;
}


function testPerformance(grade1,grade2,grade3) {
	var goodEnuff = (testAverage(grade1,grade2,grade3) > 80) ? true : false;
	return goodEnuff;
}


function testMessage(grade1,grade2,grade3) {
	var message =  (testPerformance(grade1,grade2,grade3)) ? "You're awesome" : "You need to practice more";
	return message;
}
		
console.log(testMessage(70,80,95));


//problem 2

function checkDiscount (salesAmount,breakPoint) {
	 return (salesAmount > breakPoint) ? true : false;
	}

function finalSales(salesAmount,breakPoint,discount) {
	return (checkDiscount(salesAmount,breakPoint)) ? salesAmount * (1 - discount) : salesAmount;
	}

function registerMessage(salesAmount,breakPoint,discount,customerName) {
	var message = (customerName + " bought $" + salesAmount.toFixed(2) + " of stuff.\n");

	(checkDiscount(salesAmount,breakPoint)) ? message += "A discount of " + discount.toFixed(2) * 100 + "% was applied.\n" : 
		message += "No discount was applied.\n"

	message += customerName + "'s final amount is $" + finalSales(salesAmount, breakPoint,discount).toFixed(2);
	
	return message;
}

console.log(registerMessage(444,200,0.35,"Jimbo"))



//problem 3


function flipACoin() {
	return Math.floor(Math.random()* 2);
}

function buyThis() {
	var message = (flipACoin() === 0) ? "Buy a car" : "Buy a House";
	return message;
}

console.log(buyThis());



// my stuff


function randomInteger(min,max) {
	return Math.floor(Math.random() * (max - min + 1)) + min;
}


function isOdd(number){
	return (number % 2 != 0)? true : false;
}




//write functions that perform the following acctions
//sum two numbers
//subtract one 
