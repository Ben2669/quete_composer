<?php
require '../vendor/autoload.php';

$test = new \App\Wcs\Hello();
$test->talk();
var_dump($test);

$test_bis = new \App\Wcs\Hello();
$test_bis->talk();
var_dump($test_bis);

$test_ter = new \HelloWorld\SayHello();
echo $test_ter->world();
var_dump($test_ter);