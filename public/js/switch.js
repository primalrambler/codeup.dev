"use strict";

/* 
The following line generates a random number between 0 and 5.
var luckyNumber = Math.floor(Math.random()* 6)
Now, suppose there's a promotion in Walmart, If your lucky number is 0 you have no discount, 
if your lucky number is 1 you'll get a 10% discount, if it's 2, discount is 25%, if it's 3, 35%, 
if it's 4, 50%, and if it's 5 you'll get all for free!. 
Write a JS program that logs to the console, how much you will have to pay if your receipt is for $60. 
Every time you reload your page you should see a different result. Use a switch statement for this exercise. */

var luckyNumber = Math.floor(Math.random()* 6);
var receiptAmount = 60;
var discount;
var finalPayment;

console.log(luckyNumber)

switch (luckyNumber) {
	/* A better way to do this is just use case for values 1 to 5
	and leave 0 as the default case, that way if I don't get my 
	expected values it will at least default-out to something. */
	case 0 :
		discount = 0;
		break;
	case 1 :
		discount = 0.10;
		break;
	case 2 :
		discount = 0.25;
		break;
	case 3 :
		discount = 0.35;
		break;
	case 4 :
		discount = 0.50;
		break;
	case 5 :
		discount = 1.00;
		break;
}

finalPayment = receiptAmount * (1 - discount);
console.log("Your discount was " + discount*100 +"%, so you owe $" + finalPayment.toFixed(2));

/*
Suppose you have been assigned a task and you need to convert a number to the name of a month. 
1 should be shown as January, 2 as February and so on. 
Using a switch statement write the JS code that shows the names of the months in the console.  */


var monthNumber = Math.floor((Math.random()* 12) +1);
var monthName;

console.log("month number is " + monthNumber);

switch (monthNumber) {
	case 1 :
		monthName = "January";
		break;
	case 2 :
		monthName = "February";
		break;
	case 3 :
		monthName = "March";
		break;
	case 4 :
		monthName = "April";
		break;
	case 5 :
		monthName = "May";
		break;
	case 6 :
		monthName = "June";
		break;
	case 7 :
		monthName = "July";
		break;
	case 8 :
		monthName = "August";
		break;
	case 9 :
		monthName = "September";
		break;
	case 10 :
		monthName = "October";
		break;
	case 11 :
		monthName = "November";
		break;
	case 12 :
		monthName = "December";
		break;
}

console.log("The month is " + monthName);



