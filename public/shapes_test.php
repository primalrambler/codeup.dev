<?php

require_once(__DIR__.'/../rectangle.php');
require_once(__DIR__.'/../square.php');



$shape_01 = new Square(4,4);
echo 'The area is '.$shape_01->area().PHP_EOL;
echo 'The perimeter is '.$shape_01->perimeter().PHP_EOL;


$shape_02 = new Square(5,5);
echo 'The area is '.$shape_02->area().PHP_EOL;
echo 'The perimeter is '.$shape_02->perimeter().PHP_EOL;


$shape_03 = new Square(6,6);
echo 'The area is '.$shape_03->area().PHP_EOL;
echo 'The perimeter is '.$shape_03->perimeter().PHP_EOL;


