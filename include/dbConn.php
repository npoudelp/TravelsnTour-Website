<?php
$url = "127.0.0.1";
$user = "root";
$password = "root";
$database = "ashokTours";

$conn = mysqli_connect($url, $user, $password, $database);

if(!$conn){
    die("Connection Failed...");
}