<?php  
$connect = mysqli_connect("localhost", "root", "", "web");
  mysqli_query($connect,"SET NAMES utf8");
$sql = "INSERT INTO tasklist(usermail,city,datet,worktypes,description,moneyt) VALUES('".$_POST["usermail"]."', '".$_POST["city"]."', '".$_POST["date"]."', '".$_POST["worktypes"]."', '".$_POST["description"]."', '".$_POST["money"]."')";  
if(mysqli_query($connect, $sql))  
{  
     echo 'Data Inserted';  
}  
 ?>