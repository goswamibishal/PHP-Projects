<html>
	<body>
		
		<h1 style="margin-left: 450px;">BOOK MANAGEMENT RECORDS</h1>
		<div style= "border:black 2px solid; width:800px; margin-left: 350px;">
			     <table>
		                 <tr>
	                   		<th><h2 style="padding:40px;width:70px;">ID</h2></th>
	                   		<th><h2 style="padding:40px;width:70px;">Title</h2></th>
	                   		<th><h2 style="padding:40px;width:70px;">Price</h2></th>
	                   		<th><h2 style="padding:40px;width:70px;">Author</h2></th>
	                   		<th><h2 style="padding:60px;width:70px;">Delete</h2></th>
	                   	</tr>
		         </table>
			</div>
		
	</body>
</html>
<?php
error_reporting(E_ERROR);// To avoid the Error.

//To Delete a particular Task
include_once'Connection.php';
if(isset($_GET['del_task']))
		{
			$id=$_GET['del_task'];
		}
		$query="DELETE FROM info WHERE id=$id";
		mysqli_query($con, $query);
	
				
//To view the Records
             			 
$sql="SELECT * FROM info";
$result=mysqli_query($con,$sql);
	if(mysqli_num_rows($result)>0)
	{
		      
		 while($row=mysqli_fetch_assoc($result))
		
		{
			          	
?>			          	
			          <div style="border:black 2px solid; width:800px; margin-left: 350px;">
			          <table>		              
	                      <tr>
					          <td> <h2 style="padding:40px;width:70px;"><?php echo $id=$row['id']; ?> </h2></td>
	                          <td> <h2 style="padding:40px;width:70px;"><?php echo $val=$row['title'];?> </h2></td>
	                          <td> <h2 style="padding:40px;width:70px;"><?php echo $val=$row['price'];?> </h2></td>
	                          <td> <h2 style="padding:40px;width:70px;"><?php echo $val=$row['author'];?> </h2></td>
					          <td> <h2 style="padding:60px;width:70px;"><a href="View.php?del_task=<?php echo $id=$row['id'];?>">x</a></h3></td>
	                     </tr>
					  </table>
					  </div>
<?php
		}
		
	}
	
 ?>



 


