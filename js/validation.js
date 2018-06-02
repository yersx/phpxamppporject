function val() {
    
    var Name = document.getElementById('Name').value;
    var password = document.getElementById('password').value;
  
    if (Name == "") 
    {
         alert("login is empty");
         return false; 
    }
    
    if (password=="") 
    {
        alert("password is empty");
        return false;
    }
    

  return true; 
}

function reg() {
    
    var output="";
    var tof=true;
    var name = document.getElementById('name').value;
    var passwd = document.getElementById('passwd').value;
      var repasswd = document.getElementById('repasswd').value;
    var surname = document.getElementById('surname').value;
    var email = document.getElementById('email').value;
    var date = document.getElementById('date').value;
    var city = document.getElementById('city').value;

    if (name == "") 
    {
        output=output+"name is empty . ";
        tof=false; 
    }
    if (surname == "") 
    {
        output=output+"surname is empty . ";
        tof=false; 
    }
     if (date == "") 
    {
        output=output+"date of birth is empty . ";
        tof=false; 
    }
     if (city == "") 
    {
        output=output+"city is empty .";
        tof=false; 
    }
    
     if (email == "") 
    {
        output=output+"email is empty . ";
        tof=false; 
    }
    
    if(passwd=="" && repasswd=="" ) 
    {
        output=output+"password should not be empty ! ";
        tof=false;
    }
    if (passwd!=repasswd ) 
    {
        output=output+"password does not much ! ";
        tof=false;
    }

       if (output!="") {
alert(output);}
  return tof; 
}

function addtask() {
    
    var output="";
    var tof=true;
    var city = document.getElementById('city').value;
    var type = document.getElementById('types').value;
     var comment = document.getElementById('comment').value;

    if (city == "") 
    {
        output=output+"choose the city.\n ";
        tof=false; 
    }
    if (type == "") 
    {
        output=output+"choose the type of work  \n";
        tof=false; 
    }
     if (comment == "") 
    {
        output=output+"Describe the task \n ";
        tof=false; 
    }
     

    
alert(output);
  return tof; 
}
