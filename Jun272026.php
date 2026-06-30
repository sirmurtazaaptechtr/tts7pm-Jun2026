<?php
// PHP - Concatenate Strings

$first_name = "Ali";
$last_name = "Raza";

$full_name = $first_name . " " . $last_name;

echo "<p>$full_name</p>";

echo "<p>" . substr($full_name,0,3) . "</p>";

$text = "Aptech Learning";

echo "<p>" . substr($text, 7, 8) . "</p>";
// OR Till End
echo "<p>" . substr($text, 7) . "</p>";

echo "<p>" . substr($text, 0, 6) . "</p>";

