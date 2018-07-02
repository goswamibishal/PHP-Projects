<?php
session_start();
if(!isset($_SESSION['username'])) //if the session value is not set then this page wont be visible.
{
	header('location:http://127.0.0.1:8080/My%20PHP%20Codes/PHP%20Project/login.php');
}
error_reporting(E_ERROR);// To avoid the Error.
$con=0;
$bb;
$ans="Html";
$ans1="Javascript";
$ans2="Javascript";
$ans3="Server side";

$val=$_REQUEST['chk'];
$val1=$_REQUEST['chk1'];
$val2=$_REQUEST['chk2'];
$val3=$_REQUEST['chk3'];
/*if($val==$ans && $val1==$ans1)
{
	$con=2;
}
elseif($val==$ans|| $val1==$ans1)
{
	$con=1;
}
else{
	$con=0;
}
*/
if($val==$ans)
{
 $con++;
}
else {
	$con;
}

if($val1==$ans1)
{
$con++;	
}
else {
$con;	
}

if($val2==$ans2)
{
$con++;	
}
else {
$con;	
}

if($val3==$ans3)
{
$con++;	
}
else {
$con;	
}

//echo "Mr.".$_SESSION['username'].","."Your Result is : ".$con;

?>

</div>








<html>
	<head>
		<title>Online Examination Form</title>
		
	</head>
	<body>
		<link href="https://fonts.googleapis.com/css?family=Libre+Baskerville" rel="stylesheet"><!--Google fonts has been used -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<!-- To style the CSS starts here-->
	<style>
	    body{
	    	background-color: grey;
	    }
	    
		h1{
			color:white;
			font-family: 'Libre Baskerville', serif;
			font-size:2em;
			margin-left: 260px;
		  }
		h6{
			color:white;
			font-family: 'Spirax', cursive;
			margin-left: 410px;
		  }
		#set{
			
			margin-left:390px;
			
		}
		
		.hide1,.hide2{
			
			display:none;
		}
		 #div1-set{
		 	margin-left: 170px;
		 } 
		 #switch1{
		 	margin-left: 100px;
		 }
		 
		 #div2-set{
		 	margin-left: 170px;
		 } 
		 #switch2{
		 	margin-left: 100px;
		 }
		 
		 .jumbotron{
		 	
		 	height:300px;
		 	width: 700px;
		 	margin-left: 160px;
		 }
		 
		 .btn-danger{
		 	margin-left: 760px;
		 	margin-top:5px;
		 	
		}
		 img{
		 	width:54px;
		 	height: 54px;
		 }
		 
		
	 </style>
	   <!--It ends here -->
	
	    <?php echo "Mr.".$_SESSION['username'].","."Your Result is : ".$con; ?>
	    <a href="logout.php"><button class="btn btn-danger btn-sm">Logout</button></a>
		<h1>Online Examination Form<img src="https://www.dtelepathy.com/blog/wp-content/uploads/2015/03/category-inspiration.svg"/></h1>	
		<div id="set">
			<button class="button1 btn btn-primary " id="nn">Set One</button>
			<button class="button2 btn btn-primary ">Set Two</button>	
		</div>
		<br />
	<div class="hide1 jumbotron" id="hide1">
	  <form method="get" action="checkbox.php">
		 <div id="div1-set">
		    <h5>which is Markup Language</h5>
		     <input type="radio" name="chk" value="Html" />Html
		     <br>
		     <input type="radio" name="chk" value="Css" />Css
	    
		
		    <h5>Which Supports OOPS concept </h5>
		      <input type="radio" name="chk1" value="Javascript" />Javascript
		      <br>
		      <input type="radio" name="chk1" value="C" />C
		      <br />
		      <input type="submit" id="switch1" class="btn btn-success" value="submit" />
		 </div>
		 
	         
	  </form>
	     
   </div>
		    
		   <div class="hide2 jumbotron">

	<form method="post" action="checkbox.php">
		<div id="div2-set">
			<h5>Jquery is a Framework of?</h5>
		       <input type="radio" name="chk2" value="Java" />Java
		       <br>
		       <input type="radio" name="chk2" value="Javascript" />Javascript
	    
		
		    <h5>Php is a Server side or Client side Language?</h5>
		       <input type="radio" name="chk3" value="Server side" />Server side
		       <br>
		       <input type="radio" name="chk3" value="Client side" />Client side
		       
		       <br />
		<input type="submit" id="switch2" class="btn btn-success" value="submit" />
		</div>
		
		</form>
		
		</div>
			
	</body>
	         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	
	<script>
		
		//To show the set1 that are hidden by default.
		$(function(){
			$(".button1").click(function(){
			$("#hide1").show()
			   });
		});
		
		// It will show that you submitted te value of set2 successfully.
		$(function(){
			$("#switch1").click(function(){
			alert("Submitted Successfully");
			   });
		});
		
		//To show the set2 that are hidden by default.
		$(function(){
			$(".button2").click(function(){
			$(".hide2").show()
			   });
		});
		
		// It will show that you submitted te value of set2 successfully.
		$(function(){
			$("#switch2").click(function(){
			alert("Submitted Successfully");
			   });
		});
		
		
		// When the Logout button was  clicked then it will prompt a message. 
		$(function(){
			$(".btn-sm").click(function(){
				alert("Logged Out Successfully");
			})
		})
		
			
	</script>	
	
</html>






