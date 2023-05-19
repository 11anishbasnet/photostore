<?php
    
include("database_connection.php");

if(isset($_POST['submit'])) {

    $sql = mysqli_query($conn,
    "SELECT * FROM user WHERE email='"
    . $_POST["email"] . "' AND
    password='" . $_POST["password"] . "'    ");
   
    $num = mysqli_num_rows($sql);
    if($num > 0) {
        $row = mysqli_fetch_array($sql);
        //
        session_start();
        $_SESSION['email'] = $row["email"];
        if (isset($_SESSION['email']))
        {
            header("location:index.php");
        } 
        exit();
        }
        
    else {
        header("Location: login.php?link=whatever");
    }
}
?>