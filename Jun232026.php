<?php
echo("this is a text line.");
echo("<h1>This is a Heading</h1>");

print("this is a text line.");
print("<h1>This is a Heading</h1>");

$x = 10;
$y = 20;
$z = 30;

echo $x,$y,$z;
echo "<br>";    
echo (print $x . $y . $z . "<br>");

// PHP Data Types
$data = null;
echo "<br>";
var_dump($data);

$data = 12;
echo "<br>";
var_dump($data);

$data = 22.7;
echo "<br>";
var_dump($data);

$data = "Maria Mateen";
echo "<br>";
var_dump($data);

$data = true;
echo "<br>";
var_dump($data);

$data = ['Ali', 16, 37.8, true, null];
echo "<pre>";
var_dump($data);
echo "</pre>";

// PHP Strings
$str = "I am having fun with php!";
echo "<p> $str </p>";

echo "<p>" . strlen($str) . "</p>";
echo "<p>" . str_word_count($str) . "</p>";

echo "<pre>";
var_dump(str_contains($str,"fun"));
var_dump(str_contains($str,"Fun"));
var_dump(str_contains($str,"Aptech"));
echo "</pre>";

echo "<p>" . strpos($str,"fun") . "</p>";
echo "<p>" . strpos($str,"php") . "</p>";

echo "<pre>";
var_dump(str_starts_with($str,"php!"));
var_dump(str_starts_with($str,"I am"));

var_dump(str_ends_with($str,"php!"));
var_dump(str_ends_with($str,"I am"));
echo "</pre>";

echo "<p>" . strtoupper($str) . "</p>";
echo "<p>" . strtolower($str) . "</p>";
echo "<p>" . str_replace("php","JavaScript",$str) . "</p>";

echo "<p>" . strrev($str) . "</p>";

$name = "    Khazeena Abbasi ";
echo "<pre> $name </pre>";
echo "<pre>" . trim($name) . "</pre>";

$names = "Maria, Khzeena, Muhammad, Mustafa, Muqaddar, Mujtaba, Rafil, Latif, Mohib";
echo "<p>$names</p>";
$names_arr = explode(", ",$names);

echo "<pre>";
print_r($names_arr);
echo "</pre>";