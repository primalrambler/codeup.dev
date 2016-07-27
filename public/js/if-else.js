"use strict";

/*Problem 1 Knowing that a student's grades are 70, 80, 95. Write a JS program, 
using conditionals that logs to the console "You're awesome" if the average of
her grades is greater than 80, otherwise the message should be "You need to practice more". */

var testGrade1 = 70;
var testGrade2 = 80;
var testGrade3 = 95;

var average;

average = (testGrade1 + testGrade2 + testGrade3)/3

console.log (average.toFixed(2))

if (average > 80) {
	console.log("You're awesome")
} else {
	console.log("You need to practice more")
}


/* HEB has an offer for the clients that buy products amounting more than $200. 
The discount is 35% off the purchase. Write a JS program, using conditionals, 
that logs to the browser, how much Ryan, Cameron and George need to pay. 
We know that Cameron bought $180, Ryan $250 and George $320. Your program will 
have to display a line with the name of the person, the amount before the discount, 
if any, and the amount after the discount. The output of your code should be 
similar to the following one:
Luis bought $100.00, no discount was applied. Final payment: $100.00.
Zach bought $220.00, discount was applied. Final payment: $143.00. */

var discount = 0.35
var breakPoint = 200.00
var finalPayment;

var cameronBought = 180.00
var ryanBought = 250.00
var georgeBought = 320.00

if (cameronBought > breakPoint) {
	finalPayment = cameronBought * (1-discount);
	console.log("Cameron bought $" + cameronBought.toFixed(2) + ", discount was applied. Final payment: $" + finalPayment.toFixed(2));
} else {
	console.log("Cameron bought $" + cameronBought.toFixed(2) + ", no discount was applied. Final payment: $" + cameronBought.toFixed(2));

}

if (ryanBought > breakPoint) {
	finalPayment = ryanBought * (1-discount);
	console.log("Ryan bought $" + ryanBought.toFixed(2) + ", discount was applied. Final payment: $" + finalPayment.toFixed(2));
} else {
	console.log("Ryan bought $" + ryanBought.toFixed(2) + ", no discount was applied. Final payment: $" + ryanBought.toFixed(2));

}

if (georgeBought > breakPoint) {
	finalPayment = georgeBought * (1-discount);
	console.log("George bought $" + georgeBought.toFixed(2) + ", discount was applied. Final payment: $" + finalPayment.toFixed(2));
} else {
	console.log("George bought $" + georgeBought.toFixed(2) + ", no discount was applied. Final payment: $" + georgeBought.toFixed(2));

}


/* Suppose your friend Isaac cannot decide between two options. 
He doesn't know if he should buy a car or a new house. Help him decide! 
Write a small JS program. The following line generates either a 0 or a 1 randomly.
var flipACoin = Math.floor(Math.random()* 2)
Add an if statement to log a "Buy a car" to the console 
if the result is 0 and "Buy a house" if the result is 1. 
Could this program be written using a ternary operator? */

var flipACoin = Math.floor(Math.random()* 2);

/* with Math.random() it will returns a number
between 0 (inclusive) and 1 (exclusive). 
The Math.floor() function returns the largest integer less than or equal to a given number.
So any random number > 0.5 that is doubled will return 1 and 
any random number < 0.5 that is doubled will return 0
*/

console.log(flipACoin);

if (flipACoin === 0) {
	console.log("Buy a car");
} else {
	console.log("Buy a house");
}

console.log("Now for the ternary...");


var message = (flipACoin === 0)? "Buy a car" : "Buy a House";

console.log(message);

console.log("Now for the ternary as a straight up console.log...");
console.log((flipACoin === 0)? "Buy a car" : "Buy a House");





