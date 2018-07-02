<?php
include_once'Connection.php'; //To establish the connection with the Database.
?>
<html>
	<body>
		
		<h1 style="margin-left: 450px;">BOOK MANAGEMENT RECORDS</h1>
		<div style= "border:black 2px solid; width:750px; margin-left: 300px;">
			     <table>
		                 <tr>
	                   		<th><h2 style="padding:40px;width:70px;">ID</h2></th>
	                   		<th><h2 style="padding:40px;width:70px;">Title</h2></th>
	                   		<th><h2 style="padding:40px;width:70px;">Price</h2></th>
	                   		<th><h2 style="padding:40px;width:70px;">Author</h2></th>
	                   		
	                   	</tr>
		         </table>
			</div>
		

<?php
error_reporting(E_ERROR);// To avoid the Error.
				
//To view the Records
          			 
$sql="SELECT * FROM info";
$result=mysqli_query($con,$sql);
	if(mysqli_num_rows($result)>0)
	{
		  
		while( $row=mysqli_fetch_assoc($result))
		{
	
			          	
?>			          	
			          <div style="border:black 2px solid; width:750px; margin-left: 300px;">
			          	<form action="Update.php" method="post">
			          <table>		              
	                      <tr>
					          <td> <h2 style="padding:40px;width:70px;"><?php echo $id=$row['id'];?><input type="hidden" name="id1" value="<?php echo $id=$row['id'];?>"</h2></td>
                              <td> <h2 style="padding:40px;width:70px;"> <input type="text"name="title1" value="<?php echo $val=$row['title'];?>"/></h2></td>
	                          <td> <h2 style="padding:40px;width:70px;"><input type="text"name="price1" value="<?php echo $val=$row['price'];?>"/> </h2></td>
	                          <td> <h2 style="padding:40px;width:70px;"><input type="text"name="author1" value="<?php echo $val=$row['author'];?>"/> </h2></td>
					          <td> <h2 style="padding:40px;width:70px;"><input type="submit"name="sub" value="submit"/>   </h2></td>
	                     </tr>
					  </table>

					   </div>
					</form>
 <?php
    //To take the updated value from the input.
	$id1=$_POST['id1'];
    $title1=$_POST['title1'];
    $price1=$_POST['price1'];
    $author1=$_POST['author1'];		
	$sql="UPDATE info SET title='$title1',price='$price1',author='$author1' WHERE id='$id1'";//To set the value.	
	// it ends here.
	
      } //this brackets are coming from the whileloop.
 
	  }//this brackets are coming from the whileloop.
   
   
   //To run the mysqli query
    
   if(!mysqli_query($con, $sql))
	{
		echo"not updated";
		
	}
	else {
		echo"updated.$id1";
	} 
	
	//it ends here.   
   ?>
           
	</body>
</html>