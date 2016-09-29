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



function addPark($dbc)
{
	if(Input::has('name') && Input::has('location') && Input::has('date_established') && Input::has('area_in_acres') && Input::has('description'))
	{
		$query = 'INSERT INTO national_parks (name, location, date_established, area_in_acres, description) VALUES (:name, :location, :date_established, :area_in_acres, :description)';

		$stmt = $dbc->prepare($query);

		try {
		$stmt->bindValue(':name', Input::getString('name'), PDO::PARAM_STR);
		$stmt->bindValue(':location', Input::getString('location'), PDO::PARAM_STR);
		$stmt->bindValue(':date_established', Input::getString('date_established'), PDO::PARAM_STR);
		$stmt->bindValue(':area_in_acres', Input::getNumber('area_in_acres'), PDO::PARAM_STR);
		$stmt->bindValue(':description', Input::getString('description'), PDO::PARAM_STR);

		$stmt->execute();
			
		} catch (Exception $e){
			$e[] = $e->getMessage();
			return $e;
		}
	}
}