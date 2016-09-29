<?php
//connect to database
require_once (__DIR__.'/db/config/parks_config.php');
require_once (__DIR__.'/db/db_connect.php');


//include external parks data
require_once (__DIR__.'/parks_array.php');

$stmt = $dbc->prepare('INSERT INTO  national_parks (name,location,date_established,area_in_acres,description) VALUES (:name, :location, :date_established, :area_in_acres, :description)');

//insert data from parks array into database
foreach ($parks as $park) {
	$stmt->bindValue(':name', $park['name'], PDO::PARAM_STR);
	$stmt->bindValue(':location', $park['location'], PDO::PARAM_STR);
	$stmt->bindValue(':date_established', $park['date_established'], PDO::PARAM_STR);
	$stmt->bindValue(':area_in_acres', $park['area_in_acres'], PDO::PARAM_STR);
	$stmt->bindValue(':description', $park['description'], PDO::PARAM_STR);

	$stmt->execute();
}