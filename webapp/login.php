<?php

# Establish connection to DB
require "init.php";

# Parse username and password from Android app. Then, check against table
$user_name = "hetty23";
$user_pass = "hetty23";

# SQL query statement
$sql_query = "select name from user_info where username like '$user_name' AND password like '$user_pass';";

# Execute the SQL statement
$result = mysqli_query($con, $sql_query);

if(mysqli_num_rows($result)>0){
	$row = mysqli_fetch_assoc($result);
	$fetched_name = $row["name"];
	echo"<h3>Hello ".$fetchname."</h3>";	
}else{
	echo"Cannot retrieve information";
}
?>