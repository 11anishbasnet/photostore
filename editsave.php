
<?php

include "database_connection.php";

if(isset($_POST['submit']))
{
    $id = $_POST['id'];
  $imagetype=$_POST['imagetype'];
  $price=$_POST['price'];
  $aboutimage=$_POST['aboutimage'];
  session_start();
  $email = $_SESSION['email'];

if($price<1 || $price>50 ){
      $Message = urlencode("**Price must be in between $1-$50...**");
      header("Location:edit.php?Message=".$Message);
      die;
    }

elseif(strlen($aboutimage)>100 ){
      $Message = urlencode("**Image discription must be less than 100 characters......**");
      header("Location:edit.php?Message=".$Message);
      die;
    }

    // Get all the submitted data from the form and update
    $sql = "UPDATE images SET imagetype = '$imagetype', price = '$price', aboutimage = '$aboutimage' WHERE id = '$id'";
 
 
    if($conn->query($sql) === TRUE) {
        $Message = urlencode("**Image edited successfully...**");
        header("location:myuploads.php?Message=".$Message);
    } else {
        $Message = urlencode("**Error try again....**");
        header("location:myuploads.php?Message=".$Message);
    }


$conn->close();
}
?>