<?php
function pr ($input) {
    echo "<pre>";
    print_r($input);
    echo "</pre>";
}
// PHP Superglobals
// $GLOBALS
$name = "Muqaddar Shaheer Khan";
$age = 18;
$is_student = true;
$cnic = "42201-4156417-0";

echo $GLOBALS["name"] . "<br>";
echo $GLOBALS["age"] . "<br>";
echo $GLOBALS["is_student"] . "<br>";

pr($GLOBALS);

// $_SERVER
pr($_SERVER);

$name_pattern = "/^[a-zA-Z-' ]*$/";
$cnic_pattern = "/^\d{5}-\d{7}-\d{1}$/";

var_dump(preg_match($name_pattern, $name));
echo "<br>";
var_dump(preg_match($cnic_pattern,$cnic));