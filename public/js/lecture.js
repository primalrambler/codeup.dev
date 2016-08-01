"use strict";

// take a string and remove the spaces
// input ==> 'hello there lassen'
// output ==> 'hellotherelassen'

	// while there is a space in the string, remove that space

function stringContains(haystack,needle) {
	if (haystack.indexOf(needle) !== -1) {
		return true;
	} else {
		return false;
	}
}

function hasASpace(stringToCheck) {
	var stringHasASpace = stringContains(stringToCheck," ");
	return stringHasASpace;
}

function removeSpaces(phrase) {

	while (hasASpace(phrase)) {
		phrase = phrase.replace(" ","");
		}
	return phrase;
	}


