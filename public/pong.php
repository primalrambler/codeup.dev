<?php
$counter = 0;


function pageController ()
{
	$counter = (isset($_GET['value'])) ? intval($_GET['value']) : 0;
	$attempt = (isset($_GET['type'])) ? $_GET['type'] : 'not set';

	if ($attempt == 'miss') {
		$message = 'GAME OVER';
		$subMessage = 'Click the HIT button to start again.';

	} elseif ($attempt == 'hit'){
		$message = $counter;
		$subMessage = 'Number of Consecutive Hits';

	} else {
		$message = "Ping da Pong";
		$subMessage = "because you've got nothing else to do";
	}

	return [
	'message' => $message,
	'subMessage' => $subMessage,
	'counter' => $counter,
	];
}



extract(pageController());

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset = "utf-8">
	<title>PONG</title>
	<!-- Bootstrap core CSS -->
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" 
	integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

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
			<div class="col-xs-6 col-xs-offset-3">
				<div class="jumbotron text-center">
					<h1><?= $message ?></h1>
					<h2><?= $subMessage ?></h2>
				</div>
			</div>
			<div class="col-xs-3 button text-right">
				<h1>PONG</h1>
				<a href="/ping.php?value=<?= $counter +1 ?>&type=hit" class="btn btn-primary btn-lg">
					<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> HIT</a>
				<p></p>
				<a href="/ping.php?value=0&type=miss" class="btn btn-primary btn-lg">
					<span class="glyphicon glyphicon-remove" aria-hidden="true"></span> MISS</a>
			</div>
		</div>
	</div>

</body>
</html>