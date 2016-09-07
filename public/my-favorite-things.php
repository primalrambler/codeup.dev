<?php

//model

$myFavoriteThings = ['\'93 Renegade','Kindle','Vietnamese spring rolls','Math','Monty Python',
					'TV', 'Firefly','Walking','Lifting','Naps', ]

//control - none
//view
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Favorite Things</title>
	<!-- Bootstrap core CSS -->
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"
	 integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
<h1>Some of my favorite things</h1>
	<ol>
		<?php foreach ($myFavoriteThings as $key => $thing) : ?>
			<li><?= $thing ?></li>
		<?php endforeach; ?>
	</ol>

</body>
</html>