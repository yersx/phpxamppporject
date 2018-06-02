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

<br><br><br><br>
<div class="container">
    <form action="add_user.php" method="post"  onsubmit="return reg()">
        <div class="form-group">
            <label>Name:</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Enter name">
        </div>
         <div class="form-group">
            <label>Surname:</label>
            <input type="text" class="form-control" name="surname" id="surname" placeholder="Enter surname">
        </div>
        <div class="form-group">
            <label>Date Of Birth:</label>
            <input type="date" class="form-control" name="date" id="date">
        </div>
         <div class="form-group">
            <label>City</label>
            <input type="text" class="form-control" name="city" id="city" placeholder="Enter city">
        </div>
         <div class="form-group">
            <label>Email:</label>
            <input type="text" class="form-control" name="email" id="email" placeholder="Enter email">
        </div>
        <div class="form-group">
            <label>Password:</label>
            <input type="password" class="form-control" name="password" id="passwd" placeholder="Enter password">
        </div>
        <div class="form-group">
            <label>Confirm:</label>
            <input type="password" class="form-control" id="repasswd" placeholder="Confirm your password">
        </div>

        <button type="submit" class="btn btn-primary">Register</button>
    </form>
</div>



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
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>