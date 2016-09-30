<?php
require_once __DIR__ . '/../helpers/Session.php';
require_once __DIR__ . '/../db/config/parks_config.php';
require_once __DIR__ . '/../db/db_connect.php';
require_once __DIR__ . '/../helpers/Input.php';
require_once __DIR__ . '/../helpers/park_functions.php';

function pageController($dbc)
{
	
	//validate
	$errors = addPark($dbc);



	$limit = 4;


	$max_page_number = getMaxPageNumber($dbc, $limit);
	$page_number = getPageNumber($max_page_number);
	$parks = getParks($dbc, $page_number, $limit);
	//create submitted variable to check if form has been submitted
	$submitted = isset($_GET['submitted']) ? true : false;

	$data = [
		'parks' => $parks,
		'page' => $page_number,
		'max_page' => $max_page_number,
		'submitted' => $submitted,
	];

	return $data;
}

extract(pageController($dbc));