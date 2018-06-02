<?php  
 $connect = mysqli_connect("localhost", "root", "", "web");  
 $output = '';  
 $articleid = $_POST['articleid'];
 $where= "WHERE articleid=".$articleid;
  mysqli_query($connect,"SET NAMES utf8");
$sql = "SELECT comments.id,comments.commentt,comments.datea,k.name,k.surname FROM comments, user k $where AND comments.user = k.email ORDER BY id DESC" ;
 $result = mysqli_query($connect, $sql);  
 $rows = mysqli_num_rows($result);
 if($rows > 0)  
 {  
  
 while($row = mysqli_fetch_array($result))  
      {  
           $output .= '<div class="col-md-5">

 <p>'.$row["commentt"].'</p>
  <p>'.$row["name"].' '.$row["surname"].'</p>
    <p>'.$row["datea"].'</p>

  <br><br>
 </div><hr>';
}
}
   
 echo $output;  
 ?>