
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



$sql = "UPDATE user SET firstname = '$firstName' ,lastname = '$lastName' ,gender = '$gender' ,email = '$email' ,phone = '$phone' WHERE email = '$email'";



if ($conn->query($sql) === TRUE) {
  $Message = urlencode("**Record updated successfully**");
  header("location:profile.php?Message=".$Message);
} else {
  $Message = urlencode("**Some error occured please try again**");
  header("Location:profile.php?Message=".$Message);
  die;
}


$conn->close();
}
?>
