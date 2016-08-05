// (function(){

"use strict";

// var navbarElement = document.getElementById('navbar');
// console.log(navbarElement);

// var delay = 2000;

// setTimeout (function(){
// 	navbarElement.innerHTML="";
// }, delay);

var delay = 2000;
var navbarLinkElements = document.getElementsByTagName('a')
	
setTimeout (function (){
	for (var i = 0; i < navbarLinkElements.length; i +=1) {
		navbarLinkElements[i].style.color = "red";
		navbarLinkElements[i].fontFamily = "fantasy";
		}
	}	
	);









// })();