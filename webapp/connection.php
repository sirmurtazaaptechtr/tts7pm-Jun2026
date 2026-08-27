<?php

function pr ($input) {
    echo "<pre>";
    print_r($input);
    echo "</pre>";
}

$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'northwind';

$conn = mysqli_connect($hostname,$username,$password,$database);