<?php

$dbHost = "localhost";
$dbUser = "root";
$dbPass = "kothasailaxman2001";
$dbName = "secure_login";

$conn = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);

if(!$conn) {
	die("Datebase connection failed!");
}

?>