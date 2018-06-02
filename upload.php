 <?php if((isset($_COOKIE['login']) and ($_COOKIE['login']!='admin')) or (isset($_COOKIE['login'])==false)) {
 exit('You have not any access to this page.');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Main</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css"></link>

     <link rel="stylesheet" href="css/main.css">
      <script src="js/validation.js"></script>
      
   <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<style type="text/css">
 
</style>
</head>
<body>
    <div class="container">
<?php 
 include "include/nav.php"; 
?>
 <br> <br> <br> <br> <div class="container">
<form action="upload.php" class="upl" method="POST" enctype='multipart/form-data'>
    
     <div class="form-group">
            <label>Title of article:</label>
            <input type="text" class="form-control" name="titlea" id="titlea">
        </div>

           <div class="form-group">
            <label>Introtext:</label>
            <textarea  class="form-control" name="intr" id=""></textarea>
        </div>
           <div class="form-group">
            <label> Full text of article:</label>
            <textarea  class="form-control" name="fullt" id=""></textarea>
        </div>
         <br>Select image to upload:<br>
         <div class="form-group">
    <input type="file" name="file"/></div>
    <div class="form-group">
            <label>Upload Date:</label>
            <input type="date" class="form-control" name="date" id="date" value="<?php echo date('Y-m-d');?>">
        </div>
    <input type="submit" name="upload" value="Upload"/>
</form>
</div>
<?php 
 $msg = "";
   $db = mysqli_connect('localhost','root','','web');
     mysqli_query($db,"SET NAMES utf8");
 // If upload button is clicked ...
  if (isset($_POST['upload'])) {
    // Get image name
    $image = $_FILES['file']['name'];

    // Get text
      $titlea = $_POST['titlea']; 
   $intr=$_POST['intr']; 
   $date=$_POST['date']; 
   $fullt=$_POST['fullt'];

    // image file directory
    $target = "upimg/".basename($image);

    $sql = "INSERT INTO articles (title,img,introt,fullt,timea) VALUES ('$titlea','$image','$intr','$fullt', '$date')";
    // execute query
    mysqli_query($db, $sql);

    if (move_uploaded_file($_FILES['file']['tmp_name'], $target)) {
      $msg = "Image uploaded successfully";
    }else{
      $msg = "Failed to upload image";
    }
  }







?>
    


    

 

 <br>
 <br> <br> <br> <br> <br> <br> <br> <br>
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