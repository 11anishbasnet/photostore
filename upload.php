
<?php

include "database_connection.php";

if(isset($_POST['submit']))
{
  $imagetype=$_POST['imagetype'];
  $price=$_POST['price'];
  $aboutimage=$_POST['aboutimage'];
  session_start();
  $email = $_SESSION['email'];

if($price<1 || $price>50 ){
      $Message = urlencode("**Price must be in between $1-$50...**");
      header("Location:explore.php?Message=".$Message);
      die;
    }

elseif(strlen($aboutimage)>100 ){
      $Message = urlencode("**Image discription must be less than 100 characters......**");
      header("Location:explore.php?Message=".$Message);
      die;
    }

    $filename = $_FILES['uploadfile']['name'];
    $tempname = $_FILES["uploadfile"]["tmp_name"];
    $folder = "./images/" . $filename;
 
 
    // Get all the submitted data from the form
    $sql = "INSERT INTO images (email,image,imagetype,price,aboutimage) VALUES ('$email','$filename','$imagetype','$price','$aboutimage')";
 
    // Execute query
    mysqli_query($conn, $sql);
 
    // Now let's move the uploaded image into the folder: image
    if (move_uploaded_file($tempname, $folder)) {
        $Message = urlencode("**Image uploaded...**");
        header("location:myuploads.php?Message=".$Message);
    } else {
        $Message = urlencode("**Error try again....**");
        header("location:myuploads.php?Message=".$Message);
    }


$conn->close();
}
?>