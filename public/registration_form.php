<?php
	var_dump($_GET);
	var_dump($_POST);
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Registration Form</title>
	</head>
	<body>
		<form>
			<p>
				<label for="firstName">First Name  </label>
				<input id="firstName" name="firstName" type="text" placeholder="John">
			</p>
			<p>
				<label for="lastName">Last Name  </label>
				<input id="lastName" name="lastName" type="text" placeholder="Doe">
			</p>
				<label for="_email">Email Address  </label>
				<input id="_email" name="_email" type="email" placeholder="jd1993@mail.com">
			<p>
			</p>
				<label for="username">Username  </label>
				<input id="username" name="username" type="text" placeholder="awesome_sauce">
			<p>
				<label for="password">Password  </label>
				<input id="password" name="password" type="password" placeholder="$ecret$auce">
			</p>
			<p>
				<label for="pConfirmation">Confirm your Password  </label>
				<input id="pConfirmation" name="pConfirmation" type="password" placeholder="retype it">
			</p>
			<p>
				<label>Sign me up for the newsletter </label>
				<input id="newsletter" name="newsletter" value="yes" type="checkbox" checked>
			</p>
			<p>
				<button type="submit" name="register"value="yes">Submit</button>

		</form>
	</body>
</html>