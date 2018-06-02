<?php  $db = mysqli_connect('localhost','root','','web');

 if(!$_POST['commentt'] == "") {//если не пустое     
      $usermail = $_POST['usermail'];
      $articleid = $_POST['articleid'];
      $date = $_POST['date'];
       
      $commentt = $_POST['commentt'];
      mysqli_query($db,"SET NAMES utf8");
    $sql = "INSERT INTO comments (articleid,user,commentt,datea) VALUES ('$articleid','$usermail','$commentt', '$date')";
       
    //проверяем, на существование такого же логина в бд
    $result2 = mysqli_query($db,$sql);
     if ($result2=='true')
    {
    echo "<font color=\"#green\">Your comment is added!</font> ";
    }
 else {
    echo "<font color=\"#red\">There is some error , please repeat.</font>";
    }
  }
  else {//если какое-то поле пустое
     echo "<font color=\"red\">извините, Вы заполнили не все поля.</font>";
  }




?>
 