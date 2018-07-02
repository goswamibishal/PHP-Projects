<?php
error_reporting(E_ERROR | E_PARSE); //To avoid all the errors.
$str1="abcdefghijklmnopqrstuvwxyz";
$str2="1234567890!@#$%^&";
$bucket1=str_shuffle($str2);
$bucket2=str_shuffle($str1);

$str=$bucket1.$bucket2;
$result=str_shuffle($str);
$passlength=$_POST['pass'];
$storevalue=substr($result,2,$passlength);

if(isset($_POST['reset']))
{
	
	$storevalue=0;
	//echo $storevalue;
}
?>
<html>
	<body>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
		  <div class="jumbotron">
            <h1 class="display-4">Php-Password Generator</h1>
            <p class="lead">This is a simple Php Password Generator, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
            <hr class="my-4">
         
             <form class="form-group" action="passwd.php" method="post">
               <label for="exampleFormControlSelect1"><h2>Select Password length</h2></label>
               <select class="form-control" name="pass" id="exampleFormControlSelect1" style="width:30%;">
               	   <option>0</option>
                   <option>4</option>
                   <option>5</option>
                   <option>6</option>
                   <option>7</option>
                   <option>8</option>
                   <option>9</option>
                   <option>10</option>
                   <option>11</option>
              </select>
              </br>
              <input type="submit" value="Submit" class="btn btn-lg btn-primary"/>
              <input type="submit" name="reset" value="Reset" class="btn btn-lg btn-danger" />	
            </form>
               <div class="alert alert-primary" role="alert">
               	    <p class="lead">The Result is:</p>
                    <h1 style="padding-left: 599px;" ><?php echo $storevalue; ?> </h1>
               </div>
            
          </div>
		
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
	</body>
</html>



