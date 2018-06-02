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
      
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<style>
    
    #toTop {

background-image: url('img/toparrow.png');

padding:5px;
position:fixed;
bottom:25px; 
right:25px;
z-index: 5;
height: 63px;
width: 63px;
}
</style>
<style>
table {
    width:100%;
}
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 5px;
    text-align: left;
}
table#t01 tr:nth-child(even) {
    background-color: #eee;
}
table#t01 tr:nth-child(odd) {
   background-color:#fff;
}
table#t01 th {
    background-color: black;
    color: white;
}
</style>
</head>
<body>
    <div class="container">
<nav class="navbar navbar-expand-lg navbar-light sticky-top" style="background-color: #F3EEF6;" >
   <a href="#" class="navbar-brand">
    <img src="img/icon.png" width="35" height="35" alt="logo">
   </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
   <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
            <a href="index.php" class="nav-link">Main</a>
        </li>
        <li class="nav-item ">
            <a href="taskgiver.php" class="nav-link">Task Giver</a>
        </li>
        <li class="nav-item ">
            <a href="#" class="nav-link">Performer</a>
        </li>
        </ul>
<form class="form-inline navbar-left">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
      </form>
<ul class="nav navbar-nav navbar-right" >
       
       <li class="nav-item active"  onclick="document.getElementById('id01').style.display='block'"><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>

     
   </div>
</nav>

    
</div>
<div class="container-fluid nopadding">
<div class="container">
  <br><br><br>
  <h2>Select Task : </h2>
 <table>
    <thead>
      <tr>
        <th class="sorting">Id</th>
        <th class="sorting">First name</th>
        <th class="sorting">Last name</th>
        <th class="sorting">Email</th>
        <th class="sorting">Gender</th>
        <th class="sorting">City</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>Kenneth</td>
        <td>Riley</td>
        <td>kriley0@clickbank.net</td>
        <td>Male</td>
        <td>Almaty</td>
      </tr>
      <tr>
        <td>2</td>
        <td>Heather</td>
        <td>Young</td>
        <td>hyoung1@tripod.com</td>
        <td>Female</td>
        <td>Shymkent</td>
      </tr>
      <tr>
        <td>3</td>
        <td>Jean</td>
        <td>Porter</td>
        <td>jporter2@google.nl</td>
        <td>Female</td>
        <td>Almaty</td>
      </tr>
      <tr>
        <td>4</td>
        <td>Emily</td>
        <td>Collins</td>
        <td>ecollins3@google.de</td>
        <td>Female</td>
        <td>Shymkent</td>
      </tr>
      <tr>
        <td>5</td>
        <td>Donna</td>
        <td>Gonzales</td>
        <td>dgonzales4@washington.edu</td>
        <td>Female</td>
        <td>Almaty</td>
      </tr>
      <tr>
        <td>6</td>
        <td>Stephen</td>
        <td>Miller</td>
        <td>smiller5@nifty.com</td>
        <td>Male</td>
        <td>Shymkent</td>
      </tr>
      <tr>
        <td>7</td>
        <td>Christine</td>
        <td>Dixon</td>
        <td>cdixon6@cdbaby.com</td>
        <td>Female</td>
        <td>Almaty</td>
      </tr>
      <tr>
        <td>8</td>
        <td>Gloria</td>
        <td>Henry</td>
        <td>ghenry7@weebly.com</td>
        <td>Female</td>
        <td>Batys</td>
      </tr></tbody></table>
</div>
     </div>


    <DIV id= "toTop" > </DIV>
    <script>
$('th').click(function(){
    var table = $(this).parents('table').eq(0)
    var rows = table.find('tr:gt(0)').toArray().sort(comparer($(this).index()))
    this.asc = !this.asc
    if (!this.asc){rows = rows.reverse()}
    for (var i = 0; i < rows.length; i++){table.append(rows[i])}
})
function comparer(index) {
    return function(a, b) {
        var valA = getCellValue(a, index), valB = getCellValue(b, index)
        return $.isNumeric(valA) && $.isNumeric(valB) ? valA - valB : valA.toString().localeCompare(valB)
    }
}
function getCellValue(row, index){ return $(row).children('td').eq(index).text() }
         
</script>
       
 
<br><br><br>
 <br>

<footer class="container-fluid text-center">
    <p>Task.kz</p>
</footer>
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
</body>
