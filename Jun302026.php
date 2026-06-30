<?php 
// PHP Numbers

$a = 5;
$b = 7.64;
$c = "25";
$d = '22.7';
$x = 1.9e411;
$y = acos(8);

echo "<pre>";
var_dump($a);
var_dump($b);
var_dump($c);
var_dump($d);

var_dump(is_int($a));
var_dump(is_int($b));

var_dump(is_float($a));
var_dump(is_float($b));

var_dump($x);
var_dump(is_infinite($x));

var_dump($y);
var_dump(is_nan($y));
echo "</pre>";

echo "<p>" . PHP_INT_MAX . "</p>";
echo "<p>" . PHP_INT_MIN . "</p>";
echo "<p>" . PHP_INT_SIZE . "</p>";

echo "<p>" . PHP_FLOAT_MAX . "</p>";
echo "<p>" . PHP_FLOAT_MIN . "</p>";
echo "<p>" . PHP_FLOAT_DIG . "</p>";

// PHP Type Casting
echo "<pre>";
var_dump((float)$a);
var_dump((int)$b);
echo "</pre>";

// PHP Math Functions
echo "<p>" . pi() . "</p>";
echo "<p>" . min(0, 150, -8, -200) . "</p>";
echo "<p>" . max(0, 150, -8, -200) . "</p>";
echo "<p>" . abs(-6.7) . "</p>";
echo "<p>" . sqrt(81) . "</p>";
echo "<p>" . round(pi(),4) . "</p>";
echo "<p>" . rand(0,9) . "</p>";


