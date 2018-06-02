<!DOCTYPE html>
<html lang="en">
<head>
    <title>Main</title>
     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css"></link>

     <link rel="stylesheet" href="css/main.css">
      <script src="js/validation.js"></script>
      
   <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>

</head>
<body>
    <div class="container">
<?php 
 include "include/nav.php"; 
?>

     <div id="id01" class="modal">
 
    <form action="auth.php"  method='post' class="modal-content animate"  onsubmit="return val()">
        <div class="imgcontainer">
            <label>Login:</label>
            <input type="text" class="form-control"   name="namee" id="Name" placeholder="Enter login">
        </div>
        <div class="imgcontainer">
            <label>Password:</label>
            <input type="password" class="form-control" name="passwordd" id="password" placeholder="Enter password">
        </div>
        <a class="registering" href="register.php">Register</a>
       <input type="submit" class="btn btn-primary" value="submit" name="submit"/>
    </form>
</div>

<div class="container-fluid nopadding">
<div class="container">
  <br><br><br>
  <h2>Add task: </h2>
  <form action="add_task.php" method="post"  onsubmit="return reg()">
    <div class="form-group">
      <label for="sel1">Select your city:</label>
      <select class="form-control" name="city">
        <option  value="Almaty">Almaty</option>
        <option  value="Astana">Astana</option>
        <option  value="Shymkent">Shymkent</option>
        <option  value="Taraz">Taraz</option>
      </select>
      <br>
      <label for="sel2">Select your type of task</label>
      <select multiple class="form-control" name="worktypes">
      
        <option value="1">Go to shop</option>
        <option value="2">Do Job Remotely</option>
        <option value="3">Trip to somewhere</option>
        <option value="4">Take photo</option>
        <option>...</option>
      </select>
      <br><label for="comment">Describe the task:</label>
  <textarea class="form-control" rows="5" name="description" ></textarea>
  <br>
   <input type="number" class="form-control" name="money" placeholder="Amount of pay in tenge">
   <br>
   <input type="name" style="display: none;" name="date" value=" <?php echo date("Y-m-d"); ?>"><br>
   <input type="name" style="display: none;" name="usermail" value="<?php  echo ''.$_COOKIE['login'].'' ?>">
      <input type="submit" class="btn btn-primary" name="submit"/></div>   </form>
</div>
     </div>


    

 
<br><br><br>
 <br>

<?php 
 include "include/footer.php"; 
?>
</div>
<script>

var modal = document.getElementById('id01');
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

       <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
            <script src="js/backtotop.js"></script>
</body>
</html>