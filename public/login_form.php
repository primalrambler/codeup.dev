<?php
  var_dump($_GET);
  var_dump($_POST);
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Login Form</title>
	</head>
	<body>
		<form method="GET" action="/login_form.php">
			<p>
				<label for="username">Username or email address </label>
				<input type="text" name="username" placeholder="username or email">
			</p>
			<p>
				<label for="password">Password</label>
				<input type="password" name="password" placeholder="password">
			</p>
			<input type="submit" value="Login">
			<p>
				<label><input type="checkbox" name="remember[]" value="1" checked>Remember me </label>
			</p>

		</form>
	<body>
</html>