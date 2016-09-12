<?php

session_start();

function clearSession()
{
    // clear $_SESSION array
    session_unset();

    // delete session data on the server and send the client a new cookie
    session_regenerate_id(true);
}


function pageController()
{
	if ($_SESSION['logged_in_user']){
	    $msg1 = 'You have successfully logged out.';
	    $msg2 = 'Have a nice day!';
	    clearSession();
	} else{
		header('Location: /login.php');
		die;
	}

	return [
	'message1' => $msg1,
	'message2' => $msg2,
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
			<h1><?= $message1?></h1>
			<h2><?= $message2?><h2>
		</div>
		<div>
			<a href="/login.php" class="btn btn-primary btn-lg btn-block login-button">Log In</a>
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