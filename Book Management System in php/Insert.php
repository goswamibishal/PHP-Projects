<?php
include_once 'Connection.php';

$title=$price=$author=$result=" ";
$Ertitle=$Erprice=$Erauthor=" ";

if(isset($_POST['submit']))
{

$title=$_POST['title'];
$price=$_POST['price'];
$author=$_POST['author'];

if(empty($_POST['title']))
{
	$Ertitle="Title is empty";
}

elseif(empty($_POST['price']))
{
	$Erprice="Price is empty";
}
elseif(empty($_POST['author']))
{
	$Erauthor="Author is empty";
}

else{
$sql="INSERT INTO info(title,price,author) VALUES ('$title','$price','$author')";
$status=mysqli_query($con, $sql);

if($status==1)
{
	$result="DATA Inserted";
	
}

else{
	$result="DATA NOt Inserted";
}
}
}
?>
<html>
	
	<body>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
		<link href="https://fonts.googleapis.com/css?family=Spirax" rel="stylesheet"> 
	   <h1 style="margin-left:540px; margin-top:60px; font-family: 'Spirax', cursive;">Submit The Details</h1>  
 <form action="Insert.php" method="post" style="width: 50%; margin-left: 540px; margin-top: 20px; >
 		
  <div class="form-row">
    <div class="form-group col-md-6">
      <h5><label for="inputTitle">Title Of the Book</label></h5>
      <input type="text" class="form-control" name="title"  placeholder="Title Of the Book"><?php echo $Ertitle;?>
    </div>
    <div class="form-group col-md-6">
      <h5><label for="inputPrice">Price</label> </h5>
      <input type="number" class="form-control" name="price" placeholder="Price of the Book"><?php echo $Erprice;?>
    </div>
  </div>
    <div class="form-group col-md-6">
      <h5><label for="inputAuthor">Author</label> </h5>
      <input type="text" class="form-control" name="author" placeholder="Author of the Book"><?php echo $Erauthor; ?>
    </div>
  
  <button type="submit" class="btn btn-primary" name="submit" style="margin-left: 120px;">Submit</button>
  
  <?php echo "<br>". $result; ?>
</form>


     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

   </body>
   
</html>

