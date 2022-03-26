<?php
$url = "localhost";
$user = "root";
$password = "root";
$database = "ashokTours";

$conn = mysqli_connect($url, $user, $password, $database);

if(!$conn){
    die("Connection Failed...");
}