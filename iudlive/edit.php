<?php  
	$connect = mysqli_connect("localhost", "root", "", "web");
	$id = $_POST["id"];  
	$text = $_POST["text"];  
	$column_name = $_POST["column_name"];  
	  mysqli_query($connect,"SET NAMES utf8");
	$sql = "UPDATE tasklist SET ".$column_name."='".$text."' WHERE id='".$id."'";  
	if(mysqli_query($connect, $sql))  
	{  
		echo 'Data Updated';  
	}  
 ?>