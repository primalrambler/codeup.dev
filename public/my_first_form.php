	<?php
	  var_dump($_GET);
	  var_dump($_POST);
	?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>My First HTML Form</title>
	</head>
	<body>
		<hr>
		<label for="username">Click me to focus username</label>
		<form method="POST" action="/my_first_form.php">
			<p>
				<label for="username">Username</label>
				<input id="username" name="username" type="text" placeholder="username">
			</p>
			<p>
				<label for="password">Password</label>
				<input id="password" name="password" type="password" placeholder="password">
			</p>
			<p>
				<button type="submit" name="submitIt" value="submitted">Login</button>
			</p>
		</form>
		<br><br>
		<form method="GET" action="http://duckduckgo.com" target="_blank">
			<hr>
			<p>
				<img src="/img/DuckDuckGo_Logo.png" width="100"><br><br>
				<!-- <label for="search">Search duckduckgo</label><br> -->
				<input id="search" name="q" type="text">
				<input type="submit" value="Search It">
			</p>
		</form>
		<br><hr>
		<form method="POST" action="/my_first_form.php">
			<p>
				<label for="toEmail">To: </label>
				<input id="toEmail" name="toEmail" type="text" placeholder="email address">
			</p>
			<p>
				<label for="fromEmail">From: </label>
				<input id="fromEmail" name="fromEmail" type="text" placeholder="email address">
			</p>
			<p>
				<label for="subject">Subject</label>
				<input id="subject" name="subject" type="text" placeholder="subject line">
			</p>
			<p>
				<label for="message">Message</label>
				<textarea id="message" name="message" rows="5" cols="30"></textarea>
				<input type="submit" value="Send">
				<p>
					Do you want to save a copy of your email to your send folder. 
					<input type="checkbox" name="send[]" value="save" checked>
				</p>
			</p>
		</form>
		<br><hr>
		<!-- Anchor tag link that searches Reddit for "javascript" and sorts by top -->
		<font size="5">
			<a href="http://reddit.com/search?q=javascript&sort=top" target="_blank">Search Reddit for Javascript</a>
		</font>
		<br>
		<!-- Search input that searches Reddit for your search terms and sorts by top -->
		<form method="GET" action="http://reddit.com/search" target="_blank">
			<h2>Search Reddit, and sort results by 'top'</h2>
			<input type="text" id="reddit" name="q" >
			<input type="hidden" id="sort" name="sort" value="top">
			<button type="submit">Search</button>
		</form>
		<br><hr>
		<h2>Mulitple Choice Test</h2>
		<form method="GET" action="/my_first_form.php">
			<p>
				What city is the capital of Texas?<br><br>
				<label><input type="radio" name="q1" value="San Antonio">San Antonio</label>
				<label><input type="radio" name="q1" value="Austin">Austin</label>
				<label><input type="radio" name="q1" value="Dallas">Dallas</label>
				<label><input type="radio" name="q1" value="Houston">Houston</label>
			</p>
			<p>
				What is the square root of 9?<br><br>
				<label><input type="radio" name="q2" value="3">3</label>
				<label><input type="radio" name="q2" value="3.122">3.122</label>
				<label><input type="radio" name="q2" value="4">4</label>
				<label><input type="radio" name="q2" value="2.99">2.99</label>
			<p>
				Which of the following do you own? (Check all that apply)<br>
				<label><input type="checkbox" name="own[]" value="car">Car</label>
				<label><input type="checkbox" name="own[]" value="home">home</label>
				<label><input type="checkbox" name="own[]" value="pet">pet</label>
				<label><input type="checkbox" name="own[]" value="land">land</label>
			</p>
			<br>
				<button type="submit">Submit Answers</button>
			</p>
		<hr><br>
		<form method="GET" action="my_first_form.php">
			<h2>Select Testing</h2>
			<p>
				<label>Have you ever eaten sushi?  </label>
				<select id="sushi" name="sushi">
					<option value="Yes">Yes</option>
					<option value="No">No</option>
				</select>

			</p>
			<p>
				<label>Which of the following do you own?  </label>
				<select id="own2" name="own2[]" multiple>
					<option value="car">Car</option>
					<option value="home">Home</option>
					<option value="pet">Pet</option>
					<option value="land">Land</option>
				</select>
			</p>
			<p>
				<label>What western state have you visited?  </label>
				<select id="visit" name="visit[]" multiple>
					<option value="Arizona">Arizona</option>
					<option value="California">California</option>
					<option value="Oregon">Arizona</option>
					<option value="Wyoming">Wyoming</option>
				</select>
			</p>
			<br>
			<button type="submit">Submit</button>
		</form>
	</body>
</html>