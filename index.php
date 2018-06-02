<!DOCTYPE html>
<html lang="en">
<head>
    <title>Main</title>
    <?php 
require_once "functions.php";
$news = getNews (4);
    ?>
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
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

  <div id="slides">
    <div class="slide showing"></div>
    <div class="slide"></div>
    <div class="slide"></div>
    <div class="slide"></div>
    <button  class="prev"  id="previous">&lt;</button>
 <button class="next"  id="next">&gt;</button>
  </div>
   <div class="slide-btn">
   

    <button class="controls" id="pause">&#10074;&#10074;</button>

   
  </div></div>

	<section id="welcome">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="wel_header">
                            <h2>welcome to TASKED.KZ</h2>
                           <h1 style="margin-bottom: 30px;"> ARE YOU TASK GIVER OR PERFORMER? </h1>
                        </div>
                    </div>
                </div>
                <!--End of row-->
                <div class="row">
                    <div class="col-md-6">
                        <div class="item">
                            <div class="single_item">
                                <div class="item_list">
                                    <div class="welcome_icon">
                                      <img src="img/taskgiver.png" width="80%" height="80%" alt="logo" style="margin-top: 8px">  
                                    </div>
                                    <h4>Task Giver</h4>
                                       <p>If you are task giver you can give your task for money and it is easy to find the performers.</p>
                                        <br>

      <a href="taskgiver.php" class="nav-link">Click to continue...</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End of col-md-3-->
                    <div class="col-md-6">
                        <div class="item">
                            <div class="single_item">
                                <div class="item_list">
                                    <div class="welcome_icon">
                                       <img src="img/performer.png" width="80%" height="80%" alt="logo"  style="margin-top: 8px">
                                    </div>
                                    <h4>Performers</h4>
                                    <p>Performers choose the tasks from categories and  offers himself for the job. If the task giver will agree, performer shall start execution of the task.   After finishing the task, task giver pay money to performer.</p>
                                    <br>
      <a href="performer.php" class="nav-link">Click to continue...</a>
                                </div>
                            </div>
                        </div>
                    </div>
                 
                </div>
                <!--End of row-->
            </div>
            <!--End of container-->
        </section>
<br><br>
<div class="row">
<?php

for($i=0; $i<count($news); $i++){
 echo "<div class=\"col-md-4\">";
 echo ' <div class="col-sm-8" style="margin:0 auto; height:150px;"><img src="upimg/'.$news[$i]["img"].'" style="width:80%;height:80%">
 <br><br></div>
 <h3 class="title" style="text-align:center;">'.$news[$i]["title"].'</h3>
 <p>'.$news[$i]["introt"].'</p>
  <div class="more"  style="position:absolute;top: 350px;"> <a href="article.php?id='.$news[$i]["id"].'"> More </a></div><br><br>
 </div>';
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

<script>
	var controls = document.querySelectorAll('.controls');
for(var i=0; i<controls.length; i++){
controls[i].style.display = 'inline-block';
}

var slides = document.querySelectorAll('#slides .slide');
var currentSlide = 0;
var slideInterval = setInterval(nextSlide,2000);

function nextSlide(){
goToSlide(currentSlide+1);
}

function previousSlide(){
goToSlide(currentSlide-1);
}

function goToSlide(n){
slides[currentSlide].className = 'slide';
currentSlide = (n+slides.length)%slides.length;
slides[currentSlide].className = 'slide showing';
}

var playing = true;
var pauseButton = document.getElementById('pause');

function pauseSlideshow(){
pauseButton.innerHTML = '►';
playing = false;
clearInterval(slideInterval);
}

function playSlideshow(){
pauseButton.innerHTML = '&#10074;&#10074;';
playing = true;
slideInterval = setInterval(nextSlide,2000);
}

pauseButton.onclick = function(){
if(playing){ pauseSlideshow(); }
else{ playSlideshow(); }
};

var next = document.getElementById('next');
var previous = document.getElementById('previous');

next.onclick = function(){
nextSlide();
};
previous.onclick = function(){
previousSlide();
};
	</script>

 

 <br>

<?php 
 include "include/footer.php"; 
?>

</div>
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