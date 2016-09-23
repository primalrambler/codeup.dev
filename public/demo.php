<?php

require_once ('db_connect_parks');

$stmt = $dbc->query("SELECT * FROM national_parks;");


function getparks($stmt)
{
	$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
	foreach ($rows as $row){
		echo $row['name'];
		echo "<br>";
	}
}

getParks($stmt);