'use strict';

// todo:
// Create an array of objects that represent books.
// Each book should have a title and an author.
// The book author should be an object with a firstName and lastName.
// Be creative and add at least 5 books to the array

// the key:value pair for an array of objects is the INDEX:OBJECT
//so you just have to list the object's data.
//if you have a sub-object you do have to 'create' it with
// name : { 
// 	blah: blah
// }
var books = [
		{
			"title" : "The Crystal Spheres",
			"author" : {
				"firstName" : "David",
				"lastName" : "Brin"
			}
		},
		{
			"title" : "Fallen Angels",
			"author" : {
				"firstName" : "Larry",
				"lastName" : "Niven"
			}
		},
		{
			"title" : "Dune",
			"author" : {
				"firstName" : "Frank",
				"lastName" : "Herbert"
			}
		},
		{
			"title" : "Kill Decision",
			"author" : {
				"firstName" : "Daniel",
				"lastName" : "Suarez"
			}
		},
		{
			"title" : "Apex",
			"author" : {
				"firstName" : "Ramez",
				"lastName" : "Naan"
			}
		}
]

// log out the books array
console.log(books);

// todo:
// Loop through the array of books using .forEach and print out the specified information about each one.
// start loop here
// end loop here

books.forEach(function(book,index,array){
    console.log("Book # " + (index + 1));
    console.log("Title: " + book.title);
    console.log("Author: " + book.author.firstName + " " + book.author.lastName);
    console.log("---");
	});










