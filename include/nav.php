
<nav class="navbar navbar-expand-lg navbar-light sticky-top" style="background-color: #F3EEF6;" >
   <a href="#" class="navbar-brand">
   	<img src="img/icon.png" width="35" height="35" alt="logo">
   </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
   <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
   			<a href="index.php" class="nav-link">Main</a>
   		</li>
   		<li class="nav-item ">
   			<a href="taskgiver.php" class="nav-link">Task Giver</a>
   		</li>
   		<li class="nav-item ">
   			<a href="performer.php" class="nav-link">Performer</a>
   		</li>
         <li class="nav-item ">
      <?php if(isset($_COOKIE['login'])) if($_COOKIE['login']=='admin') { echo " <a href=\"upload.php\" class=\"nav-link\">Upload image</a>"; } ?>
      </li>
   		</ul>

<ul class="nav navbar-nav navbar-right" >
       
  <?php



if(isset($_COOKIE['login']))
{
  echo "welcome ".$_COOKIE['login'];
  echo "
  <form action='auth.php' method='post'>
  <span style=\"color:#007bff\" class=\"glyphicon glyphicon-log-in\"></span>
  <input style=\"border:none; color:#007bff; background-color:#F3EEF6 \" type='submit' name='submitt'  value='Logout'>
</form>"; 
}
else
{
  echo  "<li class=\"nav-item active\"  onclick=\"document.getElementById('id01').style.display='block'\"><a href=\"#\"><span class=\"glyphicon glyphicon-log-in\"></span> Login</a></li>";
}
  ?>
    </ul> 

     


   </div>
</nav>


