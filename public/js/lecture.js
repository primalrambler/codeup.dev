"use strict";


function addTopping () {
	var newTopping = '';

	newTopping += "<li>";
	newTopping += this.innerText;
	newTopping += "</li>";

	selectedToppings.innerHTMl += newTopping;

	this.innerText += ' selected!';
	this.style.backgroundColor = 'yellow';
}


var toppings = document.getElementsByClassName('topping');
var selectedToppings = document.getElementById('selectedToppings');
var topping;

for (var i = 0; i < toppings.length; i +=1 ) {
	topping = toppings[i];
	topping.addEventListener('click',addTopping)
}