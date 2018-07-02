<?php
$id=$val="";
$todolistval="";
$todolistvalerr="";
$host="localhost";
$user="root";
$password="adminpassword";
$database="list";
$conn=mysqli_connect($host, $user, $password,$database);
/*if(!$conn)
{
mysqli_connect_error($conn);	
}
else {
	echo "connection established";
}*/
if(isset($_POST['submit']))
{
if(empty($_POST['todo']))
{
	$todolistvalerr="PLEASE ADD SOMETHING";
	
}
else {
$todolistval=$_POST['todo'];
/*$query="CREATE TABLE todolist1(
id INT(5)  AUTO_INCREMENT PRIMARY KEY,
todo VARCHAR(50) NOT NULL )";
if(mysqli_query($conn, $query))
{
	echo "table created";
}
else{
	echo "oops".mysqli_error($conn);
}
*/
$query="INSERT INTO todolist1(todo) VALUES ('$todolistval')";
$status=mysqli_query($conn, $query);
if($status==1)
{
	echo "data inserted";
}
else{
	echo "oops".mysqli_error($conn);
}

}

}
  	   
		
		#To Delete the task
		if(isset($_GET['del_task']))
		{
			$id=$_GET['del_task'];
		}
		$query="DELETE FROM todolist1 WHERE id=$id";
		mysqli_query($conn, $query);
				
	?>
	


<!DOCTYPE html>
<html>
<head>
<style>
    body{background-color: antiquewhite;}
    p{
     font-size: 1.5em;color: brown;font-family: cursive;}
   
</style>
</head>
<body>
 <header>
     <h1 style="text-align: center;">TO DO LIST IN PHP</h1>     
    </header>
<p>
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" style="margin-left: 450px;">
	       <table >
			   <tr >
			   	<th><p>INSERT SOMETHING:<input type="text" name="todo">
			   	</p></th><h3 style="margin-left: 100px;"><?php echo $todolistvalerr; ?></h3>
			   	<th><input type="submit" value="ADD" name="submit"></th>
			   </tr> 
			   
		         
		   </table>
		   <table>
		                 <tr>
	                   		<th><h2 style="margin-left: 65px;">ID</h2></th>
	                   		<th><h2 style="margin-left: 65px;">TASK</h2></th>
	                   		<th><h2 style="margin-left: 65px;">DELETE</h2></th>
	                   	</tr>
		   </table>
		 	<?php   $query="SELECT id,todo FROM todolist1 ";
              $result=mysqli_query($conn, $query);
               if(mysqli_num_rows($result)>0)
			  {
             
	             while($row=mysqli_fetch_assoc($result)) { ?>
	                
	                   <table>
	                   	
	                      <tr>
					          <td> <h3 style="margin-left: 78px;"><?php echo $id=$row['id']; ?> </h3></td>
	                          <td> <h3 style="margin-left: 78px;"><?php echo $val=$row['todo'];?> </h3></td>
					          <td> <h3 style="margin-left: 78px;"><a href="07.php?del_task=<?php echo  $id=$row['id'];?>">x</a></h3></td>
	                     </tr>
					  </table>
                     <?php } }?>
             
      <!-- else{
	          echo "oops".mysqli_error($conn);
           }
			   
			-->   
		   
	</form>	
	
	
</p>
</body>
</html>