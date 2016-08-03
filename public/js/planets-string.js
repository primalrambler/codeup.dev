(function(){
    "use strict";

    var planetsString = "Mercury|Venus|Earth|Mars|Jupiter|Saturn|Uranus|Neptune";
    var planetsArray;

    // TODO: Convert planetsString to an array, save it to planetsArray.
    planetsArray = planetsString.split('|');

    console.log(planetsArray);

    // TODO: Create a string with <br> tags between each planet. console.log() your results.
    //       Why might this be useful?

    var planetBreakString = planetsArray.join('<br>');
    console.log(planetBreakString);

    



    // Bonus: Create a second string that would display your planets in an undordered list.
    //        You will need an opening AND closing <ul> tags around the entire string, and <li> tags around each planet.
    //        console.log() your results.

 
    //adding the opening and closing tags to each element in the array

    planetsArray.forEach(function(element,index){
        planetsArray.splice(index,1,"<li>" + element + "</li>");
    });


    //wrapping the array with the unordered list tags
    planetsArray.unshift("<ul>");
    planetsArray.push("</ul>");

    //converting to a string

    var planetsHTMLList = planetsArray.join("");

    console.log(planetsHTMLList);

    return planetsHTMLList;

    


    //in-class version
    var newString = planetsArray.join('<li></li>');
    newString = "<ul></li>" + newString + "</li></ul>"

    

})();
