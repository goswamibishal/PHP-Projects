<?php
include_once 'connection_example.php';
error_reporting(E_ERROR);
session_start();

$username=$_POST['username'];
$password=$_POST['password'];

$sql="SELECT * FROM loginvalue WHERE username='$username' && password='$password'";

$result=mysqli_query($con, $sql);
$num=mysqli_num_rows($result);
if($num==1)
{
$_SESSION['username']=$username;
header('location:http://127.0.0.1:8080/My%20PHP%20Codes/PHP%20Project/checkbox.php');
}
else 
	{
 
header('location:http://127.0.0.1:8080/My%20PHP%20Codes/PHP%20Project/login.php');
$_SESSION['msg']="<script>alert('Please Provide Valid Username and Password')</script>";
	}









?>