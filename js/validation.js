function validate(){  

var firstName=document.myform.firstName.value;  
if (firstName.length<3 ||firstName.length>20){  
  $('#firstName').attr("placeholder", "Lastname should be within 3-20 characters.");     
  }


var lastName=document.myform.lastName.value;
if (lastName.lenght<3 || lastName.length>20 ){  
  $('#lastName').attr("placeholder", "Lastname should be within 3-20 characters."); 
   } 



var email=document.myform.email.value;  
var atposition=email.indexOf("@");  
var dotposition=email.lastIndexOf(".");  
if (atposition<1 || dotposition<atposition+2 || dotposition+2>=x.length){  
  $('#email').attr("placeholder", "Please enter a valid e-mail address");   
  }  


var phone=document.myform.phone.value;
if (phone.length<10 ||phone.length>10){  
  $('#phone').attr("placeholder", "Invalid phone number.");  
   }


var password=document.myform.password.value;
var confirmpassword=document.myform.confirmpassword.value;

if(password.length<6 || confirmpassword.length<6){
    document.getElementById('password').value='';
    $('#password').attr("placeholder", "Password too short");
    return false;
  }
else if(password!==confirmpassword){
    document.getElementById('confirmpassword').value='';
    $('#confirmpassword').attr("placeholder", "password doesnt match"); 
    return false;

}
}
  