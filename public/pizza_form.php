<?php
	var_dump($_GET);
	var_dump($_POST);
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Pizza Order</title>
	</head>
	<body>
		<form method="GET" action="/pizza_form.php">
			<fieldset>
				<legend> Pizza Size</legend>
					<label><input type="radio" name="size" value="small">Small (Feeds 1)</label><br>
					<label><input type="radio" name="size" value="medium" checked>Medium (Feeds 1-2)</label><br>
					<label><input type="radio" name="size" value="large">Large (Feeds 2)</label><br>
					<label><input type="radio" name="size" value="donkey">Ridonkulous (Feeds 3+)</label><br>
			</fieldset>
			<p></p>
			<fieldset>
				<legend>Style</legend>
				<label><input type="radio" name="style" value="thin-crust">Thin Crust</label><br>
				<label><input type="radio" name="style" value="pan">Pan</label><br>
				<label><input type="radio" name="style" value="hand-tossed">Hand Tossed</label><br>
				<label><input type="radio" name="style" value="chicago">Chicago</label><br>
				<label><input type="radio" name="style" value="new-york">New York</label><br>
			</fieldset>
			<p>
				<button type="submit">COOK IT</button>
			</p>
		</form>				

</html>