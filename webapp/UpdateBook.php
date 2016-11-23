<?php

// Call init.php to establish connection to DB
require "init.php";

// Variables from Android App
// $_POST["identifier from BackgroundTask"]
//$name= $_POST["name"]; 
//$userName = $_POST["username"];
//$userPassword = $_POST["password"];
//$creditCard = $_POST["creditCard"];
//$address = $_POST["address"];
//$phone = $_POST["phone"];

$name= $_GET["name"]; 
$userName = $_GET["username"];
$userPassword = $_GET["password"];
$creditCard = $_GET["creditCard"];
$address = $_GET["address"];
$phone = $_GET["phone"];


// SQL statement
$sql_query = "insert into customer values('$name','$userName','$userPassword','$creditCard','$address','$phone');";

// Call function to add data into DB
if (mysqli_query($con,$sql_query)){
	echo"Data Inserted!";
}else{
	echo"Error in insertion".mysqli_error($con);
}
?>