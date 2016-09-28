<?php 

require_once (__DIR__.'/Log.php');


$logTest = new Log('cli');


$errorMsg = 'This is a test error message';
$infoMsg = 'This is a test info message';

$logTest->logError($errorMsg);
$logTest->logInfo($infoMsg);

// echo 'Date stamp: '.$logTest->getDateStamp().PHP_EOL;
// echo 'Time stamp: '.$logTest->getTimeStamp().PHP_EOL;
// echo 'LogDirectory: '.$logTest->getLogDirectory().PHP_EOL;
// echo 'Filename: '.$logTest->getFilename().PHP_EOL;
// echo 'Handle: '.$logTest->getHandle().PHP_EOL;

