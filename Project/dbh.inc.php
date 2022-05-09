<?php

$host = "localhost";
$dbUsername = "josh_I505";
$dbPassword = "BRv$2022";
$dbName = "db_josh_I505";


$conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);

if (!$conn){
	die("Connection failed: " . mysqli_connect_error());
}