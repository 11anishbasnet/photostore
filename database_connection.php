<?php

// Create connection
$conn = new mysqli("localhost","root","", "photostore");
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>