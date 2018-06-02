
<!DOCTYPE html>
<html lang="en">
<head>
   
    <?php 
require_once "include/functionsa.php";

$news = getNews ($_GET["id"]);
$title = $news["title"];
    ?>
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 <title><?=$title ?></title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css"></link>
<!--===============================================================================================-->
  <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="css1/util.css">
    <link rel="stylesheet" type="text/css" href="css1/main.css">
     <link rel="stylesheet" href="css/main.css">
      <script src="js/validation.js"></script>
      
   <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.1/jquery.min.js"></script>
<script>

$(document).ready(function(){ 

    function fetch_data()  
    { 
      var articleid = $('#articleid1').val(); 
console.log(articleid);
    
        $.ajax({  
            url:"iudlive/showcomment.php",  
            method:"POST",
            data: {  "articleid":   articleid}, 
             dataType:"text",  
              success:function(data){  
                $('#live_data').html(data );  
            }  
        });  
    }  
    fetch_data();  

    $(document).on('click', '#addcom', function(){  
  var usermail = $('#usermail').val();
   var articleid = $('#articleid').val();
    var commentt = $('#commentt').val();
     var date = $('#date').val();
$.ajax
({
type: 'POST',
url: 'comment.php',
 data: { 
        "usermail":    usermail,
        "articleid":   articleid,
        "commentt": commentt,
          "date": date,
                    },
success: function (response) {
  $('#result').html("<div class='alert alert-success'>"+response+"</div>");

document.getElementById("commentt").value = "";
    fetch_data(); 
}
});
return false;



    }); 

    
  }); 

</script>


</head>
<body>
	<div class="container">
<?php 
 include "include/nav.php"; 
?>
   <?php
echo '<input type="name" style="display: none;" id="articleid1"  name="articleid1" value="'; echo $_GET["id"]; echo '">
';

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



	
<hr>

<?php
$date = new DateTime($news["timea"]);
 echo '<div id="article_post">
<div class="include_date marginleftonly">
                <span class="the_date" itemprop="datePublished">'; echo $day= $date->format('d');
 echo '</span>
                            <i>'; echo $month= substr($date->format('F'), 0, 3);
 echo '</i>
                            <b>'; echo $year= substr($date->format('Y'), 0, 4);
 echo '</b>
            </div>
  <div class="col-sm-4"><img src="upimg/'.$news["img"].'" style="width:90%;height:90%">
 <br><br></div>
 <h3 class="title">'.$news["title"].'</h3>
 <p>'.$news["introt"].'</p>
  <p>'.$news["fullt"].'</p>

  <p class="text-muted">Presented by <a href="#">Assylbekov Yersultan</a></p><br><br>
';

 ?>


        
      <hr>  <div id="live_data"></div>  
<?php
      if(isset($_COOKIE['login'])){
echo '<div class="container-contact2">
      <div class="wrap-contact2">
        <form class="contact2-form validate-form">
          <span class="contact2-form-title">
           Comment
          </span>
<br>

<input type="name" style="display: none;" id="usermail" name="usermail" value="'.$_COOKIE['login'].'">
<input type="name" style="display: none;" id="articleid"  name="articleid" value="'; echo $_GET["id"]; echo '">
<div class="wrap-input2 validate-input" data-validate = "Message is required">
            <textarea class="input2" id="commentt"  name="commentt" ></textarea>
            <span class="focus-input2" data-placeholder="MESSAGE"></span>
          </div>
 <br> <div  style="margin:auto auto -31px 56px; width:50%"><div id="result"></div></div>
 <div  style="margin:auto 2px 2px auto; width:20%">
  <input type="name" style="display: none;" id="date"  name="date" value="'; echo date("Y-m-d"); echo '">Today\'s Date:  '; echo date("Y-m-d"); echo '</div>
  <br><div class="container-contact2-form-btn">
            <div class="wrap-contact2-form-btn">
              <div class="contact2-form-bgbtn"></div>
 <input type="submit"  class="contact2-form-btn" id="addcom" value="submit" name="comment"/>
</div></div></div>
</form></div></div>
';
}
  ?>
        

    </div>
     
     <!--     <section style="border: 1px solid;" id="showimg">
          <?php

$dir_path = "upimg/";
$extensions_array = array('jpg','JPG','png','jpeg');

if(is_dir($dir_path))
{
    $files = scandir($dir_path);
    
    for($i = 0; $i < count($files); $i++)
    {
        if($files[$i] !='.' && $files[$i] !='..')
        {
            // get file name
            echo " <div class=\"col-md-3\"> $files[$i]<br>";
            
            // get file extension
            $file = pathinfo($files[$i]);
            $extension = $file['extension'];
            
           // check file extension
            if(in_array($extension, $extensions_array))
            {
            // show image
            echo "<img src='$dir_path$files[$i]' style='width:100%;height:100%;'><br><br> </div>";
            }
        }
    }
}
?>
        </section> -->


 

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