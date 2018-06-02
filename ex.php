<?php
if(isset($_POST['submitt']))
if(isset($_COOKIE['login']))
    { 
    unset($_COOKIE['login']);
    }

if(isset($_COOKIE['login']))
{
  echo "welcome ".$_COOKIE['login'];
  echo "
  <form action='index.php' method='post'>
  <input type='submit' name='submitt'  value='logout'>
</form>"; 
}
else
{
echo
"<form action='ex.php' method='post'>
  <input type='text' name='namee' placeholder='name' >
  <input type='password' name='passwordd'  placeholder='password' >
  <input type='submit'  value='Submit'>
</form>";
}



if (isset($_POST['namee']))
if($_POST['namee']=="Yers" && $_POST['passwordd']=="123")
{ 
  echo "welcome aldi";
  setcookie('login', $_POST['namee'] , time() + 600);
}



 

  
?>