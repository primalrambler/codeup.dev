"use strict";

/* An ice cream seller can't go home until she sells all of her cones. 
Write a JS program that generates a random number between 50 and 100 representing the amount of cones to sell. 
Your code should generate numbers between 1 and 5, simulating the amount of cones being bought by her clients. 
Use a do-while loop to log to the console the amount of cones sold to each person. This is how you get the random numbers. 


The output should be similar to the following:

5 cones sold...  // if there are enough cones
Cannot sell you 6 cones I only have 3...  // If there are not enough cones
Yay! I sold them all! // If there are no more cones */


//---------------------------------------------------------------------------
var conesToSell = Math.floor(Math.random() * 50) + 50;

// console.log("I have to sell " + conesToSell + " ice cream cones");

console.log("1st version")
do {
	var conesBought = Math.floor(Math.random() * 5) + 1;
	
	if (conesToSell < conesBought) {
		console.log("Cannot sell you " + conesBought + " cones. I only have " + conesToSell + "...")

	//I could move this out of the while loop because once I pop out I've technically sold them all.
	} else if (conesToSell == conesBought) {
		console.log("Yay! I sold them all")
		break;

	} else {
		console.log(conesBought + " cones sold.");
		conesToSell -= conesBought;
		// console.log("There are only " + conesToSell + " left to sell")
	} 	

} while (conesToSell > 0);


//---------------------------------------------------------------------------
console.log("2nd version")

var conesToSell = Math.floor(Math.random() * 50) + 50;
var conesBought;

do {
	conesBought = Math.floor(Math.random() * 5) + 1;
	
	if (conesToSell < conesBought) {
		console.log("Cannot sell you " + conesBought + " cones. I only have " + conesToSell + "...");

	} else {
		console.log(conesBought + " cones sold.");
		conesToSell -= conesBought;
	} 	

} while (conesToSell > 0);

console.log("Yay! I sold them all")


//---------------------------------------------------------------------------
console.log("3rd version")

var conesToSell = Math.floor(Math.random() * 50) + 50;
var conesBought;

do {
	conesBought = Math.floor(Math.random() * 5) + 1;
	
	if (conesToSell < conesBought) {
		console.log("Cannot sell you " + conesBought + " cones. I only have " + conesToSell + "...");
		conesBought = 0;
	} 
		
	console.log(conesBought + " cones sold.");
	conesToSell -= conesBought;

} while (conesToSell > 0);

console.log("Yay! I sold them all")





var maxIteration =  65536;
 i = 2;

while (i <= maxIteration) {
	console.log(i);
	i *= 2;
}



