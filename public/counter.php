<?php

//set counter to zero
$counter = 0;

$counter = (isset($_GET['value']))? intval($_GET['value']) : 0;

function pageController ($counter)
{
	return [
	'counter' => $counter,
	];
}


extract(pageController($counter));

?>

<!DOCTYPE html>
<html>
<head>
	<title>Counter</title>
	<!-- Bootstrap core CSS -->
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" 
	integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<meta charset = "utf-8">

	<style type="text/css">
	body {
		padding-top: 70px;
	}
	.button {
		padding-top: 10px;
		padding-bottom: 30px;
		margin: auto;
	}
	</style>



</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-xs-12 text-center button">
				<a href="/counter.php?value=<?= $counter +1 ?>" class="btn btn-primary btn-lg"><span class="glyphicon glyphicon-chevron-up" aria-hidden="true"></a>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-4 col-xs-offset-4">
				<div class="jumbotron text-center">
					<h1><?= $counter ?></h1>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 text-center button">
				<a href="/counter.php?value=<?= $counter - 1 ?>" class="btn btn-primary btn-lg"><span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></a>
			</div>
		</div>		
	</div>

</body>
</html>