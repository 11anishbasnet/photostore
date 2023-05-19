
<?php

include "database_connection.php";
$id = $_GET['id'];
session_start();
$email=$_SESSION['email'];
$flag=0;


$sql = "SELECT * FROM cart WHERE email='$email'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
          // output data of each row
          while($row = $result->fetch_assoc()) {
            $i_id=$row["i_id"];

            if($id == $i_id)
            {
              $flag=1;
            }
          }
        }
echo $flag;
if($flag!=1){
  $sql = "INSERT INTO cart (i_id,email) VALUES ('$id','$email')";


                if ($conn->query($sql) === TRUE) {
                  header("location:cart.php"); 
                } else {
                  header("Location:index.php");
                  die;
                }

}
else
{
  header("Location:index.php");
}
?>