<?php
   $city = $_POST['city']; 
   $worktypes=$_POST['worktypes']; 
   $description=$_POST['description']; 
   $moneyt=$_POST['money']; 
   $usermail=$_POST['usermail'];    
     $datet = $_POST['date'];  
    $db = mysqli_connect('localhost','root','','web');
   // mysql_select_db ('web');
  mysqli_query($db,"SET NAMES utf8");
    $result2 = mysqli_query ($db, "INSERT INTO tasklist (usermail,city,datet,worktypes,description,moneyt) VALUES('$usermail','$city','$datet','$worktypes','$description','$moneyt')");
    if ($result2=='true')
    {
    echo "Successfully added to task list! <a href='index.php'>Main Page</a>";
    }
 else {
    echo "Ошибка!.";
    }
    ?>