<?php

$host="localhost";
$user="root";
$password="adminpassword";
$database="loginexample";
$con=mysqli_connect($host, $user, $password, $database);

//To Check The Connection
/*if($con)
{
	echo "Connection Established";
}
else 
	{
		die("Connection Error".mysqli_connect_error($con));
	}

*/

//To Create the Database & Check Database Created or Not.
/*
$sql="CREATE DATABASE loginexample";
if(mysqli_query($con, $sql))
{
	echo"Database Created";

}
else
	{
		echo "Database not created";
	}
*/

//To Create the Table
/*
$sql="CREATE TABLE loginvalue(
username VARCHAR(30) PRIMARY KEY,
password varchar(30) NOT NULL)";
if(mysqli_query($con, $sql))
{
	echo"Table Created";

}
else
	{
		echo "Table not created";
	}

*/
/*
//To insert the values into values.
$sql="INSERT INTO loginvalue(username,password) VALUES ('Bishal','1234')";
if(mysqli_query($con, $sql))
{
	echo"Data Inserted";

}
else
	{
		echo "Data Not Inserted";
	}
*/



?>