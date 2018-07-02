<?php

$host="localhost";
$user="root";
$password="adminpassword";
$database="Book";



$con=mysqli_connect($host, $user, $password,$database);
if(!$con)
 {
 	die("connection error".mysqli_connect_error($con));
 }

else {
	// echo "Connection established .<br>";
}


?>