<?php
//connect to database
require_once ('db_connect_park.php');
require_once ('db_connect.php');

//include external parks data
require_once ('parks_array.php');

//insert data from parks array into database
foreach ($parks as $park) {
    $query = "INSERT INTO national_parks (name,location,date_established,area_in_acres) VALUES ('{$park['name']}','{$park['location']}','{$park['date_established']}','{$park['area_in_acres']}')";
	$dbc->exec($query);
	echo "Inserted ID: " . $dbc->lastInsertId() . PHP_EOL;
}