"use strict";
(function() {

var userLikesPizza = confirm('Do you like pizza?');

console.log('userLikesPizza:' + userLikesPizza)


var favoriteColor = prompt('What is your favorite color?')

console.log(favoriteColor);


var sayHello = function (name) {
	return 'hello ' + name;
}

console.log(sayHello('Dan'));

})();