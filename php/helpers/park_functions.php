<?php

function getNumberOfParks($dbc)
{
	$stmt = $dbc->query('SELECT COUNT(*) FROM national_parks;');
	return $stmt->fetchColumn();
}

function getPageNumber($max_page_number)
{
	$page_number = Input::getNumber('page', 1);
	if ($page_number > $max_page_number) {
		$page_number = $max_page_number;
	} else if ($page_number < 1) {
		$page_number = 1;
	}

	return $page_number;
}

function getMaxPageNumber($dbc, $limit)
{
	$number_of_parks = getNumberOfParks($dbc);
	return ceil($number_of_parks / $limit);
}

function calculateOffset($page_number, $limit)
{
	return (($limit * $page_number) - $limit);
}

function getParks($dbc, $page_number, $limit)
{
	$parks_query = 'SELECT * FROM national_parks LIMIT :limit OFFSET :offset;';

	$offset = calculateOffset($page_number, $limit);

	$stmt = $dbc->prepare($parks_query);
	$stmt->bindValue(':limit', $limit, PDO::PARAM_INT);
	$stmt->bindValue(':offset', $offset, PDO::PARAM_INT);
	$stmt->execute();

	return $stmt->fetchAll(PDO::FETCH_ASSOC);
}



function addPark($dbc){
	$errors = [];
	$name;
	$location;
	$date;
	$area;
	$description;

	//check for empty fields
	if (empty($_POST['name']) || empty($_POST['location']) || empty($_POST['date_established']) || empty($_POST['area_in_acres']) || empty($_POST['description']))
	{
		try{
			foreach ($_POST as $key => $value) {
				if (empty($_POST[$key])) {
					throw new Exception("$key Field is empty");
				} 
			}

		} catch (Exception $e) {
			$errors[] = $e->getMessage();
		}

	} elseif(Input::has('name') && Input::has('location') && Input::has('date_established') && Input::has('area_in_acres') && Input::has('description'))
	
	//if everthing is filled in validate every entry
	{
		try {
			$name = Input::getString('name');
		}catch (Exception $e) {
			$errors[] = $e->getMessage();
		}
		try {
			$location = Input::getString('location');
		}catch (Exception $e) {
			$errors[] = $e->getMessage();
		}
		try {
			$date= Input::getString('date_established');
		}catch (Exception $e) {
			$errors[] = $e->getMessage();
		}
		try {
			$area = Input::getNumber('area_in_acres');
		}catch (Exception $e) {
			$errors[] = $e->getMessage();
		}
		try {
			$description = Input::getString('description');
		}catch (Exception $e) {
			$errors[] = $e->getMessage();
		}
		
		if (empty($errors)) {

			$query = 'INSERT INTO national_parks (name, location, date_established, area_in_acres, description) VALUES (:name, :location, :date_established, :area_in_acres, :description)';

			$stmt = $dbc->prepare($query);

			$stmt->bindValue(':name', $name, PDO::PARAM_STR);
			$stmt->bindValue(':location', $location, PDO::PARAM_STR);
			$stmt->bindValue(':date_established', $date, PDO::PARAM_STR);
			$stmt->bindValue(':area_in_acres', $area, PDO::PARAM_STR);
			$stmt->bindValue(':description', $description, PDO::PARAM_STR);

			$stmt->execute();
			header('Location: /national_parks.php');
			die();
		}

	} 

	return $errors;

} 

