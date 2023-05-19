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
          if (isset($_SESSION['email'])) {
            $S_email=$_SESSION['email'];
    ?>
<section style="background-color: whitesmoke;">
  <div class="container py-5 h-100">
    <div class="row justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
        <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
          <div class="card-body p-4 p-md-5">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Upload image</h3>
            <form name="myform" method="POST" action="upload.php" enctype="multipart/form-data" >

                  <?php

                    if(isset($_GET['Message'])){
                      echo "<font color='red'>".$_GET['Message']."</font>";
                    }
                  ?>

              <div class="row">
                <div class="col-md-6 mb-4">

                  <div class="form-outline">
                    <input class="form-control form-control-lg" type="file" id="uploadfile" name="uploadfile" required/>
                    <label class="form-label" for="uploadfile"></label>
                  </div>

                </div>
                <div class="col-md-6 mb-4">

                  <div class="form-outline">
                    <select class="form-control form-control-lg" id="imagetype" name="imagetype">
                      <option value="Nature">Nature</option>
                      <option value="Art">Art</option>
                      <option value="Art">Scenery</option>
                      <option value="People">People</option>
                      <option value="Animals">Animals</option>
                      <option value="Birds">Birds</option>
                      <option value="Vehicles">Vehicles</option>
                      <option value="Others">Others</option>
                    </select>
                    <label class="form-label" for="lastName">Image type</label>
                  </div>

                </div>
              </div>

              <div class="row">
                <div class="col-md-6 mb-4 pb-2">

                  <div class="form-outline">
                    <input type="Number" id="price" class="form-control form-control-lg" name="price" required/>
                    <label class="form-label" for="price" >Price($1-$50)</label>
                  </div>

                </div>
                <div class="col-md-6 mb-4 pb-2">

                  <div class="form-outline">
                    <input type="text" id="aboutimage" class="form-control form-control-lg" name="aboutimage" required/>
                    <label class="form-label" for="aboutimage">Image Discription</label>
                  </div>

                </div>
              </div>


              <div class="mt-4 pt-2">
                <input class="btn btn-primary btn-lg" type="submit" name="submit" value="Upload"/>
            </div>
            </form>
</div>
</div>
</div>
</div>
</div>
    <?php

      } 
      else {}
    ?>




<div class="container">
  
<div class="row mb-4">
 <div class="col-md-6 mt-4"> <h2>Upload Gallery</h2></div>

    <div class="row">

    <?php
      include "database_connection.php";
        $email=$_SESSION['email'];
        $sql = " select * from images where email='$email'";
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
                <?php $deleteimage = $image ;
                      $editimage = $image;   ?>
                <a href="edit.php?editimage=<?php echo $editimage?>" class="btn btn-primary ml-4">Edit</a>
                <a href="delete.php?deleteimage=<?php echo $deleteimage?>" class="btn btn-primary ml-4">Delete</a>

            </div>
      </div>
    </div>

<?php
                }
        }
    ?>

  </div>
</div>
</div>
</section>
  <!-- footer section -->
  <?php include"footer.php" ?>
  <!-- footer section -->

  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick.min.js"></script>
  <!-- end google map js -->

</body>

</html>