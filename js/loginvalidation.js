function validate(){  

var password=document.myform.password.value;
if (password.length<6){  
  document.getElementById('password').value='';
  $('#password').attr("placeholder", "Password too short"); 
  return false;
  }

var email=document.myform.email.value;  
var atposition=email.indexOf("@");  
var dotposition=email.lastIndexOf(".");  

if (email=="" || atposition<1 || dotposition<atposition+2 || dotposition+2>=x.length){  
  $('#email').attr("placeholder", "Please enter a valid e-mail address"); 
  return false;  
  }  


}

  