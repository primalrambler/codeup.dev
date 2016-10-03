<?php
require_once (__DIR__.'/db/config/user_test_config.php');
require_once (__DIR__.'/helpers/User.php');

$testArray1 = [
	'first_name' => 'Ghengis',
	'last_name' => 'Khan',
	'username' => 'HellRaiser',
	'password' => 'bluedotbutt',
	'email' => 'gkhan@aol.com'
];

$testArray2 = [
	'first_name' => 'Caesar',
	'last_name' => 'Augustus',
	'username' => 'littleCeaser',
	'password' => 'tossyoursalad',
	'email' => 'caesar@yahoo.com'
];

//testing construct
// $Ghengis = new User($testArray1);
// $Ghengis->save();
// print_r($Ghengis);
// $Ceasar = new User($testArray2);

//testing insert
// $user = new User();
// $user->first_name ='Johnnie';
// $user->last_name ='Hollywoood';
// $user->username = 'something';
// $user->password = 'blah';
// $user->email = 'something@anything.com';
// $user->save();

//testing find
// $Caesar = User::find(5);
// print_r($Caesar);

//testing update
$Caesar = User::find(5);
var_dump($Caesar);
$Caesar->username = 'littleCaesar';
var_dump($Caesar);
$Caesar->save();
print_r($Caesar);


