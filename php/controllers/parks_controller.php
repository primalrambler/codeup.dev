<?php
require_once __DIR__ . '/../helpers/Session.php';
require_once __DIR__ . '/../db/config/parks_config.php';
require_once __DIR__ . '/../db/db_connect.php';
require_once __DIR__ . '/../helpers/Input.php';
require_once __DIR__ . '/../helpers/park_functions.php';

function pageController($dbc)
{
	addPark($dbc);

	$limit = 4;

	$max_page_number = getMaxPageNumber($dbc, $limit);
	$page_number = getPageNumber($max_page_number);
	$parks = getParks($dbc, $page_number, $limit);

	$data = [
		'parks' => $parks,
		'page' => $page_number,
		'max_page' => $max_page_number,
		'errors' => 
	];

	return $data;
}

extract(pageController($dbc));