<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Photostore</title>



  <!--slick slider stylesheet -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick-theme.min.css">

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Dosis:500|Raleway:400,600,700&display=swap" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="fonts/fontawesome/css/all.min.css">
  <link rel="stylesheet" type="text/css" href="fonts/fontawesome/css/solid.css">
</head>

<body>
  

    <!-- header section strats -->
      <?php include"header.php"; ?>
    <!-- end header section -->


<div class="container">
  
<div class="row mb-4">
 <div class="col-md-6 mt-4"> <h2>Image Gallery</h2></div>
<?php
          if (isset($_SESSION['email'])) {
            $S_email=$_SESSION['email'];
    ?>
<div class="col-md-6 mt-4 text-right"><a class="btn btn-primary btn-lg text-white" href="myuploads.php">My Uploads</a></div>

</div>
    <div class="row">

    <?php
      include "database_connection.php";
        $sql = " select * from images where email!='$S_email' ";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
          // output data of each row
          while($row = $result->fetch_assoc()) {
            $id=$row["id"];
            $email=$row["email"];
            $image=$row["image"];
            $imagetype=$row['imagetype'];
            $price=$row['price'];
            $aboutimage=$row['aboutimage'];

            ?>

    <div class="col-md-4">
      <div class="thumbnail">
        <a href="images/<?php echo $image?>" target="_blank">
          <img src="images/<?php echo $image?>" alt="<?php echo $aboutimage?>" title="<?php echo $aboutimage?>" style="width:100%;height: 350px;"></a>
          <div class=" text-center pt-2 mb-4">

                    <a class="btn btn-primary ml-4" href="buy.php?id= <?php echo $id?>">Buy $<?php echo $price?></a>
                    <a class="btn btn-primary ml-4" href="addtocart.php?id= <?php echo $id?>">Add to cart</a>


            </div>
      </div>
    </div>

<?php
                }
        }
      }
    
else { ?>


</div>
    <div class="row">

    <?php
      include "database_connection.php";
        $sql = " select * from images";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
          // output data of each row
          while($row = $result->fetch_assoc()) {
            $id=$row["id"];
            $email=$row["email"];
            $image=$row["image"];
            $imagetype=$row['imagetype'];
            $price=$row['price'];
            $aboutimage=$row['aboutimage'];

            ?>

    <div class="col-md-4">
      <div class="thumbnail">
        <a href="images/<?php echo $image?>" target="_blank">
          <img src="images/<?php echo $image?>" alt="<?php echo $aboutimage?>" title="<?php echo $aboutimage?>" style="width:100%;height: 350px;"></a>
          <div class=" text-center pt-2 mb-4">

                    <a class="btn btn-primary ml-4" href="login.php">Buy $<?php echo $price?></a>
                    <a class="btn btn-primary ml-4" href="login.php">Add to cart</a>

            </div>
      </div>
    </div>

<?php
                }
        }
      }
    ?>
  </div>
</div>


  <!-- footer section -->
  <?php include"footer.php" ?>
  <!-- footer section -->

  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick.min.js"></script>
  <!-- end google map js -->

</body>

</html>