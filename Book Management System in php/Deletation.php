<?php
    include_once'Connection.php';
	
	$sql="DELETE FROM info";
	$status=mysqli_query($con, $sql);
	if($status==1)
	{
		echo"All the Data Deleted";
		
	}
	else {
		echo"Not Deleted";
	}
	
?>