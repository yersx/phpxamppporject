<?php
   $login = $_POST['name']; 
   $surname=$_POST['surname']; 
   $password=md5($_POST['password']); 
   $date=$_POST['date']; 
   $city=$_POST['city']; 
   $email=$_POST['email']; 
     
    $db = mysqli_connect('localhost','root','','web');
   // mysql_select_db ('web');
    
    $result = mysqli_query($db,"SELECT id FROM user WHERE email='$email'");
    $myrow = mysqli_fetch_array($result);
    if (!empty($myrow['id'])) {
    exit ("This email already exist  . You will be redirecting to main page... <body style='background: #c2e59c;  
background: -webkit-linear-gradient(to right, #64b3f4, #c2e59c); 
background: linear-gradient(to right, #64b3f4, #c2e59c); '><script type=\"text/javascript\"> 

setTimeout('location.replace(\"index.php\")',3000); 

</script> ");
    }
    $result2 = mysqli_query ($db, "INSERT INTO user (name,surname,dob,city,email,password) VALUES('$login','$surname','$date','$city','$email','$password')");
    if ($result2=='true')
    {
    echo "Successfully registered!You will be redirecting to main page... <body style='background: #c2e59c;  
background: -webkit-linear-gradient(to right, #64b3f4, #c2e59c); 
background: linear-gradient(to right, #64b3f4, #c2e59c); '><script type=\"text/javascript\"> 

setTimeout('location.replace(\"index.php\")',3000); 

</script>";
    }
 else {
    echo "Ошибка! Вы не зарегистрированы.";
    }
    ?>