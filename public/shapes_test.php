<?php

require_once(__DIR__.'/../rectangle.php');
require_once(__DIR__.'/../square.php');



$rectangle = new rectangle(4,7);

echo 'The rectangular area is '.$rectangle->area().PHP_EOL;
echo 'The rectangular perimeter is '.$rectangle->perimeter().PHP_EOL;



$square = new Square(5);
echo 'The square area is '.$square->area().PHP_EOL;
echo 'The square perimeter is '.$square->perimeter().PHP_EOL;





