<?php

$errors = [];

try {
	throw new Exception ('$key needs to be a string');
} catch (Exception $e){
	$e[] = $e->getMessage();
}