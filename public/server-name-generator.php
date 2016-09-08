<?php

//model
//list of adjectives and nouns
$adjectiveArray = file('data/adjectives.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
$nounArray = file('data/nouns.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

//controller
//removes whitespace and alphabetizes the word list
function cleanWordArray ($array)
{
	$array = array_map('trim', $array);
	sort($array);
	return array_unique($array);
}


//selects a random word from an array
//$array - array of words to choose from
//returns a string of the selected word
function getRandomWord ($array)
{
	$randomKey = array_rand($array);
	return $array[$randomKey];
}


function pageController($adjectiveArray,$nounArray)
{
	$adjectiveArray = cleanWordArray($adjectiveArray);
	$nounArray = cleanWordArray($nounArray);
	$randomAdjective = getRandomWord($adjectiveArray,1);
	$randomNoun = getRandomWord($nounArray,1);
	$serverName = $randomAdjective." ".$randomNoun;
	
	return [
	'serverName' => $serverName,
	];
}

extract(pageController($adjectiveArray,$nounArray));



//view
?>

<!DOCTYPE html>
<html>
<head>
	<!-- Bootstrap core CSS -->
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"
	 integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<title>Server Name Generator</title>
	<meta charset="utf-8">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<h1>Your server name is...</h1>
			</div>
			<div class="col-md-6 pull-right btn">
				<button id="regen">REGENERATE</button>
			</div>
		</div>
	</div>

	<div class="jumbotron">

	<h1 class="text-center"><?= $serverName ?></h1>

	</div>

	<!-- Bootstrap core JavaScript
	    ================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" 
	integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

	<script type="text/javascript">

		$('#regen').click(function(){
			location.reload();
		});
	</script>

</body>
</html>