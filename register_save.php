
<?php

include "database_connection.php";

if(isset($_POST['submit']))
{
  $firstName=$_POST['firstName'];
  $lastName=$_POST['lastName'];
  $birthday=$_POST['birthday'];
  $gender=$_POST['gender'];
  $email=$_POST['email'];
  $phone=$_POST['phone'];
  $password=$_POST['password'];
  $confirmpassword=$_POST['confirmpassword'];

$sql = "SELECT email,phone FROM user";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {

    if($email==$row["email"]){
      $Message = urlencode("**You have already registered please login**");
      header("Location:register.php?Message=".$Message);
      die;
    }
    else if($phone==$row["phone"] ){
      $Message = urlencode("**The number already exists in system**");
      header("Location:register.php?Message=".$Message);
      die;
    }
}
}

if(strlen($password)<6 || strlen($confirmpassword)<6 ){
      $Message = urlencode("**Password must be 6 character long**");
      header("Location:register.php?Message=".$Message);
      die;
    }

else if($password!=$confirmpassword){
      $Message = urlencode("**Passwoed doesn't match**");
      header("Location:register.php?Message=".$Message);
      die;
    }


$sql = "insert into user(firstname,lastname,birthday,gender,email,phone,password)values('$firstName','$lastName','$birthday','$gender','$email','$phone','$password')";


if(mysqli_query($conn,$sql))
{
  session_start();
  $_SESSION['email'] = $email;
        if (isset($_SESSION['email']))
        {
            header("location:index.php");
        } 
        exit();
}
else
{
  $Message = urlencode("**Some error occured please register again**");
  header("Location:register.php?Message=".$Message);
  die;
}

$conn->close();
}
?>