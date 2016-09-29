<?php

session_start();

require_once '../Auth.php';

function pageController()
{

	if (! Auth::check()){
		header('Location: /login.php');
		die;
	} 
	return [
	'username' => Auth::user(),
	];
}

extract(pageController());
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Authorized</title>
	<!-- Bootstrap core CSS -->
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"
	 integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<div class="jumbotron text-center">
			<h1>AUTHORIZED</h1>
			<h2>Welcome <?= $username ?><h2>
		</div>
		<div>
			<a href="/logout.php" class="btn btn-primary btn-lg btn-block login-button">Log Out</a>
		</div>

	</div>




	<!-- Bootstrap core JavaScript
	    ================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" 
	integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</body>
</html>