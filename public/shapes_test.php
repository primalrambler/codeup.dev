<?php

require_once(__DIR__.'/../rectangle.php');
require_once(__DIR__.'/../square.php');



$rectangle = new rectangle(4,7);
echo 'The area is '.$rectangle->area().PHP_EOL;
echo 'The perimeter is '.$rectangle->perimeter().PHP_EOL;

$square = new Square(5);
echo 'The area is '.$square->area().PHP_EOL;
echo 'The perimeter is '.$square->perimeter().PHP_EOL;





