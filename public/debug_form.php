<?php var_dump($_POST) ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Debug</title>
	<link rel="stylesheet" ref="/my_first_external_css.css"> 
</head>
<body>
	<h1>Please Sign Up</h1>
	<form method="POST">
		<label for="username">Username</label>
		<input id="username" type="text" name="username">
		<br>

		<label for="email">Email</label>
		<!-- added name attribute -->
		<input id="email" name="email" type="text">
		<br>

		<label for="password">password</label>
		<!-- change password to type="password" -->
		<input id="password" type="password" name="password">
		<br>

		<!-- change password to type="password" -->
		<label for="confirm_password">confirm password</label>
		<input id="confirm_password" type="password" name="confirm_password">
		<br>

		<h2>Filing Status</h2>
		<!-- added id's and completed the for value -->
		<label for="filing_status">
			<input type="radio" id="filing_status" name="filing_status" value="single">
			Single
		</label>
		<br>
		
		<label for="married_joint">
			<input type="radio" id="married_joint" name="filing_status" value="married_joint">
			Married Filing Jointly
		</label>
		<br>
		
		<label for="married_separate">
			<input type="radio" id="married_separate" name="filing_status" value="married_separate">
			Married Filing Separately
		</label>
		<br>
		
		<label for="hoh">
			<input type="radio" id="hoh" name="filing_status" value="hoh">
			Head of Household
		</label>
		<br>
		
		<h2>This past year I was (check all that apply)</h2>
		<!-- converted name to an array for mulitple answers -->
		<label for="self">
			<input type="checkbox" id="self" name="employment_status[]" value="self_employed">
			Self - Employed
		</label>
		<br>
		
		<label for="small">
			<input type="checkbox" id="small" name="employment_status[]" value="small_business">
			Employed by a small business (< 50 employees)
		</label>
		<br>
		
		<label for="large">
			<input type="checkbox" id="large" name="employment_status[]" value="large_business">
			Employed by a large business (> 50 employees)
		</label>
		<br>
		
		<h2>What kind of phone do you have</h2>
		<!-- had to switch select and option around -->
		<select id="phone_type" name="phone_type">
			<option value="android">Android</option>
			<option value="iphone">iPhone</option>
			<option value="windows">Windows Phone</option>
			<option value="other">Other</option>
		</select>
		<p>
			<button type="submit">Submit</button>
		</p>
		<hr>
					<!-- add checked to input tag -->
		<label for="newsletter">Sign Me Up For The Newsletter
			<input type="checkbox" name="newsletter" id="newsletter" checked>
		</label>
	</form>
	


</body>
</html>