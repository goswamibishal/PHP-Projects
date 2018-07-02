<?php
error_reporting(E_ERROR);
session_start();
echo $_SESSION['msg'];
?>
<html>
	<head>
		<title>login.php</title>
	</head>
    <body>
    	
    	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    	<link rel="stylesheet" href="login_example.css"/>
    	
    	<link href="https://fonts.googleapis.com/css?family=Libre+Baskerville" rel="stylesheet">
    	
       <form id="set_login_form" action="validate.php" method="post">
       	<div class="jumbotron">
         <div class="form-group">
            <label for="exampleInputUsername">Username</label>
            <input type="text" class="form-control" name="username"  placeholder="Enter Your User_name">
            
         </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" name="password" placeholder="Password">
        </div>
        
        <button type="submit" class="btn">Login</button>
        </div>
     </form>
       <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    	
    	
    </body>	
</html>
