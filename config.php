<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname = "tutorial";

// Create connection
try{
	$conn = new PDO("mysql:host=$server;dbname=$dbname","$username","$password");
	$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
	die('Unable to connect with the database');
}