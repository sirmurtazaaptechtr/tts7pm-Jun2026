<?php

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

function pr ($data) {
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}

$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'northwind';

$conn = mysqli_connect($hostname,$username,$password,$database);