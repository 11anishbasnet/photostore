
<?php

include "database_connection.php";

$deleteimage = $_GET['deleteimage'];
$sql = "DELETE FROM images WHERE image='$deleteimage'";


if ($conn->query($sql) === TRUE) {
  $Message = urlencode("**Image deleted successfully**");
  header("location:myuploads.php?Message=".$Message);
} else {
  $Message = urlencode("**Some error occured please try again**");
  header("Location:myuploads.php?Message=".$Message);
  die;
}

?>