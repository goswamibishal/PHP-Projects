<?php
session_start();		
function check_input($data)
{
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;
}
		
if(isset($_POST['contactform']))
{
$fname = check_input($_POST['fname']);
$lname = check_input($_POST['lname']);
$phone = check_input($_POST['phone']);
$email = check_input($_POST['email']);
$msg = check_input($_POST['message']);		
$code1=$_SESSION['code'];		
		
if ($_POST["fname"] == "")
{
echo "First Name is required";
}
else if ($_POST["lname"] == "")
{
echo "Last Name is required";
}
else if ($_POST["email"] == "")
{
echo "Email is required";
}
else if (!filter_var($email, FILTER_VALIDATE_EMAIL))
{
echo "Enter Valid Email";
}
else if ($_POST["phone"] == "")
{
echo "Phone is required";
}
else if ($msg == "")
{
echo "Phone is required";
}

elseif($_POST['value']!=$code1)
	{
		echo"Try again";
		
	}
	
else 
	{
		
		$to = "goswamibishal135@gmail.com";
		$subject = "From Details";
		$txt = "SOmething";
		
		$header = "From:$fname<$email>";
		
		mail($to, $subject, $txt, $header);
		
		//echo '<script type"text/javascript"> alert("Sumitted Successfully"); window.location=redirectpage.php;</script>';

        echo"mail sent successfully";
        

    }		

}
		
		
		
?>
		<html>
			<head>
				<title>Sending Mail</title>
			</head>
			<body>		
		
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="application/x-www-form-urlencoded">
<tr>	
		
	<table>
		<td><label> First Name</label></td>
		<td><input type="text" name="fname" /></td>
		</tr>
		
		<tr>
<td><label>Last Name</label></td>
<td><input type="text" name="lname"></td>
</tr>
<tr>
<td><label>Email</label></td>
<td><input type="email" name="email"></td>
</tr>
<tr>
<td><label>Phone Number</label></td>
<td><input type="text" name="phone"></td>
</tr>
<tr>
<td><label>Message</label></td>
<td><textarea name="message"></textarea></td>
</tr>
<tr>
	<td><lable>Fill The CaPtChA </lable></td>
<td><input type="text" name="value"></td>
<td><img src="image.php"s /></td>
</tr>

<tr>
<td colspan="2"><input type="submit" name="contactform"></td>
</tr>
</form>
		
		
	</table>	
		
		
	</body>
	
</html>