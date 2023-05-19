
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


<?php
      include "database_connection.php";
        $email=$_SESSION['email'];
        $id = $_GET['id'];
        $sql = "SELECT * FROM images WHERE id='$id'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
          // output data of each row
          while($row = $result->fetch_assoc()) {
            $id = $row["id"];
            $email=$row["email"];
            $image=$row["image"];
            $imagetype=$row['imagetype'];
            $price=$row['price'];
            $aboutimage=$row['aboutimage'];
}
}
$sql = " select * from user where email='$email'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
          // output data of each row
          while($row = $result->fetch_assoc()) {
            $firstname=$row["firstname"];
            $lastname=$row["lastname"];
    }
      }
            ?>

<section style="background-color: whitesmoke;">
  <div class="container py-5 h-100">
    <div class="row justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
        <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
          <div class="card-body p-4 p-md-5">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 text-center">Buy image</h3>
            <form name="myform" method="POST" action="editsave.php" enctype="multipart/form-data" >

                  <?php

                    if(isset($_GET['Message'])){
                      echo "<font color='red'>".$_GET['Message']."</font>";
                    }
                  ?>

              <div class="row">
                <div class="col-md-6">
                  <div class="thumbnail">
                    <a href="images/<?php echo $image?>" target="_blank">
                    <img src="images/<?php echo $image?>" alt="<?php echo $aboutimage?>" title="<?php echo $aboutimage?>" style="width:100%;height: 526px;"></a>
                  </div>
                </div>
                <div class="form-outline">
                    <input type="hidden" id="id" class="form-control form-control-lg" name="id" value="<?php echo $id ?>"/>
                </div>

                <div class="col-md-6">
                <div class="row align-items-center">
                  <div class="col-md-12 mx-auto">
                  <div class="form-outline">
                    
                      <div class="jumbotron">
                        <h3><?php echo "Image name = ".$image ?></h3><br>
                        <h3><?php echo "Image type = ".$imagetype ?></h3><br>
                        <h3><?php echo "Price = $".$price ?></h3><br>
                        <h3><?php echo "Uploader = ".$firstname." ".$lastname ?></h3><br>
                        <h3><?php echo "Image description = ".$aboutimage ?></h3><br>
                        <a class="btn btn-primary ml-4" href="pay.php?id= <?php echo $id?>">Pay $<?php echo $price?></a>
                        <a class="btn btn-primary ml-4" href="addtocart.php?id= <?php echo $id?>">Add to cart</a>
                      </div>
                  </div>
                </div>
                </div>
                
              
              </div>
              </div>
            </div>
            </form>
</div>
</div>
</div>
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