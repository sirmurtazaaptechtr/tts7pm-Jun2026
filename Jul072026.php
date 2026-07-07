<?php
// PHP Logical Operators
// AND
echo "<p> true and true : ";
var_dump(true && true);
echo "</p>";

echo "<p> true and false : ";
var_dump(true && false);
echo "</p>";

echo "<p> false and true : ";
var_dump(false && true);
echo "</p>";

echo "<p> false and false : ";
var_dump(false && false);
echo "</p>";
// OR
echo "<p> true or true : ";
var_dump(true || true);
echo "</p>";

echo "<p> true or false : ";
var_dump(true || false);
echo "</p>";

echo "<p> false or true : ";
var_dump(false || true);
echo "</p>";

echo "<p> false or false : ";
var_dump(false || false);
echo "</p>";
// XOR
echo "<p> true xor true : ";
var_dump(true xor true);
echo "</p>";

echo "<p> true xor false : ";
var_dump(true xor false);
echo "</p>";

echo "<p> false xor true : ";
var_dump(false xor true);
echo "</p>";

echo "<p> false xor false : ";
var_dump(false xor false);
echo "</p>";

// PHP Conditional Operators
// Ternary ?:
$inputkey = 2487;
$result = $inputkey == 2487 ? "OPEN" : "CLOSE";
echo "<p>The door will remain $result</p>";

// Null coalescing  ??
$databaseinput = "Muhammad Mustafa";
$systeminput = $databaseinput ?? "User";
echo "<h2>Hi $systeminput, how do you do?</h2>";

// PHP Conditional Statements

$number = 127;

if($number % 2 == 0) {
    echo "<p>$number is Even</p>";
}else {
    echo "<p>$number is Odd</p>";
}

$max_marks = 75;
$obt_marks = 53;

$percentage = round($obt_marks/$max_marks * 100,1);
echo "<p>Percentage : $percentage%</p>";

if($percentage >= 40.0) {
    echo "<p>Status : Pass</p>";
}else {
    echo "<p>Status : Fail</p>";
}

if($percentage >= 80.0) {
    echo "<p>Grade : A+</p>";
}elseif($percentage >= 70.0) {
    echo "<p>Grade : A</p>";
}elseif($percentage >= 60.0) {
    echo "<p>Grade : B</p>";
}elseif($percentage >= 50.0) {
    echo "<p>Grade : C</p>";
}elseif($percentage >= 40.0) {
    echo "<p>Grade : C</p>";
}else {
    echo "<p>Grade : n/A</p>";
}