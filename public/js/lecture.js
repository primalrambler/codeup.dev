"use strict";
// (function() {

var myArray = ["Gilligan", "Skipper", "Mary Ann", "Ginger", "The Professor"]


function randomIndex (array) {
	return Math.floor(Math.random() * array.length);
}

function sample (array) {
	var result = array[randomIndex(array)];
	return result;
}

console.log(sample(myArray));

// })();