<?php  
	$connect = mysqli_connect("localhost", "root", "", "web");
	$sql = "DELETE FROM tasklist WHERE id = '".$_POST["id"]."'";  
	if(mysqli_query($connect, $sql))  
	{  
		echo 'Data Deleted';  
	}  
 ?>