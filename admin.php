 <?php if((isset($_COOKIE['login']) and ($_COOKIE['login']!='admin')) or (isset($_COOKIE['login'])==false)) {
 exit('You have not any access to this page.');
} ?>
<html>  
    <head>  
        <title>Admin page</title>  
         <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
         <link rel="stylesheet" href="css/main.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  

        <script>  
$(document).ready(function(){  
    function fetch_data()  
    {  
        $.ajax({  
            url:"iudlive/select.php",  
            method:"POST",  
            success:function(data){  
                $('#live_data').html(data);  
            }  
        });  
    }  
    fetch_data();  
    $(document).on('click', '#btn_add', function(){  
        var usermail = $('#usermail').text();  
          var city = $('#city').text();  
            var date = $('#date').text();  
              var worktypes = $('#worktypes').text();  
        var description = $('#description').text();  
        var money = $('#money').text();  
        if(usermail == '')  
        {  
            alert("Enter user email");  
            return false;  
        }  
        if(city == '')  
        {  
            alert("Enter city");  
            return false;  
        }  
        $.ajax({  
            url:"iudlive/insert.php",  
            method:"POST",  
            data:{usermail:usermail, city:city,date:date, worktypes:worktypes,description:description, money:money},  
            dataType:"text",  
            success:function(data)  
            {  
                alert(data);  
                fetch_data();  
            }  
        })  
    });  
    
    function edit_data(id, text, column_name)  
    {  
        $.ajax({  
            url:"iudlive/edit.php",  
            method:"POST",  
            data:{id:id, text:text, column_name:column_name},  
            dataType:"text",  
            success:function(data){  
                //alert(data);
                $('#result').html("<div class='alert alert-success'>"+data+"</div>");
            }  
        });  
    }  
    $(document).on('blur', '.description', function(){  
        var id = $(this).data("id1");  
        var description = $(this).text();  
        edit_data(id, description, "description");  
    });  
    $(document).on('blur', '.moneyt', function(){  
        var id = $(this).data("id2");  
        var money = $(this).text();  
        edit_data(id,moneyt, "moneyt");  
    });  
    $(document).on('click', '.btn_delete', function(){  
        var id=$(this).data("id3");  
        if(confirm("Are you sure you want to delete this?"))  
        {  
            $.ajax({  
                url:"iudlive/delete.php",  
                method:"POST",  
                data:{id:id},  
                dataType:"text",  
                success:function(data){  
                    alert(data);  
                    fetch_data();  
                }  
            });  
        }  
    });  
});  
</script>
    </head>  
   <body>
    <div class="container">
<br><br><br>
        
            <br />  
            <br />
			<br />
			<div class="table-responsive">  
				<h3 align="center">Admin panel  <a href='index.php'>Go back</a> </h3><br >
				<span id="result"></span>
				<div id="live_data"></div>  

			</div>  
		<br><br><br><br><br><br><br><br><br><br><br><br><br>
 <?php 

?>
</div></body> <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
            <script src="js/backtotop.js"></script>
</html>  
