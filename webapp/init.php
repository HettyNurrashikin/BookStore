
<?php

$db_name = "bookstore";
$mysql_user="root";			# localhost username
$mysql_pass="";				# localhost password
$server_name= "localhost";

# Establish connection to DB
$con = mysqli_connect($server_name,$mysql_user,$mysql_pass,$db_name) or die('Unable to Connect');

# Check if connection is successful
if(!$con){
	// echo "Connection Error".mysqli_connect_error();
}else{
	// echo"<h3>Connection Success!</h3>";
}
?>