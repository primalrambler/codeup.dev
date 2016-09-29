<?php

require_once (__DIR__.'/db/config/parks_config.php');
require_once (__DIR__.'/db/db_connect.php');

//drop table to start fresh
$query = 'DROP TABLE IF EXISTS national_parks;';
$dbc->exec($query);

//create table
$query = 'CREATE TABLE national_parks (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    location  VARCHAR(255) NOT NULL,
    date_established DATE NOT NULL,
    area_in_acres DOUBLE NOT NULL,
    description VARCHAR(2000) NULL,
    PRIMARY KEY (id)
);';

$dbc->exec($query);