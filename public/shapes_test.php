<?php

require_once(__DIR__.'/../rectangle.php');


$rect01 = new Rectangle(4,8);
echo $rect01->area().PHP_EOL;

$rect02 = new Rectangle(2,10);
echo $rect02->area().PHP_EOL;

$rect03 = new Rectangle(7,6);
echo $rect03->area().PHP_EOL;

$rect04 = new Rectangle(5,5);
echo $rect04->area().PHP_EOL;

