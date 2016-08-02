(function(){
    "use strict";

    // TODO: Create an array of 4 people's names using literal array notation, in a variable called 'names'.

    var names = ["Skipper","Gilligan","Ginger","Thurston","Mary Ann","The Professor","Eunice"];

    // TODO: Create a log statement that will log the number of elements in the names array.
    console.log("The number of elements in the array is " + names.length);

    // TODO: Create log statements that will print each of the names array elements individually.

    console.log(names[0]);
    console.log(names[1]);
    console.log(names[2]);
    console.log(names[3]);
	


    //reverse array - not using anything special i.e. not using .reverse() function

    var reverseNames = [];

    for (var i = 0; i < names.length; i +=1) {
    	reverseNames[i] = names[(names.length -1)  - i ];
    }
    console.log(names);
    console.log(reverseNames);

    console.log("Using a for loop")
    for (var i = 0; i < names.length; i +=1){
    	console.log(names[i]);
    }

    console.log("Using a forEach function")
    names.forEach(function (element,index,array){
    	// console.log(element == array[index]);
    	// console.log(element == names[index]);
    	console.log(element);
    });


})();
