"use strict";

// TODO: Ask the user for their name.
//       Keep asking if an empty input is provided.

function emptyString (stringToCheck){
	return !stringToCheck;
}

do {
	var userName = prompt('What is your name?');
	if (emptyString(userName)) {
		alert('You need to enter a name');
	}
} while (emptyString(userName));

console.log("You're name is " + userName);


// TODO: Show an alert message that welcomes the user based on their input.

if (userName.length <= 5) {
	alert("Welcome " + userName + "I bet you didn't have trouble spelling that in Kindergarten");
} else if (userName.length > 5 && userName.length < 15) {
	alert("Welcome " + userName + ", that's a pretty awesome name");
} else {
	alert("Welcome " + userName + ", good God man did your parents hate you when they named you?");
}

// TODO: Ask the user if they like pizza.
//       Based on their answer show a creative alert message.

var likesPizza = prompt('Do you like pizza?')

likesPizza;

likesPizza = likesPizza.toLowerCase();
likesPizza = likesPizza.substring(0,1);

switch (likesPizza) {
	case "y" :
		alert("Fantastic I don't have to erase your hard drive");
	default :
		alert("Choose the form of your Destructor!!");
}
