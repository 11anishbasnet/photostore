<?php

include "database_connection.php";

$id = $_GET['id'];
$sql = "DELETE FROM cart WHERE i_id='$id'";


if ($conn->query($sql) === TRUE) {
  $Message = urlencode("**Deleted from cart**");
  header("location:cart.php?Message=".$Message);
} else {
  $Message = urlencode("**Some error occured please try again**");
  header("Location:cart.php?Message=".$Message);
  die;
}

?>