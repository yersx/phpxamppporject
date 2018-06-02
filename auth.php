<?php  $db = mysqli_connect('localhost','root','','web');
if($_POST['submit']) {//если нажата кнопка
 if(!$_POST['namee'] == "" && !$_POST['passwordd'] == "") {//если не пустое     
    $login = $_POST['namee'];
    $login = htmlspecialchars($login);//превращаем весь html код в строку
  
       
    $pass = $_POST['passwordd'];
    $pass = htmlspecialchars($pass);
    $pass = trim($pass);
    $pass = stripslashes($pass);
       
    $pass = md5($pass);//шифруем пароль

       
    //проверяем, на существование такого же логина в бд
    $query = mysqli_query($db,"SELECT id FROM user WHERE email = '$login' and password = '$pass'");
    if(@mysqli_num_rows($query) > 0) {//если есть
      setcookie('login',$login , time() + 600);
       echo "<script>location.href = 'http://localhost/project/index.php' </script>"; //отправляем назад
    }
    else {//если нет такого логина
       exit('извините, Вы не правильно ввели данные.');
    }
  }
  else {//если какое-то поле пустое
     echo 'извините, Вы заполнили не все поля.';
  }
}
else if(isset($_POST['submitt'])){
if(isset($_COOKIE['login']))
    { 
       setcookie('login',$login , time() - 600);
    unset($_COOKIE['login']);
     header("location:http://localhost/project/index.php");
    }

   
  } 

  else {//если не нажал но как то попал на стр
    exit('извините, ошибка. Проверьте URL');
  }

?>
 