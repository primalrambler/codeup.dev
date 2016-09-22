<?php






?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" 
	integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" 
	integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<title>Codeup Challenge</title>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="starter-template col-sm-10">
		        <h1>Alphabet Soup</h1>
		        <p class="lead"><em>Problem Statement:</em></p>
		        <p>Create a function alphabet_soup($str) that accepts a string and will return the string in alphabetical order.<br>
		        E.g. "hello world" becomes "ehllo dlorw". So make sure your function separates and alphabetizes each word separately.</p>
		        <br><br>
	      	</div>
  		</div>

	<form class="form-horizontal" name="soupInput">
	  <div class="form-group">
	    <label for="soup" class="col-sm-2 control-label">String to Modify</label>
	    <div class="col-sm-8">
	      <input type="text" class="form-control" id="soup" placeholder="Type Your String Here">
	    </div>
	  </div>
	  <div class="form-group">
	    <div class="col-sm-offset-2 col-sm-10">
	      <button type="submit" class="btn btn-default" id="soupIt">Submit</button>
	    </div>
	  </div>
	</form>
  	</div>
    <div class="col-sm-8 col-sm-offset-2">
      	<h2>JavaScript Result</h2>
      	<h1 id="javaSoup">test</h1>
      	<p></p>
      	<h2>jQuery Result</h2>
      	<h1 id="jquerySoup">test</h1>
      	<p></p>
      	<h2>PHP Result</h2>
      	<h1 id="phpSoup">test</h1>
      	<p></p>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" 
	integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" 
	crossorigin="anonymous">
	</script>

<!-- Javascript version of solution -->
    <script type="text/javascript">
    	"use strict";

    	function getSoup(){
    		var soup = document.forms.soupInput.soup;
    		console.log(soup);
    	}

    //get the text string from the box once submit entered

    /*
    parse string into array of words
    for each word...
    parse that into an array of characters
    sort the array
    return a joined string with ''as the glue and put it in a results array
    after all the words are processed...
    return the string with ' ' as the glue
	
	clean the input...
		strip special char and tags
		remove everything that isn't a letter

    */



    </script>

</body>
</html>