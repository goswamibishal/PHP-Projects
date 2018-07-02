<?php
session_start();
if(isset($_POST['submit']))
{
	$code1=$_SESSION['code'];
	if($_POST['value']==$code1)
	{
		echo"subitted successfully";
		
	}
	else {
		echo"Try again";
	}
}


?>

<!DOCTYPE html>
<html>
<head>
<!--<style>
    body{background-color: antiquewhite;}
    p{
     font-size: 1.5em;color: brown;font-family: cursive;}
   form{
   	text-align: center;
   }
   
   #name
   {
   	margin-left: 520px;
   }
   
   h2{
   	font-size: 3em;
   }
</style>-->
</head>
<body>
 <header>
          
    </header>
<p>
	     <form action="index.php" method="post">
		 <h2> Sign In Form</h2>	
	      <input type="text" name="value"/>  
         <img src="image.php" />
		<p><input type="submit"  name="submit" value="Submit"/></p>
	</form>
     
	
</p>
</body>
</html>