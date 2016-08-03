"use strict";

var player1 = {
	"firstName" : "Bob",
	"lastName" : "Bobberson"
}

var whiteDie = {
	"rollValue" : null,
	"owner" : player1,
	"numberofSides" : 12,
	"color" : "white",
	"rollDie" : function() {
		this.rollValue = Math.ceil(Math.random() * this.numberofSides)
		return this.rollValue;
	}
};

//to get the first name of the owner
whiteDie.owner.firstName;