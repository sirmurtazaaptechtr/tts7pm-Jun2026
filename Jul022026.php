<?php
// PHP Constants
const FULL_NAME = "Ali Raza";
echo "<p>" . FULL_NAME . "</p>";

define("COMPANY_NAME","Aptech Learning");
echo "<p>" . COMPANY_NAME . "</p>";

// Using define()
define("CARS", array("Volvo", "BMW", "Toyota"));
echo "<p>" . CARS[0] . "</p>";

// Using const
const ANIMALS = array("Cat", "Dog", "Horse");
echo "<p>" . ANIMALS[1] . "</p>";

// PHP Magic Constants
echo "<p>" . __LINE__ . "</p>";
echo "<p>" . __LINE__ . "</p>";

echo "<p>" . __FILE__ . "</p>";

echo "<p>" . __DIR__ . "</p>";

function my_fun () {
    echo "<p>This is My Fun</p>";
    echo "<p>" . __FUNCTION__ . "</p>";
}

my_fun();

// PHP Operators
// Arithmetic operators
$num1 = 8;
$num2 = 2;

$res = $num1 + $num2;
echo "<p> $num1 + $num2 = $res </p>";

$res = $num1 - $num2;
echo "<p> $num1 - $num2 = $res </p>";

$res = $num1 * $num2;
echo "<p> $num1 x $num2 = $res </p>";

$res = $num1 / $num2;
echo "<p> $num1 / $num2 = $res </p>";

$res = $num1 ** $num2;
echo "<p> $num1 ^ $num2 = $res </p>";

$res = $num1 % $num2;
echo "<p> $num1 % $num2 = $res </p>";

$number = 57;
echo "<p>$number</p>";

$number++;
echo "<p>$number</p>";
++$number;
echo "<p>$number</p>";

$number--;
echo "<p>$number</p>";

--$number;
echo "<p>$number</p>";

$res = --$number/2;
echo "<p>$number</p>";
echo "<p>$res</p>";

$res = $number--/2;
echo "<p>$number</p>";
echo "<p>$res</p>";

// PHP Comparison Operators
echo "<br><br>2 > 3 : ";
var_dump(2 > 3);

echo "<br><br>2 < 3 : ";
var_dump(2 < 3);

echo "<br><br>4+2 > 3 : ";
var_dump(4+2 > 3);

echo "<br><br>1+2 >= 3 : ";
var_dump(1+2 >= 3);

echo "<br><br>4+2 <= 6 : ";
var_dump(4+2 <= 6);

echo "<br><br>4+2 == 6 : ";
var_dump(4+2 == 6);

echo "<br><br>4+2 == '6' : ";
var_dump(4+2 == '6');

echo "<br><br>4+2 === '6' : ";
var_dump(4+2 === '6');

// PHP Logical Operators
